<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:date;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get conference details reports.
 *         The response is either UserInstantConferencingGetConferenceBridgeReportResponse or ErrorResponse.
 */
class UserInstantConferencingGetConferenceBridgeReportRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $bridgeServiceUserId,
             $reportStartDate,
             $reportEndDate,
             $billingCode=null,
             $reportDeliveryEmailAddress=null
    ) {
        $this->userId                     = new UserId($userId);
        $this->bridgeServiceUserId        = new UserId($bridgeServiceUserId);
        $this->reportStartDate            = $reportStartDate;
        $this->reportEndDate              = $reportEndDate;
        $this->billingCode                = $billingCode;
        $this->reportDeliveryEmailAddress = new EmailAddress($reportDeliveryEmailAddress);
        $this->args                       = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setBridgeServiceUserId($bridgeServiceUserId)
    {
        $bridgeServiceUserId and $this->bridgeServiceUserId = new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }

    public function setReportStartDate($reportStartDate)
    {
        $reportStartDate and $this->reportStartDate = new xs:date($reportStartDate);
    }

    public function getReportStartDate()
    {
        return (!$this->reportStartDate) ?: $this->reportStartDate->value();
    }

    public function setReportEndDate($reportEndDate)
    {
        $reportEndDate and $this->reportEndDate = new xs:date($reportEndDate);
    }

    public function getReportEndDate()
    {
        return (!$this->reportEndDate) ?: $this->reportEndDate->value();
    }

    public function setBillingCode($billingCode)
    {
        $billingCode and $this->billingCode = new InstantConferencingBillingCode($billingCode);
    }

    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->value();
    }

    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress)
    {
        $reportDeliveryEmailAddress and $this->reportDeliveryEmailAddress = new EmailAddress($reportDeliveryEmailAddress);
    }

    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->value();
    }
}
