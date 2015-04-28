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
 * Outgoing Calling Plan initiating call forwards/transfer permissions for a department.
 */
class OutgoingCallingPlanRedirectingDepartmentPermissionsModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingCallingPlanRedirectingDepartmentPermissionsModify';
    protected $departmentKey;
    protected $permissions;

    public function __construct(
         $departmentKey = '',
         $permissions = ''
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
    public function setPermissions($permissions = null)
    {
        $this->permissions = new SimpleContent($permissions);
        $this->permissions->setElementName('permissions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $permissions
     */
    public function getPermissions()
    {
        return ($this->permissions)
            ? $this->permissions->getElementValue()
            : null;
    }
}
