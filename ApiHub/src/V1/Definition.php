<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/common_fields.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a definition for example schema, request, response definitions
 * contained in an API version.
 * A definition is added/updated/deleted in an API version when a new spec is
 * added or an existing spec is updated/deleted in a version. Currently,
 * definition will be created only corresponding to OpenAPI spec as parsing is
 * supported for OpenAPI spec. Also, within OpenAPI spec, only `schema` object
 * is supported.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.Definition</code>
 */
class Definition extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. The name of the definition.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}/definitions/{definition}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. The name of the spec from where the definition was parsed.
     * Format is
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}/specs/{spec}`
     *
     * Generated from protobuf field <code>string spec = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $spec = '';
    /**
     * Output only. The type of the definition.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Definition.Type type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Output only. The time at which the definition was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time at which the definition was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. The list of user defined attributes associated with the
     * definition resource. The key is the attribute name. It will be of the
     * format: `projects/{project}/locations/{location}/attributes/{attribute}`.
     * The value is the attribute values associated with the resource.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.apihub.v1.AttributeValues> attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $attributes;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApiHub\V1\Schema $schema
     *           Output only. The value of a schema definition.
     *     @type string $name
     *           Identifier. The name of the definition.
     *           Format:
     *           `projects/{project}/locations/{location}/apis/{api}/versions/{version}/definitions/{definition}`
     *     @type string $spec
     *           Output only. The name of the spec from where the definition was parsed.
     *           Format is
     *           `projects/{project}/locations/{location}/apis/{api}/versions/{version}/specs/{spec}`
     *     @type int $type
     *           Output only. The type of the definition.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the definition was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which the definition was last updated.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Optional. The list of user defined attributes associated with the
     *           definition resource. The key is the attribute name. It will be of the
     *           format: `projects/{project}/locations/{location}/attributes/{attribute}`.
     *           The value is the attribute values associated with the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\CommonFields::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The value of a schema definition.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Schema schema = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\ApiHub\V1\Schema|null
     */
    public function getSchema()
    {
        return $this->readOneof(4);
    }

    public function hasSchema()
    {
        return $this->hasOneof(4);
    }

    /**
     * Output only. The value of a schema definition.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Schema schema = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\ApiHub\V1\Schema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApiHub\V1\Schema::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Identifier. The name of the definition.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}/definitions/{definition}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. The name of the definition.
     * Format:
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}/definitions/{definition}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The name of the spec from where the definition was parsed.
     * Format is
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}/specs/{spec}`
     *
     * Generated from protobuf field <code>string spec = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSpec()
    {
        return $this->spec;
    }

    /**
     * Output only. The name of the spec from where the definition was parsed.
     * Format is
     * `projects/{project}/locations/{location}/apis/{api}/versions/{version}/specs/{spec}`
     *
     * Generated from protobuf field <code>string spec = 2 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSpec($var)
    {
        GPBUtil::checkString($var, True);
        $this->spec = $var;

        return $this;
    }

    /**
     * Output only. The type of the definition.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Definition.Type type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of the definition.
     *
     * Generated from protobuf field <code>.google.cloud.apihub.v1.Definition.Type type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ApiHub\V1\Definition\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The time at which the definition was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the definition was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time at which the definition was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time at which the definition was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. The list of user defined attributes associated with the
     * definition resource. The key is the attribute name. It will be of the
     * format: `projects/{project}/locations/{location}/attributes/{attribute}`.
     * The value is the attribute values associated with the resource.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.apihub.v1.AttributeValues> attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Optional. The list of user defined attributes associated with the
     * definition resource. The key is the attribute name. It will be of the
     * format: `projects/{project}/locations/{location}/attributes/{attribute}`.
     * The value is the attribute values associated with the resource.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.apihub.v1.AttributeValues> attributes = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ApiHub\V1\AttributeValues::class);
        $this->attributes = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

