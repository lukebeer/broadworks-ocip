<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldDelayMilliseconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemMusicOnHoldGetRequest.
 */
class SystemMusicOnHoldGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold\SystemMusicOnHoldGetResponse';
    public    $name              = __CLASS__;
    protected $delayMilliseconds = null;


    /**
     * Delay in milliseconds.
     */
    public function setDelayMilliseconds($delayMilliseconds = null)
    {
        $this->delayMilliseconds = ($delayMilliseconds InstanceOf MusicOnHoldDelayMilliseconds)
             ? $delayMilliseconds
             : new MusicOnHoldDelayMilliseconds($delayMilliseconds);
    }

    /**
     * Delay in milliseconds.
     */
    public function getDelayMilliseconds()
    {
        return (!$this->delayMilliseconds) ?: $this->delayMilliseconds->getValue();
    }
}
