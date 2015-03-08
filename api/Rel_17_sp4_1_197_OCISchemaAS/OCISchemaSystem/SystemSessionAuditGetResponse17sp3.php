<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditTimeoutPeriodSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresMinimumSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresMaximumSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EmergencyCallCleanupMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\EmergencyCallAlarmMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionTimerRefresher;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemSessionAuditGetRequest17sp3.
 */
class SystemSessionAuditGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSessionAuditGetResponse17sp3';
    public    $name                               = __CLASS__;
    protected $isAuditActive                      = null;
    protected $auditIntervalSeconds               = null;
    protected $auditTimeoutSeconds                = null;
    protected $releaseCallOnAuditFailure          = null;
    protected $isSIPRefreshAllowedOnAudit         = null;
    protected $allowUpdateForSIPRefresh           = null;
    protected $isSIPSessionTimerActive            = null;
    protected $sipSessionExpiresMinimumSeconds    = null;
    protected $enforceSIPSessionExpiresMaximum    = null;
    protected $sipSessionExpiresMaximumSeconds    = null;
    protected $sipSessionExpiresTimerSeconds      = null;
    protected $alwaysUseSessionTimerWhenSupported = null;
    protected $preferredSessionTimerRefresher     = null;
    protected $enableEmergencyCallAlarmTimer      = null;
    protected $emergencyCallAlarmMinutes          = null;
    protected $enableEmergencyCallCleanupTimer    = null;
    protected $emergencyCallCleanupMinutes        = null;


    /**
     * 
     */
    public function setIsAuditActive($isAuditActive = null)
    {
        $this->isAuditActive = (boolean) $isAuditActive;
    }

    /**
     * 
     */
    public function getIsAuditActive()
    {
        return (!$this->isAuditActive) ?: $this->isAuditActive->getValue();
    }

    /**
     * Session Audit interval seconds.
     */
    public function setAuditIntervalSeconds($auditIntervalSeconds = null)
    {
        $this->auditIntervalSeconds = ($auditIntervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $auditIntervalSeconds
             : new SessionAuditIntervalSeconds($auditIntervalSeconds);
    }

    /**
     * Session Audit interval seconds.
     */
    public function getAuditIntervalSeconds()
    {
        return (!$this->auditIntervalSeconds) ?: $this->auditIntervalSeconds->getValue();
    }

    /**
     * Session Audit timeout period seconds.
     */
    public function setAuditTimeoutSeconds($auditTimeoutSeconds = null)
    {
        $this->auditTimeoutSeconds = ($auditTimeoutSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $auditTimeoutSeconds
             : new SessionAuditTimeoutPeriodSeconds($auditTimeoutSeconds);
    }

    /**
     * Session Audit timeout period seconds.
     */
    public function getAuditTimeoutSeconds()
    {
        return (!$this->auditTimeoutSeconds) ?: $this->auditTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setReleaseCallOnAuditFailure($releaseCallOnAuditFailure = null)
    {
        $this->releaseCallOnAuditFailure = (boolean) $releaseCallOnAuditFailure;
    }

    /**
     * 
     */
    public function getReleaseCallOnAuditFailure()
    {
        return (!$this->releaseCallOnAuditFailure) ?: $this->releaseCallOnAuditFailure->getValue();
    }

    /**
     * 
     */
    public function setIsSIPRefreshAllowedOnAudit($isSIPRefreshAllowedOnAudit = null)
    {
        $this->isSIPRefreshAllowedOnAudit = (boolean) $isSIPRefreshAllowedOnAudit;
    }

    /**
     * 
     */
    public function getIsSIPRefreshAllowedOnAudit()
    {
        return (!$this->isSIPRefreshAllowedOnAudit) ?: $this->isSIPRefreshAllowedOnAudit->getValue();
    }

    /**
     * 
     */
    public function setAllowUpdateForSIPRefresh($allowUpdateForSIPRefresh = null)
    {
        $this->allowUpdateForSIPRefresh = (boolean) $allowUpdateForSIPRefresh;
    }

    /**
     * 
     */
    public function getAllowUpdateForSIPRefresh()
    {
        return (!$this->allowUpdateForSIPRefresh) ?: $this->allowUpdateForSIPRefresh->getValue();
    }

    /**
     * 
     */
    public function setIsSIPSessionTimerActive($isSIPSessionTimerActive = null)
    {
        $this->isSIPSessionTimerActive = (boolean) $isSIPSessionTimerActive;
    }

    /**
     * 
     */
    public function getIsSIPSessionTimerActive()
    {
        return (!$this->isSIPSessionTimerActive) ?: $this->isSIPSessionTimerActive->getValue();
    }

    /**
     * Corresponds to the SIP Min-SE header.
     */
    public function setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds = null)
    {
        $this->sipSessionExpiresMinimumSeconds = ($sipSessionExpiresMinimumSeconds InstanceOf SIPSessionExpiresMinimumSeconds)
             ? $sipSessionExpiresMinimumSeconds
             : new SIPSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds);
    }

    /**
     * Corresponds to the SIP Min-SE header.
     */
    public function getSipSessionExpiresMinimumSeconds()
    {
        return (!$this->sipSessionExpiresMinimumSeconds) ?: $this->sipSessionExpiresMinimumSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnforceSIPSessionExpiresMaximum($enforceSIPSessionExpiresMaximum = null)
    {
        $this->enforceSIPSessionExpiresMaximum = (boolean) $enforceSIPSessionExpiresMaximum;
    }

    /**
     * 
     */
    public function getEnforceSIPSessionExpiresMaximum()
    {
        return (!$this->enforceSIPSessionExpiresMaximum) ?: $this->enforceSIPSessionExpiresMaximum->getValue();
    }

    /**
     * Corresponds to the SIP Max-SE header.
     */
    public function setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds = null)
    {
        $this->sipSessionExpiresMaximumSeconds = ($sipSessionExpiresMaximumSeconds InstanceOf SIPSessionExpiresMaximumSeconds)
             ? $sipSessionExpiresMaximumSeconds
             : new SIPSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds);
    }

    /**
     * Corresponds to the SIP Max-SE header.
     */
    public function getSipSessionExpiresMaximumSeconds()
    {
        return (!$this->sipSessionExpiresMaximumSeconds) ?: $this->sipSessionExpiresMaximumSeconds->getValue();
    }

    /**
     * Corresponds to the SIP Session-Expires header.
     */
    public function setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds = null)
    {
        $this->sipSessionExpiresTimerSeconds = ($sipSessionExpiresTimerSeconds InstanceOf SIPSessionExpiresTimerSeconds)
             ? $sipSessionExpiresTimerSeconds
             : new SIPSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds);
    }

    /**
     * Corresponds to the SIP Session-Expires header.
     */
    public function getSipSessionExpiresTimerSeconds()
    {
        return (!$this->sipSessionExpiresTimerSeconds) ?: $this->sipSessionExpiresTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setAlwaysUseSessionTimerWhenSupported($alwaysUseSessionTimerWhenSupported = null)
    {
        $this->alwaysUseSessionTimerWhenSupported = (boolean) $alwaysUseSessionTimerWhenSupported;
    }

    /**
     * 
     */
    public function getAlwaysUseSessionTimerWhenSupported()
    {
        return (!$this->alwaysUseSessionTimerWhenSupported) ?: $this->alwaysUseSessionTimerWhenSupported->getValue();
    }

    /**
     * Choices for Preferred Session Timer Refresher.
     */
    public function setPreferredSessionTimerRefresher($preferredSessionTimerRefresher = null)
    {
        $this->preferredSessionTimerRefresher = ($preferredSessionTimerRefresher InstanceOf SessionTimerRefresher)
             ? $preferredSessionTimerRefresher
             : new SessionTimerRefresher($preferredSessionTimerRefresher);
    }

    /**
     * Choices for Preferred Session Timer Refresher.
     */
    public function getPreferredSessionTimerRefresher()
    {
        return (!$this->preferredSessionTimerRefresher) ?: $this->preferredSessionTimerRefresher->getValue();
    }

    /**
     * 
     */
    public function setEnableEmergencyCallAlarmTimer($enableEmergencyCallAlarmTimer = null)
    {
        $this->enableEmergencyCallAlarmTimer = (boolean) $enableEmergencyCallAlarmTimer;
    }

    /**
     * 
     */
    public function getEnableEmergencyCallAlarmTimer()
    {
        return (!$this->enableEmergencyCallAlarmTimer) ?: $this->enableEmergencyCallAlarmTimer->getValue();
    }

    /**
     * Duration of emergency call before BroadWorks sends an SNMP notification.
     */
    public function setEmergencyCallAlarmMinutes($emergencyCallAlarmMinutes = null)
    {
        $this->emergencyCallAlarmMinutes = ($emergencyCallAlarmMinutes InstanceOf EmergencyCallAlarmMinutes)
             ? $emergencyCallAlarmMinutes
             : new EmergencyCallAlarmMinutes($emergencyCallAlarmMinutes);
    }

    /**
     * Duration of emergency call before BroadWorks sends an SNMP notification.
     */
    public function getEmergencyCallAlarmMinutes()
    {
        return (!$this->emergencyCallAlarmMinutes) ?: $this->emergencyCallAlarmMinutes->getValue();
    }

    /**
     * 
     */
    public function setEnableEmergencyCallCleanupTimer($enableEmergencyCallCleanupTimer = null)
    {
        $this->enableEmergencyCallCleanupTimer = (boolean) $enableEmergencyCallCleanupTimer;
    }

    /**
     * 
     */
    public function getEnableEmergencyCallCleanupTimer()
    {
        return (!$this->enableEmergencyCallCleanupTimer) ?: $this->enableEmergencyCallCleanupTimer->getValue();
    }

    /**
     * Duration of emergency call before BroadWorks releases all internal resources.
     */
    public function setEmergencyCallCleanupMinutes($emergencyCallCleanupMinutes = null)
    {
        $this->emergencyCallCleanupMinutes = ($emergencyCallCleanupMinutes InstanceOf EmergencyCallCleanupMinutes)
             ? $emergencyCallCleanupMinutes
             : new EmergencyCallCleanupMinutes($emergencyCallCleanupMinutes);
    }

    /**
     * Duration of emergency call before BroadWorks releases all internal resources.
     */
    public function getEmergencyCallCleanupMinutes()
    {
        return (!$this->emergencyCallCleanupMinutes) ?: $this->emergencyCallCleanupMinutes->getValue();
    }
}