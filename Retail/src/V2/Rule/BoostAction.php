<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2\Rule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A boost action to apply to results matching condition specified above.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Rule.BoostAction</code>
 */
class BoostAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Strength of the condition boost, which must be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the item a big promotion. However, it does not
     * necessarily mean that the boosted item will be the top result at all
     * times, nor that other items will be excluded. Results could still be
     * shown even when none of them matches the condition. And results that
     * are significantly more relevant to the search query can still trump
     * your heavily favored but irrelevant items.
     * Setting to -1.0 gives the item a big demotion. However, results that
     * are deeply relevant might still be shown. The item will have an
     * upstream battle to get a fairly high ranking, but it is not blocked out
     * completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored.
     *
     * Generated from protobuf field <code>float boost = 1;</code>
     */
    protected $boost = 0.0;
    /**
     * The filter can have a max size of 5000 characters.
     * An expression which specifies which products to apply an action to.
     * The syntax and supported fields are the same as a filter expression. See
     * [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter] for
     * detail syntax and limitations.
     * Examples:
     * * To boost products with product ID "product_1" or "product_2", and
     * color
     *   "Red" or "Blue":<br>
     *   *(id: ANY("product_1", "product_2"))<br>*
     *   *AND<br>*
     *   *(colorFamilies: ANY("Red", "Blue"))<br>*
     *
     * Generated from protobuf field <code>string products_filter = 2;</code>
     */
    protected $products_filter = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $boost
     *           Strength of the condition boost, which must be in [-1, 1]. Negative
     *           boost means demotion. Default is 0.0.
     *           Setting to 1.0 gives the item a big promotion. However, it does not
     *           necessarily mean that the boosted item will be the top result at all
     *           times, nor that other items will be excluded. Results could still be
     *           shown even when none of them matches the condition. And results that
     *           are significantly more relevant to the search query can still trump
     *           your heavily favored but irrelevant items.
     *           Setting to -1.0 gives the item a big demotion. However, results that
     *           are deeply relevant might still be shown. The item will have an
     *           upstream battle to get a fairly high ranking, but it is not blocked out
     *           completely.
     *           Setting to 0.0 means no boost applied. The boosting condition is
     *           ignored.
     *     @type string $products_filter
     *           The filter can have a max size of 5000 characters.
     *           An expression which specifies which products to apply an action to.
     *           The syntax and supported fields are the same as a filter expression. See
     *           [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter] for
     *           detail syntax and limitations.
     *           Examples:
     *           * To boost products with product ID "product_1" or "product_2", and
     *           color
     *             "Red" or "Blue":<br>
     *             *(id: ANY("product_1", "product_2"))<br>*
     *             *AND<br>*
     *             *(colorFamilies: ANY("Red", "Blue"))<br>*
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Strength of the condition boost, which must be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the item a big promotion. However, it does not
     * necessarily mean that the boosted item will be the top result at all
     * times, nor that other items will be excluded. Results could still be
     * shown even when none of them matches the condition. And results that
     * are significantly more relevant to the search query can still trump
     * your heavily favored but irrelevant items.
     * Setting to -1.0 gives the item a big demotion. However, results that
     * are deeply relevant might still be shown. The item will have an
     * upstream battle to get a fairly high ranking, but it is not blocked out
     * completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored.
     *
     * Generated from protobuf field <code>float boost = 1;</code>
     * @return float
     */
    public function getBoost()
    {
        return $this->boost;
    }

    /**
     * Strength of the condition boost, which must be in [-1, 1]. Negative
     * boost means demotion. Default is 0.0.
     * Setting to 1.0 gives the item a big promotion. However, it does not
     * necessarily mean that the boosted item will be the top result at all
     * times, nor that other items will be excluded. Results could still be
     * shown even when none of them matches the condition. And results that
     * are significantly more relevant to the search query can still trump
     * your heavily favored but irrelevant items.
     * Setting to -1.0 gives the item a big demotion. However, results that
     * are deeply relevant might still be shown. The item will have an
     * upstream battle to get a fairly high ranking, but it is not blocked out
     * completely.
     * Setting to 0.0 means no boost applied. The boosting condition is
     * ignored.
     *
     * Generated from protobuf field <code>float boost = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setBoost($var)
    {
        GPBUtil::checkFloat($var);
        $this->boost = $var;

        return $this;
    }

    /**
     * The filter can have a max size of 5000 characters.
     * An expression which specifies which products to apply an action to.
     * The syntax and supported fields are the same as a filter expression. See
     * [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter] for
     * detail syntax and limitations.
     * Examples:
     * * To boost products with product ID "product_1" or "product_2", and
     * color
     *   "Red" or "Blue":<br>
     *   *(id: ANY("product_1", "product_2"))<br>*
     *   *AND<br>*
     *   *(colorFamilies: ANY("Red", "Blue"))<br>*
     *
     * Generated from protobuf field <code>string products_filter = 2;</code>
     * @return string
     */
    public function getProductsFilter()
    {
        return $this->products_filter;
    }

    /**
     * The filter can have a max size of 5000 characters.
     * An expression which specifies which products to apply an action to.
     * The syntax and supported fields are the same as a filter expression. See
     * [SearchRequest.filter][google.cloud.retail.v2.SearchRequest.filter] for
     * detail syntax and limitations.
     * Examples:
     * * To boost products with product ID "product_1" or "product_2", and
     * color
     *   "Red" or "Blue":<br>
     *   *(id: ANY("product_1", "product_2"))<br>*
     *   *AND<br>*
     *   *(colorFamilies: ANY("Red", "Blue"))<br>*
     *
     * Generated from protobuf field <code>string products_filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProductsFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->products_filter = $var;

        return $this;
    }

}


