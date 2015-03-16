<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The from dn criteria used within an add/get request.
 */
class CriteriaFromDn extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CriteriaFromDn';
    protected $fromDnCriteriaSelection;
    protected $includeAnonymousCallers;
    protected $includeUnavailableCallers;
    protected $phoneNumber;

    public function __construct(
         $fromDnCriteriaSelection = '',
         $includeAnonymousCallers = '',
         $includeUnavailableCallers = '',
         $phoneNumber = null
    ) {
        $this->setFromDnCriteriaSelection($fromDnCriteriaSelection);
        $this->setIncludeAnonymousCallers($includeAnonymousCallers);
        $this->setIncludeUnavailableCallers($includeUnavailableCallers);
        $this->setPhoneNumber($phoneNumber);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }
}
