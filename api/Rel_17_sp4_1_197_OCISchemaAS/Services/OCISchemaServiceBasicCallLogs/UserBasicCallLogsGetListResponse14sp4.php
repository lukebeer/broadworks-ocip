<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBasicCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserBasicCallLogsGetListRequest14sp4.
 */
class UserBasicCallLogsGetListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name     = 'UserBasicCallLogsGetListResponse14sp4';
    protected $placed   = null;
    protected $received = null;
    protected $missed   = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBasicCallLogs\UserBasicCallLogsGetListResponse14sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlaced(CallLogsEntry $placed = null)
    {
        if (!$placed) return $this;
        $this->placed = $placed;
        $this->placed->setName('placed');
        return $this;
    }

    /**
     * 
     * @return CallLogsEntry $placed
     */
    public function getPlaced()
    {
        return $this->placed;
    }

    /**
     * 
     */
    public function setReceived(CallLogsEntry $received = null)
    {
        if (!$received) return $this;
        $this->received = $received;
        $this->received->setName('received');
        return $this;
    }

    /**
     * 
     * @return CallLogsEntry $received
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * 
     */
    public function setMissed(CallLogsEntry $missed = null)
    {
        if (!$missed) return $this;
        $this->missed = $missed;
        $this->missed->setName('missed');
        return $this;
    }

    /**
     * 
     * @return CallLogsEntry $missed
     */
    public function getMissed()
    {
        return $this->missed;
    }
}
