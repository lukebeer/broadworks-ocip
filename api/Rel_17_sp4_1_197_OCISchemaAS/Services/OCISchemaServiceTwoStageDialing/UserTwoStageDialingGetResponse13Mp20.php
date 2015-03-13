<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserTwoStageDialingGetRequest13Mp20.
 */
class UserTwoStageDialingGetResponse13Mp20 extends ComplexType implements ComplexInterface
{
    public    $name                             = 'UserTwoStageDialingGetResponse13Mp20';
    protected $isActive                         = null;
    protected $allowActivationWithUserAddresses = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\UserTwoStageDialingGetResponse13Mp20 $response
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
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses = null)
    {
        if (!$allowActivationWithUserAddresses) return $this;
        $this->allowActivationWithUserAddresses = new PrimitiveType($allowActivationWithUserAddresses);
        $this->allowActivationWithUserAddresses->setName('allowActivationWithUserAddresses');
        return $this;
    }

    /**
     * 
     * @return boolean $allowActivationWithUserAddresses
     */
    public function getAllowActivationWithUserAddresses()
    {
        return $this->allowActivationWithUserAddresses->getValue();
    }
}
