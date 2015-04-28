<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ApplicationControllerName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete an application controller for Route Point External System.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutePointExternalSystemApplicationControllerDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutePointExternalSystemApplicationControllerDeleteListRequest';
    protected $name;
    protected $applicationController;

    public function __construct(
         $name = '',
         $applicationController = null
    ) {
        $this->setName($name);
        $this->setApplicationController($applicationController);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf RoutePointExternalSystem)
             ? $name
             : new RoutePointExternalSystem($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
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
