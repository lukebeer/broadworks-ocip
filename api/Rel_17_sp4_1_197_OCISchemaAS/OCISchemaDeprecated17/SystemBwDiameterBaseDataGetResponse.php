<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterDynamicEntryInactivityTimerHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterBusyPeerOutstandingTxnCount;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterRequestTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterTwTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterTcTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemBwDiameterBaseDataGetRequest.
 *         Contains a list of System Diameter base parameters.
 */
class SystemBwDiameterBaseDataGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                  = __CLASS__;
    protected $xsRealm                               = null;
    protected $xsListeningPort                       = null;
    protected $psRealm                               = null;
    protected $psListeningPort                       = null;
    protected $psRelayThroughXs                      = null;
    protected $xsRelayListeningPort                  = null;
    protected $tcTimerSeconds                        = null;
    protected $twTimerSeconds                        = null;
    protected $requestTimerSeconds                   = null;
    protected $busyPeerDetectionOutstandingTxnCount  = null;
    protected $busyPeerRestoreOutstandingTxnCount    = null;
    protected $dynamicEntryInactivityTimerHours      = null;


    public function setXsRealm($xsRealm = null)
    {
        $this->xsRealm = ($xsRealm InstanceOf DomainName)
             ? $xsRealm
             : new DomainName($xsRealm);
    }

    public function getXsRealm()
    {
        return (!$this->xsRealm) ?: $this->xsRealm->value();
    }

    public function setXsListeningPort($xsListeningPort = null)
    {
        $this->xsListeningPort = ($xsListeningPort InstanceOf Port1025)
             ? $xsListeningPort
             : new Port1025($xsListeningPort);
    }

    public function getXsListeningPort()
    {
        return (!$this->xsListeningPort) ?: $this->xsListeningPort->value();
    }

    public function setPsRealm($psRealm = null)
    {
        $this->psRealm = ($psRealm InstanceOf DomainName)
             ? $psRealm
             : new DomainName($psRealm);
    }

    public function getPsRealm()
    {
        return (!$this->psRealm) ?: $this->psRealm->value();
    }

    public function setPsListeningPort($psListeningPort = null)
    {
        $this->psListeningPort = ($psListeningPort InstanceOf Port1025)
             ? $psListeningPort
             : new Port1025($psListeningPort);
    }

    public function getPsListeningPort()
    {
        return (!$this->psListeningPort) ?: $this->psListeningPort->value();
    }

    public function setPsRelayThroughXs(xs:boolean $psRelayThroughXs = null)
    {
    }

    public function getPsRelayThroughXs()
    {
        return (!$this->psRelayThroughXs) ?: $this->psRelayThroughXs->value();
    }

    public function setXsRelayListeningPort($xsRelayListeningPort = null)
    {
        $this->xsRelayListeningPort = ($xsRelayListeningPort InstanceOf Port1025)
             ? $xsRelayListeningPort
             : new Port1025($xsRelayListeningPort);
    }

    public function getXsRelayListeningPort()
    {
        return (!$this->xsRelayListeningPort) ?: $this->xsRelayListeningPort->value();
    }

    public function setTcTimerSeconds($tcTimerSeconds = null)
    {
        $this->tcTimerSeconds = ($tcTimerSeconds InstanceOf BwDiameterTcTimerSeconds)
             ? $tcTimerSeconds
             : new BwDiameterTcTimerSeconds($tcTimerSeconds);
    }

    public function getTcTimerSeconds()
    {
        return (!$this->tcTimerSeconds) ?: $this->tcTimerSeconds->value();
    }

    public function setTwTimerSeconds($twTimerSeconds = null)
    {
        $this->twTimerSeconds = ($twTimerSeconds InstanceOf BwDiameterTwTimerSeconds)
             ? $twTimerSeconds
             : new BwDiameterTwTimerSeconds($twTimerSeconds);
    }

    public function getTwTimerSeconds()
    {
        return (!$this->twTimerSeconds) ?: $this->twTimerSeconds->value();
    }

    public function setRequestTimerSeconds($requestTimerSeconds = null)
    {
        $this->requestTimerSeconds = ($requestTimerSeconds InstanceOf BwDiameterRequestTimerSeconds)
             ? $requestTimerSeconds
             : new BwDiameterRequestTimerSeconds($requestTimerSeconds);
    }

    public function getRequestTimerSeconds()
    {
        return (!$this->requestTimerSeconds) ?: $this->requestTimerSeconds->value();
    }

    public function setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount = null)
    {
        $this->busyPeerDetectionOutstandingTxnCount = ($busyPeerDetectionOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerDetectionOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount);
    }

    public function getBusyPeerDetectionOutstandingTxnCount()
    {
        return (!$this->busyPeerDetectionOutstandingTxnCount) ?: $this->busyPeerDetectionOutstandingTxnCount->value();
    }

    public function setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount = null)
    {
        $this->busyPeerRestoreOutstandingTxnCount = ($busyPeerRestoreOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerRestoreOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount);
    }

    public function getBusyPeerRestoreOutstandingTxnCount()
    {
        return (!$this->busyPeerRestoreOutstandingTxnCount) ?: $this->busyPeerRestoreOutstandingTxnCount->value();
    }

    public function setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours = null)
    {
        $this->dynamicEntryInactivityTimerHours = ($dynamicEntryInactivityTimerHours InstanceOf BwDiameterDynamicEntryInactivityTimerHours)
             ? $dynamicEntryInactivityTimerHours
             : new BwDiameterDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours);
    }

    public function getDynamicEntryInactivityTimerHours()
    {
        return (!$this->dynamicEntryInactivityTimerHours) ?: $this->dynamicEntryInactivityTimerHours->value();
    }
}
