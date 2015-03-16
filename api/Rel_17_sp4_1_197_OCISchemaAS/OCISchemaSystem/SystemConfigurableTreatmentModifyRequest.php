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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850CauseValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850Text;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the fields for a configurable treatment.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemConfigurableTreatmentModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemConfigurableTreatmentModifyRequest';
    protected $treatmentId;
    protected $chargeIndicator;
    protected $description;
    protected $accessSIPStatusCode;
    protected $accessSIPStatusMessage;
    protected $networkSIPStatusCode;
    protected $networkSIPStatusMessage;
    protected $q850CauseValue;
    protected $q850Text;
    protected $accessTreatmentAudioFile;
    protected $accessTreatmentVideoFile;
    protected $networkTreatmentAudioFile;
    protected $networkTreatmentVideoFile;
    protected $cdrTerminationCause;
    protected $routeAdvance;
    protected $internalReleaseCause;
    protected $accessSendReasonHeader;
    protected $networkSendReasonHeader;

    public function __construct(
         $treatmentId = '',
         $chargeIndicator = null,
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
        $this->treatmentId->setElementName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId $treatmentId
     */
    public function getTreatmentId()
    {
        return ($this->treatmentId)
            ? $this->treatmentId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setChargeIndicator($chargeIndicator = null)
    {
        $this->chargeIndicator = ($chargeIndicator InstanceOf ChargeIndicator)
             ? $chargeIndicator
             : new ChargeIndicator($chargeIndicator);
        $this->chargeIndicator->setElementName('chargeIndicator');
        return $this;
    }

    /**
     * 
     * @return ChargeIndicator $chargeIndicator
     */
    public function getChargeIndicator()
    {
        return ($this->chargeIndicator)
            ? $this->chargeIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ConfigurableTreatmentDescription)
             ? $description
             : new ConfigurableTreatmentDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return ConfigurableTreatmentDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessSIPStatusCode($accessSIPStatusCode = null)
    {
        $this->accessSIPStatusCode = ($accessSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $accessSIPStatusCode
             : new SIPFailureStatusCode($accessSIPStatusCode);
        $this->accessSIPStatusCode->setElementName('accessSIPStatusCode');
        return $this;
    }

    /**
     * 
     * @return SIPFailureStatusCode $accessSIPStatusCode
     */
    public function getAccessSIPStatusCode()
    {
        return ($this->accessSIPStatusCode)
            ? $this->accessSIPStatusCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessSIPStatusMessage($accessSIPStatusMessage = null)
    {
        $this->accessSIPStatusMessage = ($accessSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $accessSIPStatusMessage
             : new SIPStatusMessage($accessSIPStatusMessage);
        $this->accessSIPStatusMessage->setElementName('accessSIPStatusMessage');
        return $this;
    }

    /**
     * 
     * @return SIPStatusMessage $accessSIPStatusMessage
     */
    public function getAccessSIPStatusMessage()
    {
        return ($this->accessSIPStatusMessage)
            ? $this->accessSIPStatusMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkSIPStatusCode($networkSIPStatusCode = null)
    {
        $this->networkSIPStatusCode = ($networkSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $networkSIPStatusCode
             : new SIPFailureStatusCode($networkSIPStatusCode);
        $this->networkSIPStatusCode->setElementName('networkSIPStatusCode');
        return $this;
    }

    /**
     * 
     * @return SIPFailureStatusCode $networkSIPStatusCode
     */
    public function getNetworkSIPStatusCode()
    {
        return ($this->networkSIPStatusCode)
            ? $this->networkSIPStatusCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkSIPStatusMessage($networkSIPStatusMessage = null)
    {
        $this->networkSIPStatusMessage = ($networkSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $networkSIPStatusMessage
             : new SIPStatusMessage($networkSIPStatusMessage);
        $this->networkSIPStatusMessage->setElementName('networkSIPStatusMessage');
        return $this;
    }

    /**
     * 
     * @return SIPStatusMessage $networkSIPStatusMessage
     */
    public function getNetworkSIPStatusMessage()
    {
        return ($this->networkSIPStatusMessage)
            ? $this->networkSIPStatusMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setQ850CauseValue($q850CauseValue = null)
    {
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
        $this->q850CauseValue->setElementName('q850CauseValue');
        return $this;
    }

    /**
     * 
     * @return Q850CauseValue $q850CauseValue
     */
    public function getQ850CauseValue()
    {
        return ($this->q850CauseValue)
            ? $this->q850CauseValue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setQ850Text($q850Text = null)
    {
        $this->q850Text = ($q850Text InstanceOf Q850Text)
             ? $q850Text
             : new Q850Text($q850Text);
        $this->q850Text->setElementName('q850Text');
        return $this;
    }

    /**
     * 
     * @return Q850Text $q850Text
     */
    public function getQ850Text()
    {
        return ($this->q850Text)
            ? $this->q850Text->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile = null)
    {
        $this->accessTreatmentAudioFile = ($accessTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentAudioFile
             : new MediaTreatmentFileName($accessTreatmentAudioFile);
        $this->accessTreatmentAudioFile->setElementName('accessTreatmentAudioFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName $accessTreatmentAudioFile
     */
    public function getAccessTreatmentAudioFile()
    {
        return ($this->accessTreatmentAudioFile)
            ? $this->accessTreatmentAudioFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile = null)
    {
        $this->accessTreatmentVideoFile = ($accessTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentVideoFile
             : new MediaTreatmentFileName($accessTreatmentVideoFile);
        $this->accessTreatmentVideoFile->setElementName('accessTreatmentVideoFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName $accessTreatmentVideoFile
     */
    public function getAccessTreatmentVideoFile()
    {
        return ($this->accessTreatmentVideoFile)
            ? $this->accessTreatmentVideoFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile = null)
    {
        $this->networkTreatmentAudioFile = ($networkTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentAudioFile
             : new MediaTreatmentFileName($networkTreatmentAudioFile);
        $this->networkTreatmentAudioFile->setElementName('networkTreatmentAudioFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName $networkTreatmentAudioFile
     */
    public function getNetworkTreatmentAudioFile()
    {
        return ($this->networkTreatmentAudioFile)
            ? $this->networkTreatmentAudioFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile = null)
    {
        $this->networkTreatmentVideoFile = ($networkTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentVideoFile
             : new MediaTreatmentFileName($networkTreatmentVideoFile);
        $this->networkTreatmentVideoFile->setElementName('networkTreatmentVideoFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName $networkTreatmentVideoFile
     */
    public function getNetworkTreatmentVideoFile()
    {
        return ($this->networkTreatmentVideoFile)
            ? $this->networkTreatmentVideoFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCdrTerminationCause($cdrTerminationCause = null)
    {
        $this->cdrTerminationCause = ($cdrTerminationCause InstanceOf CDRTerminationCause)
             ? $cdrTerminationCause
             : new CDRTerminationCause($cdrTerminationCause);
        $this->cdrTerminationCause->setElementName('cdrTerminationCause');
        return $this;
    }

    /**
     * 
     * @return CDRTerminationCause $cdrTerminationCause
     */
    public function getCdrTerminationCause()
    {
        return ($this->cdrTerminationCause)
            ? $this->cdrTerminationCause->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        $this->routeAdvance = new PrimitiveType($routeAdvance);
        $this->routeAdvance->setElementName('routeAdvance');
        return $this;
    }

    /**
     * 
     * @return boolean $routeAdvance
     */
    public function getRouteAdvance()
    {
        return ($this->routeAdvance)
            ? $this->routeAdvance->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause16)
             ? $internalReleaseCause
             : new InternalReleaseCause16($internalReleaseCause);
        $this->internalReleaseCause->setElementName('internalReleaseCause');
        return $this;
    }

    /**
     * 
     * @return InternalReleaseCause16 $internalReleaseCause
     */
    public function getInternalReleaseCause()
    {
        return ($this->internalReleaseCause)
            ? $this->internalReleaseCause->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessSendReasonHeader($accessSendReasonHeader = null)
    {
        $this->accessSendReasonHeader = new PrimitiveType($accessSendReasonHeader);
        $this->accessSendReasonHeader->setElementName('accessSendReasonHeader');
        return $this;
    }

    /**
     * 
     * @return boolean $accessSendReasonHeader
     */
    public function getAccessSendReasonHeader()
    {
        return ($this->accessSendReasonHeader)
            ? $this->accessSendReasonHeader->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkSendReasonHeader($networkSendReasonHeader = null)
    {
        $this->networkSendReasonHeader = new PrimitiveType($networkSendReasonHeader);
        $this->networkSendReasonHeader->setElementName('networkSendReasonHeader');
        return $this;
    }

    /**
     * 
     * @return boolean $networkSendReasonHeader
     */
    public function getNetworkSendReasonHeader()
    {
        return ($this->networkSendReasonHeader)
            ? $this->networkSendReasonHeader->getElementValue()
            : null;
    }
}
