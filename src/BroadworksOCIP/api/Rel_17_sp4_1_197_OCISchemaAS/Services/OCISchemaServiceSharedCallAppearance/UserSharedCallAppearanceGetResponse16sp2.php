<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceMaximumAppearances;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserSharedCallAppearanceGetRequest16sp2.
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP Contact".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         
 *         The following elements are only used in AS data mode:
 *          enableCallParkNotification
 */
class UserSharedCallAppearanceGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSharedCallAppearanceGetResponse16sp2';
    protected $alertAllAppearancesForClickToDialCalls;
    protected $alertAllAppearancesForGroupPagingCalls;
    protected $maxAppearances;
    protected $allowSCACallRetrieve;
    protected $enableMultipleCallArrangement;
    protected $multipleCallArrangementIsActive;
    protected $endpointTable;
    protected $allowBridgingBetweenLocations;
    protected $bridgeWarningTone;
    protected $enableCallParkNotification;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance\UserSharedCallAppearanceGetResponse16sp2 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setMaxAppearances($maxAppearances = null)
    {
        $this->maxAppearances = ($maxAppearances InstanceOf SharedCallAppearanceMaximumAppearances)
             ? $maxAppearances
             : new SharedCallAppearanceMaximumAppearances($maxAppearances);
        $this->maxAppearances->setElementName('maxAppearances');
        return $this;
    }

    /**
     * 
     * @return SharedCallAppearanceMaximumAppearances $maxAppearances
     */
    public function getMaxAppearances()
    {
        return ($this->maxAppearances)
            ? $this->maxAppearances->getElementValue()
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
    public function setEnableMultipleCallArrangement($enableMultipleCallArrangement = null)
    {
        $this->enableMultipleCallArrangement = new PrimitiveType($enableMultipleCallArrangement);
        $this->enableMultipleCallArrangement->setElementName('enableMultipleCallArrangement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMultipleCallArrangement
     */
    public function getEnableMultipleCallArrangement()
    {
        return ($this->enableMultipleCallArrangement)
            ? $this->enableMultipleCallArrangement->getElementValue()
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
    public function setEndpointTable(TableType $endpointTable = null)
    {
        $this->endpointTable = $endpointTable;
        $this->endpointTable->setElementName('endpointTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getEndpointTable()
    {
        return $this->endpointTable;
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
