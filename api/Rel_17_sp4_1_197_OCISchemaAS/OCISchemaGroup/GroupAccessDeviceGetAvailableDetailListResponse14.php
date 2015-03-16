<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAccessDeviceGetAvailableDetailListRequest14.
 */
class GroupAccessDeviceGetAvailableDetailListResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAccessDeviceGetAvailableDetailListResponse14';
    protected $availableAccessDevice;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetAvailableDetailListResponse14 $response
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
