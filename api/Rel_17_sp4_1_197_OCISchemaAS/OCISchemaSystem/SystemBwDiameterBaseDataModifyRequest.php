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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the System Diameter base parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBwDiameterBaseDataModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'SystemBwDiameterBaseDataModifyRequest';
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
    protected $advertisedOfflineBillingApplication  = null;
    protected $advertisedOnlineBillingApplication   = null;

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

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setXsRealm($xsRealm = null)
    {
        if (!$xsRealm) return $this;
        $this->xsRealm = ($xsRealm InstanceOf DomainName)
             ? $xsRealm
             : new DomainName($xsRealm);
        $this->xsRealm->setName('xsRealm');
        return $this;
    }

    /**
     * 
     * @return DomainName
     */
    public function getXsRealm()
    {
        return $this->xsRealm->getValue();
    }

    /**
     * 
     */
    public function setXsListeningPort($xsListeningPort = null)
    {
        if (!$xsListeningPort) return $this;
        $this->xsListeningPort = ($xsListeningPort InstanceOf Port1025)
             ? $xsListeningPort
             : new Port1025($xsListeningPort);
        $this->xsListeningPort->setName('xsListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025
     */
    public function getXsListeningPort()
    {
        return $this->xsListeningPort->getValue();
    }

    /**
     * 
     */
    public function setPsRealm($psRealm = null)
    {
        if (!$psRealm) return $this;
        $this->psRealm = ($psRealm InstanceOf DomainName)
             ? $psRealm
             : new DomainName($psRealm);
        $this->psRealm->setName('psRealm');
        return $this;
    }

    /**
     * 
     * @return DomainName
     */
    public function getPsRealm()
    {
        return $this->psRealm->getValue();
    }

    /**
     * 
     */
    public function setPsListeningPort($psListeningPort = null)
    {
        if (!$psListeningPort) return $this;
        $this->psListeningPort = ($psListeningPort InstanceOf Port1025)
             ? $psListeningPort
             : new Port1025($psListeningPort);
        $this->psListeningPort->setName('psListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025
     */
    public function getPsListeningPort()
    {
        return $this->psListeningPort->getValue();
    }

    /**
     * 
     */
    public function setPsRelayThroughXs($psRelayThroughXs = null)
    {
        if (!$psRelayThroughXs) return $this;
        $this->psRelayThroughXs = new PrimitiveType($psRelayThroughXs);
        $this->psRelayThroughXs->setName('psRelayThroughXs');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPsRelayThroughXs()
    {
        return $this->psRelayThroughXs->getValue();
    }

    /**
     * 
     */
    public function setXsRelayListeningPort($xsRelayListeningPort = null)
    {
        if (!$xsRelayListeningPort) return $this;
        $this->xsRelayListeningPort = ($xsRelayListeningPort InstanceOf Port1025)
             ? $xsRelayListeningPort
             : new Port1025($xsRelayListeningPort);
        $this->xsRelayListeningPort->setName('xsRelayListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025
     */
    public function getXsRelayListeningPort()
    {
        return $this->xsRelayListeningPort->getValue();
    }

    /**
     * 
     */
    public function setTcTimerSeconds($tcTimerSeconds = null)
    {
        if (!$tcTimerSeconds) return $this;
        $this->tcTimerSeconds = ($tcTimerSeconds InstanceOf BwDiameterTcTimerSeconds)
             ? $tcTimerSeconds
             : new BwDiameterTcTimerSeconds($tcTimerSeconds);
        $this->tcTimerSeconds->setName('tcTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterTcTimerSeconds
     */
    public function getTcTimerSeconds()
    {
        return $this->tcTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setTwTimerSeconds($twTimerSeconds = null)
    {
        if (!$twTimerSeconds) return $this;
        $this->twTimerSeconds = ($twTimerSeconds InstanceOf BwDiameterTwTimerSeconds)
             ? $twTimerSeconds
             : new BwDiameterTwTimerSeconds($twTimerSeconds);
        $this->twTimerSeconds->setName('twTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterTwTimerSeconds
     */
    public function getTwTimerSeconds()
    {
        return $this->twTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setRequestTimerSeconds($requestTimerSeconds = null)
    {
        if (!$requestTimerSeconds) return $this;
        $this->requestTimerSeconds = ($requestTimerSeconds InstanceOf BwDiameterRequestTimerSeconds)
             ? $requestTimerSeconds
             : new BwDiameterRequestTimerSeconds($requestTimerSeconds);
        $this->requestTimerSeconds->setName('requestTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterRequestTimerSeconds
     */
    public function getRequestTimerSeconds()
    {
        return $this->requestTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount = null)
    {
        if (!$busyPeerDetectionOutstandingTxnCount) return $this;
        $this->busyPeerDetectionOutstandingTxnCount = ($busyPeerDetectionOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerDetectionOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount);
        $this->busyPeerDetectionOutstandingTxnCount->setName('busyPeerDetectionOutstandingTxnCount');
        return $this;
    }

    /**
     * 
     * @return BwDiameterBusyPeerOutstandingTxnCount
     */
    public function getBusyPeerDetectionOutstandingTxnCount()
    {
        return $this->busyPeerDetectionOutstandingTxnCount->getValue();
    }

    /**
     * 
     */
    public function setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount = null)
    {
        if (!$busyPeerRestoreOutstandingTxnCount) return $this;
        $this->busyPeerRestoreOutstandingTxnCount = ($busyPeerRestoreOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerRestoreOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount);
        $this->busyPeerRestoreOutstandingTxnCount->setName('busyPeerRestoreOutstandingTxnCount');
        return $this;
    }

    /**
     * 
     * @return BwDiameterBusyPeerOutstandingTxnCount
     */
    public function getBusyPeerRestoreOutstandingTxnCount()
    {
        return $this->busyPeerRestoreOutstandingTxnCount->getValue();
    }

    /**
     * 
     */
    public function setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours = null)
    {
        if (!$dynamicEntryInactivityTimerHours) return $this;
        $this->dynamicEntryInactivityTimerHours = ($dynamicEntryInactivityTimerHours InstanceOf BwDiameterDynamicEntryInactivityTimerHours)
             ? $dynamicEntryInactivityTimerHours
             : new BwDiameterDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours);
        $this->dynamicEntryInactivityTimerHours->setName('dynamicEntryInactivityTimerHours');
        return $this;
    }

    /**
     * 
     * @return BwDiameterDynamicEntryInactivityTimerHours
     */
    public function getDynamicEntryInactivityTimerHours()
    {
        return $this->dynamicEntryInactivityTimerHours->getValue();
    }

    /**
     * 
     */
    public function setAdvertisedOfflineBillingApplication($advertisedOfflineBillingApplication = null)
    {
        if (!$advertisedOfflineBillingApplication) return $this;
        $this->advertisedOfflineBillingApplication = ($advertisedOfflineBillingApplication InstanceOf BwDiameterAdvertisedApplication)
             ? $advertisedOfflineBillingApplication
             : new BwDiameterAdvertisedApplication($advertisedOfflineBillingApplication);
        $this->advertisedOfflineBillingApplication->setName('advertisedOfflineBillingApplication');
        return $this;
    }

    /**
     * 
     * @return BwDiameterAdvertisedApplication
     */
    public function getAdvertisedOfflineBillingApplication()
    {
        return $this->advertisedOfflineBillingApplication->getValue();
    }

    /**
     * 
     */
    public function setAdvertisedOnlineBillingApplication($advertisedOnlineBillingApplication = null)
    {
        if (!$advertisedOnlineBillingApplication) return $this;
        $this->advertisedOnlineBillingApplication = ($advertisedOnlineBillingApplication InstanceOf BwDiameterAdvertisedApplication)
             ? $advertisedOnlineBillingApplication
             : new BwDiameterAdvertisedApplication($advertisedOnlineBillingApplication);
        $this->advertisedOnlineBillingApplication->setName('advertisedOnlineBillingApplication');
        return $this;
    }

    /**
     * 
     * @return BwDiameterAdvertisedApplication
     */
    public function getAdvertisedOnlineBillingApplication()
    {
        return $this->advertisedOnlineBillingApplication->getValue();
    }
}
