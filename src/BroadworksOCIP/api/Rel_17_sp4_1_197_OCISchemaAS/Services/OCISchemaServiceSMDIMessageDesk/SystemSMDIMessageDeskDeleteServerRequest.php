<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIDeviceName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to delete a SMDI Server from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskDeleteServerRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSMDIMessageDeskDeleteServerRequest';
    protected $deviceName;

    public function __construct(
         $deviceName = ''
    ) {
        $this->setDeviceName($deviceName);
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
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf SMDIDeviceName)
             ? $deviceName
             : new SMDIDeviceName($deviceName);
        $this->deviceName->setElementName('deviceName');
        return $this;
    }

    /**
     * 
     * @return SMDIDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName)
            ? $this->deviceName->getElementValue()
            : null;
    }
}
