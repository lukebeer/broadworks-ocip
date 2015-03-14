<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentFullPathName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupDepartmentGetAvailableParentListRequest.
 *         The response includes two parallel arrays of department keys and department display names.
 */
class GroupDepartmentGetAvailableParentListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'GroupDepartmentGetAvailableParentListResponse';
    protected $departmentKey = null;
    protected $fullPathName  = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentGetAvailableParentListResponse $response
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
        if (!$departmentKey) return $this;
        $this->departmentKey = $departmentKey;
        $this->departmentKey->setName('departmentKey');
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
        if (!$fullPathName) return $this;
        $this->fullPathName = ($fullPathName InstanceOf DepartmentFullPathName)
             ? $fullPathName
             : new DepartmentFullPathName($fullPathName);
        $this->fullPathName->setName('fullPathName');
        return $this;
    }

    /**
     * 
     * @return DepartmentFullPathName $fullPathName
     */
    public function getFullPathName()
    {
        return $this->fullPathName->getValue();
    }
}
