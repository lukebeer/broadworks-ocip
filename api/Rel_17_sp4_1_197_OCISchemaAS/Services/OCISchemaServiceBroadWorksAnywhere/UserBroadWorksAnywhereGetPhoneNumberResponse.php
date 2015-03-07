<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywherePhoneNumberDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserBroadWorksAnywhereGetPhoneNumberRequest. 
 *         The criteria table's column headings are: "Is Active", "Criteria Name", "Time Schedule", 
 *         "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserBroadWorksAnywhereGetPhoneNumberResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $description                 = null;
    protected $outboundAlternateNumber     = null;
    protected $isActive                    = null;
    protected $broadworksCallControl       = null;
    protected $useDiversionInhibitor       = null;
    protected $answerConfirmationRequired  = null;
    protected $criteriaTable               = null;


    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf BroadWorksAnywherePhoneNumberDescription)
             ? $description
             : new BroadWorksAnywherePhoneNumberDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        $this->outboundAlternateNumber = ($outboundAlternateNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundAlternateNumber
             : new OutgoingDNorSIPURI($outboundAlternateNumber);
    }

    public function getOutboundAlternateNumber()
    {
        return (!$this->outboundAlternateNumber) ?: $this->outboundAlternateNumber->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setBroadworksCallControl(xs:boolean $broadworksCallControl = null)
    {
    }

    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->value();
    }

    public function setUseDiversionInhibitor(xs:boolean $useDiversionInhibitor = null)
    {
    }

    public function getUseDiversionInhibitor()
    {
        return (!$this->useDiversionInhibitor) ?: $this->useDiversionInhibitor->value();
    }

    public function setAnswerConfirmationRequired(xs:boolean $answerConfirmationRequired = null)
    {
    }

    public function getAnswerConfirmationRequired()
    {
        return (!$this->answerConfirmationRequired) ?: $this->answerConfirmationRequired->value();
    }

    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
