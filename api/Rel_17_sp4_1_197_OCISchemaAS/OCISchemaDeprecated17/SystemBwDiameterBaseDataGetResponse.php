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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemBwDiameterBaseDataGetRequest.
 *         Contains a list of System Diameter base parameters.
 */
class SystemBwDiameterBaseDataGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemBwDiameterBaseDataGetResponse';
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

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemBwDiameterBaseDataGetResponse $response
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
        $this->xsRealm->setName('xsRealm');
        return $this;
    }

    /**
     * 
     * @return DomainName $xsRealm
     */
    public function getXsRealm()
    {
        return ($this->xsRealm) ? $this->xsRealm->getValue() : null;
    }

    /**
     * 
     */
    public function setXsListeningPort($xsListeningPort = null)
    {
        $this->xsListeningPort = ($xsListeningPort InstanceOf Port1025)
             ? $xsListeningPort
             : new Port1025($xsListeningPort);
        $this->xsListeningPort->setName('xsListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $xsListeningPort
     */
    public function getXsListeningPort()
    {
        return ($this->xsListeningPort) ? $this->xsListeningPort->getValue() : null;
    }

    /**
     * 
     */
    public function setPsRealm($psRealm = null)
    {
        $this->psRealm = ($psRealm InstanceOf DomainName)
             ? $psRealm
             : new DomainName($psRealm);
        $this->psRealm->setName('psRealm');
        return $this;
    }

    /**
     * 
     * @return DomainName $psRealm
     */
    public function getPsRealm()
    {
        return ($this->psRealm) ? $this->psRealm->getValue() : null;
    }

    /**
     * 
     */
    public function setPsListeningPort($psListeningPort = null)
    {
        $this->psListeningPort = ($psListeningPort InstanceOf Port1025)
             ? $psListeningPort
             : new Port1025($psListeningPort);
        $this->psListeningPort->setName('psListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $psListeningPort
     */
    public function getPsListeningPort()
    {
        return ($this->psListeningPort) ? $this->psListeningPort->getValue() : null;
    }

    /**
     * 
     */
    public function setPsRelayThroughXs($psRelayThroughXs = null)
    {
        $this->psRelayThroughXs = new PrimitiveType($psRelayThroughXs);
        $this->psRelayThroughXs->setName('psRelayThroughXs');
        return $this;
    }

    /**
     * 
     * @return boolean $psRelayThroughXs
     */
    public function getPsRelayThroughXs()
    {
        return ($this->psRelayThroughXs) ? $this->psRelayThroughXs->getValue() : null;
    }

    /**
     * 
     */
    public function setXsRelayListeningPort($xsRelayListeningPort = null)
    {
        $this->xsRelayListeningPort = ($xsRelayListeningPort InstanceOf Port1025)
             ? $xsRelayListeningPort
             : new Port1025($xsRelayListeningPort);
        $this->xsRelayListeningPort->setName('xsRelayListeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $xsRelayListeningPort
     */
    public function getXsRelayListeningPort()
    {
        return ($this->xsRelayListeningPort) ? $this->xsRelayListeningPort->getValue() : null;
    }

    /**
     * 
     */
    public function setTcTimerSeconds($tcTimerSeconds = null)
    {
        $this->tcTimerSeconds = ($tcTimerSeconds InstanceOf BwDiameterTcTimerSeconds)
             ? $tcTimerSeconds
             : new BwDiameterTcTimerSeconds($tcTimerSeconds);
        $this->tcTimerSeconds->setName('tcTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterTcTimerSeconds $tcTimerSeconds
     */
    public function getTcTimerSeconds()
    {
        return ($this->tcTimerSeconds) ? $this->tcTimerSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setTwTimerSeconds($twTimerSeconds = null)
    {
        $this->twTimerSeconds = ($twTimerSeconds InstanceOf BwDiameterTwTimerSeconds)
             ? $twTimerSeconds
             : new BwDiameterTwTimerSeconds($twTimerSeconds);
        $this->twTimerSeconds->setName('twTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterTwTimerSeconds $twTimerSeconds
     */
    public function getTwTimerSeconds()
    {
        return ($this->twTimerSeconds) ? $this->twTimerSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setRequestTimerSeconds($requestTimerSeconds = null)
    {
        $this->requestTimerSeconds = ($requestTimerSeconds InstanceOf BwDiameterRequestTimerSeconds)
             ? $requestTimerSeconds
             : new BwDiameterRequestTimerSeconds($requestTimerSeconds);
        $this->requestTimerSeconds->setName('requestTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return BwDiameterRequestTimerSeconds $requestTimerSeconds
     */
    public function getRequestTimerSeconds()
    {
        return ($this->requestTimerSeconds) ? $this->requestTimerSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyPeerDetectionOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount = null)
    {
        $this->busyPeerDetectionOutstandingTxnCount = ($busyPeerDetectionOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerDetectionOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerDetectionOutstandingTxnCount);
        $this->busyPeerDetectionOutstandingTxnCount->setName('busyPeerDetectionOutstandingTxnCount');
        return $this;
    }

    /**
     * 
     * @return BwDiameterBusyPeerOutstandingTxnCount $busyPeerDetectionOutstandingTxnCount
     */
    public function getBusyPeerDetectionOutstandingTxnCount()
    {
        return ($this->busyPeerDetectionOutstandingTxnCount) ? $this->busyPeerDetectionOutstandingTxnCount->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyPeerRestoreOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount = null)
    {
        $this->busyPeerRestoreOutstandingTxnCount = ($busyPeerRestoreOutstandingTxnCount InstanceOf BwDiameterBusyPeerOutstandingTxnCount)
             ? $busyPeerRestoreOutstandingTxnCount
             : new BwDiameterBusyPeerOutstandingTxnCount($busyPeerRestoreOutstandingTxnCount);
        $this->busyPeerRestoreOutstandingTxnCount->setName('busyPeerRestoreOutstandingTxnCount');
        return $this;
    }

    /**
     * 
     * @return BwDiameterBusyPeerOutstandingTxnCount $busyPeerRestoreOutstandingTxnCount
     */
    public function getBusyPeerRestoreOutstandingTxnCount()
    {
        return ($this->busyPeerRestoreOutstandingTxnCount) ? $this->busyPeerRestoreOutstandingTxnCount->getValue() : null;
    }

    /**
     * 
     */
    public function setDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours = null)
    {
        $this->dynamicEntryInactivityTimerHours = ($dynamicEntryInactivityTimerHours InstanceOf BwDiameterDynamicEntryInactivityTimerHours)
             ? $dynamicEntryInactivityTimerHours
             : new BwDiameterDynamicEntryInactivityTimerHours($dynamicEntryInactivityTimerHours);
        $this->dynamicEntryInactivityTimerHours->setName('dynamicEntryInactivityTimerHours');
        return $this;
    }

    /**
     * 
     * @return BwDiameterDynamicEntryInactivityTimerHours $dynamicEntryInactivityTimerHours
     */
    public function getDynamicEntryInactivityTimerHours()
    {
        return ($this->dynamicEntryInactivityTimerHours) ? $this->dynamicEntryInactivityTimerHours->getValue() : null;
    }
}
