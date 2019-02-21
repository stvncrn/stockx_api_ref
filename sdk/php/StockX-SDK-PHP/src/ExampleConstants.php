<?php

/**
 * <p>Contains common values used across examples.</p>
 */
class ExampleConstants {
    
    /** The AWS API key provided by StockX to access StockX APIs. */
    public static $AWS_API_KEY = "e1DqFdSKT9Ew6ozFEzTs77lJdSytDTb7VMQa9Opj";
    
    /** The StockX account username to authenticate with. */
    public static $STOCKX_USERNAME = "ebaysmsneaker@gmail.com";
    
    /** The StockX account password to authenticate with. */
    public static $STOCKX_PASSWORD = "pys2010#1";
    
    /** The product ID to lookup */
    public static $DEMO_PRODUCT_ID = "air-jordan-1-retro-high-off-white-chicago";
    
    /** The custoner ID to lookup orders for. */
    public static $DEMO_CUSTOMER_ID = "1471698";
    
    /** Whether to output debug information to console. */
    public static $ENABLE_DEBUG = false;
    
    /** JWT bearer token header name. */
    public static $JWT_HEADER = "Jwt-Authorization";
    
}

class Environment {
    
    public static $ENDPOINT_PUBLIC = "https://gateway.stockx.com/public";
    
    public static $ENDPOINT_SANDBOX = "https://gateway.stockx.com/sandbox";
    
    public static $ENDPOINT_STAGING = "https://gateway.stockx.com/stage";
    
}