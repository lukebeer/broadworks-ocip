<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the TutorialFlagGetRequest.
 */
class TutorialFlagGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableTutorial
    ) {
        $this->enableTutorial = $enableTutorial;
        $this->args           = func_get_args();
    }

    public function setEnableTutorial($enableTutorial)
    {
        $enableTutorial and $this->enableTutorial = new xs:boolean($enableTutorial);
    }

    public function getEnableTutorial()
    {
        return (!$this->enableTutorial) ?: $this->enableTutorial->value();
    }
}
