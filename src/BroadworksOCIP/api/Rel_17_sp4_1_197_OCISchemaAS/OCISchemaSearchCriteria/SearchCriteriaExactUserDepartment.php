<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for a particular fully specified user's department.
 */
class SearchCriteriaExactUserDepartment extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactUserDepartment';
    protected $departmentKey;

    public function __construct(
         $departmentKey = ''
    ) {
        $this->setDepartmentKey($departmentKey);
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
    public function setDepartmentKey(DepartmentKey $departmentKey = null)
    {
        $this->departmentKey = ($departmentKey InstanceOf DepartmentKey)
             ? $departmentKey
             : new DepartmentKey($departmentKey);
        $this->departmentKey->setElementName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $departmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }
}
