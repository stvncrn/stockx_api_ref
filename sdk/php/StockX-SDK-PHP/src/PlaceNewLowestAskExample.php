<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once(__DIR__ . '/../lib/vendor/autoload.php');
require_once('LoginUtil.php');
require_once('ExampleConstants.php');
require_once('JWTHeaderSelector.php');

function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}

$client = new GuzzleHttp\Client();
$config = StockX\Client\Configuration::getDefaultConfiguration()
                ->setApiKey('x-api-key', ExampleConstants::$AWS_API_KEY)
                ->setHost(Environment::$ENDPOINT_PUBLIC);
                // ->setHost(Environment::$ENDPOINT_STAGING);


$headerSelector = new JWTHeaderSelector();

$api = new StockX\Client\Api\StockXApi(
    $client,
    $config,
    $headerSelector
    );

try {
    // Login to the StockX framework - see LoginExample for how this works
    $customer = LoginUtil::login($api, $headerSelector,
        ExampleConstants::$STOCKX_USERNAME,
        ExampleConstants::$STOCKX_PASSWORD);

    // Search for a given product and lookup its styleid
    $firstResult = $api->search("Air Jordan 13 Retro Men (white / true red-black)")->getHits()[0];
    print_r($firstResult);
    // return;

    echo '<br/><br/>';

    $styleId = $firstResult->getStyleId();
    print_r($styleId);

    
    // Look up the product info by style id and size
    $productInfo = $api->lookupProduct($styleId, "11");

    echo '<br/></br>';

    print_r($productInfo);

    echo '<br/><br/>';

    //echo $productInfo->getSku().'<br/>';

    $productId = $productInfo["data"][0]["id"];
    $productUuid = $productInfo["data"][0]["attributes"]["product_uuid"];

    echo $productId.'<br/>';
    echo $productUuid.'<br/>';

      
    // Lookup the current market data for the product
    $marketData = $api->getProductMarketData($productId, $productUuid);

    print_r($marketData);

    echo '<br/><br/>';
    
    // Get the current highest bid and decrement it
    $lowestAsk = $marketData["market"]["lowest_ask"];
    $lowestAsk--;

    echo $lowestAsk.'<br/>';

    $lowestAsk = 240;

    echo '<br/><br/>';

    //return;
    
    // Create a portfolio item request with a lower ask
    $portfolioItemReq = new StockX\Client\Model\PortfolioRequestPortfolioItem();
        $portfolioItemReq->setAmount($lowestAsk);
        $portfolioItemReq->setSkuUuid($productId);
        //$portfolioItemReq->setSkuUuid(gen_uuid());
        $portfolioItemReq->setMatchedWithDate("2019-02-20T20:00:00+0000");
        $portfolioItemReq->setExpiresAt("2019-03-19T20:00:00+00:00");
        $portfolioItemReq->setCondition("New");
        // $portfolioItemReq->
    
    $portfolioReq = new StockX\Client\Model\PortfolioRequest();
        $portfolioReq->setPortfolioItem($portfolioItemReq);
        $portfolioReq->setCustomer($customer[0]["customer"]);
        $portfolioReq->setTimezone("America/Los_Angeles");
    
    // Submit the ask
     $askResp = $api->newPortfolioAsk($portfolioReq);
    
    print_r($askResp);
} catch (Exception $e) {
    echo 'Exception when calling StockXApi->newPortfolioAsk: ', $e->getMessage(), PHP_EOL;
}