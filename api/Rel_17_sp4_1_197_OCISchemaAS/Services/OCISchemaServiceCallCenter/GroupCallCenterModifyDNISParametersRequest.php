<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\DNISPromoteCallPrioritySeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the setting that are configured for all the DNIS in a Call Center.
 *       The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyDNISParametersRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = 'GroupCallCenterModifyDNISParametersRequest';
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setDisplayDNISNumber($displayDNISNumber = null)
    {
        if (!$displayDNISNumber) return $this;
        $this->displayDNISNumber = new PrimitiveType($displayDNISNumber);
        $this->displayDNISNumber->setName('displayDNISNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISNumber
     */
    public function getDisplayDNISNumber()
    {
        return $this->displayDNISNumber->getValue();
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        if (!$displayDNISName) return $this;
        $this->displayDNISName = new PrimitiveType($displayDNISName);
        $this->displayDNISName->setName('displayDNISName');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISName
     */
    public function getDisplayDNISName()
    {
        return $this->displayDNISName->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority1to0($promoteCallsFromPriority1to0 = null)
    {
        if (!$promoteCallsFromPriority1to0) return $this;
        $this->promoteCallsFromPriority1to0 = new PrimitiveType($promoteCallsFromPriority1to0);
        $this->promoteCallsFromPriority1to0->setName('promoteCallsFromPriority1to0');
        return $this;
    }

    /**
     * 
     * @return boolean $promoteCallsFromPriority1to0
     */
    public function getPromoteCallsFromPriority1to0()
    {
        return $this->promoteCallsFromPriority1to0->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority2to1($promoteCallsFromPriority2to1 = null)
    {
        if (!$promoteCallsFromPriority2to1) return $this;
        $this->promoteCallsFromPriority2to1 = new PrimitiveType($promoteCallsFromPriority2to1);
        $this->promoteCallsFromPriority2to1->setName('promoteCallsFromPriority2to1');
        return $this;
    }

    /**
     * 
     * @return boolean $promoteCallsFromPriority2to1
     */
    public function getPromoteCallsFromPriority2to1()
    {
        return $this->promoteCallsFromPriority2to1->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority3to2($promoteCallsFromPriority3to2 = null)
    {
        if (!$promoteCallsFromPriority3to2) return $this;
        $this->promoteCallsFromPriority3to2 = new PrimitiveType($promoteCallsFromPriority3to2);
        $this->promoteCallsFromPriority3to2->setName('promoteCallsFromPriority3to2');
        return $this;
    }

    /**
     * 
     * @return boolean $promoteCallsFromPriority3to2
     */
    public function getPromoteCallsFromPriority3to2()
    {
        return $this->promoteCallsFromPriority3to2->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority1to0Seconds($promoteCallsFromPriority1to0Seconds = null)
    {
        if (!$promoteCallsFromPriority1to0Seconds) return $this;
        $this->promoteCallsFromPriority1to0Seconds = ($promoteCallsFromPriority1to0Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority1to0Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority1to0Seconds);
        $this->promoteCallsFromPriority1to0Seconds->setName('promoteCallsFromPriority1to0Seconds');
        return $this;
    }

    /**
     * 
     * @return DNISPromoteCallPrioritySeconds $promoteCallsFromPriority1to0Seconds
     */
    public function getPromoteCallsFromPriority1to0Seconds()
    {
        return $this->promoteCallsFromPriority1to0Seconds->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority2to1Seconds($promoteCallsFromPriority2to1Seconds = null)
    {
        if (!$promoteCallsFromPriority2to1Seconds) return $this;
        $this->promoteCallsFromPriority2to1Seconds = ($promoteCallsFromPriority2to1Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority2to1Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority2to1Seconds);
        $this->promoteCallsFromPriority2to1Seconds->setName('promoteCallsFromPriority2to1Seconds');
        return $this;
    }

    /**
     * 
     * @return DNISPromoteCallPrioritySeconds $promoteCallsFromPriority2to1Seconds
     */
    public function getPromoteCallsFromPriority2to1Seconds()
    {
        return $this->promoteCallsFromPriority2to1Seconds->getValue();
    }

    /**
     * 
     */
    public function setPromoteCallsFromPriority3to2Seconds($promoteCallsFromPriority3to2Seconds = null)
    {
        if (!$promoteCallsFromPriority3to2Seconds) return $this;
        $this->promoteCallsFromPriority3to2Seconds = ($promoteCallsFromPriority3to2Seconds InstanceOf DNISPromoteCallPrioritySeconds)
             ? $promoteCallsFromPriority3to2Seconds
             : new DNISPromoteCallPrioritySeconds($promoteCallsFromPriority3to2Seconds);
        $this->promoteCallsFromPriority3to2Seconds->setName('promoteCallsFromPriority3to2Seconds');
        return $this;
    }

    /**
     * 
     * @return DNISPromoteCallPrioritySeconds $promoteCallsFromPriority3to2Seconds
     */
    public function getPromoteCallsFromPriority3to2Seconds()
    {
        return $this->promoteCallsFromPriority3to2Seconds->getValue();
    }
}
