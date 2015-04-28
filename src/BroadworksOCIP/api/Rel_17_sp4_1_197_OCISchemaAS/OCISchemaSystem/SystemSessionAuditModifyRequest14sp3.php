<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditTimeoutPeriodSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresMinimumSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresMaximumSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EmergencyCallCleanupMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditIntervalSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EmergencyCallAlarmMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionTimerRefresher;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level data associated with session audit.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSessionAuditModifyRequest14sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSessionAuditModifyRequest14sp3';
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
    protected $enableEmergencyCallAlarmTimer;
    protected $emergencyCallAlarmMinutes;
    protected $enableEmergencyCallCleanupTimer;
    protected $emergencyCallCleanupMinutes;

    public function __construct(
         $isAuditActive = null,
         $auditIntervalSeconds = null,
         $auditTimeoutSeconds = null,
         $releaseCallOnAuditFailure = null,
         $isSIPRefreshAllowedOnAudit = null,
         $allowUpdateForSIPRefresh = null,
         $isSIPSessionTimerActive = null,
         $sipSessionExpiresMinimumSeconds = null,
         $enforceSIPSessionExpiresMaximum = null,
         $sipSessionExpiresMaximumSeconds = null,
         $sipSessionExpiresTimerSeconds = null,
         $alwaysUseSessionTimerWhenSupported = null,
         $preferredSessionTimerRefresher = null,
         $enableEmergencyCallAlarmTimer = null,
         $emergencyCallAlarmMinutes = null,
         $enableEmergencyCallCleanupTimer = null,
         $emergencyCallCleanupMinutes = null
    ) {
        $this->setIsAuditActive($isAuditActive);
        $this->setAuditIntervalSeconds($auditIntervalSeconds);
        $this->setAuditTimeoutSeconds($auditTimeoutSeconds);
        $this->setReleaseCallOnAuditFailure($releaseCallOnAuditFailure);
        $this->setIsSIPRefreshAllowedOnAudit($isSIPRefreshAllowedOnAudit);
        $this->setAllowUpdateForSIPRefresh($allowUpdateForSIPRefresh);
        $this->setIsSIPSessionTimerActive($isSIPSessionTimerActive);
        $this->setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds);
        $this->setEnforceSIPSessionExpiresMaximum($enforceSIPSessionExpiresMaximum);
        $this->setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds);
        $this->setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds);
        $this->setAlwaysUseSessionTimerWhenSupported($alwaysUseSessionTimerWhenSupported);
        $this->setPreferredSessionTimerRefresher($preferredSessionTimerRefresher);
        $this->setEnableEmergencyCallAlarmTimer($enableEmergencyCallAlarmTimer);
        $this->setEmergencyCallAlarmMinutes($emergencyCallAlarmMinutes);
        $this->setEnableEmergencyCallCleanupTimer($enableEmergencyCallCleanupTimer);
        $this->setEmergencyCallCleanupMinutes($emergencyCallCleanupMinutes);
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

    /**
     * 
     */
    public function setEnableEmergencyCallAlarmTimer($enableEmergencyCallAlarmTimer = null)
    {
        $this->enableEmergencyCallAlarmTimer = new PrimitiveType($enableEmergencyCallAlarmTimer);
        $this->enableEmergencyCallAlarmTimer->setElementName('enableEmergencyCallAlarmTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEmergencyCallAlarmTimer
     */
    public function getEnableEmergencyCallAlarmTimer()
    {
        return ($this->enableEmergencyCallAlarmTimer)
            ? $this->enableEmergencyCallAlarmTimer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEmergencyCallAlarmMinutes($emergencyCallAlarmMinutes = null)
    {
        $this->emergencyCallAlarmMinutes = ($emergencyCallAlarmMinutes InstanceOf EmergencyCallAlarmMinutes)
             ? $emergencyCallAlarmMinutes
             : new EmergencyCallAlarmMinutes($emergencyCallAlarmMinutes);
        $this->emergencyCallAlarmMinutes->setElementName('emergencyCallAlarmMinutes');
        return $this;
    }

    /**
     * 
     * @return EmergencyCallAlarmMinutes $emergencyCallAlarmMinutes
     */
    public function getEmergencyCallAlarmMinutes()
    {
        return ($this->emergencyCallAlarmMinutes)
            ? $this->emergencyCallAlarmMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableEmergencyCallCleanupTimer($enableEmergencyCallCleanupTimer = null)
    {
        $this->enableEmergencyCallCleanupTimer = new PrimitiveType($enableEmergencyCallCleanupTimer);
        $this->enableEmergencyCallCleanupTimer->setElementName('enableEmergencyCallCleanupTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEmergencyCallCleanupTimer
     */
    public function getEnableEmergencyCallCleanupTimer()
    {
        return ($this->enableEmergencyCallCleanupTimer)
            ? $this->enableEmergencyCallCleanupTimer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEmergencyCallCleanupMinutes($emergencyCallCleanupMinutes = null)
    {
        $this->emergencyCallCleanupMinutes = ($emergencyCallCleanupMinutes InstanceOf EmergencyCallCleanupMinutes)
             ? $emergencyCallCleanupMinutes
             : new EmergencyCallCleanupMinutes($emergencyCallCleanupMinutes);
        $this->emergencyCallCleanupMinutes->setElementName('emergencyCallCleanupMinutes');
        return $this;
    }

    /**
     * 
     * @return EmergencyCallCleanupMinutes $emergencyCallCleanupMinutes
     */
    public function getEmergencyCallCleanupMinutes()
    {
        return ($this->emergencyCallCleanupMinutes)
            ? $this->emergencyCallCleanupMinutes->getElementValue()
            : null;
    }
}
