<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection\SelectiveCallRejectionCriteriaCallTypeModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The call type criteria used within a modify request.
 */
class SelectiveCallRejectionCriteriaCallTypeModify extends ComplexType implements ComplexInterface
{
    public    $responseType              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection\SelectiveCallRejectionCriteriaCallTypeModify';
    public    $name                      = 'SelectiveCallRejectionCriteriaCallTypeModify';
    protected $fromDnCriteriaSelection   = null;
    protected $includeAnonymousCallers   = null;
    protected $includeUnavailableCallers = null;
    protected $phoneNumberList           = null;

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
     * @return SelectiveCallRejectionCriteriaCallTypeModify
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
        if (!$fromDnCriteriaSelection) return $this;
        $this->fromDnCriteriaSelection = new SimpleContent($fromDnCriteriaSelection);
        $this->fromDnCriteriaSelection->setName('fromDnCriteriaSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getFromDnCriteriaSelection()
    {
        return $this->fromDnCriteriaSelection->getValue();
    }

    /**
     * 
     */
    public function setIncludeAnonymousCallers($includeAnonymousCallers = null)
    {
        if (!$includeAnonymousCallers) return $this;
        $this->includeAnonymousCallers = new SimpleContent($includeAnonymousCallers);
        $this->includeAnonymousCallers->setName('includeAnonymousCallers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIncludeAnonymousCallers()
    {
        return $this->includeAnonymousCallers->getValue();
    }

    /**
     * 
     */
    public function setIncludeUnavailableCallers($includeUnavailableCallers = null)
    {
        if (!$includeUnavailableCallers) return $this;
        $this->includeUnavailableCallers = new SimpleContent($includeUnavailableCallers);
        $this->includeUnavailableCallers->setName('includeUnavailableCallers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIncludeUnavailableCallers()
    {
        return $this->includeUnavailableCallers->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumberList($phoneNumberList = null)
    {
        if (!$phoneNumberList) return $this;
        $this->phoneNumberList = new SimpleContent($phoneNumberList);
        $this->phoneNumberList->setName('phoneNumberList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList->getValue();
    }
}
