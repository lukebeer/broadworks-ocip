<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Calling Plan transfer numbers for a department.
 */
class OutgoingCallingPlanDepartmentTransferNumbersModify extends ComplexType implements ComplexInterface
{
    public    $name = 'OutgoingCallingPlanDepartmentTransferNumbersModify';
    protected $departmentKey;
    protected $transferNumbers;

    public function __construct(
         $departmentKey = '',
         $transferNumbers = null
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setTransferNumbers($transferNumbers);
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
    public function setDepartmentKey($departmentKey = null)
    {
        $this->departmentKey = new SimpleContent($departmentKey);
        $this->departmentKey->setName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentKey
     */
    public function getDepartmentKey()
    {
        return ($this->departmentKey) ? $this->departmentKey->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferNumbers($transferNumbers = null)
    {
        $this->transferNumbers = new SimpleContent($transferNumbers);
        $this->transferNumbers->setName('transferNumbers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $transferNumbers
     */
    public function getTransferNumbers()
    {
        return ($this->transferNumbers) ? $this->transferNumbers->getValue() : null;
    }
}
