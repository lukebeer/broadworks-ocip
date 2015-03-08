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
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceBridgeReportResponse';
    public    $name                       = __CLASS__;
    protected $userId                     = null;
    protected $bridgeServiceUserId        = null;
    protected $reportStartDate            = null;
    protected $reportEndDate              = null;
    protected $billingCode                = null;
    protected $reportDeliveryEmailAddress = null;

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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getBridgeServiceUserId()
    {
        return (!$this->bridgeServiceUserId) ?: $this->bridgeServiceUserId->getValue();
    }

    /**
     * 
     */
    public function setReportStartDate(xs:date $reportStartDate = null)
    {
        $this->reportStartDate =  $reportStartDate;
    }

    /**
     * 
     */
    public function getReportStartDate()
    {
        return (!$this->reportStartDate) ?: $this->reportStartDate->getValue();
    }

    /**
     * 
     */
    public function setReportEndDate(xs:date $reportEndDate = null)
    {
        $this->reportEndDate =  $reportEndDate;
    }

    /**
     * 
     */
    public function getReportEndDate()
    {
        return (!$this->reportEndDate) ?: $this->reportEndDate->getValue();
    }

    /**
     * Instant conferencing project billing code.
     */
    public function setBillingCode($billingCode = null)
    {
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
    }

    /**
     * Instant conferencing project billing code.
     */
    public function getBillingCode()
    {
        return (!$this->billingCode) ?: $this->billingCode->getValue();
    }

    /**
     * Email Address
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
    }

    /**
     * Email Address
     */
    public function getReportDeliveryEmailAddress()
    {
        return (!$this->reportDeliveryEmailAddress) ?: $this->reportDeliveryEmailAddress->getValue();
    }
}
