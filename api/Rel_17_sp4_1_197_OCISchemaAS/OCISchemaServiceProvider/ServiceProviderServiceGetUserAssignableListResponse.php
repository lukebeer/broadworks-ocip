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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderServiceGetUserAssignableListRequest.
 */
class ServiceProviderServiceGetUserAssignableListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderServiceGetUserAssignableListResponse';
    protected $serviceName;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServiceGetUserAssignableListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceName($serviceName = null)
    {
        $this->serviceName = ($serviceName InstanceOf UserService)
             ? $serviceName
             : new UserService($serviceName);
        $this->serviceName->setName('serviceName');
        return $this;
    }

    /**
     * 
     * @return UserService $serviceName
     */
    public function getServiceName()
    {
        return ($this->serviceName) ? $this->serviceName->getValue() : null;
    }
}
