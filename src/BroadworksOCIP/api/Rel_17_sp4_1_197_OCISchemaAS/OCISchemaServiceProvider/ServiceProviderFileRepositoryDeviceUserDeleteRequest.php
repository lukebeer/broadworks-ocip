<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a service provider file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderFileRepositoryDeviceUserDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderFileRepositoryDeviceUserDeleteRequest';
    protected $serviceProviderId;
    protected $fileRepositoryName;
    protected $userName;

    public function __construct(
         $serviceProviderId = '',
         $fileRepositoryName = '',
         $userName = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setFileRepositoryName($fileRepositoryName);
        $this->setUserName($userName);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFileRepositoryName($fileRepositoryName = null)
    {
        $this->fileRepositoryName = ($fileRepositoryName InstanceOf FileRepositoryName)
             ? $fileRepositoryName
             : new FileRepositoryName($fileRepositoryName);
        $this->fileRepositoryName->setElementName('fileRepositoryName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName $fileRepositoryName
     */
    public function getFileRepositoryName()
    {
        return ($this->fileRepositoryName)
            ? $this->fileRepositoryName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf FileRepositoryUserName)
             ? $userName
             : new FileRepositoryUserName($userName);
        $this->userName->setElementName('userName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserName $userName
     */
    public function getUserName()
    {
        return ($this->userName)
            ? $this->userName->getElementValue()
            : null;
    }
}
