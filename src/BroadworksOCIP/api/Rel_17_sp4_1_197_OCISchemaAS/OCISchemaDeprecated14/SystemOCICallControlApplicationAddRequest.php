<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallControlApplicationDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add an application to the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOCICallControlApplicationAddRequest';
    protected $applicationId;
    protected $enableSystemWide;
    protected $description;

    public function __construct(
         $applicationId = '',
         $enableSystemWide = '',
         $description = null
    ) {
        $this->setApplicationId($applicationId);
        $this->setEnableSystemWide($enableSystemWide);
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
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf OCICallControlApplicationId)
             ? $applicationId
             : new OCICallControlApplicationId($applicationId);
        $this->applicationId->setElementName('applicationId');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationId $applicationId
     */
    public function getApplicationId()
    {
        return ($this->applicationId)
            ? $this->applicationId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableSystemWide($enableSystemWide = null)
    {
        $this->enableSystemWide = new PrimitiveType($enableSystemWide);
        $this->enableSystemWide->setElementName('enableSystemWide');
        return $this;
    }

    /**
     * 
     * @return boolean $enableSystemWide
     */
    public function getEnableSystemWide()
    {
        return ($this->enableSystemWide)
            ? $this->enableSystemWide->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf OCICallControlApplicationDescription)
             ? $description
             : new OCICallControlApplicationDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return OCICallControlApplicationDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
