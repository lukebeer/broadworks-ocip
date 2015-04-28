<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ApplicationControllerName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemRoutePointExternalSystemApplicationControllerGetRequest.
 */
class SystemRoutePointExternalSystemApplicationControllerGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutePointExternalSystemApplicationControllerGetResponse';
    protected $applicationController;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemApplicationControllerGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationController($applicationController = null)
    {
        $this->applicationController = ($applicationController InstanceOf ApplicationControllerName)
             ? $applicationController
             : new ApplicationControllerName($applicationController);
        $this->applicationController->setElementName('applicationController');
        return $this;
    }

    /**
     * 
     * @return ApplicationControllerName $applicationController
     */
    public function getApplicationController()
    {
        return ($this->applicationController)
            ? $this->applicationController->getElementValue()
            : null;
    }
}
