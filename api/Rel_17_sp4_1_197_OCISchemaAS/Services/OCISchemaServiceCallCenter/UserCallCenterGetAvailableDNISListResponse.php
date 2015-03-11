<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallCenterGetAvailableDNISListRequest.
 *         Contains a list of available DNIS for agent to select.
 */
class UserCallCenterGetAvailableDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'UserCallCenterGetAvailableDNISListResponse';
    protected $availableDNIS = null;

    /**
     * @return UserCallCenterGetAvailableDNISListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAvailableDNIS(DNISKey $availableDNIS = null)
    {
        if (!$availableDNIS) return $this;
        $this->availableDNIS = $availableDNIS;
        $this->availableDNIS->setName('availableDNIS');
        return $this;
    }

    /**
     * 
     * @return DNISKey
     */
    public function getAvailableDNIS()
    {
        return $this->availableDNIS;
    }
}
