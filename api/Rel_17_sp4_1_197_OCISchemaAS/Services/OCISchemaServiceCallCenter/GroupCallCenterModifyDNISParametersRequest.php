<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\DNISPromoteCallPrioritySeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the setting that are configured for all the DNIS in a Call Center.
 *       The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyDNISParametersRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $serviceUserId                       = null;
    protected $displayDNISNumber                   = null;
    protected $displayDNISName                     = null;
    protected $promoteCallsFromPriority1to0        = null;
    protected $promoteCallsFromPriority2to1        = null;
    protected $promoteCallsFromPriority3to2        = null;
    protected $promoteCallsFromPriority1to0Seconds = null;
    protected $promoteCallsFromPriority2to1Seconds = null;
    protected $promoteCallsFromPriority3to2Seconds = null;

    public function __construct(
         $serviceUserId,
         $displayDNISNumber = null,
         $displayDNISName = null,
         $promoteCallsFromPriority1to0 = null,
         $promoteCallsFromPriority2to1 = null,
         $promoteCallsFromPriority3to2 = null,
         $promoteCallsFromPriority1to0Seconds = null,
         $promoteCallsFromPriority2to1Seconds = null,
         $promoteCallsFromPriority3to2Seconds = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setDisplayDNISNumber($displayDNISNumber);
        $this->setDisplayDNISName($displayDNISName);
        $this->setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0);
        $this->setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1);
        $this->setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2);
        $this->setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds);
        $this->setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds);
        $this->setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setDisplayDNISNumber($displayDNISNumber = null)
    {
        $this->displayDNISNumber = (boolean) $displayDNISNumber;
    }

    /**
     * 
     */
    public function getDisplayDNISNumber()
    {
        return (!$this->displayDNISNumber) ?: $this->displayDNISNumber->getValue();
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        $this->displayDNISName = (boolean) $displayDNISName;
    }

    /**
     * 
     */
    public function getDisplayDNISName()
    {
        return (!$this->displayDNISName) ?: $this->displayDNISName->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0 = null)
    {
        $this->promoteCallsFromPriority1to0 = (boolean) $promoteCallsFromPriority1to0;
    }

    /**
     * 
     */
    public function getPromoteCallsFromPriority1to0()
    {
        return (!$this->promoteCallsFromPriority1to0) ?: $this->promoteCallsFromPriority1to0->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1 = null)
    {
        $this->promoteCallsFromPriority2to1 = (boolean) $promoteCallsFromPriority2to1;
    }

    /**
     * 
     */
    public function getPromoteCallsFromPriority2to1()
    {
        return (!$this->promoteCallsFromPriority2to1) ?: $this->promoteCallsFromPriority2to1->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2 = null)
    {
        $this->promoteCallsFromPriority3to2 = (boolean) $promoteCallsFromPriority3to2;
    }

    /**
     * 
     */
    public function getPromoteCallsFromPriority3to2()
    {
        return (!$this->promoteCallsFromPriority3to2) ?: $this->promoteCallsFromPriority3to2->getValue();
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds = null)
    {
        $this->promoteCallsFromPriority1to0Seconds = ($promoteCallsFromPriority1to0Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority1to0Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority1to0Seconds);
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return (!$this->promoteCallsFromPriority1to0Seconds) ?: $this->promoteCallsFromPriority1to0Seconds->getValue();
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds = null)
    {
        $this->promoteCallsFromPriority2to1Seconds = ($promoteCallsFromPriority2to1Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority2to1Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority2to1Seconds);
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return (!$this->promoteCallsFromPriority2to1Seconds) ?: $this->promoteCallsFromPriority2to1Seconds->getValue();
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds = null)
    {
        $this->promoteCallsFromPriority3to2Seconds = ($promoteCallsFromPriority3to2Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority3to2Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority3to2Seconds);
    }

    /**
     * Timer to upgrade the priority for a DNIS number
     */
    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return (!$this->promoteCallsFromPriority3to2Seconds) ?: $this->promoteCallsFromPriority3to2Seconds->getValue();
    }
}
