<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExternalSystemDescription;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify an Route Point External System.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutePointExternalSystemModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutePointExternalSystemModifyRequest';
    protected $name;
    protected $newName;
    protected $description;

    public function __construct(
         $name = '',
         $newName = null,
         $description = null
    ) {
        $this->setName($name);
        $this->setNewName($newName);
        $this->setDescription($description);
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
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf RoutePointExternalSystem)
             ? $newName
             : new RoutePointExternalSystem($newName);
        $this->newName->setElementName('newName');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $newName
     */
    public function getNewName()
    {
        return ($this->newName)
            ? $this->newName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ExternalSystemDescription)
             ? $description
             : new ExternalSystemDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return ExternalSystemDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
