<?php
/**
 * ProductResponseProduct
 *
 * PHP version 5
 *
 * @category Class
 * @package  StockX\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * StockX API
 *
 * Provides access to StockX's public services, allowing end users to query for product and order information.
 *
 * OpenAPI spec version: final32218.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace StockX\Client\Model;

use \ArrayAccess;
use \StockX\Client\ObjectSerializer;

/**
 * ProductResponseProduct Class Doc Comment
 *
 * @category Class
 * @package  StockX\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductResponseProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'product_response_Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'uuid' => 'string',
        'brand' => 'string',
        'category' => 'string',
        'charity_condition' => 'int',
        'colorway' => 'string',
        'condition' => 'string',
        'country_of_manufacture' => 'string',
        'gender' => 'string',
        'content_group' => 'string',
        'minimum_bid' => 'int',
        'media' => '\StockX\Client\Model\ProductResponseProductMedia',
        'name' => 'string',
        'primary_category' => 'string',
        'secondary_category' => 'string',
        'product_category' => 'string',
        'release_date' => 'string',
        'retail_price' => 'int',
        'shoe' => 'string',
        'short_description' => 'string',
        'style_id' => 'string',
        'ticker_symbol' => 'string',
        'title' => 'string',
        'data_type' => 'string',
        'type' => 'int',
        'size_title' => 'string',
        'size_descriptor' => 'string',
        'size_all_descriptor' => 'string',
        'url_key' => 'string',
        'year' => 'string',
        'shipping_group' => 'string',
        'a_lim' => 'int',
        'meta' => '\StockX\Client\Model\ProductResponseProductMeta',
        'children' => '\StockX\Client\Model\ProductResponseProductChildren',
        'market' => '\StockX\Client\Model\ProductResponseProductChildrenPRODUCTIDMarket'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'uuid' => null,
        'brand' => null,
        'category' => null,
        'charity_condition' => null,
        'colorway' => null,
        'condition' => null,
        'country_of_manufacture' => null,
        'gender' => null,
        'content_group' => null,
        'minimum_bid' => null,
        'media' => null,
        'name' => null,
        'primary_category' => null,
        'secondary_category' => null,
        'product_category' => null,
        'release_date' => null,
        'retail_price' => null,
        'shoe' => null,
        'short_description' => null,
        'style_id' => null,
        'ticker_symbol' => null,
        'title' => null,
        'data_type' => null,
        'type' => null,
        'size_title' => null,
        'size_descriptor' => null,
        'size_all_descriptor' => null,
        'url_key' => null,
        'year' => null,
        'shipping_group' => null,
        'a_lim' => null,
        'meta' => null,
        'children' => null,
        'market' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'uuid' => 'uuid',
        'brand' => 'brand',
        'category' => 'category',
        'charity_condition' => 'charityCondition',
        'colorway' => 'colorway',
        'condition' => 'condition',
        'country_of_manufacture' => 'countryOfManufacture',
        'gender' => 'gender',
        'content_group' => 'contentGroup',
        'minimum_bid' => 'minimumBid',
        'media' => 'media',
        'name' => 'name',
        'primary_category' => 'primaryCategory',
        'secondary_category' => 'secondaryCategory',
        'product_category' => 'productCategory',
        'release_date' => 'releaseDate',
        'retail_price' => 'retailPrice',
        'shoe' => 'shoe',
        'short_description' => 'shortDescription',
        'style_id' => 'styleId',
        'ticker_symbol' => 'tickerSymbol',
        'title' => 'title',
        'data_type' => 'dataType',
        'type' => 'type',
        'size_title' => 'sizeTitle',
        'size_descriptor' => 'sizeDescriptor',
        'size_all_descriptor' => 'sizeAllDescriptor',
        'url_key' => 'urlKey',
        'year' => 'year',
        'shipping_group' => 'shippingGroup',
        'a_lim' => 'aLim',
        'meta' => 'meta',
        'children' => 'children',
        'market' => 'market'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'brand' => 'setBrand',
        'category' => 'setCategory',
        'charity_condition' => 'setCharityCondition',
        'colorway' => 'setColorway',
        'condition' => 'setCondition',
        'country_of_manufacture' => 'setCountryOfManufacture',
        'gender' => 'setGender',
        'content_group' => 'setContentGroup',
        'minimum_bid' => 'setMinimumBid',
        'media' => 'setMedia',
        'name' => 'setName',
        'primary_category' => 'setPrimaryCategory',
        'secondary_category' => 'setSecondaryCategory',
        'product_category' => 'setProductCategory',
        'release_date' => 'setReleaseDate',
        'retail_price' => 'setRetailPrice',
        'shoe' => 'setShoe',
        'short_description' => 'setShortDescription',
        'style_id' => 'setStyleId',
        'ticker_symbol' => 'setTickerSymbol',
        'title' => 'setTitle',
        'data_type' => 'setDataType',
        'type' => 'setType',
        'size_title' => 'setSizeTitle',
        'size_descriptor' => 'setSizeDescriptor',
        'size_all_descriptor' => 'setSizeAllDescriptor',
        'url_key' => 'setUrlKey',
        'year' => 'setYear',
        'shipping_group' => 'setShippingGroup',
        'a_lim' => 'setALim',
        'meta' => 'setMeta',
        'children' => 'setChildren',
        'market' => 'setMarket'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'brand' => 'getBrand',
        'category' => 'getCategory',
        'charity_condition' => 'getCharityCondition',
        'colorway' => 'getColorway',
        'condition' => 'getCondition',
        'country_of_manufacture' => 'getCountryOfManufacture',
        'gender' => 'getGender',
        'content_group' => 'getContentGroup',
        'minimum_bid' => 'getMinimumBid',
        'media' => 'getMedia',
        'name' => 'getName',
        'primary_category' => 'getPrimaryCategory',
        'secondary_category' => 'getSecondaryCategory',
        'product_category' => 'getProductCategory',
        'release_date' => 'getReleaseDate',
        'retail_price' => 'getRetailPrice',
        'shoe' => 'getShoe',
        'short_description' => 'getShortDescription',
        'style_id' => 'getStyleId',
        'ticker_symbol' => 'getTickerSymbol',
        'title' => 'getTitle',
        'data_type' => 'getDataType',
        'type' => 'getType',
        'size_title' => 'getSizeTitle',
        'size_descriptor' => 'getSizeDescriptor',
        'size_all_descriptor' => 'getSizeAllDescriptor',
        'url_key' => 'getUrlKey',
        'year' => 'getYear',
        'shipping_group' => 'getShippingGroup',
        'a_lim' => 'getALim',
        'meta' => 'getMeta',
        'children' => 'getChildren',
        'market' => 'getMarket'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['charity_condition'] = isset($data['charity_condition']) ? $data['charity_condition'] : null;
        $this->container['colorway'] = isset($data['colorway']) ? $data['colorway'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['country_of_manufacture'] = isset($data['country_of_manufacture']) ? $data['country_of_manufacture'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['content_group'] = isset($data['content_group']) ? $data['content_group'] : null;
        $this->container['minimum_bid'] = isset($data['minimum_bid']) ? $data['minimum_bid'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['primary_category'] = isset($data['primary_category']) ? $data['primary_category'] : null;
        $this->container['secondary_category'] = isset($data['secondary_category']) ? $data['secondary_category'] : null;
        $this->container['product_category'] = isset($data['product_category']) ? $data['product_category'] : null;
        $this->container['release_date'] = isset($data['release_date']) ? $data['release_date'] : null;
        $this->container['retail_price'] = isset($data['retail_price']) ? $data['retail_price'] : null;
        $this->container['shoe'] = isset($data['shoe']) ? $data['shoe'] : null;
        $this->container['short_description'] = isset($data['short_description']) ? $data['short_description'] : null;
        $this->container['style_id'] = isset($data['style_id']) ? $data['style_id'] : null;
        $this->container['ticker_symbol'] = isset($data['ticker_symbol']) ? $data['ticker_symbol'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size_title'] = isset($data['size_title']) ? $data['size_title'] : null;
        $this->container['size_descriptor'] = isset($data['size_descriptor']) ? $data['size_descriptor'] : null;
        $this->container['size_all_descriptor'] = isset($data['size_all_descriptor']) ? $data['size_all_descriptor'] : null;
        $this->container['url_key'] = isset($data['url_key']) ? $data['url_key'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['shipping_group'] = isset($data['shipping_group']) ? $data['shipping_group'] : null;
        $this->container['a_lim'] = isset($data['a_lim']) ? $data['a_lim'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
        $this->container['market'] = isset($data['market']) ? $data['market'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets charity_condition
     *
     * @return int
     */
    public function getCharityCondition()
    {
        return $this->container['charity_condition'];
    }

    /**
     * Sets charity_condition
     *
     * @param int $charity_condition charity_condition
     *
     * @return $this
     */
    public function setCharityCondition($charity_condition)
    {
        $this->container['charity_condition'] = $charity_condition;

        return $this;
    }

    /**
     * Gets colorway
     *
     * @return string
     */
    public function getColorway()
    {
        return $this->container['colorway'];
    }

    /**
     * Sets colorway
     *
     * @param string $colorway colorway
     *
     * @return $this
     */
    public function setColorway($colorway)
    {
        $this->container['colorway'] = $colorway;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets country_of_manufacture
     *
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->container['country_of_manufacture'];
    }

    /**
     * Sets country_of_manufacture
     *
     * @param string $country_of_manufacture country_of_manufacture
     *
     * @return $this
     */
    public function setCountryOfManufacture($country_of_manufacture)
    {
        $this->container['country_of_manufacture'] = $country_of_manufacture;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets content_group
     *
     * @return string
     */
    public function getContentGroup()
    {
        return $this->container['content_group'];
    }

    /**
     * Sets content_group
     *
     * @param string $content_group content_group
     *
     * @return $this
     */
    public function setContentGroup($content_group)
    {
        $this->container['content_group'] = $content_group;

        return $this;
    }

    /**
     * Gets minimum_bid
     *
     * @return int
     */
    public function getMinimumBid()
    {
        return $this->container['minimum_bid'];
    }

    /**
     * Sets minimum_bid
     *
     * @param int $minimum_bid minimum_bid
     *
     * @return $this
     */
    public function setMinimumBid($minimum_bid)
    {
        $this->container['minimum_bid'] = $minimum_bid;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \StockX\Client\Model\ProductResponseProductMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \StockX\Client\Model\ProductResponseProductMedia $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets primary_category
     *
     * @return string
     */
    public function getPrimaryCategory()
    {
        return $this->container['primary_category'];
    }

    /**
     * Sets primary_category
     *
     * @param string $primary_category primary_category
     *
     * @return $this
     */
    public function setPrimaryCategory($primary_category)
    {
        $this->container['primary_category'] = $primary_category;

        return $this;
    }

    /**
     * Gets secondary_category
     *
     * @return string
     */
    public function getSecondaryCategory()
    {
        return $this->container['secondary_category'];
    }

    /**
     * Sets secondary_category
     *
     * @param string $secondary_category secondary_category
     *
     * @return $this
     */
    public function setSecondaryCategory($secondary_category)
    {
        $this->container['secondary_category'] = $secondary_category;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string $product_category product_category
     *
     * @return $this
     */
    public function setProductCategory($product_category)
    {
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets release_date
     *
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date
     *
     * @param string $release_date release_date
     *
     * @return $this
     */
    public function setReleaseDate($release_date)
    {
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets retail_price
     *
     * @return int
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     *
     * @param int $retail_price retail_price
     *
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets shoe
     *
     * @return string
     */
    public function getShoe()
    {
        return $this->container['shoe'];
    }

    /**
     * Sets shoe
     *
     * @param string $shoe shoe
     *
     * @return $this
     */
    public function setShoe($shoe)
    {
        $this->container['shoe'] = $shoe;

        return $this;
    }

    /**
     * Gets short_description
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->container['short_description'];
    }

    /**
     * Sets short_description
     *
     * @param string $short_description short_description
     *
     * @return $this
     */
    public function setShortDescription($short_description)
    {
        $this->container['short_description'] = $short_description;

        return $this;
    }

    /**
     * Gets style_id
     *
     * @return string
     */
    public function getStyleId()
    {
        return $this->container['style_id'];
    }

    /**
     * Sets style_id
     *
     * @param string $style_id style_id
     *
     * @return $this
     */
    public function setStyleId($style_id)
    {
        $this->container['style_id'] = $style_id;

        return $this;
    }

    /**
     * Gets ticker_symbol
     *
     * @return string
     */
    public function getTickerSymbol()
    {
        return $this->container['ticker_symbol'];
    }

    /**
     * Sets ticker_symbol
     *
     * @param string $ticker_symbol ticker_symbol
     *
     * @return $this
     */
    public function setTickerSymbol($ticker_symbol)
    {
        $this->container['ticker_symbol'] = $ticker_symbol;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type data_type
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets size_title
     *
     * @return string
     */
    public function getSizeTitle()
    {
        return $this->container['size_title'];
    }

    /**
     * Sets size_title
     *
     * @param string $size_title size_title
     *
     * @return $this
     */
    public function setSizeTitle($size_title)
    {
        $this->container['size_title'] = $size_title;

        return $this;
    }

    /**
     * Gets size_descriptor
     *
     * @return string
     */
    public function getSizeDescriptor()
    {
        return $this->container['size_descriptor'];
    }

    /**
     * Sets size_descriptor
     *
     * @param string $size_descriptor size_descriptor
     *
     * @return $this
     */
    public function setSizeDescriptor($size_descriptor)
    {
        $this->container['size_descriptor'] = $size_descriptor;

        return $this;
    }

    /**
     * Gets size_all_descriptor
     *
     * @return string
     */
    public function getSizeAllDescriptor()
    {
        return $this->container['size_all_descriptor'];
    }

    /**
     * Sets size_all_descriptor
     *
     * @param string $size_all_descriptor size_all_descriptor
     *
     * @return $this
     */
    public function setSizeAllDescriptor($size_all_descriptor)
    {
        $this->container['size_all_descriptor'] = $size_all_descriptor;

        return $this;
    }

    /**
     * Gets url_key
     *
     * @return string
     */
    public function getUrlKey()
    {
        return $this->container['url_key'];
    }

    /**
     * Sets url_key
     *
     * @param string $url_key url_key
     *
     * @return $this
     */
    public function setUrlKey($url_key)
    {
        $this->container['url_key'] = $url_key;

        return $this;
    }

    /**
     * Gets year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param string $year year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets shipping_group
     *
     * @return string
     */
    public function getShippingGroup()
    {
        return $this->container['shipping_group'];
    }

    /**
     * Sets shipping_group
     *
     * @param string $shipping_group shipping_group
     *
     * @return $this
     */
    public function setShippingGroup($shipping_group)
    {
        $this->container['shipping_group'] = $shipping_group;

        return $this;
    }

    /**
     * Gets a_lim
     *
     * @return int
     */
    public function getALim()
    {
        return $this->container['a_lim'];
    }

    /**
     * Sets a_lim
     *
     * @param int $a_lim a_lim
     *
     * @return $this
     */
    public function setALim($a_lim)
    {
        $this->container['a_lim'] = $a_lim;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \StockX\Client\Model\ProductResponseProductMeta
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \StockX\Client\Model\ProductResponseProductMeta $meta meta
     *
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \StockX\Client\Model\ProductResponseProductChildren
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \StockX\Client\Model\ProductResponseProductChildren $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets market
     *
     * @return \StockX\Client\Model\ProductResponseProductChildrenPRODUCTIDMarket
     */
    public function getMarket()
    {
        return $this->container['market'];
    }

    /**
     * Sets market
     *
     * @param \StockX\Client\Model\ProductResponseProductChildrenPRODUCTIDMarket $market market
     *
     * @return $this
     */
    public function setMarket($market)
    {
        $this->container['market'] = $market;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


