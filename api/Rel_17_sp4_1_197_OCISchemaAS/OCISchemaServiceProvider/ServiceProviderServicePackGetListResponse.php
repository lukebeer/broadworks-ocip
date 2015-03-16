<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderServicePackGetListRequest.
 */
class ServiceProviderServicePackGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderServicePackGetListResponse';
    protected $servicePackName;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName) ? $this->servicePackName->getValue() : null;
    }
}
