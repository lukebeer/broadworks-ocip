<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Calling Plan Authorization Code for the group default.
 */
class OutgoingCallingPlanGroupAuthorizationCodes extends ComplexType implements ComplexInterface
{
    public    $elementName = 'OutgoingCallingPlanGroupAuthorizationCodes';
    protected $codeEntry;

    public function __construct(
         $codeEntry = null
    ) {
        $this->setCodeEntry($codeEntry);
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
    public function setCodeEntry($codeEntry = null)
    {
        $this->codeEntry = new SimpleContent($codeEntry);
        $this->codeEntry->setElementName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $codeEntry
     */
    public function getCodeEntry()
    {
        return ($this->codeEntry)
            ? $this->codeEntry->getElementValue()
            : null;
    }
}
