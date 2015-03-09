<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallWaiting; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallWaiting\SystemCallWaitingGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallWaitingGetRequest.
 */
class SystemCallWaitingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $playDistinctiveRingback = null;

    /**
     * @return SystemCallWaitingGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlayDistinctiveRingback($playDistinctiveRingback = null)
    {
        $this->playDistinctiveRingback = (boolean) $playDistinctiveRingback;
    }

    /**
     * 
     */
    public function getPlayDistinctiveRingback()
    {
        return (!$this->playDistinctiveRingback) ?: $this->playDistinctiveRingback;
    }
}
