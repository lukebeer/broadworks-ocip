<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
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
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $alertAllAppearancesForClickToDialCalls=null,
             $alertAllAppearancesForGroupPagingCalls=null,
             $allowSCACallRetrieve=null,
             $multipleCallArrangementIsActive=null,
             $allowBridgingBetweenLocations=null,
             $bridgeWarningTone=null,
             $enableCallParkNotification=null
    ) {
        $this->userId                                 = new UserId($userId);
        $this->alertAllAppearancesForClickToDialCalls = $alertAllAppearancesForClickToDialCalls;
        $this->alertAllAppearancesForGroupPagingCalls = $alertAllAppearancesForGroupPagingCalls;
        $this->allowSCACallRetrieve                   = $allowSCACallRetrieve;
        $this->multipleCallArrangementIsActive        = $multipleCallArrangementIsActive;
        $this->allowBridgingBetweenLocations          = $allowBridgingBetweenLocations;
        $this->bridgeWarningTone                      = new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
        $this->enableCallParkNotification             = $enableCallParkNotification;
        $this->args                                   = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls)
    {
        $alertAllAppearancesForClickToDialCalls and $this->alertAllAppearancesForClickToDialCalls = new xs:boolean($alertAllAppearancesForClickToDialCalls);
    }

    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return (!$this->alertAllAppearancesForClickToDialCalls) ?: $this->alertAllAppearancesForClickToDialCalls->value();
    }

    public function setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls)
    {
        $alertAllAppearancesForGroupPagingCalls and $this->alertAllAppearancesForGroupPagingCalls = new xs:boolean($alertAllAppearancesForGroupPagingCalls);
    }

    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return (!$this->alertAllAppearancesForGroupPagingCalls) ?: $this->alertAllAppearancesForGroupPagingCalls->value();
    }

    public function setAllowSCACallRetrieve($allowSCACallRetrieve)
    {
        $allowSCACallRetrieve and $this->allowSCACallRetrieve = new xs:boolean($allowSCACallRetrieve);
    }

    public function getAllowSCACallRetrieve()
    {
        return (!$this->allowSCACallRetrieve) ?: $this->allowSCACallRetrieve->value();
    }

    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive)
    {
        $multipleCallArrangementIsActive and $this->multipleCallArrangementIsActive = new xs:boolean($multipleCallArrangementIsActive);
    }

    public function getMultipleCallArrangementIsActive()
    {
        return (!$this->multipleCallArrangementIsActive) ?: $this->multipleCallArrangementIsActive->value();
    }

    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations)
    {
        $allowBridgingBetweenLocations and $this->allowBridgingBetweenLocations = new xs:boolean($allowBridgingBetweenLocations);
    }

    public function getAllowBridgingBetweenLocations()
    {
        return (!$this->allowBridgingBetweenLocations) ?: $this->allowBridgingBetweenLocations->value();
    }

    public function setBridgeWarningTone($bridgeWarningTone)
    {
        $bridgeWarningTone and $this->bridgeWarningTone = new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
    }

    public function getBridgeWarningTone()
    {
        return (!$this->bridgeWarningTone) ?: $this->bridgeWarningTone->value();
    }

    public function setEnableCallParkNotification($enableCallParkNotification)
    {
        $enableCallParkNotification and $this->enableCallParkNotification = new xs:boolean($enableCallParkNotification);
    }

    public function getEnableCallParkNotification()
    {
        return (!$this->enableCallParkNotification) ?: $this->enableCallParkNotification->value();
    }
}
