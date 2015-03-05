<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackLineType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackLineMatchAction;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the system's legacy automatic callback line type attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLegacyAutomaticCallbackModifyLineTypeRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $lineType,
             $matchAction=null,
             $noMatchAction=null
    ) {
        $this->lineType      = $lineType;
        $this->matchAction   = $matchAction;
        $this->noMatchAction = $noMatchAction;
        $this->args          = func_get_args();
    }

    public function setLineType($lineType)
    {
        $lineType and $this->lineType = new LegacyAutomaticCallbackLineType($lineType);
    }

    public function getLineType()
    {
        return (!$this->lineType) ?: $this->lineType->value();
    }

    public function setMatchAction($matchAction)
    {
        $matchAction and $this->matchAction = new LegacyAutomaticCallbackLineMatchAction($matchAction);
    }

    public function getMatchAction()
    {
        return (!$this->matchAction) ?: $this->matchAction->value();
    }

    public function setNoMatchAction($noMatchAction)
    {
        $noMatchAction and $this->noMatchAction = new LegacyAutomaticCallbackLineMatchAction($noMatchAction);
    }

    public function getNoMatchAction()
    {
        return (!$this->noMatchAction) ?: $this->noMatchAction->value();
    }
}
