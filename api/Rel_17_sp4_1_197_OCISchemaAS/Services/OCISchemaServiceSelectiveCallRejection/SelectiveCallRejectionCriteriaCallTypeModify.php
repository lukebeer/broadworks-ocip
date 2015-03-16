<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The call type criteria used within a modify request.
 */
class SelectiveCallRejectionCriteriaCallTypeModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SelectiveCallRejectionCriteriaCallTypeModify';
    protected $fromDnCriteriaSelection;
    protected $includeAnonymousCallers;
    protected $includeUnavailableCallers;
    protected $phoneNumberList;

    public function __construct(
         $fromDnCriteriaSelection = null,
         $includeAnonymousCallers = null,
         $includeUnavailableCallers = null,
         $phoneNumberList = null
    ) {
        $this->setFromDnCriteriaSelection($fromDnCriteriaSelection);
        $this->setIncludeAnonymousCallers($includeAnonymousCallers);
        $this->setIncludeUnavailableCallers($includeUnavailableCallers);
        $this->setPhoneNumberList($phoneNumberList);
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
    public function setFromDnCriteriaSelection($fromDnCriteriaSelection = null)
    {
        $this->fromDnCriteriaSelection = new SimpleContent($fromDnCriteriaSelection);
        $this->fromDnCriteriaSelection->setElementName('fromDnCriteriaSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $fromDnCriteriaSelection
     */
    public function getFromDnCriteriaSelection()
    {
        return ($this->fromDnCriteriaSelection)
            ? $this->fromDnCriteriaSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeAnonymousCallers($includeAnonymousCallers = null)
    {
        $this->includeAnonymousCallers = new SimpleContent($includeAnonymousCallers);
        $this->includeAnonymousCallers->setElementName('includeAnonymousCallers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $includeAnonymousCallers
     */
    public function getIncludeAnonymousCallers()
    {
        return ($this->includeAnonymousCallers)
            ? $this->includeAnonymousCallers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeUnavailableCallers($includeUnavailableCallers = null)
    {
        $this->includeUnavailableCallers = new SimpleContent($includeUnavailableCallers);
        $this->includeUnavailableCallers->setElementName('includeUnavailableCallers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $includeUnavailableCallers
     */
    public function getIncludeUnavailableCallers()
    {
        return ($this->includeUnavailableCallers)
            ? $this->includeUnavailableCallers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumberList($phoneNumberList = null)
    {
        $this->phoneNumberList = new SimpleContent($phoneNumberList);
        $this->phoneNumberList->setElementName('phoneNumberList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumberList
     */
    public function getPhoneNumberList()
    {
        return ($this->phoneNumberList)
            ? $this->phoneNumberList->getElementValue()
            : null;
    }
}
