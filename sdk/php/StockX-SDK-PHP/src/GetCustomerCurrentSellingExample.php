<?php

require_once('/Users/tonymccrary/git/PublicAPI/swagger/src-gen/php/SwaggerClient-php/vendor/autoload.php');
require_once('LoginUtil.php');
require_once('ExampleConstants.php');
require_once('JWTHeaderSelector.php');

$client = new GuzzleHttp\Client();
$config = Swagger\Client\Configuration::getDefaultConfiguration()
                ->setApiKey('x-api-key', ExampleConstants::$AWS_API_KEY)
                ->setHost(Environment::$ENDPOINT_STAGING);

$headerSelector = new JWTHeaderSelector();

$api = new Swagger\Client\Api\StockXApi(
    $client,
    $config,
    $headerSelector
    );

try {
    $customer = LoginUtil::login($api, $headerSelector,
        ExampleConstants::$STOCKX_USERNAME,
        ExampleConstants::$STOCKX_PASSWORD);

    $currentSelling = $api->getOpenOrders($customer[0]["customer"]["id"]);
    
    print_r($currentSelling);
} catch (Exception $e) {
    echo 'Exception when calling StockXApi->getCustomerCurrentSelling: ', $e->getMessage(), PHP_EOL;
}