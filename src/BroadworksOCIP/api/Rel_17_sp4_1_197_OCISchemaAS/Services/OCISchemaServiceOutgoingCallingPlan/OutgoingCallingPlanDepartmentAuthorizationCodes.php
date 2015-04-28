<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Outgoing Calling Plan Authorization Code for a department.
 */
class OutgoingCallingPlanDepartmentAuthorizationCodes extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingCallingPlanDepartmentAuthorizationCodes';
    protected $departmentKey;
    protected $departmentName;
    protected $codeEntry;

    public function __construct(
         $departmentKey = '',
         $departmentName = '',
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
        $this->departmentKey = new SimpleContent($departmentKey);
        $this->departmentKey->setElementName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentKey
     */
    public function getDepartmentKey()
    {
        return ($this->departmentKey)
            ? $this->departmentKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = new SimpleContent($departmentName);
        $this->departmentName->setElementName('departmentName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $departmentName
     */
    public function getDepartmentName()
    {
        return ($this->departmentName)
            ? $this->departmentName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCodeEntry($codeEntry = null)
    {
        $this->codeEntry = new SimpleContent($codeEntry);
        $this->codeEntry->setElementName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $codeEntry
     */
    public function getCodeEntry()
    {
        return ($this->codeEntry)
            ? $this->codeEntry->getElementValue()
            : null;
    }
}
