<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceMaximumAppearances;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name                                   = 'UserSharedCallAppearanceGetResponse16sp2';
    protected $alertAllAppearancesForClickToDialCalls = null;
    protected $alertAllAppearancesForGroupPagingCalls = null;
    protected $maxAppearances                         = null;
    protected $allowSCACallRetrieve                   = null;
    protected $enableMultipleCallArrangement          = null;
    protected $multipleCallArrangementIsActive        = null;
    protected $endpointTable                          = null;
    protected $allowBridgingBetweenLocations          = null;
    protected $bridgeWarningTone                      = null;
    protected $enableCallParkNotification             = null;

    /**
     * @return UserSharedCallAppearanceGetResponse16sp2
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
        if (!$alertAllAppearancesForClickToDialCalls) return $this;
        $this->alertAllAppearancesForClickToDialCalls = new PrimitiveType($alertAllAppearancesForClickToDialCalls);
        $this->alertAllAppearancesForClickToDialCalls->setName('alertAllAppearancesForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
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
     * @return xs:boolean
     */
    public function getAlertAllAppearancesForGroupPagingCalls()
    {
        return $this->alertAllAppearancesForGroupPagingCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxAppearances($maxAppearances = null)
    {
        if (!$maxAppearances) return $this;
        $this->maxAppearances = ($maxAppearances InstanceOf SharedCallAppearanceMaximumAppearances)
             ? $maxAppearances
             : new SharedCallAppearanceMaximumAppearances($maxAppearances);
        $this->maxAppearances->setName('maxAppearances');
        return $this;
    }

    /**
     * 
     * @return SharedCallAppearanceMaximumAppearances
     */
    public function getMaxAppearances()
    {
        return $this->maxAppearances->getValue();
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
     * @return xs:boolean
     */
    public function getAllowSCACallRetrieve()
    {
        return $this->allowSCACallRetrieve->getValue();
    }

    /**
     * 
     */
    public function setEnableMultipleCallArrangement($enableMultipleCallArrangement = null)
    {
        if (!$enableMultipleCallArrangement) return $this;
        $this->enableMultipleCallArrangement = new PrimitiveType($enableMultipleCallArrangement);
        $this->enableMultipleCallArrangement->setName('enableMultipleCallArrangement');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableMultipleCallArrangement()
    {
        return $this->enableMultipleCallArrangement->getValue();
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
     * @return xs:boolean
     */
    public function getMultipleCallArrangementIsActive()
    {
        return $this->multipleCallArrangementIsActive->getValue();
    }

    /**
     * 
     */
    public function setEndpointTable(TableType $endpointTable = null)
    {
        if (!$endpointTable) return $this;
        $this->endpointTable = $endpointTable;
        $this->endpointTable->setName('endpointTable');
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
        if (!$allowBridgingBetweenLocations) return $this;
        $this->allowBridgingBetweenLocations = new PrimitiveType($allowBridgingBetweenLocations);
        $this->allowBridgingBetweenLocations->setName('allowBridgingBetweenLocations');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
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
     * @return SharedCallAppearanceBridgeWarningTone
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
     * @return xs:boolean
     */
    public function getEnableCallParkNotification()
    {
        return $this->enableCallParkNotification->getValue();
    }
}
