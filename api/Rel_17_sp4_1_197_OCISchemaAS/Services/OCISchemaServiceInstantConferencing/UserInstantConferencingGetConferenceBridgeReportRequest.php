<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get conference details reports.
 *         The response is either UserInstantConferencingGetConferenceBridgeReportResponse or ErrorResponse.
 */
class UserInstantConferencingGetConferenceBridgeReportRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $userId                      = null;
    protected $bridgeServiceUserId         = null;
    protected $reportStartDate             = null;
    protected $reportEndDate               = null;
    protected $billingCode                 = null;
    protected $reportDeliveryEmailAddress  = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId,
         $reportStartDate,
         $reportEndDate,
         $billingCode = null,
         $reportDeliveryEmailAddress = null
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setReportStartDate($reportStartDate);
        $this->setReportEndDate($reportEndDate);
        $this->setBillingCode($billingCode);
        $this->setReportDeliveryEmailAddress($reportDeliveryEmailAddress);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
    }

    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->value();
    }

    public function setReportStartDate(xs:date $reportStartDate = null)
    {
    }

    public function getReportStartDate()
    {
        return (!$this->reportStartDate) ?: $this->reportStartDate->value();
    }

    public function setReportEndDate(xs:date $reportEndDate = null)
    {
    }

    public function getReportEndDate()
    {
        return (!$this->reportEndDate) ?: $this->reportEndDate->value();
    }

    public function setBillingCode($billingCode = null)
    {
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
    }

    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->value();
    }

    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
    }

    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->value();
    }
}
