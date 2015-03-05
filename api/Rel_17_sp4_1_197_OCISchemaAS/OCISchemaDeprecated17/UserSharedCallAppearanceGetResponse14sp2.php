<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SharedCallAppearanceMaximumAppearances;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
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
    public    $name = __CLASS__;

    public function __construct(
             $alertAllAppearancesForClickToDialCalls,
             $maxAppearances,
             $allowSCACallRetrieve,
             $enableMultipleCallArrangement,
             $multipleCallArrangementIsActive,
             $endpointTable,
             $allowBridgingBetweenLocations,
             $bridgeWarningTone
    ) {
        $this->alertAllAppearancesForClickToDialCalls = $alertAllAppearancesForClickToDialCalls;
        $this->maxAppearances                         = new SharedCallAppearanceMaximumAppearances($maxAppearances);
        $this->allowSCACallRetrieve                   = $allowSCACallRetrieve;
        $this->enableMultipleCallArrangement          = $enableMultipleCallArrangement;
        $this->multipleCallArrangementIsActive        = $multipleCallArrangementIsActive;
        $this->endpointTable                          = $endpointTable;
        $this->allowBridgingBetweenLocations          = $allowBridgingBetweenLocations;
        $this->bridgeWarningTone                      = new SharedCallAppearanceBridgeWarningTone($bridgeWarningTone);
        $this->args                                   = func_get_args();
    }

    public function setAlertAllAppearancesForClickToDialCalls($alertAllAppearancesForClickToDialCalls)
    {
        $alertAllAppearancesForClickToDialCalls and $this->alertAllAppearancesForClickToDialCalls = new xs:boolean($alertAllAppearancesForClickToDialCalls);
    }

    public function getAlertAllAppearancesForClickToDialCalls()
    {
        return (!$this->alertAllAppearancesForClickToDialCalls) ?: $this->alertAllAppearancesForClickToDialCalls->value();
    }

    public function setMaxAppearances($maxAppearances)
    {
        $maxAppearances and $this->maxAppearances = new SharedCallAppearanceMaximumAppearances($maxAppearances);
    }

    public function getMaxAppearances()
    {
        return (!$this->maxAppearances) ?: $this->maxAppearances->value();
    }

    public function setAllowSCACallRetrieve($allowSCACallRetrieve)
    {
        $allowSCACallRetrieve and $this->allowSCACallRetrieve = new xs:boolean($allowSCACallRetrieve);
    }

    public function getAllowSCACallRetrieve()
    {
        return (!$this->allowSCACallRetrieve) ?: $this->allowSCACallRetrieve->value();
    }

    public function setEnableMultipleCallArrangement($enableMultipleCallArrangement)
    {
        $enableMultipleCallArrangement and $this->enableMultipleCallArrangement = new xs:boolean($enableMultipleCallArrangement);
    }

    public function getEnableMultipleCallArrangement()
    {
        return (!$this->enableMultipleCallArrangement) ?: $this->enableMultipleCallArrangement->value();
    }

    public function setMultipleCallArrangementIsActive($multipleCallArrangementIsActive)
    {
        $multipleCallArrangementIsActive and $this->multipleCallArrangementIsActive = new xs:boolean($multipleCallArrangementIsActive);
    }

    public function getMultipleCallArrangementIsActive()
    {
        return (!$this->multipleCallArrangementIsActive) ?: $this->multipleCallArrangementIsActive->value();
    }

    public function setEndpointTable($endpointTable)
    {
        $endpointTable and $this->endpointTable = new core:OCITable($endpointTable);
    }

    public function getEndpointTable()
    {
        return (!$this->endpointTable) ?: $this->endpointTable->value();
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
}
