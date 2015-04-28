<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemDialPlanPolicyGetRequest
 *         
 *         Replaced by: SystemDialPlanPolicyGetResponse17
 */
class SystemDialPlanPolicyGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDialPlanPolicyGetResponse';
    protected $requiresAccessCodeForPublicCalls;
    protected $allowE164PublicCalls;
    protected $publicDigitMap;
    protected $privateDigitMap;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemDialPlanPolicyGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls = null)
    {
        $this->requiresAccessCodeForPublicCalls = new PrimitiveType($requiresAccessCodeForPublicCalls);
        $this->requiresAccessCodeForPublicCalls->setElementName('requiresAccessCodeForPublicCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $requiresAccessCodeForPublicCalls
     */
    public function getRequiresAccessCodeForPublicCalls()
    {
        return ($this->requiresAccessCodeForPublicCalls)
            ? $this->requiresAccessCodeForPublicCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowE164PublicCalls($allowE164PublicCalls = null)
    {
        $this->allowE164PublicCalls = new PrimitiveType($allowE164PublicCalls);
        $this->allowE164PublicCalls->setElementName('allowE164PublicCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowE164PublicCalls
     */
    public function getAllowE164PublicCalls()
    {
        return ($this->allowE164PublicCalls)
            ? $this->allowE164PublicCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
        $this->publicDigitMap->setElementName('publicDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $publicDigitMap
     */
    public function getPublicDigitMap()
    {
        return ($this->publicDigitMap)
            ? $this->publicDigitMap->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
        $this->privateDigitMap->setElementName('privateDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $privateDigitMap
     */
    public function getPrivateDigitMap()
    {
        return ($this->privateDigitMap)
            ? $this->privateDigitMap->getElementValue()
            : null;
    }
}
