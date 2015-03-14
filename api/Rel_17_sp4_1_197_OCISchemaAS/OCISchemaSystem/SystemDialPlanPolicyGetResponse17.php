<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDialPlanPolicyGetRequest17
 */
class SystemDialPlanPolicyGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                      = 'SystemDialPlanPolicyGetResponse17';
    protected $requiresAccessCodeForPublicCalls          = null;
    protected $allowE164PublicCalls                      = null;
    protected $preferE164NumberFormatForCallbackServices = null;
    protected $publicDigitMap                            = null;
    protected $privateDigitMap                           = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDialPlanPolicyGetResponse17 $response
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
        if (!$requiresAccessCodeForPublicCalls) return $this;
        $this->requiresAccessCodeForPublicCalls = new PrimitiveType($requiresAccessCodeForPublicCalls);
        $this->requiresAccessCodeForPublicCalls->setName('requiresAccessCodeForPublicCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $requiresAccessCodeForPublicCalls
     */
    public function getRequiresAccessCodeForPublicCalls()
    {
        return $this->requiresAccessCodeForPublicCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowE164PublicCalls($allowE164PublicCalls = null)
    {
        if (!$allowE164PublicCalls) return $this;
        $this->allowE164PublicCalls = new PrimitiveType($allowE164PublicCalls);
        $this->allowE164PublicCalls->setName('allowE164PublicCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowE164PublicCalls
     */
    public function getAllowE164PublicCalls()
    {
        return $this->allowE164PublicCalls->getValue();
    }

    /**
     * 
     */
    public function setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices = null)
    {
        if (!$preferE164NumberFormatForCallbackServices) return $this;
        $this->preferE164NumberFormatForCallbackServices = new PrimitiveType($preferE164NumberFormatForCallbackServices);
        $this->preferE164NumberFormatForCallbackServices->setName('preferE164NumberFormatForCallbackServices');
        return $this;
    }

    /**
     * 
     * @return boolean $preferE164NumberFormatForCallbackServices
     */
    public function getPreferE164NumberFormatForCallbackServices()
    {
        return $this->preferE164NumberFormatForCallbackServices->getValue();
    }

    /**
     * 
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        if (!$publicDigitMap) return $this;
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
        $this->publicDigitMap->setName('publicDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $publicDigitMap
     */
    public function getPublicDigitMap()
    {
        return $this->publicDigitMap->getValue();
    }

    /**
     * 
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        if (!$privateDigitMap) return $this;
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
        $this->privateDigitMap->setName('privateDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $privateDigitMap
     */
    public function getPrivateDigitMap()
    {
        return $this->privateDigitMap->getValue();
    }
}
