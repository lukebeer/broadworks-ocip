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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemConfigurableTreatmentAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a configurable treatment.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemConfigurableTreatmentAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $treatmentId               = null;
    protected $chargeIndicator           = null;
    protected $description               = null;
    protected $accessSIPStatusCode       = null;
    protected $accessSIPStatusMessage    = null;
    protected $networkSIPStatusCode      = null;
    protected $networkSIPStatusMessage   = null;
    protected $q850CauseValue            = null;
    protected $q850Text                  = null;
    protected $accessTreatmentAudioFile  = null;
    protected $accessTreatmentVideoFile  = null;
    protected $networkTreatmentAudioFile = null;
    protected $networkTreatmentVideoFile = null;
    protected $cdrTerminationCause       = null;
    protected $routeAdvance              = null;
    protected $internalReleaseCause      = null;
    protected $accessSendReasonHeader    = null;
    protected $networkSendReasonHeader   = null;

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

    /**
     * @return SystemConfigurableTreatmentAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Configurable Treatment Name
     */
    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
    }

    /**
     * Configurable Treatment Name
     */
    public function getTreatmentId()
    {
        return (!$this->treatmentId) ?: $this->treatmentId->getValue();
    }

    /**
     * Possible values for Charge Indicator.
     */
    public function setChargeIndicator($chargeIndicator = null)
    {
        $this->chargeIndicator = ($chargeIndicator InstanceOf ChargeIndicator)
             ? $chargeIndicator
             : new ChargeIndicator($chargeIndicator);
    }

    /**
     * Possible values for Charge Indicator.
     */
    public function getChargeIndicator()
    {
        return (!$this->chargeIndicator) ?: $this->chargeIndicator->getValue();
    }

    /**
     * Configurable Treatment Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ConfigurableTreatmentDescription)
             ? $description
             : new ConfigurableTreatmentDescription($description);
    }

    /**
     * Configurable Treatment Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * The possible range values for SIP failure status codes.
     */
    public function setAccessSIPStatusCode($accessSIPStatusCode = null)
    {
        $this->accessSIPStatusCode = ($accessSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $accessSIPStatusCode
             : new SIPFailureStatusCode($accessSIPStatusCode);
    }

    /**
     * The possible range values for SIP failure status codes.
     */
    public function getAccessSIPStatusCode()
    {
        return (!$this->accessSIPStatusCode) ?: $this->accessSIPStatusCode->getValue();
    }

    /**
     * A text parameter appended to the SIP status line.
     */
    public function setAccessSIPStatusMessage($accessSIPStatusMessage = null)
    {
        $this->accessSIPStatusMessage = ($accessSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $accessSIPStatusMessage
             : new SIPStatusMessage($accessSIPStatusMessage);
    }

    /**
     * A text parameter appended to the SIP status line.
     */
    public function getAccessSIPStatusMessage()
    {
        return (!$this->accessSIPStatusMessage) ?: $this->accessSIPStatusMessage->getValue();
    }

    /**
     * The possible range values for SIP failure status codes.
     */
    public function setNetworkSIPStatusCode($networkSIPStatusCode = null)
    {
        $this->networkSIPStatusCode = ($networkSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $networkSIPStatusCode
             : new SIPFailureStatusCode($networkSIPStatusCode);
    }

    /**
     * The possible range values for SIP failure status codes.
     */
    public function getNetworkSIPStatusCode()
    {
        return (!$this->networkSIPStatusCode) ?: $this->networkSIPStatusCode->getValue();
    }

    /**
     * A text parameter appended to the SIP status line.
     */
    public function setNetworkSIPStatusMessage($networkSIPStatusMessage = null)
    {
        $this->networkSIPStatusMessage = ($networkSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $networkSIPStatusMessage
             : new SIPStatusMessage($networkSIPStatusMessage);
    }

    /**
     * A text parameter appended to the SIP status line.
     */
    public function getNetworkSIPStatusMessage()
    {
        return (!$this->networkSIPStatusMessage) ?: $this->networkSIPStatusMessage->getValue();
    }

    /**
     * The possible range values for Q850 Cause Value.
     */
    public function setQ850CauseValue($q850CauseValue = null)
    {
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
    }

    /**
     * The possible range values for Q850 Cause Value.
     */
    public function getQ850CauseValue()
    {
        return (!$this->q850CauseValue) ?: $this->q850CauseValue->getValue();
    }

    /**
     * A text parameter appended to the Reason header to explain the Q850 cause value
     */
    public function setQ850Text($q850Text = null)
    {
        $this->q850Text = ($q850Text InstanceOf Q850Text)
             ? $q850Text
             : new Q850Text($q850Text);
    }

    /**
     * A text parameter appended to the Reason header to explain the Q850 cause value
     */
    public function getQ850Text()
    {
        return (!$this->q850Text) ?: $this->q850Text->getValue();
    }

    /**
     * Audio or video treatment file name.
     */
    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile = null)
    {
        $this->accessTreatmentAudioFile = ($accessTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentAudioFile
             : new MediaTreatmentFileName($accessTreatmentAudioFile);
    }

    /**
     * Audio or video treatment file name.
     */
    public function getAccessTreatmentAudioFile()
    {
        return (!$this->accessTreatmentAudioFile) ?: $this->accessTreatmentAudioFile->getValue();
    }

    /**
     * Audio or video treatment file name.
     */
    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile = null)
    {
        $this->accessTreatmentVideoFile = ($accessTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentVideoFile
             : new MediaTreatmentFileName($accessTreatmentVideoFile);
    }

    /**
     * Audio or video treatment file name.
     */
    public function getAccessTreatmentVideoFile()
    {
        return (!$this->accessTreatmentVideoFile) ?: $this->accessTreatmentVideoFile->getValue();
    }

    /**
     * Audio or video treatment file name.
     */
    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile = null)
    {
        $this->networkTreatmentAudioFile = ($networkTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentAudioFile
             : new MediaTreatmentFileName($networkTreatmentAudioFile);
    }

    /**
     * Audio or video treatment file name.
     */
    public function getNetworkTreatmentAudioFile()
    {
        return (!$this->networkTreatmentAudioFile) ?: $this->networkTreatmentAudioFile->getValue();
    }

    /**
     * Audio or video treatment file name.
     */
    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile = null)
    {
        $this->networkTreatmentVideoFile = ($networkTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentVideoFile
             : new MediaTreatmentFileName($networkTreatmentVideoFile);
    }

    /**
     * Audio or video treatment file name.
     */
    public function getNetworkTreatmentVideoFile()
    {
        return (!$this->networkTreatmentVideoFile) ?: $this->networkTreatmentVideoFile->getValue();
    }

    /**
     * The string value for termination cause
     */
    public function setCdrTerminationCause($cdrTerminationCause = null)
    {
        $this->cdrTerminationCause = ($cdrTerminationCause InstanceOf CDRTerminationCause)
             ? $cdrTerminationCause
             : new CDRTerminationCause($cdrTerminationCause);
    }

    /**
     * The string value for termination cause
     */
    public function getCdrTerminationCause()
    {
        return (!$this->cdrTerminationCause) ?: $this->cdrTerminationCause->getValue();
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        $this->routeAdvance = (boolean) $routeAdvance;
    }

    /**
     * 
     */
    public function getRouteAdvance()
    {
        return (!$this->routeAdvance) ?: $this->routeAdvance;
    }

    /**
     * Possible values for the protocol-neutral internal release cause.
     */
    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause16)
             ? $internalReleaseCause
             : new InternalReleaseCause16($internalReleaseCause);
    }

    /**
     * Possible values for the protocol-neutral internal release cause.
     */
    public function getInternalReleaseCause()
    {
        return (!$this->internalReleaseCause) ?: $this->internalReleaseCause->getValue();
    }

    /**
     * 
     */
    public function setAccessSendReasonHeader($accessSendReasonHeader = null)
    {
        $this->accessSendReasonHeader = (boolean) $accessSendReasonHeader;
    }

    /**
     * 
     */
    public function getAccessSendReasonHeader()
    {
        return (!$this->accessSendReasonHeader) ?: $this->accessSendReasonHeader;
    }

    /**
     * 
     */
    public function setNetworkSendReasonHeader($networkSendReasonHeader = null)
    {
        $this->networkSendReasonHeader = (boolean) $networkSendReasonHeader;
    }

    /**
     * 
     */
    public function getNetworkSendReasonHeader()
    {
        return (!$this->networkSendReasonHeader) ?: $this->networkSendReasonHeader;
    }
}
