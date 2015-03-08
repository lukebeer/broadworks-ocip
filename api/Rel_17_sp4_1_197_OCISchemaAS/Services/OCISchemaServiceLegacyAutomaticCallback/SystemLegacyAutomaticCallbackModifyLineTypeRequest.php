<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackLineMatchAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackLineType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modifies the system's legacy automatic callback line type attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLegacyAutomaticCallbackModifyLineTypeRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $lineType      = null;
    protected $matchAction   = null;
    protected $noMatchAction = null;

    public function __construct(
         $lineType,
         $matchAction = null,
         $noMatchAction = null
    ) {
        $this->setLineType($lineType);
        $this->setMatchAction($matchAction);
        $this->setNoMatchAction($noMatchAction);
    }

    /**
     * Legacy Automatic Callback line type.
     */
    public function setLineType($lineType = null)
    {
        $this->lineType = ($lineType InstanceOf LegacyAutomaticCallbackLineType)
             ? $lineType
             : new LegacyAutomaticCallbackLineType($lineType);
    }

    /**
     * Legacy Automatic Callback line type.
     */
    public function getLineType()
    {
        return (!$this->lineType) ?: $this->lineType->getValue();
    }

    /**
     * Legacy Automatic Callback line type match action.
     */
    public function setMatchAction($matchAction = null)
    {
        $this->matchAction = ($matchAction InstanceOf LegacyAutomaticCallbackLineMatchAction)
             ? $matchAction
             : new LegacyAutomaticCallbackLineMatchAction($matchAction);
    }

    /**
     * Legacy Automatic Callback line type match action.
     */
    public function getMatchAction()
    {
        return (!$this->matchAction) ?: $this->matchAction->getValue();
    }

    /**
     * Legacy Automatic Callback line type match action.
     */
    public function setNoMatchAction($noMatchAction = null)
    {
        $this->noMatchAction = ($noMatchAction InstanceOf LegacyAutomaticCallbackLineMatchAction)
             ? $noMatchAction
             : new LegacyAutomaticCallbackLineMatchAction($noMatchAction);
    }

    /**
     * Legacy Automatic Callback line type match action.
     */
    public function getNoMatchAction()
    {
        return (!$this->noMatchAction) ?: $this->noMatchAction->getValue();
    }
}
