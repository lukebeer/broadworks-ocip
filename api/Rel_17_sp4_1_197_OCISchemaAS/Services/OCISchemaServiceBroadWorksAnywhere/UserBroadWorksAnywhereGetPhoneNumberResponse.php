<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywherePhoneNumberDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserBroadWorksAnywhereGetPhoneNumberRequest. 
 *         The criteria table's column headings are: "Is Active", "Criteria Name", "Time Schedule", 
 *         "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserBroadWorksAnywhereGetPhoneNumberResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserBroadWorksAnywhereGetPhoneNumberResponse';
    protected $description;
    protected $outboundAlternateNumber;
    protected $isActive;
    protected $broadworksCallControl;
    protected $useDiversionInhibitor;
    protected $answerConfirmationRequired;
    protected $criteriaTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\UserBroadWorksAnywhereGetPhoneNumberResponse $response
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
        $this->description = ($description InstanceOf BroadWorksAnywherePhoneNumberDescription)
             ? $description
             : new BroadWorksAnywherePhoneNumberDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywherePhoneNumberDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        $this->outboundAlternateNumber = ($outboundAlternateNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundAlternateNumber
             : new OutgoingDNorSIPURI($outboundAlternateNumber);
        $this->outboundAlternateNumber->setName('outboundAlternateNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $outboundAlternateNumber
     */
    public function getOutboundAlternateNumber()
    {
        return ($this->outboundAlternateNumber) ? $this->outboundAlternateNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        $this->broadworksCallControl = new PrimitiveType($broadworksCallControl);
        $this->broadworksCallControl->setName('broadworksCallControl');
        return $this;
    }

    /**
     * 
     * @return boolean $broadworksCallControl
     */
    public function getBroadworksCallControl()
    {
        return ($this->broadworksCallControl) ? $this->broadworksCallControl->getValue() : null;
    }

    /**
     * 
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor = null)
    {
        $this->useDiversionInhibitor = new PrimitiveType($useDiversionInhibitor);
        $this->useDiversionInhibitor->setName('useDiversionInhibitor');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitor
     */
    public function getUseDiversionInhibitor()
    {
        return ($this->useDiversionInhibitor) ? $this->useDiversionInhibitor->getValue() : null;
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        $this->answerConfirmationRequired = new PrimitiveType($answerConfirmationRequired);
        $this->answerConfirmationRequired->setName('answerConfirmationRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $answerConfirmationRequired
     */
    public function getAnswerConfirmationRequired()
    {
        return ($this->answerConfirmationRequired) ? $this->answerConfirmationRequired->getValue() : null;
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }
}
