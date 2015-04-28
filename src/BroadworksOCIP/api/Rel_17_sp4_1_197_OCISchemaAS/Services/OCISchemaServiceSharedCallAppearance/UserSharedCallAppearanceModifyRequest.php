<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's Shared Call Appearance service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *          enableCallParkNotification
 */
class UserSharedCallAppearanceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSharedCallAppearanceModifyRequest';
    protected $userId;
    protected $alertAllAppearancesForClickToDialCalls;
    protected $alertAllAppearancesForGroupPagingCalls;
    protected $allowSCACallRetrieve;
    protected $multipleCallArrangementIsActive;
    protected $allowBridgingBetweenLocations;
    protected $bridgeWarningTone;
    protected $enableCallParkNotification;

    public function __construct(
         $userId = '',
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls = null)
    {
        $this->alertAllAppearancesForClickToDialCalls = new PrimitiveType($alertAllAppearancesForClickToDialCalls);
        $this->alertAllAppearancesForClickToDialCalls->setElementName('alertAllAppearancesForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllAppearancesForClickToDialCalls
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return ($this->alertAllAppearancesForClickToDialCalls)
            ? $this->alertAllAppearancesForClickToDialCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlertAllAppearancesForGroupPagingCalls($alertAllAppearancesForGroupPagingCalls = null)
    {
        $this->alertAllAppearancesForGroupPagingCalls = new PrimitiveType($alertAllAppearancesForGroupPagingCalls);
        $this->alertAllAppearancesForGroupPagingCalls->setElementName('alertAllAppearancesForGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllAppearancesForGroupPagingCalls
     */
    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return ($this->alertAllAppearancesForGroupPagingCalls)
            ? $this->alertAllAppearancesForGroupPagingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowSCACallRetrieve($allowSCACallRetrieve = null)
    {
        $this->allowSCACallRetrieve = new PrimitiveType($allowSCACallRetrieve);
        $this->allowSCACallRetrieve->setElementName('allowSCACallRetrieve');
        return $this;
    }

    /**
     * 
     * @return boolean $allowSCACallRetrieve
     */
    public function getAllowSCACallRetrieve()
    {
        return ($this->allowSCACallRetrieve)
            ? $this->allowSCACallRetrieve->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive = null)
    {
        $this->multipleCallArrangementIsActive = new PrimitiveType($multipleCallArrangementIsActive);
        $this->multipleCallArrangementIsActive->setElementName('multipleCallArrangementIsActive');
        return $this;
    }

    /**
     * 
     * @return boolean $multipleCallArrangementIsActive
     */
    public function getMultipleCallArrangementIsActive()
    {
        return ($this->multipleCallArrangementIsActive)
            ? $this->multipleCallArrangementIsActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowBridgingBetweenLocations($allowBridgingBetweenLocations = null)
    {
        $this->allowBridgingBetweenLocations = new PrimitiveType($allowBridgingBetweenLocations);
        $this->allowBridgingBetweenLocations->setElementName('allowBridgingBetweenLocations');
        return $this;
    }

    /**
     * 
     * @return boolean $allowBridgingBetweenLocations
     */
    public function getAllowBridgingBetweenLocations()
    {
        return ($this->allowBridgingBetweenLocations)
            ? $this->allowBridgingBetweenLocations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBridgeWarningTone($bridgeWarningTone = null)
    {
        $this->bridgeWarningTone = ($bridgeWarningTone InstanceOf SharedCallAppearanceBridgeWarningTone)
             ? $bridgeWarningTone
             : new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
        $this->bridgeWarningTone->setElementName('bridgeWarningTone');
        return $this;
    }

    /**
     * 
     * @return SharedCallAppearanceBridgeWarningTone $bridgeWarningTone
     */
    public function getBridgeWarningTone()
    {
        return ($this->bridgeWarningTone)
            ? $this->bridgeWarningTone->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableCallParkNotification($enableCallParkNotification = null)
    {
        $this->enableCallParkNotification = new PrimitiveType($enableCallParkNotification);
        $this->enableCallParkNotification->setElementName('enableCallParkNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $enableCallParkNotification
     */
    public function getEnableCallParkNotification()
    {
        return ($this->enableCallParkNotification)
            ? $this->enableCallParkNotification->getElementValue()
            : null;
    }
}
