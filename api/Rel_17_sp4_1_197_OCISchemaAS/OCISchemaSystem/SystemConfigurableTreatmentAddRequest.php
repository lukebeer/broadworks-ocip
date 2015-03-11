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
 * Add a configurable treatment.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemConfigurableTreatmentAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = 'SystemConfigurableTreatmentAddRequest';
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
     * @return 
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
        if (!$treatmentId) return $this;
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
        $this->treatmentId->setName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId
     */
    public function getTreatmentId()
    {
        return $this->treatmentId->getValue();
    }

    /**
     * 
     */
    public function setChargeIndicator($chargeIndicator = null)
    {
        if (!$chargeIndicator) return $this;
        $this->chargeIndicator = ($chargeIndicator InstanceOf ChargeIndicator)
             ? $chargeIndicator
             : new ChargeIndicator($chargeIndicator);
        $this->chargeIndicator->setName('chargeIndicator');
        return $this;
    }

    /**
     * 
     * @return ChargeIndicator
     */
    public function getChargeIndicator()
    {
        return $this->chargeIndicator->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf ConfigurableTreatmentDescription)
             ? $description
             : new ConfigurableTreatmentDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return ConfigurableTreatmentDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setAccessSIPStatusCode($accessSIPStatusCode = null)
    {
        if (!$accessSIPStatusCode) return $this;
        $this->accessSIPStatusCode = ($accessSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $accessSIPStatusCode
             : new SIPFailureStatusCode($accessSIPStatusCode);
        $this->accessSIPStatusCode->setName('accessSIPStatusCode');
        return $this;
    }

    /**
     * 
     * @return SIPFailureStatusCode
     */
    public function getAccessSIPStatusCode()
    {
        return $this->accessSIPStatusCode->getValue();
    }

    /**
     * 
     */
    public function setAccessSIPStatusMessage($accessSIPStatusMessage = null)
    {
        if (!$accessSIPStatusMessage) return $this;
        $this->accessSIPStatusMessage = ($accessSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $accessSIPStatusMessage
             : new SIPStatusMessage($accessSIPStatusMessage);
        $this->accessSIPStatusMessage->setName('accessSIPStatusMessage');
        return $this;
    }

    /**
     * 
     * @return SIPStatusMessage
     */
    public function getAccessSIPStatusMessage()
    {
        return $this->accessSIPStatusMessage->getValue();
    }

    /**
     * 
     */
    public function setNetworkSIPStatusCode($networkSIPStatusCode = null)
    {
        if (!$networkSIPStatusCode) return $this;
        $this->networkSIPStatusCode = ($networkSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $networkSIPStatusCode
             : new SIPFailureStatusCode($networkSIPStatusCode);
        $this->networkSIPStatusCode->setName('networkSIPStatusCode');
        return $this;
    }

    /**
     * 
     * @return SIPFailureStatusCode
     */
    public function getNetworkSIPStatusCode()
    {
        return $this->networkSIPStatusCode->getValue();
    }

    /**
     * 
     */
    public function setNetworkSIPStatusMessage($networkSIPStatusMessage = null)
    {
        if (!$networkSIPStatusMessage) return $this;
        $this->networkSIPStatusMessage = ($networkSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $networkSIPStatusMessage
             : new SIPStatusMessage($networkSIPStatusMessage);
        $this->networkSIPStatusMessage->setName('networkSIPStatusMessage');
        return $this;
    }

    /**
     * 
     * @return SIPStatusMessage
     */
    public function getNetworkSIPStatusMessage()
    {
        return $this->networkSIPStatusMessage->getValue();
    }

    /**
     * 
     */
    public function setQ850CauseValue($q850CauseValue = null)
    {
        if (!$q850CauseValue) return $this;
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
        $this->q850CauseValue->setName('q850CauseValue');
        return $this;
    }

    /**
     * 
     * @return Q850CauseValue
     */
    public function getQ850CauseValue()
    {
        return $this->q850CauseValue->getValue();
    }

    /**
     * 
     */
    public function setQ850Text($q850Text = null)
    {
        if (!$q850Text) return $this;
        $this->q850Text = ($q850Text InstanceOf Q850Text)
             ? $q850Text
             : new Q850Text($q850Text);
        $this->q850Text->setName('q850Text');
        return $this;
    }

    /**
     * 
     * @return Q850Text
     */
    public function getQ850Text()
    {
        return $this->q850Text->getValue();
    }

    /**
     * 
     */
    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile = null)
    {
        if (!$accessTreatmentAudioFile) return $this;
        $this->accessTreatmentAudioFile = ($accessTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentAudioFile
             : new MediaTreatmentFileName($accessTreatmentAudioFile);
        $this->accessTreatmentAudioFile->setName('accessTreatmentAudioFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName
     */
    public function getAccessTreatmentAudioFile()
    {
        return $this->accessTreatmentAudioFile->getValue();
    }

    /**
     * 
     */
    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile = null)
    {
        if (!$accessTreatmentVideoFile) return $this;
        $this->accessTreatmentVideoFile = ($accessTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentVideoFile
             : new MediaTreatmentFileName($accessTreatmentVideoFile);
        $this->accessTreatmentVideoFile->setName('accessTreatmentVideoFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName
     */
    public function getAccessTreatmentVideoFile()
    {
        return $this->accessTreatmentVideoFile->getValue();
    }

    /**
     * 
     */
    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile = null)
    {
        if (!$networkTreatmentAudioFile) return $this;
        $this->networkTreatmentAudioFile = ($networkTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentAudioFile
             : new MediaTreatmentFileName($networkTreatmentAudioFile);
        $this->networkTreatmentAudioFile->setName('networkTreatmentAudioFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName
     */
    public function getNetworkTreatmentAudioFile()
    {
        return $this->networkTreatmentAudioFile->getValue();
    }

    /**
     * 
     */
    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile = null)
    {
        if (!$networkTreatmentVideoFile) return $this;
        $this->networkTreatmentVideoFile = ($networkTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentVideoFile
             : new MediaTreatmentFileName($networkTreatmentVideoFile);
        $this->networkTreatmentVideoFile->setName('networkTreatmentVideoFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName
     */
    public function getNetworkTreatmentVideoFile()
    {
        return $this->networkTreatmentVideoFile->getValue();
    }

    /**
     * 
     */
    public function setCdrTerminationCause($cdrTerminationCause = null)
    {
        if (!$cdrTerminationCause) return $this;
        $this->cdrTerminationCause = ($cdrTerminationCause InstanceOf CDRTerminationCause)
             ? $cdrTerminationCause
             : new CDRTerminationCause($cdrTerminationCause);
        $this->cdrTerminationCause->setName('cdrTerminationCause');
        return $this;
    }

    /**
     * 
     * @return CDRTerminationCause
     */
    public function getCdrTerminationCause()
    {
        return $this->cdrTerminationCause->getValue();
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        if (!$routeAdvance) return $this;
        $this->routeAdvance = new PrimitiveType($routeAdvance);
        $this->routeAdvance->setName('routeAdvance');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRouteAdvance()
    {
        return $this->routeAdvance->getValue();
    }

    /**
     * 
     */
    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        if (!$internalReleaseCause) return $this;
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause16)
             ? $internalReleaseCause
             : new InternalReleaseCause16($internalReleaseCause);
        $this->internalReleaseCause->setName('internalReleaseCause');
        return $this;
    }

    /**
     * 
     * @return InternalReleaseCause16
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause->getValue();
    }

    /**
     * 
     */
    public function setAccessSendReasonHeader($accessSendReasonHeader = null)
    {
        if (!$accessSendReasonHeader) return $this;
        $this->accessSendReasonHeader = new PrimitiveType($accessSendReasonHeader);
        $this->accessSendReasonHeader->setName('accessSendReasonHeader');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAccessSendReasonHeader()
    {
        return $this->accessSendReasonHeader->getValue();
    }

    /**
     * 
     */
    public function setNetworkSendReasonHeader($networkSendReasonHeader = null)
    {
        if (!$networkSendReasonHeader) return $this;
        $this->networkSendReasonHeader = new PrimitiveType($networkSendReasonHeader);
        $this->networkSendReasonHeader->setName('networkSendReasonHeader');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getNetworkSendReasonHeader()
    {
        return $this->networkSendReasonHeader->getValue();
    }
}
