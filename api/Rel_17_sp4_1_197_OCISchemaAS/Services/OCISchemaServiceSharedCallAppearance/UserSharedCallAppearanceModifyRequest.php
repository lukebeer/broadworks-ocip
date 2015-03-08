<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user's Shared Call Appearance service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *          enableCallParkNotification
 */
class UserSharedCallAppearanceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                   = __CLASS__;
    protected $userId                                 = null;
    protected $alertAllAppearancesForClickToDialCalls = null;
    protected $alertAllAppearancesForGroupPagingCalls = null;
    protected $allowSCACallRetrieve                   = null;
    protected $multipleCallArrangementIsActive        = null;
    protected $allowBridgingBetweenLocations          = null;
    protected $bridgeWarningTone                      = null;
    protected $enableCallParkNotification             = null;

    public function __construct(
         $userId,
         $alertAllAppearancesForClickToDialCalls = null,
         $alertAllAppearancesForGroupPagingCalls = null,
         $allowSCACallRetrieve = null,
         $multipleCallArrangementIsActive = null,
         $allowBridgingBetweenLocations = null,
         $bridgeWarningTone = null,
         $enableCallParkNotification = null
    ) {
        $this->setUserId($userId);
        $this->setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls);
        $this->setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls);
        $this->setAllowSCACallRetrieve($allowSCACallRetrieve);
        $this->setMultipleCallArrangementIsActive($multipleCallArrangementIsActive);
        $this->setAllowBridgingBetweenLocations($allowBridgingBetweenLocations);
        $this->setBridgeWarningTone($bridgeWarningTone);
        $this->setEnableCallParkNotification($enableCallParkNotification);
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
     * 
     */
    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls = null)
    {
        $this->alertAllAppearancesForClickToDialCalls = (boolean) $alertAllAppearancesForClickToDialCalls;
    }

    /**
     * 
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return (!$this->alertAllAppearancesForClickToDialCalls) ?: $this->alertAllAppearancesForClickToDialCalls->getValue();
    }

    /**
     * 
     */
    public function setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls = null)
    {
        $this->alertAllAppearancesForGroupPagingCalls = (boolean) $alertAllAppearancesForGroupPagingCalls;
    }

    /**
     * 
     */
    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return (!$this->alertAllAppearancesForGroupPagingCalls) ?: $this->alertAllAppearancesForGroupPagingCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowSCACallRetrieve($allowSCACallRetrieve = null)
    {
        $this->allowSCACallRetrieve = (boolean) $allowSCACallRetrieve;
    }

    /**
     * 
     */
    public function getAllowSCACallRetrieve()
    {
        return (!$this->allowSCACallRetrieve) ?: $this->allowSCACallRetrieve->getValue();
    }

    /**
     * 
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive = null)
    {
        $this->multipleCallArrangementIsActive = (boolean) $multipleCallArrangementIsActive;
    }

    /**
     * 
     */
    public function getMultipleCallArrangementIsActive()
    {
        return (!$this->multipleCallArrangementIsActive) ?: $this->multipleCallArrangementIsActive->getValue();
    }

    /**
     * 
     */
    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations = null)
    {
        $this->allowBridgingBetweenLocations = (boolean) $allowBridgingBetweenLocations;
    }

    /**
     * 
     */
    public function getAllowBridgingBetweenLocations()
    {
        return (!$this->allowBridgingBetweenLocations) ?: $this->allowBridgingBetweenLocations->getValue();
    }

    /**
     * Warning tone types for Shared Call Appearance.
     *         The bridge warning tone types are none, barge-in, barge-in repeat.
     */
    public function setBridgeWarningTone($bridgeWarningTone = null)
    {
        $this->bridgeWarningTone = ($bridgeWarningTone InstanceOf SharedCallAppearanceBridgeWarningTone)
             ? $bridgeWarningTone
             : new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
    }

    /**
     * Warning tone types for Shared Call Appearance.
     *         The bridge warning tone types are none, barge-in, barge-in repeat.
     */
    public function getBridgeWarningTone()
    {
        return (!$this->bridgeWarningTone) ?: $this->bridgeWarningTone->getValue();
    }

    /**
     * 
     */
    public function setEnableCallParkNotification($enableCallParkNotification = null)
    {
        $this->enableCallParkNotification = (boolean) $enableCallParkNotification;
    }

    /**
     * 
     */
    public function getEnableCallParkNotification()
    {
        return (!$this->enableCallParkNotification) ?: $this->enableCallParkNotification->getValue();
    }
}
