<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldDelayMilliseconds;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemMusicOnHoldGetRequest.
 */
class SystemMusicOnHoldGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMusicOnHoldGetResponse';
    protected $delayMilliseconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\SystemMusicOnHoldGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDelayMilliseconds($delayMilliseconds = null)
    {
        $this->delayMilliseconds = ($delayMilliseconds InstanceOf MusicOnHoldDelayMilliseconds)
             ? $delayMilliseconds
             : new MusicOnHoldDelayMilliseconds($delayMilliseconds);
        $this->delayMilliseconds->setElementName('delayMilliseconds');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldDelayMilliseconds $delayMilliseconds
     */
    public function getDelayMilliseconds()
    {
        return ($this->delayMilliseconds)
            ? $this->delayMilliseconds->getElementValue()
            : null;
    }
}
