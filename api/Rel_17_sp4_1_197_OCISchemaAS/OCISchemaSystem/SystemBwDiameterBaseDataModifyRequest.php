<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterDynamicEntryInactivityTimerHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterBusyPeerOutstandingTxnCount;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterAdvertisedApplication;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterRequestTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterTwTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\BwDiameterTcTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the System Diameter base parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterBaseDataModifyRequest extends ComplexType implements ComplexInterface
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
    protected $advertisedOfflineBillingApplication   = null;
    protected $advertisedOnlineBillingApplication    = null;

    public function __construct(
         $xsRealm = null,
         $xsListeningPort = null,
         $psRealm = null,
         $psListeningPort = null,
         $psRelayThroughXs = null,
         $xsRelayListeningPort = null,
         $tcTimerSeconds = null,
         $twTimerSeconds = null,
         $requestTimerSeconds = null,
         $busyPeerDetectionOutstandingTxnCount = null,
         $busyPeerRestoreOutstandingTxnCount = null,
         $dynamicEntryInactivityTimerHours = null,
         $advertisedOfflineBillingApplication = null,
         $advertisedOnlineBillingApplication = null
    ) {
        $this->setXsRealm($xsRealm);
        $this->setXsListeningPort($xsListeningPort);
        $this->setPsRealm($psRealm);
        $this->setPsListeningPort($psListeningPort);
        $this->setPsRelayThroughXs($psRelayThroughXs);
        $this->setXsRelayListeningPort($xsRelayListeningPort);
        $this->setTcTimerSeconds($tcTimerSeconds);
        $this->setTwTimerSeconds($twTimerSeconds);
        $this->setRequestTimerSeconds($requestTimerSeconds);
        $this->setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount);
        $this->setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount);
        $this->setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours);
        $this->setAdvertisedOfflineBillingApplication($advertisedOfflineBillingApplication);
        $this->setAdvertisedOnlineBillingApplication($advertisedOnlineBillingApplication);
    }

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

    public function setAdvertisedOfflineBillingApplication($advertisedOfflineBillingApplication = null)
    {
        $this->advertisedOfflineBillingApplication = ($advertisedOfflineBillingApplication InstanceOf BwDiameterAdvertisedApplication)
             ? $advertisedOfflineBillingApplication
             : new BwDiameterAdvertisedApplication($advertisedOfflineBillingApplication);
    }

    public function getAdvertisedOfflineBillingApplication()
    {
        return (!$this->advertisedOfflineBillingApplication) ?: $this->advertisedOfflineBillingApplication->value();
    }

    public function setAdvertisedOnlineBillingApplication($advertisedOnlineBillingApplication = null)
    {
        $this->advertisedOnlineBillingApplication = ($advertisedOnlineBillingApplication InstanceOf BwDiameterAdvertisedApplication)
             ? $advertisedOnlineBillingApplication
             : new BwDiameterAdvertisedApplication($advertisedOnlineBillingApplication);
    }

    public function getAdvertisedOnlineBillingApplication()
    {
        return (!$this->advertisedOnlineBillingApplication) ?: $this->advertisedOnlineBillingApplication->value();
    }
}
