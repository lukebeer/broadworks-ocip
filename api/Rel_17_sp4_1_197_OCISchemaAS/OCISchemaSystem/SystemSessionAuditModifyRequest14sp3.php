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
 * Modify the system level data associated with session audit.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSessionAuditModifyRequest14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $isAuditActive                       = null;
    protected $auditIntervalSeconds                = null;
    protected $auditTimeoutSeconds                 = null;
    protected $releaseCallOnAuditFailure           = null;
    protected $isSIPRefreshAllowedOnAudit          = null;
    protected $allowUpdateForSIPRefresh            = null;
    protected $isSIPSessionTimerActive             = null;
    protected $sipSessionExpiresMinimumSeconds     = null;
    protected $enforceSIPSessionExpiresMaximum     = null;
    protected $sipSessionExpiresMaximumSeconds     = null;
    protected $sipSessionExpiresTimerSeconds       = null;
    protected $alwaysUseSessionTimerWhenSupported  = null;
    protected $preferredSessionTimerRefresher      = null;
    protected $enableEmergencyCallAlarmTimer       = null;
    protected $emergencyCallAlarmMinutes           = null;
    protected $enableEmergencyCallCleanupTimer     = null;
    protected $emergencyCallCleanupMinutes         = null;

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

    public function setIsAuditActive(xs:boolean $isAuditActive = null)
    {
    }

    public function getIsAuditActive()
    {
        return (!$this->isAuditActive) ?: $this->isAuditActive->value();
    }

    public function setAuditIntervalSeconds($auditIntervalSeconds = null)
    {
        $this->auditIntervalSeconds = ($auditIntervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $auditIntervalSeconds
             : new SessionAuditIntervalSeconds($auditIntervalSeconds);
    }

    public function getAuditIntervalSeconds()
    {
        return (!$this->auditIntervalSeconds) ?: $this->auditIntervalSeconds->value();
    }

    public function setAuditTimeoutSeconds($auditTimeoutSeconds = null)
    {
        $this->auditTimeoutSeconds = ($auditTimeoutSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $auditTimeoutSeconds
             : new SessionAuditTimeoutPeriodSeconds($auditTimeoutSeconds);
    }

    public function getAuditTimeoutSeconds()
    {
        return (!$this->auditTimeoutSeconds) ?: $this->auditTimeoutSeconds->value();
    }

    public function setReleaseCallOnAuditFailure(xs:boolean $releaseCallOnAuditFailure = null)
    {
    }

    public function getReleaseCallOnAuditFailure()
    {
        return (!$this->releaseCallOnAuditFailure) ?: $this->releaseCallOnAuditFailure->value();
    }

    public function setIsSIPRefreshAllowedOnAudit(xs:boolean $isSIPRefreshAllowedOnAudit = null)
    {
    }

    public function getIsSIPRefreshAllowedOnAudit()
    {
        return (!$this->isSIPRefreshAllowedOnAudit) ?: $this->isSIPRefreshAllowedOnAudit->value();
    }

    public function setAllowUpdateForSIPRefresh(xs:boolean $allowUpdateForSIPRefresh = null)
    {
    }

    public function getAllowUpdateForSIPRefresh()
    {
        return (!$this->allowUpdateForSIPRefresh) ?: $this->allowUpdateForSIPRefresh->value();
    }

    public function setIsSIPSessionTimerActive(xs:boolean $isSIPSessionTimerActive = null)
    {
    }

    public function getIsSIPSessionTimerActive()
    {
        return (!$this->isSIPSessionTimerActive) ?: $this->isSIPSessionTimerActive->value();
    }

    public function setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds = null)
    {
        $this->sipSessionExpiresMinimumSeconds = ($sipSessionExpiresMinimumSeconds InstanceOf SIPSessionExpiresMinimumSeconds)
             ? $sipSessionExpiresMinimumSeconds
             : new SIPSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds);
    }

    public function getSipSessionExpiresMinimumSeconds()
    {
        return (!$this->sipSessionExpiresMinimumSeconds) ?: $this->sipSessionExpiresMinimumSeconds->value();
    }

    public function setEnforceSIPSessionExpiresMaximum(xs:boolean $enforceSIPSessionExpiresMaximum = null)
    {
    }

    public function getEnforceSIPSessionExpiresMaximum()
    {
        return (!$this->enforceSIPSessionExpiresMaximum) ?: $this->enforceSIPSessionExpiresMaximum->value();
    }

    public function setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds = null)
    {
        $this->sipSessionExpiresMaximumSeconds = ($sipSessionExpiresMaximumSeconds InstanceOf SIPSessionExpiresMaximumSeconds)
             ? $sipSessionExpiresMaximumSeconds
             : new SIPSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds);
    }

    public function getSipSessionExpiresMaximumSeconds()
    {
        return (!$this->sipSessionExpiresMaximumSeconds) ?: $this->sipSessionExpiresMaximumSeconds->value();
    }

    public function setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds = null)
    {
        $this->sipSessionExpiresTimerSeconds = ($sipSessionExpiresTimerSeconds InstanceOf SIPSessionExpiresTimerSeconds)
             ? $sipSessionExpiresTimerSeconds
             : new SIPSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds);
    }

    public function getSipSessionExpiresTimerSeconds()
    {
        return (!$this->sipSessionExpiresTimerSeconds) ?: $this->sipSessionExpiresTimerSeconds->value();
    }

    public function setAlwaysUseSessionTimerWhenSupported(xs:boolean $alwaysUseSessionTimerWhenSupported = null)
    {
    }

    public function getAlwaysUseSessionTimerWhenSupported()
    {
        return (!$this->alwaysUseSessionTimerWhenSupported) ?: $this->alwaysUseSessionTimerWhenSupported->value();
    }

    public function setPreferredSessionTimerRefresher($preferredSessionTimerRefresher = null)
    {
        $this->preferredSessionTimerRefresher = ($preferredSessionTimerRefresher InstanceOf SessionTimerRefresher)
             ? $preferredSessionTimerRefresher
             : new SessionTimerRefresher($preferredSessionTimerRefresher);
    }

    public function getPreferredSessionTimerRefresher()
    {
        return (!$this->preferredSessionTimerRefresher) ?: $this->preferredSessionTimerRefresher->value();
    }

    public function setEnableEmergencyCallAlarmTimer(xs:boolean $enableEmergencyCallAlarmTimer = null)
    {
    }

    public function getEnableEmergencyCallAlarmTimer()
    {
        return (!$this->enableEmergencyCallAlarmTimer) ?: $this->enableEmergencyCallAlarmTimer->value();
    }

    public function setEmergencyCallAlarmMinutes($emergencyCallAlarmMinutes = null)
    {
        $this->emergencyCallAlarmMinutes = ($emergencyCallAlarmMinutes InstanceOf EmergencyCallAlarmMinutes)
             ? $emergencyCallAlarmMinutes
             : new EmergencyCallAlarmMinutes($emergencyCallAlarmMinutes);
    }

    public function getEmergencyCallAlarmMinutes()
    {
        return (!$this->emergencyCallAlarmMinutes) ?: $this->emergencyCallAlarmMinutes->value();
    }

    public function setEnableEmergencyCallCleanupTimer(xs:boolean $enableEmergencyCallCleanupTimer = null)
    {
    }

    public function getEnableEmergencyCallCleanupTimer()
    {
        return (!$this->enableEmergencyCallCleanupTimer) ?: $this->enableEmergencyCallCleanupTimer->value();
    }

    public function setEmergencyCallCleanupMinutes($emergencyCallCleanupMinutes = null)
    {
        $this->emergencyCallCleanupMinutes = ($emergencyCallCleanupMinutes InstanceOf EmergencyCallCleanupMinutes)
             ? $emergencyCallCleanupMinutes
             : new EmergencyCallCleanupMinutes($emergencyCallCleanupMinutes);
    }

    public function getEmergencyCallCleanupMinutes()
    {
        return (!$this->emergencyCallCleanupMinutes) ?: $this->emergencyCallCleanupMinutes->value();
    }
}
