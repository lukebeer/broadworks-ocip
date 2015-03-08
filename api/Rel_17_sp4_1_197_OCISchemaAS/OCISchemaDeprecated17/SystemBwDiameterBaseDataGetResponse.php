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
    const     RESPONSE_TYPE                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemBwDiameterBaseDataGetResponse';
    public    $name                                 = __CLASS__;
    protected $xsRealm                              = null;
    protected $xsListeningPort                      = null;
    protected $psRealm                              = null;
    protected $psListeningPort                      = null;
    protected $psRelayThroughXs                     = null;
    protected $xsRelayListeningPort                 = null;
    protected $tcTimerSeconds                       = null;
    protected $twTimerSeconds                       = null;
    protected $requestTimerSeconds                  = null;
    protected $busyPeerDetectionOutstandingTxnCount = null;
    protected $busyPeerRestoreOutstandingTxnCount   = null;
    protected $dynamicEntryInactivityTimerHours     = null;


    /**
     * Network domain name.
     */
    public function setXsRealm($xsRealm = null)
    {
        $this->xsRealm = ($xsRealm InstanceOf DomainName)
             ? $xsRealm
             : new DomainName($xsRealm);
    }

    /**
     * Network domain name.
     */
    public function getXsRealm()
    {
        return (!$this->xsRealm) ?: $this->xsRealm->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setXsListeningPort($xsListeningPort = null)
    {
        $this->xsListeningPort = ($xsListeningPort InstanceOf Port1025)
             ? $xsListeningPort
             : new Port1025($xsListeningPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getXsListeningPort()
    {
        return (!$this->xsListeningPort) ?: $this->xsListeningPort->getValue();
    }

    /**
     * Network domain name.
     */
    public function setPsRealm($psRealm = null)
    {
        $this->psRealm = ($psRealm InstanceOf DomainName)
             ? $psRealm
             : new DomainName($psRealm);
    }

    /**
     * Network domain name.
     */
    public function getPsRealm()
    {
        return (!$this->psRealm) ?: $this->psRealm->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setPsListeningPort($psListeningPort = null)
    {
        $this->psListeningPort = ($psListeningPort InstanceOf Port1025)
             ? $psListeningPort
             : new Port1025($psListeningPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getPsListeningPort()
    {
        return (!$this->psListeningPort) ?: $this->psListeningPort->getValue();
    }

    /**
     * 
     */
    public function setPsRelayThroughXs($psRelayThroughXs = null)
    {
        $this->psRelayThroughXs = (boolean) $psRelayThroughXs;
    }

    /**
     * 
     */
    public function getPsRelayThroughXs()
    {
        return (!$this->psRelayThroughXs) ?: $this->psRelayThroughXs->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setXsRelayListeningPort($xsRelayListeningPort = null)
    {
        $this->xsRelayListeningPort = ($xsRelayListeningPort InstanceOf Port1025)
             ? $xsRelayListeningPort
             : new Port1025($xsRelayListeningPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getXsRelayListeningPort()
    {
        return (!$this->xsRelayListeningPort) ?: $this->xsRelayListeningPort->getValue();
    }

    /**
     * Delay afer which the Diameter stack attempts to reconnect to a peer after detecting a connection failure.
     */
    public function setTcTimerSeconds($tcTimerSeconds = null)
    {
        $this->tcTimerSeconds = ($tcTimerSeconds InstanceOf BwDiameterTcTimerSeconds)
             ? $tcTimerSeconds
             : new BwDiameterTcTimerSeconds($tcTimerSeconds);
    }

    /**
     * Delay afer which the Diameter stack attempts to reconnect to a peer after detecting a connection failure.
     */
    public function getTcTimerSeconds()
    {
        return (!$this->tcTimerSeconds) ?: $this->tcTimerSeconds->getValue();
    }

    /**
     * Timer that controls the frequency of Device-Watchdog messages (when no other messages are exchanged on the peer connection) and is used in the connection failure detection algorithm.
     */
    public function setTwTimerSeconds($twTimerSeconds = null)
    {
        $this->twTimerSeconds = ($twTimerSeconds InstanceOf BwDiameterTwTimerSeconds)
             ? $twTimerSeconds
             : new BwDiameterTwTimerSeconds($twTimerSeconds);
    }

    /**
     * Timer that controls the frequency of Device-Watchdog messages (when no other messages are exchanged on the peer connection) and is used in the connection failure detection algorithm.
     */
    public function getTwTimerSeconds()
    {
        return (!$this->twTimerSeconds) ?: $this->twTimerSeconds->getValue();
    }

    /**
     * Time after which the Diameter stack reports a timeout to applications and removes the request from its requests queue.
     */
    public function setRequestTimerSeconds($requestTimerSeconds = null)
    {
        $this->requestTimerSeconds = ($requestTimerSeconds InstanceOf BwDiameterRequestTimerSeconds)
             ? $requestTimerSeconds
             : new BwDiameterRequestTimerSeconds($requestTimerSeconds);
    }

    /**
     * Time after which the Diameter stack reports a timeout to applications and removes the request from its requests queue.
     */
    public function getRequestTimerSeconds()
    {
        return (!$this->requestTimerSeconds) ?: $this->requestTimerSeconds->getValue();
    }

    /**
     * The maximum number of concurrent outstanding transactions allowed on a single peer connection.
     */
    public function setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount = null)
    {
        $this->busyPeerDetectionOutstandingTxnCount = ($busyPeerDetectionOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerDetectionOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount);
    }

    /**
     * The maximum number of concurrent outstanding transactions allowed on a single peer connection.
     */
    public function getBusyPeerDetectionOutstandingTxnCount()
    {
        return (!$this->busyPeerDetectionOutstandingTxnCount) ?: $this->busyPeerDetectionOutstandingTxnCount->getValue();
    }

    /**
     * The maximum number of concurrent outstanding transactions allowed on a single peer connection.
     */
    public function setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount = null)
    {
        $this->busyPeerRestoreOutstandingTxnCount = ($busyPeerRestoreOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerRestoreOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount);
    }

    /**
     * The maximum number of concurrent outstanding transactions allowed on a single peer connection.
     */
    public function getBusyPeerRestoreOutstandingTxnCount()
    {
        return (!$this->busyPeerRestoreOutstandingTxnCount) ?: $this->busyPeerRestoreOutstandingTxnCount->getValue();
    }

    /**
     * Idle time allowed for a dynamic entry (either Realm Routing Table entry or Peer Table entry) before it is removed.
     */
    public function setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours = null)
    {
        $this->dynamicEntryInactivityTimerHours = ($dynamicEntryInactivityTimerHours InstanceOf BwDiameterDynamicEntryInactivityTimerHours)
             ? $dynamicEntryInactivityTimerHours
             : new BwDiameterDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours);
    }

    /**
     * Idle time allowed for a dynamic entry (either Realm Routing Table entry or Peer Table entry) before it is removed.
     */
    public function getDynamicEntryInactivityTimerHours()
    {
        return (!$this->dynamicEntryInactivityTimerHours) ?: $this->dynamicEntryInactivityTimerHours->getValue();
    }
}
