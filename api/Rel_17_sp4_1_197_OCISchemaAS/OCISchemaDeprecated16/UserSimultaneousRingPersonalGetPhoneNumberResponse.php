<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSimultaneousRingPersonalGetPhoneNumberRequest.
 */
class UserSimultaneousRingPersonalGetPhoneNumberResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $answerConfirmationRequired
    ) {
        $this->answerConfirmationRequired = $answerConfirmationRequired;
        $this->args                       = func_get_args();
    }

    public function setAnswerConfirmationRequired($answerConfirmationRequired)
    {
        $answerConfirmationRequired and $this->answerConfirmationRequired = new xs:boolean($answerConfirmationRequired);
    }

    public function getAnswerConfirmationRequired()
    {
        return (!$this->answerConfirmationRequired) ?: $this->answerConfirmationRequired->value();
    }
}
