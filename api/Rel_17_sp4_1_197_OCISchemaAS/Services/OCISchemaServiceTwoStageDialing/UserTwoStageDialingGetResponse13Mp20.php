<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing\UserTwoStageDialingGetResponse13Mp20;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserTwoStageDialingGetRequest13Mp20.
 */
class UserTwoStageDialingGetResponse13Mp20 extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $isActive                         = null;
    protected $allowActivationWithUserAddresses = null;

    /**
     * @return UserTwoStageDialingGetResponse13Mp20
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
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * 
     */
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses = null)
    {
        $this->allowActivationWithUserAddresses = (boolean) $allowActivationWithUserAddresses;
    }

    /**
     * 
     */
    public function getAllowActivationWithUserAddresses()
    {
        return (!$this->allowActivationWithUserAddresses) ?: $this->allowActivationWithUserAddresses;
    }
}
