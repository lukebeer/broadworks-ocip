<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowToDnCriteriaModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The To dn criteria used on the call me now external number to be modified.
 */
class CallMeNowToDnCriteriaModify extends ComplexType implements ComplexInterface
{
    public    $responseType          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowToDnCriteriaModify';
    public    $name                  = 'CallMeNowToDnCriteriaModify';
    protected $toDnCriteriaSelection = null;
    protected $phoneNumberList       = null;

    public function __construct(
         $toDnCriteriaSelection = null,
         $phoneNumberList = null
    ) {
        $this->setToDnCriteriaSelection($toDnCriteriaSelection);
        $this->setPhoneNumberList($phoneNumberList);
    }

    /**
     * @return CallMeNowToDnCriteriaModify
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setToDnCriteriaSelection($toDnCriteriaSelection = null)
    {
        if (!$toDnCriteriaSelection) return $this;
        $this->toDnCriteriaSelection = new SimpleContent($toDnCriteriaSelection);
        $this->toDnCriteriaSelection->setName('toDnCriteriaSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getToDnCriteriaSelection()
    {
        return $this->toDnCriteriaSelection->getValue();
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
