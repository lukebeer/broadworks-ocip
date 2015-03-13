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
 * Outgoing Calling Plan originating call permissions for a department.
 */
class OutgoingCallingPlanOriginatingDepartmentPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $name          = 'OutgoingCallingPlanOriginatingDepartmentPermissionsModify';
    protected $departmentKey = null;
    protected $permissions   = null;

    public function __construct(
         $departmentKey,
         $permissions = null
    ) {
        $this->setDepartmentKey($departmentKey);
        $this->setPermissions($permissions);
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
    public function setPermissions($permissions = null)
    {
        if (!$permissions) return $this;
        $this->permissions = new SimpleContent($permissions);
        $this->permissions->setName('permissions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $permissions
     */
    public function getPermissions()
    {
        return $this->permissions->getValue();
    }
}
