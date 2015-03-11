<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallWaiting; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallWaitingGetRequest.
 */
class SystemCallWaitingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = 'SystemCallWaitingGetResponse';
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
        if (!$playDistinctiveRingback) return $this;
        $this->playDistinctiveRingback = new PrimitiveType($playDistinctiveRingback);
        $this->playDistinctiveRingback->setName('playDistinctiveRingback');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayDistinctiveRingback()
    {
        return $this->playDistinctiveRingback->getValue();
    }
}
