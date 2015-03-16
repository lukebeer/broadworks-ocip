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
    public    $elementName = 'SystemBwDiameterBaseDataModifyRequest';
    protected $xsRealm;
    protected $xsListeningPort;
    protected $psRealm;
    protected $psListeningPort;
    protected $psRelayThroughXs;
    protected $xsRelayListeningPort;
    protected $tcTimerSeconds;
    protected $twTimerSeconds;
    protected $requestTimerSeconds;
    protected $busyPeerDetectionOutstandingTxnCount;
    protected $busyPeerRestoreOutstandingTxnCount;
    protected $dynamicEntryInactivityTimerHours;
    protected $advertisedOfflineBillingApplication;
    protected $advertisedOnlineBillingApplication;

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
     * @return mixed $response
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
        $this->xsRealm = ($xsRealm InstanceOf DomainName)
             ? $xsRealm
             : new DomainName($xsRealm);
        $this->xsRealm->setElementName('xsRealm');
        return $this;
    }

    /**
     * 
     * @return DomainName $xsRealm
     */
    public function getXsRealm()
    {
        return ($this->xsRealm)
            ? $this->xsRealm->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setXsListeningPort($xsListeningPort = null)
    {
        $this->xsListeningPort = ($xsListeningPort InstanceOf Port1025)
             ? $xsListeningPort
             : new Port1025($xsListeningPort);
        $this->xsListeningPort->setElementName('xsListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $xsListeningPort
     */
    public function getXsListeningPort()
    {
        return ($this->xsListeningPort)
            ? $this->xsListeningPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPsRealm($psRealm = null)
    {
        $this->psRealm = ($psRealm InstanceOf DomainName)
             ? $psRealm
             : new DomainName($psRealm);
        $this->psRealm->setElementName('psRealm');
        return $this;
    }

    /**
     * 
     * @return DomainName $psRealm
     */
    public function getPsRealm()
    {
        return ($this->psRealm)
            ? $this->psRealm->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPsListeningPort($psListeningPort = null)
    {
        $this->psListeningPort = ($psListeningPort InstanceOf Port1025)
             ? $psListeningPort
             : new Port1025($psListeningPort);
        $this->psListeningPort->setElementName('psListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $psListeningPort
     */
    public function getPsListeningPort()
    {
        return ($this->psListeningPort)
            ? $this->psListeningPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPsRelayThroughXs($psRelayThroughXs = null)
    {
        $this->psRelayThroughXs = new PrimitiveType($psRelayThroughXs);
        $this->psRelayThroughXs->setElementName('psRelayThroughXs');
        return $this;
    }

    /**
     * 
     * @return boolean $psRelayThroughXs
     */
    public function getPsRelayThroughXs()
    {
        return ($this->psRelayThroughXs)
            ? $this->psRelayThroughXs->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setXsRelayListeningPort($xsRelayListeningPort = null)
    {
        $this->xsRelayListeningPort = ($xsRelayListeningPort InstanceOf Port1025)
             ? $xsRelayListeningPort
             : new Port1025($xsRelayListeningPort);
        $this->xsRelayListeningPort->setElementName('xsRelayListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $xsRelayListeningPort
     */
    public function getXsRelayListeningPort()
    {
        return ($this->xsRelayListeningPort)
            ? $this->xsRelayListeningPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTcTimerSeconds($tcTimerSeconds = null)
    {
        $this->tcTimerSeconds = ($tcTimerSeconds InstanceOf BwDiameterTcTimerSeconds)
             ? $tcTimerSeconds
             : new BwDiameterTcTimerSeconds($tcTimerSeconds);
        $this->tcTimerSeconds->setElementName('tcTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterTcTimerSeconds $tcTimerSeconds
     */
    public function getTcTimerSeconds()
    {
        return ($this->tcTimerSeconds)
            ? $this->tcTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTwTimerSeconds($twTimerSeconds = null)
    {
        $this->twTimerSeconds = ($twTimerSeconds InstanceOf BwDiameterTwTimerSeconds)
             ? $twTimerSeconds
             : new BwDiameterTwTimerSeconds($twTimerSeconds);
        $this->twTimerSeconds->setElementName('twTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterTwTimerSeconds $twTimerSeconds
     */
    public function getTwTimerSeconds()
    {
        return ($this->twTimerSeconds)
            ? $this->twTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequestTimerSeconds($requestTimerSeconds = null)
    {
        $this->requestTimerSeconds = ($requestTimerSeconds InstanceOf BwDiameterRequestTimerSeconds)
             ? $requestTimerSeconds
             : new BwDiameterRequestTimerSeconds($requestTimerSeconds);
        $this->requestTimerSeconds->setElementName('requestTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterRequestTimerSeconds $requestTimerSeconds
     */
    public function getRequestTimerSeconds()
    {
        return ($this->requestTimerSeconds)
            ? $this->requestTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount = null)
    {
        $this->busyPeerDetectionOutstandingTxnCount = ($busyPeerDetectionOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerDetectionOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount);
        $this->busyPeerDetectionOutstandingTxnCount->setElementName('busyPeerDetectionOutstandingTxnCount');
        return $this;
    }

    /**
     * 
     * @return BwDiameterBusyPeerOutstandingTxnCount $busyPeerDetectionOutstandingTxnCount
     */
    public function getBusyPeerDetectionOutstandingTxnCount()
    {
        return ($this->busyPeerDetectionOutstandingTxnCount)
            ? $this->busyPeerDetectionOutstandingTxnCount->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount = null)
    {
        $this->busyPeerRestoreOutstandingTxnCount = ($busyPeerRestoreOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerRestoreOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount);
        $this->busyPeerRestoreOutstandingTxnCount->setElementName('busyPeerRestoreOutstandingTxnCount');
        return $this;
    }

    /**
     * 
     * @return BwDiameterBusyPeerOutstandingTxnCount $busyPeerRestoreOutstandingTxnCount
     */
    public function getBusyPeerRestoreOutstandingTxnCount()
    {
        return ($this->busyPeerRestoreOutstandingTxnCount)
            ? $this->busyPeerRestoreOutstandingTxnCount->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours = null)
    {
        $this->dynamicEntryInactivityTimerHours = ($dynamicEntryInactivityTimerHours InstanceOf BwDiameterDynamicEntryInactivityTimerHours)
             ? $dynamicEntryInactivityTimerHours
             : new BwDiameterDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours);
        $this->dynamicEntryInactivityTimerHours->setElementName('dynamicEntryInactivityTimerHours');
        return $this;
    }

    /**
     * 
     * @return BwDiameterDynamicEntryInactivityTimerHours $dynamicEntryInactivityTimerHours
     */
    public function getDynamicEntryInactivityTimerHours()
    {
        return ($this->dynamicEntryInactivityTimerHours)
            ? $this->dynamicEntryInactivityTimerHours->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAdvertisedOfflineBillingApplication($advertisedOfflineBillingApplication = null)
    {
        $this->advertisedOfflineBillingApplication = ($advertisedOfflineBillingApplication InstanceOf BwDiameterAdvertisedApplication)
             ? $advertisedOfflineBillingApplication
             : new BwDiameterAdvertisedApplication($advertisedOfflineBillingApplication);
        $this->advertisedOfflineBillingApplication->setElementName('advertisedOfflineBillingApplication');
        return $this;
    }

    /**
     * 
     * @return BwDiameterAdvertisedApplication $advertisedOfflineBillingApplication
     */
    public function getAdvertisedOfflineBillingApplication()
    {
        return ($this->advertisedOfflineBillingApplication)
            ? $this->advertisedOfflineBillingApplication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAdvertisedOnlineBillingApplication($advertisedOnlineBillingApplication = null)
    {
        $this->advertisedOnlineBillingApplication = ($advertisedOnlineBillingApplication InstanceOf BwDiameterAdvertisedApplication)
             ? $advertisedOnlineBillingApplication
             : new BwDiameterAdvertisedApplication($advertisedOnlineBillingApplication);
        $this->advertisedOnlineBillingApplication->setElementName('advertisedOnlineBillingApplication');
        return $this;
    }

    /**
     * 
     * @return BwDiameterAdvertisedApplication $advertisedOnlineBillingApplication
     */
    public function getAdvertisedOnlineBillingApplication()
    {
        return ($this->advertisedOnlineBillingApplication)
            ? $this->advertisedOnlineBillingApplication->getElementValue()
            : null;
    }
}
