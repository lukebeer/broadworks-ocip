<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ConfigurableTreatmentDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\InternalReleaseCause16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaTreatmentFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPFailureStatusCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CDRTerminationCause;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPStatusMessage;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargeIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850CauseValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850Text;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a configurable treatment.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemConfigurableTreatmentAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $treatmentId                = null;
    protected $chargeIndicator            = null;
    protected $description                = null;
    protected $accessSIPStatusCode        = null;
    protected $accessSIPStatusMessage     = null;
    protected $networkSIPStatusCode       = null;
    protected $networkSIPStatusMessage    = null;
    protected $q850CauseValue             = null;
    protected $q850Text                   = null;
    protected $accessTreatmentAudioFile   = null;
    protected $accessTreatmentVideoFile   = null;
    protected $networkTreatmentAudioFile  = null;
    protected $networkTreatmentVideoFile  = null;
    protected $cdrTerminationCause        = null;
    protected $routeAdvance               = null;
    protected $internalReleaseCause       = null;
    protected $accessSendReasonHeader     = null;
    protected $networkSendReasonHeader    = null;

    public function __construct(
         $treatmentId,
         $chargeIndicator,
         $description = null,
         $accessSIPStatusCode = null,
         $accessSIPStatusMessage = null,
         $networkSIPStatusCode = null,
         $networkSIPStatusMessage = null,
         $q850CauseValue = null,
         $q850Text = null,
         $accessTreatmentAudioFile = null,
         $accessTreatmentVideoFile = null,
         $networkTreatmentAudioFile = null,
         $networkTreatmentVideoFile = null,
         $cdrTerminationCause = null,
         $routeAdvance = null,
         $internalReleaseCause = null,
         $accessSendReasonHeader = null,
         $networkSendReasonHeader = null
    ) {
        $this->setTreatmentId($treatmentId);
        $this->setChargeIndicator($chargeIndicator);
        $this->setDescription($description);
        $this->setAccessSIPStatusCode($accessSIPStatusCode);
        $this->setAccessSIPStatusMessage($accessSIPStatusMessage);
        $this->setNetworkSIPStatusCode($networkSIPStatusCode);
        $this->setNetworkSIPStatusMessage($networkSIPStatusMessage);
        $this->setQ850CauseValue($q850CauseValue);
        $this->setQ850Text($q850Text);
        $this->setAccessTreatmentAudioFile($accessTreatmentAudioFile);
        $this->setAccessTreatmentVideoFile($accessTreatmentVideoFile);
        $this->setNetworkTreatmentAudioFile($networkTreatmentAudioFile);
        $this->setNetworkTreatmentVideoFile($networkTreatmentVideoFile);
        $this->setCdrTerminationCause($cdrTerminationCause);
        $this->setRouteAdvance($routeAdvance);
        $this->setInternalReleaseCause($internalReleaseCause);
        $this->setAccessSendReasonHeader($accessSendReasonHeader);
        $this->setNetworkSendReasonHeader($networkSendReasonHeader);
    }

    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
    }

    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->value();
    }

    public function setChargeIndicator($chargeIndicator = null)
    {
        $this->chargeIndicator = ($chargeIndicator InstanceOf ChargeIndicator)
             ? $chargeIndicator
             : new ChargeIndicator($chargeIndicator);
    }

    public function getChargeIndicator()
    {
        return (!$this->chargeIndicator) ?: $this->chargeIndicator->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ConfigurableTreatmentDescription)
             ? $description
             : new ConfigurableTreatmentDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setAccessSIPStatusCode($accessSIPStatusCode = null)
    {
        $this->accessSIPStatusCode = ($accessSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $accessSIPStatusCode
             : new SIPFailureStatusCode($accessSIPStatusCode);
    }

    public function getAccessSIPStatusCode()
    {
        return (!$this->accessSIPStatusCode) ?: $this->accessSIPStatusCode->value();
    }

    public function setAccessSIPStatusMessage($accessSIPStatusMessage = null)
    {
        $this->accessSIPStatusMessage = ($accessSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $accessSIPStatusMessage
             : new SIPStatusMessage($accessSIPStatusMessage);
    }

    public function getAccessSIPStatusMessage()
    {
        return (!$this->accessSIPStatusMessage) ?: $this->accessSIPStatusMessage->value();
    }

    public function setNetworkSIPStatusCode($networkSIPStatusCode = null)
    {
        $this->networkSIPStatusCode = ($networkSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $networkSIPStatusCode
             : new SIPFailureStatusCode($networkSIPStatusCode);
    }

    public function getNetworkSIPStatusCode()
    {
        return (!$this->networkSIPStatusCode) ?: $this->networkSIPStatusCode->value();
    }

    public function setNetworkSIPStatusMessage($networkSIPStatusMessage = null)
    {
        $this->networkSIPStatusMessage = ($networkSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $networkSIPStatusMessage
             : new SIPStatusMessage($networkSIPStatusMessage);
    }

    public function getNetworkSIPStatusMessage()
    {
        return (!$this->networkSIPStatusMessage) ?: $this->networkSIPStatusMessage->value();
    }

    public function setQ850CauseValue($q850CauseValue = null)
    {
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
    }

    public function getQ850CauseValue()
    {
        return (!$this->q850CauseValue) ?: $this->q850CauseValue->value();
    }

    public function setQ850Text($q850Text = null)
    {
        $this->q850Text = ($q850Text InstanceOf Q850Text)
             ? $q850Text
             : new Q850Text($q850Text);
    }

    public function getQ850Text()
    {
        return (!$this->q850Text) ?: $this->q850Text->value();
    }

    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile = null)
    {
        $this->accessTreatmentAudioFile = ($accessTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentAudioFile
             : new MediaTreatmentFileName($accessTreatmentAudioFile);
    }

    public function getAccessTreatmentAudioFile()
    {
        return (!$this->accessTreatmentAudioFile) ?: $this->accessTreatmentAudioFile->value();
    }

    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile = null)
    {
        $this->accessTreatmentVideoFile = ($accessTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentVideoFile
             : new MediaTreatmentFileName($accessTreatmentVideoFile);
    }

    public function getAccessTreatmentVideoFile()
    {
        return (!$this->accessTreatmentVideoFile) ?: $this->accessTreatmentVideoFile->value();
    }

    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile = null)
    {
        $this->networkTreatmentAudioFile = ($networkTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentAudioFile
             : new MediaTreatmentFileName($networkTreatmentAudioFile);
    }

    public function getNetworkTreatmentAudioFile()
    {
        return (!$this->networkTreatmentAudioFile) ?: $this->networkTreatmentAudioFile->value();
    }

    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile = null)
    {
        $this->networkTreatmentVideoFile = ($networkTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentVideoFile
             : new MediaTreatmentFileName($networkTreatmentVideoFile);
    }

    public function getNetworkTreatmentVideoFile()
    {
        return (!$this->networkTreatmentVideoFile) ?: $this->networkTreatmentVideoFile->value();
    }

    public function setCdrTerminationCause($cdrTerminationCause = null)
    {
        $this->cdrTerminationCause = ($cdrTerminationCause InstanceOf CDRTerminationCause)
             ? $cdrTerminationCause
             : new CDRTerminationCause($cdrTerminationCause);
    }

    public function getCdrTerminationCause()
    {
        return (!$this->cdrTerminationCause) ?: $this->cdrTerminationCause->value();
    }

    public function setRouteAdvance(xs:boolean $routeAdvance = null)
    {
    }

    public function getRouteAdvance()
    {
        return (!$this->routeAdvance) ?: $this->routeAdvance->value();
    }

    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause16)
             ? $internalReleaseCause
             : new InternalReleaseCause16($internalReleaseCause);
    }

    public function getInternalReleaseCause()
    {
        return (!$this->internalReleaseCause) ?: $this->internalReleaseCause->value();
    }

    public function setAccessSendReasonHeader(xs:boolean $accessSendReasonHeader = null)
    {
    }

    public function getAccessSendReasonHeader()
    {
        return (!$this->accessSendReasonHeader) ?: $this->accessSendReasonHeader->value();
    }

    public function setNetworkSendReasonHeader(xs:boolean $networkSendReasonHeader = null)
    {
    }

    public function getNetworkSendReasonHeader()
    {
        return (!$this->networkSendReasonHeader) ?: $this->networkSendReasonHeader->value();
    }
}
