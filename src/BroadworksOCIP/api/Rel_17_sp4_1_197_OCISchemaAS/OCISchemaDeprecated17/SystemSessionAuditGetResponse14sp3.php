<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditTimeoutPeriodSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresMinimumSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresMaximumSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditIntervalSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionTimerRefresher;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemSessionAuditGetRequest14sp3.
 */
class SystemSessionAuditGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSessionAuditGetResponse14sp3';
    protected $isAuditActive;
    protected $auditIntervalSeconds;
    protected $auditTimeoutSeconds;
    protected $releaseCallOnAuditFailure;
    protected $isSIPRefreshAllowedOnAudit;
    protected $allowUpdateForSIPRefresh;
    protected $isSIPSessionTimerActive;
    protected $sipSessionExpiresMinimumSeconds;
    protected $enforceSIPSessionExpiresMaximum;
    protected $sipSessionExpiresMaximumSeconds;
    protected $sipSessionExpiresTimerSeconds;
    protected $alwaysUseSessionTimerWhenSupported;
    protected $preferredSessionTimerRefresher;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemSessionAuditGetResponse14sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsAuditActive($isAuditActive = null)
    {
        $this->isAuditActive = new PrimitiveType($isAuditActive);
        $this->isAuditActive->setElementName('isAuditActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isAuditActive
     */
    public function getIsAuditActive()
    {
        return ($this->isAuditActive)
            ? $this->isAuditActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAuditIntervalSeconds($auditIntervalSeconds = null)
    {
        $this->auditIntervalSeconds = ($auditIntervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $auditIntervalSeconds
             : new SessionAuditIntervalSeconds($auditIntervalSeconds);
        $this->auditIntervalSeconds->setElementName('auditIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditIntervalSeconds $auditIntervalSeconds
     */
    public function getAuditIntervalSeconds()
    {
        return ($this->auditIntervalSeconds)
            ? $this->auditIntervalSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAuditTimeoutSeconds($auditTimeoutSeconds = null)
    {
        $this->auditTimeoutSeconds = ($auditTimeoutSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $auditTimeoutSeconds
             : new SessionAuditTimeoutPeriodSeconds($auditTimeoutSeconds);
        $this->auditTimeoutSeconds->setElementName('auditTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditTimeoutPeriodSeconds $auditTimeoutSeconds
     */
    public function getAuditTimeoutSeconds()
    {
        return ($this->auditTimeoutSeconds)
            ? $this->auditTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReleaseCallOnAuditFailure($releaseCallOnAuditFailure = null)
    {
        $this->releaseCallOnAuditFailure = new PrimitiveType($releaseCallOnAuditFailure);
        $this->releaseCallOnAuditFailure->setElementName('releaseCallOnAuditFailure');
        return $this;
    }

    /**
     * 
     * @return boolean $releaseCallOnAuditFailure
     */
    public function getReleaseCallOnAuditFailure()
    {
        return ($this->releaseCallOnAuditFailure)
            ? $this->releaseCallOnAuditFailure->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsSIPRefreshAllowedOnAudit($isSIPRefreshAllowedOnAudit = null)
    {
        $this->isSIPRefreshAllowedOnAudit = new PrimitiveType($isSIPRefreshAllowedOnAudit);
        $this->isSIPRefreshAllowedOnAudit->setElementName('isSIPRefreshAllowedOnAudit');
        return $this;
    }

    /**
     * 
     * @return boolean $isSIPRefreshAllowedOnAudit
     */
    public function getIsSIPRefreshAllowedOnAudit()
    {
        return ($this->isSIPRefreshAllowedOnAudit)
            ? $this->isSIPRefreshAllowedOnAudit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowUpdateForSIPRefresh($allowUpdateForSIPRefresh = null)
    {
        $this->allowUpdateForSIPRefresh = new PrimitiveType($allowUpdateForSIPRefresh);
        $this->allowUpdateForSIPRefresh->setElementName('allowUpdateForSIPRefresh');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUpdateForSIPRefresh
     */
    public function getAllowUpdateForSIPRefresh()
    {
        return ($this->allowUpdateForSIPRefresh)
            ? $this->allowUpdateForSIPRefresh->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsSIPSessionTimerActive($isSIPSessionTimerActive = null)
    {
        $this->isSIPSessionTimerActive = new PrimitiveType($isSIPSessionTimerActive);
        $this->isSIPSessionTimerActive->setElementName('isSIPSessionTimerActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isSIPSessionTimerActive
     */
    public function getIsSIPSessionTimerActive()
    {
        return ($this->isSIPSessionTimerActive)
            ? $this->isSIPSessionTimerActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds = null)
    {
        $this->sipSessionExpiresMinimumSeconds = ($sipSessionExpiresMinimumSeconds InstanceOf SIPSessionExpiresMinimumSeconds)
             ? $sipSessionExpiresMinimumSeconds
             : new SIPSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds);
        $this->sipSessionExpiresMinimumSeconds->setElementName('sipSessionExpiresMinimumSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresMinimumSeconds $sipSessionExpiresMinimumSeconds
     */
    public function getSipSessionExpiresMinimumSeconds()
    {
        return ($this->sipSessionExpiresMinimumSeconds)
            ? $this->sipSessionExpiresMinimumSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnforceSIPSessionExpiresMaximum($enforceSIPSessionExpiresMaximum = null)
    {
        $this->enforceSIPSessionExpiresMaximum = new PrimitiveType($enforceSIPSessionExpiresMaximum);
        $this->enforceSIPSessionExpiresMaximum->setElementName('enforceSIPSessionExpiresMaximum');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceSIPSessionExpiresMaximum
     */
    public function getEnforceSIPSessionExpiresMaximum()
    {
        return ($this->enforceSIPSessionExpiresMaximum)
            ? $this->enforceSIPSessionExpiresMaximum->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds = null)
    {
        $this->sipSessionExpiresMaximumSeconds = ($sipSessionExpiresMaximumSeconds InstanceOf SIPSessionExpiresMaximumSeconds)
             ? $sipSessionExpiresMaximumSeconds
             : new SIPSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds);
        $this->sipSessionExpiresMaximumSeconds->setElementName('sipSessionExpiresMaximumSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresMaximumSeconds $sipSessionExpiresMaximumSeconds
     */
    public function getSipSessionExpiresMaximumSeconds()
    {
        return ($this->sipSessionExpiresMaximumSeconds)
            ? $this->sipSessionExpiresMaximumSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds = null)
    {
        $this->sipSessionExpiresTimerSeconds = ($sipSessionExpiresTimerSeconds InstanceOf SIPSessionExpiresTimerSeconds)
             ? $sipSessionExpiresTimerSeconds
             : new SIPSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds);
        $this->sipSessionExpiresTimerSeconds->setElementName('sipSessionExpiresTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresTimerSeconds $sipSessionExpiresTimerSeconds
     */
    public function getSipSessionExpiresTimerSeconds()
    {
        return ($this->sipSessionExpiresTimerSeconds)
            ? $this->sipSessionExpiresTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlwaysUseSessionTimerWhenSupported($alwaysUseSessionTimerWhenSupported = null)
    {
        $this->alwaysUseSessionTimerWhenSupported = new PrimitiveType($alwaysUseSessionTimerWhenSupported);
        $this->alwaysUseSessionTimerWhenSupported->setElementName('alwaysUseSessionTimerWhenSupported');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysUseSessionTimerWhenSupported
     */
    public function getAlwaysUseSessionTimerWhenSupported()
    {
        return ($this->alwaysUseSessionTimerWhenSupported)
            ? $this->alwaysUseSessionTimerWhenSupported->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPreferredSessionTimerRefresher($preferredSessionTimerRefresher = null)
    {
        $this->preferredSessionTimerRefresher = ($preferredSessionTimerRefresher InstanceOf SessionTimerRefresher)
             ? $preferredSessionTimerRefresher
             : new SessionTimerRefresher($preferredSessionTimerRefresher);
        $this->preferredSessionTimerRefresher->setElementName('preferredSessionTimerRefresher');
        return $this;
    }

    /**
     * 
     * @return SessionTimerRefresher $preferredSessionTimerRefresher
     */
    public function getPreferredSessionTimerRefresher()
    {
        return ($this->preferredSessionTimerRefresher)
            ? $this->preferredSessionTimerRefresher->getElementValue()
            : null;
    }
}
