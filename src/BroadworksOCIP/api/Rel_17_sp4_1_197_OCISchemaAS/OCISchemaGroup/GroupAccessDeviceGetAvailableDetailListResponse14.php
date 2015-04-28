<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupAccessDeviceGetAvailableDetailListRequest14.
 */
class GroupAccessDeviceGetAvailableDetailListResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAccessDeviceGetAvailableDetailListResponse14';
    protected $availableAccessDevice;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetAvailableDetailListResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAvailableAccessDevice($availableAccessDevice = null)
    {
        $this->availableAccessDevice->setElementName('availableAccessDevice');
        return $this;
    }

    /**
     * 
     * @return  $availableAccessDevice
     */
    public function getAvailableAccessDevice()
    {
        return ($this->availableAccessDevice)
            ? $this->availableAccessDevice->getElementValue()
            : null;
    }
}
