<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCodeDescription;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupDialPlanPolicyGetAccessCodeRequest
 */
class GroupDialPlanPolicyGetAccessCodeResponse extends ComplexType implements ComplexInterface
{
    public    $name                                        = 'GroupDialPlanPolicyGetAccessCodeResponse';
    protected $includeCodeForNetworkTranslationsAndRouting = null;
    protected $includeCodeForScreeningServices             = null;
    protected $enableSecondaryDialTone                     = null;
    protected $description                                 = null;

    /**
     * @return GroupDialPlanPolicyGetAccessCodeResponse
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
        if (!$includeCodeForNetworkTranslationsAndRouting) return $this;
        $this->includeCodeForNetworkTranslationsAndRouting = new PrimitiveType($includeCodeForNetworkTranslationsAndRouting);
        $this->includeCodeForNetworkTranslationsAndRouting->setName('includeCodeForNetworkTranslationsAndRouting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIncludeCodeForNetworkTranslationsAndRouting()
    {
        return $this->includeCodeForNetworkTranslationsAndRouting->getValue();
    }

    /**
     * 
     */
    public function setIncludeCodeForScreeningServices($includeCodeForScreeningServices = null)
    {
        if (!$includeCodeForScreeningServices) return $this;
        $this->includeCodeForScreeningServices = new PrimitiveType($includeCodeForScreeningServices);
        $this->includeCodeForScreeningServices->setName('includeCodeForScreeningServices');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIncludeCodeForScreeningServices()
    {
        return $this->includeCodeForScreeningServices->getValue();
    }

    /**
     * 
     */
    public function setEnableSecondaryDialTone($enableSecondaryDialTone = null)
    {
        if (!$enableSecondaryDialTone) return $this;
        $this->enableSecondaryDialTone = new PrimitiveType($enableSecondaryDialTone);
        $this->enableSecondaryDialTone->setName('enableSecondaryDialTone');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableSecondaryDialTone()
    {
        return $this->enableSecondaryDialTone->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf DialPlanAccessCodeDescription)
             ? $description
             : new DialPlanAccessCodeDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return DialPlanAccessCodeDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
