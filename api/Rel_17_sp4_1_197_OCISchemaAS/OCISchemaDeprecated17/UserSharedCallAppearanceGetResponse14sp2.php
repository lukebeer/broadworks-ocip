<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceMaximumAppearances;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceBridgeWarningTone;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSharedCallAppearanceGetRequest14sp2.
 *         The endpointTable contains columns:
 *           "Device Level", "Device Name", "Device Type", "Line/Port", "SIP Contact".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 */
class UserSharedCallAppearanceGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $name                                    = __CLASS__;
    protected $alertAllAppearancesForClickToDialCalls  = null;
    protected $maxAppearances                          = null;
    protected $allowSCACallRetrieve                    = null;
    protected $enableMultipleCallArrangement           = null;
    protected $multipleCallArrangementIsActive         = null;
    protected $endpointTable                           = null;
    protected $allowBridgingBetweenLocations           = null;
    protected $bridgeWarningTone                       = null;


    public function setAlertAllAppearancesForClickToDialCalls(xs:boolean $alertAllAppearancesForClickToDialCalls = null)
    {
    }

    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return (!$this->alertAllAppearancesForClickToDialCalls) ?: $this->alertAllAppearancesForClickToDialCalls->value();
    }

    public function setMaxAppearances($maxAppearances = null)
    {
        $this->maxAppearances = ($maxAppearances InstanceOf SharedCallAppearanceMaximumAppearances)
             ? $maxAppearances
             : new SharedCallAppearanceMaximumAppearances($maxAppearances);
    }

    public function getMaxAppearances()
    {
        return (!$this->maxAppearances) ?: $this->maxAppearances->value();
    }

    public function setAllowSCACallRetrieve(xs:boolean $allowSCACallRetrieve = null)
    {
    }

    public function getAllowSCACallRetrieve()
    {
        return (!$this->allowSCACallRetrieve) ?: $this->allowSCACallRetrieve->value();
    }

    public function setEnableMultipleCallArrangement(xs:boolean $enableMultipleCallArrangement = null)
    {
    }

    public function getEnableMultipleCallArrangement()
    {
        return (!$this->enableMultipleCallArrangement) ?: $this->enableMultipleCallArrangement->value();
    }

    public function setMultipleCallArrangementIsActive(xs:boolean $multipleCallArrangementIsActive = null)
    {
    }

    public function getMultipleCallArrangementIsActive()
    {
        return (!$this->multipleCallArrangementIsActive) ?: $this->multipleCallArrangementIsActive->value();
    }

    public function setEndpointTable(core:OCITable $endpointTable = null)
    {
    }

    public function getEndpointTable()
    {
        return (!$this->endpointTable) ?: $this->endpointTable->value();
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
}
