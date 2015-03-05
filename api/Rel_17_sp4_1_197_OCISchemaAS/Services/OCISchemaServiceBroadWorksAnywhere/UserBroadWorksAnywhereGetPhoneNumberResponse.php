<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksAnywherePhoneNumberDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserBroadWorksAnywhereGetPhoneNumberRequest. 
 *         The criteria table's column headings are: "Is Active", "Criteria Name", "Time Schedule", 
 *         "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserBroadWorksAnywhereGetPhoneNumberResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $description=null,
             $outboundAlternateNumber=null,
             $isActive,
             $broadworksCallControl,
             $useDiversionInhibitor,
             $answerConfirmationRequired,
             $criteriaTable
    ) {
        $this->description                = $description;
        $this->outboundAlternateNumber    = new OutgoingDNorSIPURI($outboundAlternateNumber);
        $this->isActive                   = $isActive;
        $this->broadworksCallControl      = $broadworksCallControl;
        $this->useDiversionInhibitor      = $useDiversionInhibitor;
        $this->answerConfirmationRequired = $answerConfirmationRequired;
        $this->criteriaTable              = $criteriaTable;
        $this->args                       = func_get_args();
    }

    public function setDescription($description)
    {
        $description and $this->description = new BroadWorksAnywherePhoneNumberDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setOutboundAlternateNumber($outboundAlternateNumber)
    {
        $outboundAlternateNumber and $this->outboundAlternateNumber = new OutgoingDNorSIPURI($outboundAlternateNumber);
    }

    public function getOutboundAlternateNumber()
    {
        return (!$this->outboundAlternateNumber) ?: $this->outboundAlternateNumber->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setBroadworksCallControl($broadworksCallControl)
    {
        $broadworksCallControl and $this->broadworksCallControl = new xs:boolean($broadworksCallControl);
    }

    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->value();
    }

    public function setUseDiversionInhibitor($useDiversionInhibitor)
    {
        $useDiversionInhibitor and $this->useDiversionInhibitor = new xs:boolean($useDiversionInhibitor);
    }

    public function getUseDiversionInhibitor()
    {
        return (!$this->useDiversionInhibitor) ?: $this->useDiversionInhibitor->value();
    }

    public function setAnswerConfirmationRequired($answerConfirmationRequired)
    {
        $answerConfirmationRequired and $this->answerConfirmationRequired = new xs:boolean($answerConfirmationRequired);
    }

    public function getAnswerConfirmationRequired()
    {
        return (!$this->answerConfirmationRequired) ?: $this->answerConfirmationRequired->value();
    }

    public function setCriteriaTable($criteriaTable)
    {
        $criteriaTable and $this->criteriaTable = new core:OCITable($criteriaTable);
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
