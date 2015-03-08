<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserTwoStageDialingGetRequest13Mp20.
 */
class UserTwoStageDialingGetResponse13Mp20 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing\UserTwoStageDialingGetResponse13Mp20';
    public    $name                             = __CLASS__;
    protected $isActive                         = null;
    protected $allowActivationWithUserAddresses = null;


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
        return (!$this->isActive) ?: $this->isActive->getValue();
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
        return (!$this->allowActivationWithUserAddresses) ?: $this->allowActivationWithUserAddresses->getValue();
    }
}
