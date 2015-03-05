<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementMediaNameList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Media Set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaSetModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $setName,
             $mediaNameList=null
    ) {
        $this->setName       = new MediaSetName($setName);
        $this->mediaNameList = $mediaNameList;
        $this->args          = func_get_args();
    }

    public function setSetName($setName)
    {
        $setName and $this->setName = new MediaSetName($setName);
    }

    public function getSetName()
    {
        return (!$this->setName) ?: $this->setName->value();
    }

    public function setMediaNameList($mediaNameList)
    {
        $mediaNameList and $this->mediaNameList = new ReplacementMediaNameList($mediaNameList);
    }

    public function getMediaNameList()
    {
        return (!$this->mediaNameList) ?: $this->mediaNameList->value();
    }
}
