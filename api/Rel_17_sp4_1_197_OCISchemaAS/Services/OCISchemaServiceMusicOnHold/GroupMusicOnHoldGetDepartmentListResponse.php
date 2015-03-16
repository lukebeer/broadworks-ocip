<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupMusicOnHoldGetDepartmentListRequest.
 */
class GroupMusicOnHoldGetDepartmentListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupMusicOnHoldGetDepartmentListResponse';
    protected $hasDepartment;
    protected $department;
    protected $departmentFullPath;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\GroupMusicOnHoldGetDepartmentListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHasDepartment($hasDepartment = null)
    {
        $this->hasDepartment = new PrimitiveType($hasDepartment);
        $this->hasDepartment->setElementName('hasDepartment');
        return $this;
    }

    /**
     * 
     * @return boolean $hasDepartment
     */
    public function getHasDepartment()
    {
        return ($this->hasDepartment)
            ? $this->hasDepartment->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department = ($department InstanceOf DepartmentKey)
             ? $department
             : new DepartmentKey($department);
        $this->department->setElementName('department');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * 
     */
    public function setDepartmentFullPath($departmentFullPath = null)
    {
        $this->departmentFullPath = ($departmentFullPath InstanceOf DepartmentFullPathName)
             ? $departmentFullPath
             : new DepartmentFullPathName($departmentFullPath);
        $this->departmentFullPath->setElementName('departmentFullPath');
        return $this;
    }

    /**
     * 
     * @return DepartmentFullPathName $departmentFullPath
     */
    public function getDepartmentFullPath()
    {
        return ($this->departmentFullPath)
            ? $this->departmentFullPath->getElementValue()
            : null;
    }
}
