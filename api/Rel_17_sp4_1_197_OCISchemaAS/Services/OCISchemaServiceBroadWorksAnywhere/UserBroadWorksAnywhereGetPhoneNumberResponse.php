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
    public    $name                       = __CLASS__;
    protected $description                = null;
    protected $outboundAlternateNumber    = null;
    protected $isActive                   = null;
    protected $broadworksCallControl      = null;
    protected $useDiversionInhibitor      = null;
    protected $answerConfirmationRequired = null;
    protected $criteriaTable              = null;


    /**
     * BroadWorks Anywhere Phone Number Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf BroadWorksAnywherePhoneNumberDescription)
             ? $description
             : new BroadWorksAnywherePhoneNumberDescription($description);
    }

    /**
     * BroadWorks Anywhere Phone Number Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        $this->outboundAlternateNumber = ($outboundAlternateNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundAlternateNumber
             : new OutgoingDNorSIPURI($outboundAlternateNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getOutboundAlternateNumber()
    {
        return (!$this->outboundAlternateNumber) ?: $this->outboundAlternateNumber->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        $this->broadworksCallControl = (boolean) $broadworksCallControl;
    }

    /**
     * 
     */
    public function getBroadworksCallControl()
    {
        return (!$this->broadworksCallControl) ?: $this->broadworksCallControl->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor = null)
    {
        $this->useDiversionInhibitor = (boolean) $useDiversionInhibitor;
    }

    /**
     * 
     */
    public function getUseDiversionInhibitor()
    {
        return (!$this->useDiversionInhibitor) ?: $this->useDiversionInhibitor->getValue();
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        $this->answerConfirmationRequired = (boolean) $answerConfirmationRequired;
    }

    /**
     * 
     */
    public function getAnswerConfirmationRequired()
    {
        return (!$this->answerConfirmationRequired) ?: $this->answerConfirmationRequired->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        $this->criteriaTable =  $criteriaTable;
    }

    /**
     * 
     */
    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->getValue();
    }
}
