<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MusicOnHoldDelayMilliseconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Music On Hold.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMusicOnHoldModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $delayMilliseconds=null
    ) {
        $this->delayMilliseconds = $delayMilliseconds;
        $this->args              = func_get_args();
    }

    public function setDelayMilliseconds($delayMilliseconds)
    {
        $delayMilliseconds and $this->delayMilliseconds = new MusicOnHoldDelayMilliseconds($delayMilliseconds);
    }

    public function getDelayMilliseconds()
    {
        return (!$this->delayMilliseconds) ?: $this->delayMilliseconds->value();
    }
}
