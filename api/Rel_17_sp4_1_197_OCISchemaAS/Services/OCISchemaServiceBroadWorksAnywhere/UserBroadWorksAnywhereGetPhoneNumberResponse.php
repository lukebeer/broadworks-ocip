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
    public    $name                       = 'UserBroadWorksAnywhereGetPhoneNumberResponse';
    protected $description                = null;
    protected $outboundAlternateNumber    = null;
    protected $isActive                   = null;
    protected $broadworksCallControl      = null;
    protected $useDiversionInhibitor      = null;
    protected $answerConfirmationRequired = null;
    protected $criteriaTable              = null;

    /**
     * @return UserBroadWorksAnywhereGetPhoneNumberResponse
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
        if (!$description) return $this;
        $this->description = ($description InstanceOf BroadWorksAnywherePhoneNumberDescription)
             ? $description
             : new BroadWorksAnywherePhoneNumberDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywherePhoneNumberDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        if (!$outboundAlternateNumber) return $this;
        $this->outboundAlternateNumber = ($outboundAlternateNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundAlternateNumber
             : new OutgoingDNorSIPURI($outboundAlternateNumber);
        $this->outboundAlternateNumber->setName('outboundAlternateNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getOutboundAlternateNumber()
    {
        return $this->outboundAlternateNumber->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        if (!$broadworksCallControl) return $this;
        $this->broadworksCallControl = new PrimitiveType($broadworksCallControl);
        $this->broadworksCallControl->setName('broadworksCallControl');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBroadworksCallControl()
    {
        return $this->broadworksCallControl->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor = null)
    {
        if (!$useDiversionInhibitor) return $this;
        $this->useDiversionInhibitor = new PrimitiveType($useDiversionInhibitor);
        $this->useDiversionInhibitor->setName('useDiversionInhibitor');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseDiversionInhibitor()
    {
        return $this->useDiversionInhibitor->getValue();
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        if (!$answerConfirmationRequired) return $this;
        $this->answerConfirmationRequired = new PrimitiveType($answerConfirmationRequired);
        $this->answerConfirmationRequired->setName('answerConfirmationRequired');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAnswerConfirmationRequired()
    {
        return $this->answerConfirmationRequired->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        if (!$criteriaTable) return $this;
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
