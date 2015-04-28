<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNNonMatchingE164NumberSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDefaultSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the enterprise voice VPN level data associated with voice VPN.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseVoiceVPNModifyRequest';
    protected $serviceProviderId;
    protected $isActive;
    protected $defaultSelection;
    protected $e164Selection;
    protected $usePhoneContext;

    public function __construct(
         $serviceProviderId = '',
         $isActive = null,
         $defaultSelection = null,
         $e164Selection = null,
         $usePhoneContext = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setIsActive($isActive);
        $this->setDefaultSelection($defaultSelection);
        $this->setE164Selection($e164Selection);
        $this->setUsePhoneContext($usePhoneContext);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultSelection($defaultSelection = null)
    {
        $this->defaultSelection = ($defaultSelection InstanceOf EnterpriseVoiceVPNDefaultSelection)
             ? $defaultSelection
             : new EnterpriseVoiceVPNDefaultSelection($defaultSelection);
        $this->defaultSelection->setElementName('defaultSelection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDefaultSelection $defaultSelection
     */
    public function getDefaultSelection()
    {
        return ($this->defaultSelection)
            ? $this->defaultSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setE164Selection($e164Selection = null)
    {
        $this->e164Selection = ($e164Selection InstanceOf EnterpriseVoiceVPNNonMatchingE164NumberSelection)
             ? $e164Selection
             : new EnterpriseVoiceVPNNonMatchingE164NumberSelection($e164Selection);
        $this->e164Selection->setElementName('e164Selection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNNonMatchingE164NumberSelection $e164Selection
     */
    public function getE164Selection()
    {
        return ($this->e164Selection)
            ? $this->e164Selection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUsePhoneContext($usePhoneContext = null)
    {
        $this->usePhoneContext = new PrimitiveType($usePhoneContext);
        $this->usePhoneContext->setElementName('usePhoneContext');
        return $this;
    }

    /**
     * 
     * @return boolean $usePhoneContext
     */
    public function getUsePhoneContext()
    {
        return ($this->usePhoneContext)
            ? $this->usePhoneContext->getElementValue()
            : null;
    }
}
