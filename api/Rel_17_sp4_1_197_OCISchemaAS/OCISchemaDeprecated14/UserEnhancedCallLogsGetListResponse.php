<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\EnhancedCallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserEnhancedCallLogsGetListRequest.
 *         Replaced By: UserEnhancedCallLogsGetListResponse14sp4
 */
class UserEnhancedCallLogsGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name     = 'UserEnhancedCallLogsGetListResponse';
    protected $placed   = null;
    protected $received = null;
    protected $missed   = null;

    /**
     * @return UserEnhancedCallLogsGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlaced(EnhancedCallLogsEntry $placed = null)
    {
        if (!$placed) return $this;
        $this->placed = $placed;
        $this->placed->setName('placed');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsEntry
     */
    public function getPlaced()
    {
        return $this->placed;
    }

    /**
     * 
     */
    public function setReceived(EnhancedCallLogsEntry $received = null)
    {
        if (!$received) return $this;
        $this->received = $received;
        $this->received->setName('received');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsEntry
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * 
     */
    public function setMissed(EnhancedCallLogsEntry $missed = null)
    {
        if (!$missed) return $this;
        $this->missed = $missed;
        $this->missed->setName('missed');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsEntry
     */
    public function getMissed()
    {
        return $this->missed;
    }
}
