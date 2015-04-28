<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupDepartmentGetListRequest.
 *         The response includes two parallel arrays of department keys and department display names.
 */
class GroupDepartmentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDepartmentGetListResponse';
    protected $departmentKey;
    protected $fullPathName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentGetListResponse $response
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

    /**
     * 
     */
    public function setFullPathName($fullPathName = null)
    {
        $this->fullPathName = ($fullPathName InstanceOf DepartmentFullPathName)
             ? $fullPathName
             : new DepartmentFullPathName($fullPathName);
        $this->fullPathName->setElementName('fullPathName');
        return $this;
    }

    /**
     * 
     * @return DepartmentFullPathName $fullPathName
     */
    public function getFullPathName()
    {
        return ($this->fullPathName)
            ? $this->fullPathName->getElementValue()
            : null;
    }
}
