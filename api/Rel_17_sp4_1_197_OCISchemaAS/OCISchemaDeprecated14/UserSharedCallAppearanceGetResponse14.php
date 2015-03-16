<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceMaximumAppearances;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSharedCallAppearanceGetRequest14.
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP Contact".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         Replaced By: UserSharedCallAppearanceGetResponse14sp2
 */
class UserSharedCallAppearanceGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSharedCallAppearanceGetResponse14';
    protected $alertAllAppearancesForClickToDialCalls;
    protected $maxAppearances;
    protected $enableMultipleCallArrangement;
    protected $multipleCallArrangementIsActive;
    protected $endpointTable;
    protected $allowBridgingBetweenLocations;
    protected $bridgeWarningTone;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserSharedCallAppearanceGetResponse14 $response
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
        $this->alertAllAppearancesForClickToDialCalls->setName('alertAllAppearancesForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllAppearancesForClickToDialCalls
     */
    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return ($this->alertAllAppearancesForClickToDialCalls) ? $this->alertAllAppearancesForClickToDialCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxAppearances($maxAppearances = null)
    {
        $this->maxAppearances = ($maxAppearances InstanceOf SharedCallAppearanceMaximumAppearances)
             ? $maxAppearances
             : new SharedCallAppearanceMaximumAppearances($maxAppearances);
        $this->maxAppearances->setName('maxAppearances');
        return $this;
    }

    /**
     * 
     * @return SharedCallAppearanceMaximumAppearances $maxAppearances
     */
    public function getMaxAppearances()
    {
        return ($this->maxAppearances) ? $this->maxAppearances->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableMultipleCallArrangement($enableMultipleCallArrangement = null)
    {
        $this->enableMultipleCallArrangement = new PrimitiveType($enableMultipleCallArrangement);
        $this->enableMultipleCallArrangement->setName('enableMultipleCallArrangement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMultipleCallArrangement
     */
    public function getEnableMultipleCallArrangement()
    {
        return ($this->enableMultipleCallArrangement) ? $this->enableMultipleCallArrangement->getValue() : null;
    }

    /**
     * 
     */
    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive = null)
    {
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
        return ($this->multipleCallArrangementIsActive) ? $this->multipleCallArrangementIsActive->getValue() : null;
    }

    /**
     * 
     */
    public function setEndpointTable(TableType $endpointTable = null)
    {
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
        return ($this->allowBridgingBetweenLocations) ? $this->allowBridgingBetweenLocations->getValue() : null;
    }

    /**
     * 
     */
    public function setBridgeWarningTone($bridgeWarningTone = null)
    {
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
        return ($this->bridgeWarningTone) ? $this->bridgeWarningTone->getValue() : null;
    }
}
