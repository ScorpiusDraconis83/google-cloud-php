<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/vex.proto

namespace GPBMetadata\Grafeas\V1;

class Vex
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Grafeas\V1\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
grafeas/v1/vex.proto
grafeas.v1"�
VulnerabilityAssessmentNote
title (	
short_description (	
long_description (	
language_code (	D
	publisher (21.grafeas.v1.VulnerabilityAssessmentNote.Publisher@
product (2/.grafeas.v1.VulnerabilityAssessmentNote.ProductF

assessment (22.grafeas.v1.VulnerabilityAssessmentNote.AssessmentQ
	Publisher
name (	
issuing_authority (	
publisher_namespace (	H
Product
name (	

id (	
generic_uri (	H B

identifier�	

Assessment
cve (	B
vulnerability_id	 (	
short_description (	
long_description (	,
related_uris (2.grafeas.v1.RelatedUrlG
state (28.grafeas.v1.VulnerabilityAssessmentNote.Assessment.State
impacts (	W
justification (2@.grafeas.v1.VulnerabilityAssessmentNote.Assessment.JustificationT
remediations (2>.grafeas.v1.VulnerabilityAssessmentNote.Assessment.Remediation�
Justificationn
justification_type (2R.grafeas.v1.VulnerabilityAssessmentNote.Assessment.Justification.JustificationType
details (	"�
JustificationType"
JUSTIFICATION_TYPE_UNSPECIFIED 
COMPONENT_NOT_PRESENT
VULNERABLE_CODE_NOT_PRESENT\'
#VULNERABLE_CODE_NOT_IN_EXECUTE_PATH5
1VULNERABLE_CODE_CANNOT_BE_CONTROLLED_BY_ADVERSARY$
 INLINE_MITIGATIONS_ALREADY_EXIST�
Remediationh
remediation_type (2N.grafeas.v1.VulnerabilityAssessmentNote.Assessment.Remediation.RemediationType
details (	/
remediation_uri (2.grafeas.v1.RelatedUrl"�
RemediationType 
REMEDIATION_TYPE_UNSPECIFIED 

MITIGATION
NO_FIX_PLANNED
NONE_AVAILABLE

VENDOR_FIX

WORKAROUND"b
State
STATE_UNSPECIFIED 
AFFECTED
NOT_AFFECTED	
FIXED
UNDER_INVESTIGATIONBQ
io.grafeas.v1PZ8google.golang.org/genproto/googleapis/grafeas/v1;grafeas�GRAbproto3'
        , true);

        static::$is_initialized = true;
    }
}

