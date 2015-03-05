<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ConfigurableTreatmentDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ChargeIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPFailureStatusCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPStatusMessage;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Q850CauseValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Q850Text;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaTreatmentFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CDRTerminationCause;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InternalReleaseCause;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemConfigurableTreatmentGetRequest.
 *             The response contains the treatment configurable information.
 *             Replaced By: SystemConfigurableTreatmentGetResponse16
 */
class SystemConfigurableTreatmentGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $description=null,
             $chargeIndicator,
             $accessSIPStatusCode=null,
             $accessSIPStatusMessage=null,
             $networkSIPStatusCode=null,
             $networkSIPStatusMessage=null,
             $q850CauseValue=null,
             $q850Text=null,
             $accessTreatmentAudioFile=null,
             $accessTreatmentVideoFile=null,
             $networkTreatmentAudioFile=null,
             $networkTreatmentVideoFile=null,
             $cdrTerminationCause=null,
             $routeAdvance,
             $internalReleaseCause=null,
             $accessSendReasonHeader,
             $networkSendReasonHeader
    ) {
        $this->description               = $description;
        $this->chargeIndicator           = $chargeIndicator;
        $this->accessSIPStatusCode       = $accessSIPStatusCode;
        $this->accessSIPStatusMessage    = $accessSIPStatusMessage;
        $this->networkSIPStatusCode      = $networkSIPStatusCode;
        $this->networkSIPStatusMessage   = $networkSIPStatusMessage;
        $this->q850CauseValue            = $q850CauseValue;
        $this->q850Text                  = $q850Text;
        $this->accessTreatmentAudioFile  = $accessTreatmentAudioFile;
        $this->accessTreatmentVideoFile  = $accessTreatmentVideoFile;
        $this->networkTreatmentAudioFile = $networkTreatmentAudioFile;
        $this->networkTreatmentVideoFile = $networkTreatmentVideoFile;
        $this->cdrTerminationCause       = $cdrTerminationCause;
        $this->routeAdvance              = $routeAdvance;
        $this->internalReleaseCause      = $internalReleaseCause;
        $this->accessSendReasonHeader    = $accessSendReasonHeader;
        $this->networkSendReasonHeader   = $networkSendReasonHeader;
        $this->args                      = func_get_args();
    }

    public function setDescription($description)
    {
        $description and $this->description = new ConfigurableTreatmentDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setChargeIndicator($chargeIndicator)
    {
        $chargeIndicator and $this->chargeIndicator = new ChargeIndicator($chargeIndicator);
    }

    public function getChargeIndicator()
    {
        return (!$this->chargeIndicator) ?: $this->chargeIndicator->value();
    }

    public function setAccessSIPStatusCode($accessSIPStatusCode)
    {
        $accessSIPStatusCode and $this->accessSIPStatusCode = new SIPFailureStatusCode($accessSIPStatusCode);
    }

    public function getAccessSIPStatusCode()
    {
        return (!$this->accessSIPStatusCode) ?: $this->accessSIPStatusCode->value();
    }

    public function setAccessSIPStatusMessage($accessSIPStatusMessage)
    {
        $accessSIPStatusMessage and $this->accessSIPStatusMessage = new SIPStatusMessage($accessSIPStatusMessage);
    }

    public function getAccessSIPStatusMessage()
    {
        return (!$this->accessSIPStatusMessage) ?: $this->accessSIPStatusMessage->value();
    }

    public function setNetworkSIPStatusCode($networkSIPStatusCode)
    {
        $networkSIPStatusCode and $this->networkSIPStatusCode = new SIPFailureStatusCode($networkSIPStatusCode);
    }

    public function getNetworkSIPStatusCode()
    {
        return (!$this->networkSIPStatusCode) ?: $this->networkSIPStatusCode->value();
    }

    public function setNetworkSIPStatusMessage($networkSIPStatusMessage)
    {
        $networkSIPStatusMessage and $this->networkSIPStatusMessage = new SIPStatusMessage($networkSIPStatusMessage);
    }

    public function getNetworkSIPStatusMessage()
    {
        return (!$this->networkSIPStatusMessage) ?: $this->networkSIPStatusMessage->value();
    }

    public function setQ850CauseValue($q850CauseValue)
    {
        $q850CauseValue and $this->q850CauseValue = new Q850CauseValue($q850CauseValue);
    }

    public function getQ850CauseValue()
    {
        return (!$this->q850CauseValue) ?: $this->q850CauseValue->value();
    }

    public function setQ850Text($q850Text)
    {
        $q850Text and $this->q850Text = new Q850Text($q850Text);
    }

    public function getQ850Text()
    {
        return (!$this->q850Text) ?: $this->q850Text->value();
    }

    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile)
    {
        $accessTreatmentAudioFile and $this->accessTreatmentAudioFile = new MediaTreatmentFileName($accessTreatmentAudioFile);
    }

    public function getAccessTreatmentAudioFile()
    {
        return (!$this->accessTreatmentAudioFile) ?: $this->accessTreatmentAudioFile->value();
    }

    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile)
    {
        $accessTreatmentVideoFile and $this->accessTreatmentVideoFile = new MediaTreatmentFileName($accessTreatmentVideoFile);
    }

    public function getAccessTreatmentVideoFile()
    {
        return (!$this->accessTreatmentVideoFile) ?: $this->accessTreatmentVideoFile->value();
    }

    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile)
    {
        $networkTreatmentAudioFile and $this->networkTreatmentAudioFile = new MediaTreatmentFileName($networkTreatmentAudioFile);
    }

    public function getNetworkTreatmentAudioFile()
    {
        return (!$this->networkTreatmentAudioFile) ?: $this->networkTreatmentAudioFile->value();
    }

    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile)
    {
        $networkTreatmentVideoFile and $this->networkTreatmentVideoFile = new MediaTreatmentFileName($networkTreatmentVideoFile);
    }

    public function getNetworkTreatmentVideoFile()
    {
        return (!$this->networkTreatmentVideoFile) ?: $this->networkTreatmentVideoFile->value();
    }

    public function setCdrTerminationCause($cdrTerminationCause)
    {
        $cdrTerminationCause and $this->cdrTerminationCause = new CDRTerminationCause($cdrTerminationCause);
    }

    public function getCdrTerminationCause()
    {
        return (!$this->cdrTerminationCause) ?: $this->cdrTerminationCause->value();
    }

    public function setRouteAdvance($routeAdvance)
    {
        $routeAdvance and $this->routeAdvance = new xs:boolean($routeAdvance);
    }

    public function getRouteAdvance()
    {
        return (!$this->routeAdvance) ?: $this->routeAdvance->value();
    }

    public function setInternalReleaseCause($internalReleaseCause)
    {
        $internalReleaseCause and $this->internalReleaseCause = new InternalReleaseCause($internalReleaseCause);
    }

    public function getInternalReleaseCause()
    {
        return (!$this->internalReleaseCause) ?: $this->internalReleaseCause->value();
    }

    public function setAccessSendReasonHeader($accessSendReasonHeader)
    {
        $accessSendReasonHeader and $this->accessSendReasonHeader = new xs:boolean($accessSendReasonHeader);
    }

    public function getAccessSendReasonHeader()
    {
        return (!$this->accessSendReasonHeader) ?: $this->accessSendReasonHeader->value();
    }

    public function setNetworkSendReasonHeader($networkSendReasonHeader)
    {
        $networkSendReasonHeader and $this->networkSendReasonHeader = new xs:boolean($networkSendReasonHeader);
    }

    public function getNetworkSendReasonHeader()
    {
        return (!$this->networkSendReasonHeader) ?: $this->networkSendReasonHeader->value();
    }
}
