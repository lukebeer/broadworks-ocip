<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a list of department administrators for the department.
 *         The response is either a GroupDepartmentAdminGetListResponse or an ErrorResponse.
 */
class GroupDepartmentAdminGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentAdminGetListResponse';
    public    $name          = 'GroupDepartmentAdminGetListRequest';
    protected $departmentKey = null;

    public function __construct(
         GroupDepartmentKey $departmentKey
    ) {
        $this->setDepartmentKey($departmentKey);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentAdminGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDepartmentKey(GroupDepartmentKey $departmentKey = null)
    {
        if (!$departmentKey) return $this;
        $this->departmentKey = $departmentKey;
        $this->departmentKey->setName('departmentKey');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentKey $departmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }
}
