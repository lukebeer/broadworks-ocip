<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The To dn criteria used on the call me now external number.
 */
class CallMeNowToDnCriteria extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallMeNowToDnCriteria';
    protected $toDnCriteriaSelection;
    protected $phoneNumber;

    public function __construct(
         $toDnCriteriaSelection = '',
         $phoneNumber = null
    ) {
        $this->setToDnCriteriaSelection($toDnCriteriaSelection);
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
    public function setToDnCriteriaSelection($toDnCriteriaSelection = null)
    {
        $this->toDnCriteriaSelection = new SimpleContent($toDnCriteriaSelection);
        $this->toDnCriteriaSelection->setElementName('toDnCriteriaSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $toDnCriteriaSelection
     */
    public function getToDnCriteriaSelection()
    {
        return ($this->toDnCriteriaSelection)
            ? $this->toDnCriteriaSelection->getElementValue()
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
