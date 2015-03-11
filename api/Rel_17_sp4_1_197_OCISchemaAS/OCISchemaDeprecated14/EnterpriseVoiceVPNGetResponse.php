<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNNonMatchingE164NumberSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDefaultSelection;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseVoiceVPNGetRequest.
 *         Replaced By: EnterpriseVoiceVPNGetResponse14sp3
 */
class EnterpriseVoiceVPNGetResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'EnterpriseVoiceVPNGetResponse';
    protected $isActive         = null;
    protected $defaultSelection = null;
    protected $e164Selection    = null;

    /**
     * @return EnterpriseVoiceVPNGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setDefaultSelection($defaultSelection = null)
    {
        if (!$defaultSelection) return $this;
        $this->defaultSelection = ($defaultSelection InstanceOf EnterpriseVoiceVPNDefaultSelection)
             ? $defaultSelection
             : new EnterpriseVoiceVPNDefaultSelection($defaultSelection);
        $this->defaultSelection->setName('defaultSelection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDefaultSelection
     */
    public function getDefaultSelection()
    {
        return $this->defaultSelection->getValue();
    }

    /**
     * 
     */
    public function setE164Selection($e164Selection = null)
    {
        if (!$e164Selection) return $this;
        $this->e164Selection = ($e164Selection InstanceOf EnterpriseVoiceVPNNonMatchingE164NumberSelection)
             ? $e164Selection
             : new EnterpriseVoiceVPNNonMatchingE164NumberSelection($e164Selection);
        $this->e164Selection->setName('e164Selection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNNonMatchingE164NumberSelection
     */
    public function getE164Selection()
    {
        return $this->e164Selection->getValue();
    }
}
