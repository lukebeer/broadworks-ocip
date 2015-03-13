<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldDelayMilliseconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemMusicOnHoldGetRequest.
 */
class SystemMusicOnHoldGetResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemMusicOnHoldGetResponse';
    protected $delayMilliseconds = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\SystemMusicOnHoldGetResponse $response
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
        if (!$delayMilliseconds) return $this;
        $this->delayMilliseconds = ($delayMilliseconds InstanceOf MusicOnHoldDelayMilliseconds)
             ? $delayMilliseconds
             : new MusicOnHoldDelayMilliseconds($delayMilliseconds);
        $this->delayMilliseconds->setName('delayMilliseconds');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldDelayMilliseconds $delayMilliseconds
     */
    public function getDelayMilliseconds()
    {
        return $this->delayMilliseconds->getValue();
    }
}
