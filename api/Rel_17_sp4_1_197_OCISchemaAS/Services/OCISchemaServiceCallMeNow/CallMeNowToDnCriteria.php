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
 * The To dn criteria used on the call me now external number.
 */
class CallMeNowToDnCriteria extends ComplexType implements ComplexInterface
{
    public    $name                  = 'CallMeNowToDnCriteria';
    protected $toDnCriteriaSelection = null;
    protected $phoneNumber           = null;

    public function __construct(
         $toDnCriteriaSelection,
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
        if (!$toDnCriteriaSelection) return $this;
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
        return $this->toDnCriteriaSelection->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }
}
