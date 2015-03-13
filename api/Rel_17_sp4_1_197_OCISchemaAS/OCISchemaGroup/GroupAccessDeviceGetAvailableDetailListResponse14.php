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
    public    $name                  = 'GroupAccessDeviceGetAvailableDetailListResponse14';
    protected $availableAccessDevice = null;

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
        if (!$availableAccessDevice) return $this;
        $this->availableAccessDevice->setName('availableAccessDevice');
        return $this;
    }

    /**
     * 
     * @return  $availableAccessDevice
     */
    public function getAvailableAccessDevice()
    {
        return $this->availableAccessDevice->getValue();
    }
}
