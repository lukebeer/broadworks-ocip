<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackLineMatchAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackLineType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's legacy automatic callback line type attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLegacyAutomaticCallbackModifyLineTypeRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLegacyAutomaticCallbackModifyLineTypeRequest';
    protected $lineType;
    protected $matchAction;
    protected $noMatchAction;

    public function __construct(
         $lineType = '',
         $matchAction = null,
         $noMatchAction = null
    ) {
        $this->setLineType($lineType);
        $this->setMatchAction($matchAction);
        $this->setNoMatchAction($noMatchAction);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLineType($lineType = null)
    {
        $this->lineType = ($lineType InstanceOf LegacyAutomaticCallbackLineType)
             ? $lineType
             : new LegacyAutomaticCallbackLineType($lineType);
        $this->lineType->setElementName('lineType');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackLineType $lineType
     */
    public function getLineType()
    {
        return ($this->lineType)
            ? $this->lineType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchAction($matchAction = null)
    {
        $this->matchAction = ($matchAction InstanceOf LegacyAutomaticCallbackLineMatchAction)
             ? $matchAction
             : new LegacyAutomaticCallbackLineMatchAction($matchAction);
        $this->matchAction->setElementName('matchAction');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackLineMatchAction $matchAction
     */
    public function getMatchAction()
    {
        return ($this->matchAction)
            ? $this->matchAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoMatchAction($noMatchAction = null)
    {
        $this->noMatchAction = ($noMatchAction InstanceOf LegacyAutomaticCallbackLineMatchAction)
             ? $noMatchAction
             : new LegacyAutomaticCallbackLineMatchAction($noMatchAction);
        $this->noMatchAction->setElementName('noMatchAction');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackLineMatchAction $noMatchAction
     */
    public function getNoMatchAction()
    {
        return ($this->noMatchAction)
            ? $this->noMatchAction->getElementValue()
            : null;
    }
}
