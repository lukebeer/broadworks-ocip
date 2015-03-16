<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ConfigurableTreatmentDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\InternalReleaseCause;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaTreatmentFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPFailureStatusCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CDRTerminationCause;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPStatusMessage;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargeIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850CauseValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\Q850Text;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemConfigurableTreatmentGetRequest.
 *             The response contains the treatment configurable information.
 *             Replaced By: SystemConfigurableTreatmentGetResponse16
 */
class SystemConfigurableTreatmentGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemConfigurableTreatmentGetResponse';
    protected $description;
    protected $chargeIndicator;
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

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemConfigurableTreatmentGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ConfigurableTreatmentDescription)
             ? $description
             : new ConfigurableTreatmentDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return ConfigurableTreatmentDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setChargeIndicator($chargeIndicator = null)
    {
        $this->chargeIndicator = ($chargeIndicator InstanceOf ChargeIndicator)
             ? $chargeIndicator
             : new ChargeIndicator($chargeIndicator);
        $this->chargeIndicator->setName('chargeIndicator');
        return $this;
    }

    /**
     * 
     * @return ChargeIndicator $chargeIndicator
     */
    public function getChargeIndicator()
    {
        return ($this->chargeIndicator) ? $this->chargeIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessSIPStatusCode($accessSIPStatusCode = null)
    {
        $this->accessSIPStatusCode = ($accessSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $accessSIPStatusCode
             : new SIPFailureStatusCode($accessSIPStatusCode);
        $this->accessSIPStatusCode->setName('accessSIPStatusCode');
        return $this;
    }

    /**
     * 
     * @return SIPFailureStatusCode $accessSIPStatusCode
     */
    public function getAccessSIPStatusCode()
    {
        return ($this->accessSIPStatusCode) ? $this->accessSIPStatusCode->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessSIPStatusMessage($accessSIPStatusMessage = null)
    {
        $this->accessSIPStatusMessage = ($accessSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $accessSIPStatusMessage
             : new SIPStatusMessage($accessSIPStatusMessage);
        $this->accessSIPStatusMessage->setName('accessSIPStatusMessage');
        return $this;
    }

    /**
     * 
     * @return SIPStatusMessage $accessSIPStatusMessage
     */
    public function getAccessSIPStatusMessage()
    {
        return ($this->accessSIPStatusMessage) ? $this->accessSIPStatusMessage->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkSIPStatusCode($networkSIPStatusCode = null)
    {
        $this->networkSIPStatusCode = ($networkSIPStatusCode InstanceOf SIPFailureStatusCode)
             ? $networkSIPStatusCode
             : new SIPFailureStatusCode($networkSIPStatusCode);
        $this->networkSIPStatusCode->setName('networkSIPStatusCode');
        return $this;
    }

    /**
     * 
     * @return SIPFailureStatusCode $networkSIPStatusCode
     */
    public function getNetworkSIPStatusCode()
    {
        return ($this->networkSIPStatusCode) ? $this->networkSIPStatusCode->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkSIPStatusMessage($networkSIPStatusMessage = null)
    {
        $this->networkSIPStatusMessage = ($networkSIPStatusMessage InstanceOf SIPStatusMessage)
             ? $networkSIPStatusMessage
             : new SIPStatusMessage($networkSIPStatusMessage);
        $this->networkSIPStatusMessage->setName('networkSIPStatusMessage');
        return $this;
    }

    /**
     * 
     * @return SIPStatusMessage $networkSIPStatusMessage
     */
    public function getNetworkSIPStatusMessage()
    {
        return ($this->networkSIPStatusMessage) ? $this->networkSIPStatusMessage->getValue() : null;
    }

    /**
     * 
     */
    public function setQ850CauseValue($q850CauseValue = null)
    {
        $this->q850CauseValue = ($q850CauseValue InstanceOf Q850CauseValue)
             ? $q850CauseValue
             : new Q850CauseValue($q850CauseValue);
        $this->q850CauseValue->setName('q850CauseValue');
        return $this;
    }

    /**
     * 
     * @return Q850CauseValue $q850CauseValue
     */
    public function getQ850CauseValue()
    {
        return ($this->q850CauseValue) ? $this->q850CauseValue->getValue() : null;
    }

    /**
     * 
     */
    public function setQ850Text($q850Text = null)
    {
        $this->q850Text = ($q850Text InstanceOf Q850Text)
             ? $q850Text
             : new Q850Text($q850Text);
        $this->q850Text->setName('q850Text');
        return $this;
    }

    /**
     * 
     * @return Q850Text $q850Text
     */
    public function getQ850Text()
    {
        return ($this->q850Text) ? $this->q850Text->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessTreatmentAudioFile($accessTreatmentAudioFile = null)
    {
        $this->accessTreatmentAudioFile = ($accessTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentAudioFile
             : new MediaTreatmentFileName($accessTreatmentAudioFile);
        $this->accessTreatmentAudioFile->setName('accessTreatmentAudioFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName $accessTreatmentAudioFile
     */
    public function getAccessTreatmentAudioFile()
    {
        return ($this->accessTreatmentAudioFile) ? $this->accessTreatmentAudioFile->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessTreatmentVideoFile($accessTreatmentVideoFile = null)
    {
        $this->accessTreatmentVideoFile = ($accessTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $accessTreatmentVideoFile
             : new MediaTreatmentFileName($accessTreatmentVideoFile);
        $this->accessTreatmentVideoFile->setName('accessTreatmentVideoFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName $accessTreatmentVideoFile
     */
    public function getAccessTreatmentVideoFile()
    {
        return ($this->accessTreatmentVideoFile) ? $this->accessTreatmentVideoFile->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkTreatmentAudioFile($networkTreatmentAudioFile = null)
    {
        $this->networkTreatmentAudioFile = ($networkTreatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentAudioFile
             : new MediaTreatmentFileName($networkTreatmentAudioFile);
        $this->networkTreatmentAudioFile->setName('networkTreatmentAudioFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName $networkTreatmentAudioFile
     */
    public function getNetworkTreatmentAudioFile()
    {
        return ($this->networkTreatmentAudioFile) ? $this->networkTreatmentAudioFile->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkTreatmentVideoFile($networkTreatmentVideoFile = null)
    {
        $this->networkTreatmentVideoFile = ($networkTreatmentVideoFile InstanceOf MediaTreatmentFileName)
             ? $networkTreatmentVideoFile
             : new MediaTreatmentFileName($networkTreatmentVideoFile);
        $this->networkTreatmentVideoFile->setName('networkTreatmentVideoFile');
        return $this;
    }

    /**
     * 
     * @return MediaTreatmentFileName $networkTreatmentVideoFile
     */
    public function getNetworkTreatmentVideoFile()
    {
        return ($this->networkTreatmentVideoFile) ? $this->networkTreatmentVideoFile->getValue() : null;
    }

    /**
     * 
     */
    public function setCdrTerminationCause($cdrTerminationCause = null)
    {
        $this->cdrTerminationCause = ($cdrTerminationCause InstanceOf CDRTerminationCause)
             ? $cdrTerminationCause
             : new CDRTerminationCause($cdrTerminationCause);
        $this->cdrTerminationCause->setName('cdrTerminationCause');
        return $this;
    }

    /**
     * 
     * @return CDRTerminationCause $cdrTerminationCause
     */
    public function getCdrTerminationCause()
    {
        return ($this->cdrTerminationCause) ? $this->cdrTerminationCause->getValue() : null;
    }

    /**
     * 
     */
    public function setRouteAdvance($routeAdvance = null)
    {
        $this->routeAdvance = new PrimitiveType($routeAdvance);
        $this->routeAdvance->setName('routeAdvance');
        return $this;
    }

    /**
     * 
     * @return boolean $routeAdvance
     */
    public function getRouteAdvance()
    {
        return ($this->routeAdvance) ? $this->routeAdvance->getValue() : null;
    }

    /**
     * 
     */
    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause)
             ? $internalReleaseCause
             : new InternalReleaseCause($internalReleaseCause);
        $this->internalReleaseCause->setName('internalReleaseCause');
        return $this;
    }

    /**
     * 
     * @return InternalReleaseCause $internalReleaseCause
     */
    public function getInternalReleaseCause()
    {
        return ($this->internalReleaseCause) ? $this->internalReleaseCause->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessSendReasonHeader($accessSendReasonHeader = null)
    {
        $this->accessSendReasonHeader = new PrimitiveType($accessSendReasonHeader);
        $this->accessSendReasonHeader->setName('accessSendReasonHeader');
        return $this;
    }

    /**
     * 
     * @return boolean $accessSendReasonHeader
     */
    public function getAccessSendReasonHeader()
    {
        return ($this->accessSendReasonHeader) ? $this->accessSendReasonHeader->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkSendReasonHeader($networkSendReasonHeader = null)
    {
        $this->networkSendReasonHeader = new PrimitiveType($networkSendReasonHeader);
        $this->networkSendReasonHeader->setName('networkSendReasonHeader');
        return $this;
    }

    /**
     * 
     * @return boolean $networkSendReasonHeader
     */
    public function getNetworkSendReasonHeader()
    {
        return ($this->networkSendReasonHeader) ? $this->networkSendReasonHeader->getValue() : null;
    }
}
