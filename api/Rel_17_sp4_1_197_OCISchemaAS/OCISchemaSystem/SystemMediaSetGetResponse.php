<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemMediaSetGetRequest.
 *         Returns a list of media names in the set.
 */
class SystemMediaSetGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mediaName=null
    ) {
        $this->mediaName = $mediaName;
        $this->args      = func_get_args();
    }

    public function setMediaName($mediaName)
    {
        $mediaName and $this->mediaName = new MediaName($mediaName);
    }

    public function getMediaName()
    {
        return (!$this->mediaName) ?: $this->mediaName->value();
    }
}
