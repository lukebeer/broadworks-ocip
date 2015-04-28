<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Assigned User Services List Entry.
 *         The isActive element is true, false, or could be missing completely.
 */
class AssignedUserServicesEntry extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AssignedUserServicesEntry';
    protected $serviceName;
    protected $isActive;

    public function __construct(
         $serviceName = '',
         $isActive = null
    ) {
        $this->setServiceName($serviceName);
        $this->setIsActive($isActive);
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
    public function setServiceName($serviceName = null)
    {
        $this->serviceName = new SimpleContent($serviceName);
        $this->serviceName->setElementName('serviceName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceName
     */
    public function getServiceName()
    {
        return ($this->serviceName)
            ? $this->serviceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new SimpleContent($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }
}
