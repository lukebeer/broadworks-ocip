<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the TutorialFlagGetRequest.
 */
class TutorialFlagGetResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $enableTutorial  = null;


    public function setEnableTutorial(xs:boolean $enableTutorial = null)
    {
    }

    public function getEnableTutorial()
    {
        return (!$this->enableTutorial) ?: $this->enableTutorial->value();
    }
}
