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
    public    $name                                    = __CLASS__;
    protected $userId                                  = null;
    protected $alertAllAppearancesForClickToDialCalls  = null;
    protected $alertAllAppearancesForGroupPagingCalls  = null;
    protected $allowSCACallRetrieve                    = null;
    protected $multipleCallArrangementIsActive         = null;
    protected $allowBridgingBetweenLocations           = null;
    protected $bridgeWarningTone                       = null;
    protected $enableCallParkNotification              = null;

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

    public function setAlertAllAppearancesForClickToDialCalls(xs:boolean $alertAllAppearancesForClickToDialCalls = null)
    {
    }

    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return (!$this->alertAllAppearancesForClickToDialCalls) ?: $this->alertAllAppearancesForClickToDialCalls->value();
    }

    public function setAlertAllAppearancesForGroupPagingCalls(xs:boolean $alertAllAppearancesForGroupPagingCalls = null)
    {
    }

    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return (!$this->alertAllAppearancesForGroupPagingCalls) ?: $this->alertAllAppearancesForGroupPagingCalls->value();
    }

    public function setAllowSCACallRetrieve(xs:boolean $allowSCACallRetrieve = null)
    {
    }

    public function getAllowSCACallRetrieve()
    {
        return (!$this->allowSCACallRetrieve) ?: $this->allowSCACallRetrieve->value();
    }

    public function setMultipleCallArrangementIsActive(xs:boolean $multipleCallArrangementIsActive = null)
    {
    }

    public function getMultipleCallArrangementIsActive()
    {
        return (!$this->multipleCallArrangementIsActive) ?: $this->multipleCallArrangementIsActive->value();
    }

    public function setAllowBridgingBetweenLocations(xs:boolean $allowBridgingBetweenLocations = null)
    {
    }

    public function getAllowBridgingBetweenLocations()
    {
        return (!$this->allowBridgingBetweenLocations) ?: $this->allowBridgingBetweenLocations->value();
    }

    public function setBridgeWarningTone($bridgeWarningTone = null)
    {
        $this->bridgeWarningTone = ($bridgeWarningTone InstanceOf SharedCallAppearanceBridgeWarningTone)
             ? $bridgeWarningTone
             : new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
    }

    public function getBridgeWarningTone()
    {
        return (!$this->bridgeWarningTone) ?: $this->bridgeWarningTone->value();
    }

    public function setEnableCallParkNotification(xs:boolean $enableCallParkNotification = null)
    {
    }

    public function getEnableCallParkNotification()
    {
        return (!$this->enableCallParkNotification) ?: $this->enableCallParkNotification->value();
    }
}
