<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCodeDescription;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderDialPlanPolicyGetAccessCodeRequest
 */
class ServiceProviderDialPlanPolicyGetAccessCodeResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderDialPlanPolicyGetAccessCodeResponse';
    protected $includeCodeForNetworkTranslationsAndRouting;
    protected $includeCodeForScreeningServices;
    protected $enableSecondaryDialTone;
    protected $description;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDialPlanPolicyGetAccessCodeResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIncludeCodeForNetworkTranslationsAndRouting($includeCodeForNetworkTranslationsAndRouting = null)
    {
        $this->includeCodeForNetworkTranslationsAndRouting = new PrimitiveType($includeCodeForNetworkTranslationsAndRouting);
        $this->includeCodeForNetworkTranslationsAndRouting->setElementName('includeCodeForNetworkTranslationsAndRouting');
        return $this;
    }

    /**
     * 
     * @return boolean $includeCodeForNetworkTranslationsAndRouting
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return ($this->includeCodeForNetworkTranslationsAndRouting)
            ? $this->includeCodeForNetworkTranslationsAndRouting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices = null)
    {
        $this->includeCodeForScreeningServices = new PrimitiveType($includeCodeForScreeningServices);
        $this->includeCodeForScreeningServices->setElementName('includeCodeForScreeningServices');
        return $this;
    }

    /**
     * 
     * @return boolean $includeCodeForScreeningServices
     */
    public function getIncludeCodeForScreeningServices()
    {
        return ($this->includeCodeForScreeningServices)
            ? $this->includeCodeForScreeningServices->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone = null)
    {
        $this->enableSecondaryDialTone = new PrimitiveType($enableSecondaryDialTone);
        $this->enableSecondaryDialTone->setElementName('enableSecondaryDialTone');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSecondaryDialTone
     */
    public function getEnableSecondaryDialTone()
    {
        return ($this->enableSecondaryDialTone)
            ? $this->enableSecondaryDialTone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialPlanAccessCodeDescription)
             ? $description
             : new DialPlanAccessCodeDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return DialPlanAccessCodeDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
