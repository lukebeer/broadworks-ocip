<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExternalSystemDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an Route Point External System, which is a cluster of Application 
 *       Controllers.     
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutePointExternalSystemAddRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'SystemRoutePointExternalSystemAddRequest';
    protected $name        = null;
    protected $description = null;

    public function __construct(
         $name,
         $description = null
    ) {
        $this->setName($name);
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
        if (!$name) return $this;
        $this->name = ($name InstanceOf RoutePointExternalSystem)
             ? $name
             : new RoutePointExternalSystem($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf ExternalSystemDescription)
             ? $description
             : new ExternalSystemDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return ExternalSystemDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
