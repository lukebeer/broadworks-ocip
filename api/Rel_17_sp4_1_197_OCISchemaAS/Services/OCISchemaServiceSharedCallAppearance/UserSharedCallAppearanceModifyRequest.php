<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's Shared Call Appearance service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *          enableCallParkNotification
 */
class UserSharedCallAppearanceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                   = 'UserSharedCallAppearanceModifyRequest';
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls = null)
    {
        if (!$alertAllAppearancesForClickToDialCalls) return $this;
        $this->alertAllAppearancesForClickToDialCalls = new PrimitiveType($alertAllAppearancesForClickToDialCalls);
        $this->alertAllAppearancesForClickToDialCalls->setName('alertAllAppearancesForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllAppearancesForClickToDialCalls
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return $this->alertAllAppearancesForClickToDialCalls->getValue();
    }

    /**
     * 
     */
    public function setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls = null)
    {
        if (!$alertAllAppearancesForGroupPagingCalls) return $this;
        $this->alertAllAppearancesForGroupPagingCalls = new PrimitiveType($alertAllAppearancesForGroupPagingCalls);
        $this->alertAllAppearancesForGroupPagingCalls->setName('alertAllAppearancesForGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllAppearancesForGroupPagingCalls
     */
    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return $this->alertAllAppearancesForGroupPagingCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowSCACallRetrieve($allowSCACallRetrieve = null)
    {
        if (!$allowSCACallRetrieve) return $this;
        $this->allowSCACallRetrieve = new PrimitiveType($allowSCACallRetrieve);
        $this->allowSCACallRetrieve->setName('allowSCACallRetrieve');
        return $this;
    }

    /**
     * 
     * @return boolean $allowSCACallRetrieve
     */
    public function getAllowSCACallRetrieve()
    {
        return $this->allowSCACallRetrieve->getValue();
    }

    /**
     * 
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive = null)
    {
        if (!$multipleCallArrangementIsActive) return $this;
        $this->multipleCallArrangementIsActive = new PrimitiveType($multipleCallArrangementIsActive);
        $this->multipleCallArrangementIsActive->setName('multipleCallArrangementIsActive');
        return $this;
    }

    /**
     * 
     * @return boolean $multipleCallArrangementIsActive
     */
    public function getMultipleCallArrangementIsActive()
    {
        return $this->multipleCallArrangementIsActive->getValue();
    }

    /**
     * 
     */
    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations = null)
    {
        if (!$allowBridgingBetweenLocations) return $this;
        $this->allowBridgingBetweenLocations = new PrimitiveType($allowBridgingBetweenLocations);
        $this->allowBridgingBetweenLocations->setName('allowBridgingBetweenLocations');
        return $this;
    }

    /**
     * 
     * @return boolean $allowBridgingBetweenLocations
     */
    public function getAllowBridgingBetweenLocations()
    {
        return $this->allowBridgingBetweenLocations->getValue();
    }

    /**
     * 
     */
    public function setBridgeWarningTone($bridgeWarningTone = null)
    {
        if (!$bridgeWarningTone) return $this;
        $this->bridgeWarningTone = ($bridgeWarningTone InstanceOf SharedCallAppearanceBridgeWarningTone)
             ? $bridgeWarningTone
             : new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
        $this->bridgeWarningTone->setName('bridgeWarningTone');
        return $this;
    }

    /**
     * 
     * @return SharedCallAppearanceBridgeWarningTone $bridgeWarningTone
     */
    public function getBridgeWarningTone()
    {
        return $this->bridgeWarningTone->getValue();
    }

    /**
     * 
     */
    public function setEnableCallParkNotification($enableCallParkNotification = null)
    {
        if (!$enableCallParkNotification) return $this;
        $this->enableCallParkNotification = new PrimitiveType($enableCallParkNotification);
        $this->enableCallParkNotification->setName('enableCallParkNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $enableCallParkNotification
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification->getValue();
    }
}
