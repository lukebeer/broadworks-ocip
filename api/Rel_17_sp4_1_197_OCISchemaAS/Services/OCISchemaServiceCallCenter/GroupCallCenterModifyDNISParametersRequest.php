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
    public    $name                                 = __CLASS__;
    protected $serviceUserId                        = null;
    protected $displayDNISNumber                    = null;
    protected $displayDNISName                      = null;
    protected $promoteCallsFromPriority1to0         = null;
    protected $promoteCallsFromPriority2to1         = null;
    protected $promoteCallsFromPriority3to2         = null;
    protected $promoteCallsFromPriority1to0Seconds  = null;
    protected $promoteCallsFromPriority2to1Seconds  = null;
    protected $promoteCallsFromPriority3to2Seconds  = null;

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

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setDisplayDNISNumber(xs:boolean $displayDNISNumber = null)
    {
    }

    public function getDisplayDNISNumber()
    {
        return (!$this->displayDNISNumber) ?: $this->displayDNISNumber->value();
    }

    public function setDisplayDNISName(xs:boolean $displayDNISName = null)
    {
    }

    public function getDisplayDNISName()
    {
        return (!$this->displayDNISName) ?: $this->displayDNISName->value();
    }

    public function setPromoteCallsFromPriority1to0(xs:boolean $promoteCallsFromPriority1to0 = null)
    {
    }

    public function getPromoteCallsFromPriority1to0()
    {
        return (!$this->promoteCallsFromPriority1to0) ?: $this->promoteCallsFromPriority1to0->value();
    }

    public function setPromoteCallsFromPriority2to1(xs:boolean $promoteCallsFromPriority2to1 = null)
    {
    }

    public function getPromoteCallsFromPriority2to1()
    {
        return (!$this->promoteCallsFromPriority2to1) ?: $this->promoteCallsFromPriority2to1->value();
    }

    public function setPromoteCallsFromPriority3to2(xs:boolean $promoteCallsFromPriority3to2 = null)
    {
    }

    public function getPromoteCallsFromPriority3to2()
    {
        return (!$this->promoteCallsFromPriority3to2) ?: $this->promoteCallsFromPriority3to2->value();
    }

    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds = null)
    {
        $this->promoteCallsFromPriority1to0Seconds = ($promoteCallsFromPriority1to0Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority1to0Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority1to0Seconds);
    }

    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return (!$this->promoteCallsFromPriority1to0Seconds) ?: $this->promoteCallsFromPriority1to0Seconds->value();
    }

    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds = null)
    {
        $this->promoteCallsFromPriority2to1Seconds = ($promoteCallsFromPriority2to1Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority2to1Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority2to1Seconds);
    }

    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return (!$this->promoteCallsFromPriority2to1Seconds) ?: $this->promoteCallsFromPriority2to1Seconds->value();
    }

    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds = null)
    {
        $this->promoteCallsFromPriority3to2Seconds = ($promoteCallsFromPriority3to2Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority3to2Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority3to2Seconds);
    }

    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return (!$this->promoteCallsFromPriority3to2Seconds) ?: $this->promoteCallsFromPriority3to2Seconds->value();
    }
}
