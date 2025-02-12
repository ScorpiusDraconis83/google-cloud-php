<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/compliance.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grafeas.v1.ComplianceNote</code>
 */
class ComplianceNote extends \Google\Protobuf\Internal\Message
{
    /**
     * The title that identifies this compliance check.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    protected $title = '';
    /**
     * A description about this compliance check.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * The OS and config versions the benchmark applies to.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.ComplianceVersion version = 3;</code>
     */
    private $version;
    /**
     * A rationale for the existence of this compliance check.
     *
     * Generated from protobuf field <code>string rationale = 4;</code>
     */
    protected $rationale = '';
    /**
     * A description of remediation steps if the compliance check fails.
     *
     * Generated from protobuf field <code>string remediation = 5;</code>
     */
    protected $remediation = '';
    /**
     * Serialized scan instructions with a predefined format.
     *
     * Generated from protobuf field <code>bytes scan_instructions = 7;</code>
     */
    protected $scan_instructions = '';
    protected $compliance_type;
    protected $potential_impact;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $title
     *           The title that identifies this compliance check.
     *     @type string $description
     *           A description about this compliance check.
     *     @type array<\Grafeas\V1\ComplianceVersion>|\Google\Protobuf\Internal\RepeatedField $version
     *           The OS and config versions the benchmark applies to.
     *     @type string $rationale
     *           A rationale for the existence of this compliance check.
     *     @type string $remediation
     *           A description of remediation steps if the compliance check fails.
     *     @type \Grafeas\V1\ComplianceNote\CisBenchmark $cis_benchmark
     *     @type string $scan_instructions
     *           Serialized scan instructions with a predefined format.
     *     @type string $impact
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Compliance::initOnce();
        parent::__construct($data);
    }

    /**
     * The title that identifies this compliance check.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The title that identifies this compliance check.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * A description about this compliance check.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description about this compliance check.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The OS and config versions the benchmark applies to.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.ComplianceVersion version = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The OS and config versions the benchmark applies to.
     *
     * Generated from protobuf field <code>repeated .grafeas.v1.ComplianceVersion version = 3;</code>
     * @param array<\Grafeas\V1\ComplianceVersion>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVersion($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\ComplianceVersion::class);
        $this->version = $arr;

        return $this;
    }

    /**
     * A rationale for the existence of this compliance check.
     *
     * Generated from protobuf field <code>string rationale = 4;</code>
     * @return string
     */
    public function getRationale()
    {
        return $this->rationale;
    }

    /**
     * A rationale for the existence of this compliance check.
     *
     * Generated from protobuf field <code>string rationale = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRationale($var)
    {
        GPBUtil::checkString($var, True);
        $this->rationale = $var;

        return $this;
    }

    /**
     * A description of remediation steps if the compliance check fails.
     *
     * Generated from protobuf field <code>string remediation = 5;</code>
     * @return string
     */
    public function getRemediation()
    {
        return $this->remediation;
    }

    /**
     * A description of remediation steps if the compliance check fails.
     *
     * Generated from protobuf field <code>string remediation = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRemediation($var)
    {
        GPBUtil::checkString($var, True);
        $this->remediation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.ComplianceNote.CisBenchmark cis_benchmark = 6;</code>
     * @return \Grafeas\V1\ComplianceNote\CisBenchmark|null
     */
    public function getCisBenchmark()
    {
        return $this->readOneof(6);
    }

    public function hasCisBenchmark()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.ComplianceNote.CisBenchmark cis_benchmark = 6;</code>
     * @param \Grafeas\V1\ComplianceNote\CisBenchmark $var
     * @return $this
     */
    public function setCisBenchmark($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\ComplianceNote\CisBenchmark::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Serialized scan instructions with a predefined format.
     *
     * Generated from protobuf field <code>bytes scan_instructions = 7;</code>
     * @return string
     */
    public function getScanInstructions()
    {
        return $this->scan_instructions;
    }

    /**
     * Serialized scan instructions with a predefined format.
     *
     * Generated from protobuf field <code>bytes scan_instructions = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setScanInstructions($var)
    {
        GPBUtil::checkString($var, False);
        $this->scan_instructions = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string impact = 8;</code>
     * @return string
     */
    public function getImpact()
    {
        return $this->readOneof(8);
    }

    public function hasImpact()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>string impact = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setImpact($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getComplianceType()
    {
        return $this->whichOneof("compliance_type");
    }

    /**
     * @return string
     */
    public function getPotentialImpact()
    {
        return $this->whichOneof("potential_impact");
    }

}

