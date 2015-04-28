<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete an Application Server set.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemApplicationServerSetDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemApplicationServerSetDeleteRequest';
    protected $name;

    public function __construct(
         $name = ''
    ) {
        $this->setName($name);
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
        $this->name = ($name InstanceOf ApplicationServerSetName)
             ? $name
             : new ApplicationServerSetName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return ApplicationServerSetName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }
}
