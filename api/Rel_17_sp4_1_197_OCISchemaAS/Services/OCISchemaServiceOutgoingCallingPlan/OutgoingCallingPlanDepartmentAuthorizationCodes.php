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
 * Outgoing Calling Plan Authorization Code for a department.
 */
class OutgoingCallingPlanDepartmentAuthorizationCodes extends ComplexType implements ComplexInterface
{
    public    $name           = 'OutgoingCallingPlanDepartmentAuthorizationCodes';
    protected $departmentKey  = null;
    protected $departmentName = null;
    protected $codeEntry      = null;

    public function __construct(
         $departmentKey,
         $departmentName,
         $codeEntry = null
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setDepartmentName($departmentName);
        $this->setCodeEntry($codeEntry);
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
        if (!$departmentKey) return $this;
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
        return $this->departmentKey->getValue();
    }

    /**
     * 
     */
    public function setDepartmentName($departmentName = null)
    {
        if (!$departmentName) return $this;
        $this->departmentName = new SimpleContent($departmentName);
        $this->departmentName->setName('departmentName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentName
     */
    public function getDepartmentName()
    {
        return $this->departmentName->getValue();
    }

    /**
     * 
     */
    public function setCodeEntry($codeEntry = null)
    {
        if (!$codeEntry) return $this;
        $this->codeEntry = new SimpleContent($codeEntry);
        $this->codeEntry->setName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $codeEntry
     */
    public function getCodeEntry()
    {
        return $this->codeEntry->getValue();
    }
}
