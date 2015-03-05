<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterTcTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterTwTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterRequestTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterBusyPeerOutstandingTxnCount;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BwDiameterDynamicEntryInactivityTimerHours;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemBwDiameterBaseDataGetRequest.
 *         Contains a list of System Diameter base parameters.
 */
class SystemBwDiameterBaseDataGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $xsRealm=null,
             $xsListeningPort,
             $psRealm=null,
             $psListeningPort,
             $psRelayThroughXs,
             $xsRelayListeningPort,
             $tcTimerSeconds,
             $twTimerSeconds,
             $requestTimerSeconds,
             $busyPeerDetectionOutstandingTxnCount,
             $busyPeerRestoreOutstandingTxnCount,
             $dynamicEntryInactivityTimerHours
    ) {
        $this->xsRealm                              = new DomainName($xsRealm);
        $this->xsListeningPort                      = new Port1025($xsListeningPort);
        $this->psRealm                              = new DomainName($psRealm);
        $this->psListeningPort                      = new Port1025($psListeningPort);
        $this->psRelayThroughXs                     = $psRelayThroughXs;
        $this->xsRelayListeningPort                 = new Port1025($xsRelayListeningPort);
        $this->tcTimerSeconds                       = $tcTimerSeconds;
        $this->twTimerSeconds                       = $twTimerSeconds;
        $this->requestTimerSeconds                  = $requestTimerSeconds;
        $this->busyPeerDetectionOutstandingTxnCount = $busyPeerDetectionOutstandingTxnCount;
        $this->busyPeerRestoreOutstandingTxnCount   = $busyPeerRestoreOutstandingTxnCount;
        $this->dynamicEntryInactivityTimerHours     = $dynamicEntryInactivityTimerHours;
        $this->args                                 = func_get_args();
    }

    public function setXsRealm($xsRealm)
    {
        $xsRealm and $this->xsRealm = new DomainName($xsRealm);
    }

    public function getXsRealm()
    {
        return (!$this->xsRealm) ?: $this->xsRealm->value();
    }

    public function setXsListeningPort($xsListeningPort)
    {
        $xsListeningPort and $this->xsListeningPort = new Port1025($xsListeningPort);
    }

    public function getXsListeningPort()
    {
        return (!$this->xsListeningPort) ?: $this->xsListeningPort->value();
    }

    public function setPsRealm($psRealm)
    {
        $psRealm and $this->psRealm = new DomainName($psRealm);
    }

    public function getPsRealm()
    {
        return (!$this->psRealm) ?: $this->psRealm->value();
    }

    public function setPsListeningPort($psListeningPort)
    {
        $psListeningPort and $this->psListeningPort = new Port1025($psListeningPort);
    }

    public function getPsListeningPort()
    {
        return (!$this->psListeningPort) ?: $this->psListeningPort->value();
    }

    public function setPsRelayThroughXs($psRelayThroughXs)
    {
        $psRelayThroughXs and $this->psRelayThroughXs = new xs:boolean($psRelayThroughXs);
    }

    public function getPsRelayThroughXs()
    {
        return (!$this->psRelayThroughXs) ?: $this->psRelayThroughXs->value();
    }

    public function setXsRelayListeningPort($xsRelayListeningPort)
    {
        $xsRelayListeningPort and $this->xsRelayListeningPort = new Port1025($xsRelayListeningPort);
    }

    public function getXsRelayListeningPort()
    {
        return (!$this->xsRelayListeningPort) ?: $this->xsRelayListeningPort->value();
    }

    public function setTcTimerSeconds($tcTimerSeconds)
    {
        $tcTimerSeconds and $this->tcTimerSeconds = new BwDiameterTcTimerSeconds($tcTimerSeconds);
    }

    public function getTcTimerSeconds()
    {
        return (!$this->tcTimerSeconds) ?: $this->tcTimerSeconds->value();
    }

    public function setTwTimerSeconds($twTimerSeconds)
    {
        $twTimerSeconds and $this->twTimerSeconds = new BwDiameterTwTimerSeconds($twTimerSeconds);
    }

    public function getTwTimerSeconds()
    {
        return (!$this->twTimerSeconds) ?: $this->twTimerSeconds->value();
    }

    public function setRequestTimerSeconds($requestTimerSeconds)
    {
        $requestTimerSeconds and $this->requestTimerSeconds = new BwDiameterRequestTimerSeconds($requestTimerSeconds);
    }

    public function getRequestTimerSeconds()
    {
        return (!$this->requestTimerSeconds) ?: $this->requestTimerSeconds->value();
    }

    public function setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount)
    {
        $busyPeerDetectionOutstandingTxnCount and $this->busyPeerDetectionOutstandingTxnCount = new BwDiameterBusyPeerOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount);
    }

    public function getBusyPeerDetectionOutstandingTxnCount()
    {
        return (!$this->busyPeerDetectionOutstandingTxnCount) ?: $this->busyPeerDetectionOutstandingTxnCount->value();
    }

    public function setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount)
    {
        $busyPeerRestoreOutstandingTxnCount and $this->busyPeerRestoreOutstandingTxnCount = new BwDiameterBusyPeerOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount);
    }

    public function getBusyPeerRestoreOutstandingTxnCount()
    {
        return (!$this->busyPeerRestoreOutstandingTxnCount) ?: $this->busyPeerRestoreOutstandingTxnCount->value();
    }

    public function setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours)
    {
        $dynamicEntryInactivityTimerHours and $this->dynamicEntryInactivityTimerHours = new BwDiameterDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours);
    }

    public function getDynamicEntryInactivityTimerHours()
    {
        return (!$this->dynamicEntryInactivityTimerHours) ?: $this->dynamicEntryInactivityTimerHours->value();
    }
}
