<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a Call Center Reporting Server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterReportingServerDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterReportingServerDeleteRequest';
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
        $this->name = ($name InstanceOf CallCenterReportingServerName)
             ? $name
             : new CallCenterReportingServerName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }
}
