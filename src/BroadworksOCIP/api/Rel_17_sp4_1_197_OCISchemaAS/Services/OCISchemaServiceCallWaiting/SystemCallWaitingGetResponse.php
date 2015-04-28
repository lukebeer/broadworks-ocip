<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallWaiting; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallWaitingGetRequest.
 */
class SystemCallWaitingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallWaitingGetResponse';
    protected $playDistinctiveRingback;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallWaiting\SystemCallWaitingGetResponse $response
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
        $this->playDistinctiveRingback = new PrimitiveType($playDistinctiveRingback);
        $this->playDistinctiveRingback->setElementName('playDistinctiveRingback');
        return $this;
    }

    /**
     * 
     * @return boolean $playDistinctiveRingback
     */
    public function getPlayDistinctiveRingback()
    {
        return ($this->playDistinctiveRingback)
            ? $this->playDistinctiveRingback->getElementValue()
            : null;
    }
}
