<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The To dn criteria used on the call me now external number to be modified.
 */
class CallMeNowToDnCriteriaModify extends ComplexType implements ComplexInterface
{
    public    $name = 'CallMeNowToDnCriteriaModify';
    protected $toDnCriteriaSelection;
    protected $phoneNumberList;

    public function __construct(
         $toDnCriteriaSelection = null,
         $phoneNumberList = null
    ) {
        $this->setToDnCriteriaSelection($toDnCriteriaSelection);
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
    public function setToDnCriteriaSelection($toDnCriteriaSelection = null)
    {
        $this->toDnCriteriaSelection = new SimpleContent($toDnCriteriaSelection);
        $this->toDnCriteriaSelection->setName('toDnCriteriaSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $toDnCriteriaSelection
     */
    public function getToDnCriteriaSelection()
    {
        return ($this->toDnCriteriaSelection) ? $this->toDnCriteriaSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumberList($phoneNumberList = null)
    {
        $this->phoneNumberList = new SimpleContent($phoneNumberList);
        $this->phoneNumberList->setName('phoneNumberList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumberList
     */
    public function getPhoneNumberList()
    {
        return ($this->phoneNumberList) ? $this->phoneNumberList->getValue() : null;
    }
}
