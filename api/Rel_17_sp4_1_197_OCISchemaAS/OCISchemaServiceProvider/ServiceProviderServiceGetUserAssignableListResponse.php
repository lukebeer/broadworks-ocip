<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderServiceGetUserAssignableListRequest.
 */
class ServiceProviderServiceGetUserAssignableListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServiceGetUserAssignableListResponse';
    public    $name        = __CLASS__;
    protected $serviceName = null;


    /**
     * User level services.
     */
    public function setServiceName($serviceName = null)
    {
        $this->serviceName = ($serviceName InstanceOf UserService)
             ? $serviceName
             : new UserService($serviceName);
    }

    /**
     * User level services.
     */
    public function getServiceName()
    {
        return (!$this->serviceName) ?: $this->serviceName->getValue();
    }
}