<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDPrefixDigits;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemDialableCallerIDCriteriaGetRequest.
 *         The response contains the Dialable Caller ID Criteria information.
 */
class SystemDialableCallerIDCriteriaGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemDialableCallerIDCriteriaGetResponse';
    protected $description;
    protected $prefixDigits;
    protected $matchCallType;
    protected $matchAlternateCallIndicator;
    protected $matchLocalCategory;
    protected $matchNationalCategory;
    protected $matchInterlataCategory;
    protected $matchIntralataCategory;
    protected $matchInternationalCategory;
    protected $matchPrivateCategory;
    protected $matchEmergencyCategory;
    protected $matchOtherCategory;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDialableCallerIDCriteriaGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DialableCallerIDCriteriaDescription)
             ? $description
             : new DialableCallerIDCriteriaDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setPrefixDigits($prefixDigits = null)
    {
        $this->prefixDigits = ($prefixDigits InstanceOf DialableCallerIDPrefixDigits)
             ? $prefixDigits
             : new DialableCallerIDPrefixDigits($prefixDigits);
        $this->prefixDigits->setName('prefixDigits');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDPrefixDigits $prefixDigits
     */
    public function getPrefixDigits()
    {
        return ($this->prefixDigits) ? $this->prefixDigits->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchCallType($matchCallType = null)
    {
        $this->matchCallType = ($matchCallType InstanceOf CommunicationBarringCallType)
             ? $matchCallType
             : new CommunicationBarringCallType($matchCallType);
        $this->matchCallType->setName('matchCallType');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCallType $matchCallType
     */
    public function getMatchCallType()
    {
        return ($this->matchCallType) ? $this->matchCallType->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator = null)
    {
        $this->matchAlternateCallIndicator = ($matchAlternateCallIndicator InstanceOf CommunicationBarringAlternateCallIndicator)
             ? $matchAlternateCallIndicator
             : new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
        $this->matchAlternateCallIndicator->setName('matchAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringAlternateCallIndicator $matchAlternateCallIndicator
     */
    public function getMatchAlternateCallIndicator()
    {
        return ($this->matchAlternateCallIndicator) ? $this->matchAlternateCallIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchLocalCategory($matchLocalCategory = null)
    {
        $this->matchLocalCategory = new PrimitiveType($matchLocalCategory);
        $this->matchLocalCategory->setName('matchLocalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchLocalCategory
     */
    public function getMatchLocalCategory()
    {
        return ($this->matchLocalCategory) ? $this->matchLocalCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchNationalCategory($matchNationalCategory = null)
    {
        $this->matchNationalCategory = new PrimitiveType($matchNationalCategory);
        $this->matchNationalCategory->setName('matchNationalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchNationalCategory
     */
    public function getMatchNationalCategory()
    {
        return ($this->matchNationalCategory) ? $this->matchNationalCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchInterlataCategory($matchInterlataCategory = null)
    {
        $this->matchInterlataCategory = new PrimitiveType($matchInterlataCategory);
        $this->matchInterlataCategory->setName('matchInterlataCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInterlataCategory
     */
    public function getMatchInterlataCategory()
    {
        return ($this->matchInterlataCategory) ? $this->matchInterlataCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchIntralataCategory($matchIntralataCategory = null)
    {
        $this->matchIntralataCategory = new PrimitiveType($matchIntralataCategory);
        $this->matchIntralataCategory->setName('matchIntralataCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchIntralataCategory
     */
    public function getMatchIntralataCategory()
    {
        return ($this->matchIntralataCategory) ? $this->matchIntralataCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchInternationalCategory($matchInternationalCategory = null)
    {
        $this->matchInternationalCategory = new PrimitiveType($matchInternationalCategory);
        $this->matchInternationalCategory->setName('matchInternationalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInternationalCategory
     */
    public function getMatchInternationalCategory()
    {
        return ($this->matchInternationalCategory) ? $this->matchInternationalCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchPrivateCategory($matchPrivateCategory = null)
    {
        $this->matchPrivateCategory = new PrimitiveType($matchPrivateCategory);
        $this->matchPrivateCategory->setName('matchPrivateCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchPrivateCategory
     */
    public function getMatchPrivateCategory()
    {
        return ($this->matchPrivateCategory) ? $this->matchPrivateCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory = null)
    {
        $this->matchEmergencyCategory = new PrimitiveType($matchEmergencyCategory);
        $this->matchEmergencyCategory->setName('matchEmergencyCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchEmergencyCategory
     */
    public function getMatchEmergencyCategory()
    {
        return ($this->matchEmergencyCategory) ? $this->matchEmergencyCategory->getValue() : null;
    }

    /**
     * 
     */
    public function setMatchOtherCategory($matchOtherCategory = null)
    {
        $this->matchOtherCategory = new PrimitiveType($matchOtherCategory);
        $this->matchOtherCategory->setName('matchOtherCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchOtherCategory
     */
    public function getMatchOtherCategory()
    {
        return ($this->matchOtherCategory) ? $this->matchOtherCategory->getValue() : null;
    }
}
