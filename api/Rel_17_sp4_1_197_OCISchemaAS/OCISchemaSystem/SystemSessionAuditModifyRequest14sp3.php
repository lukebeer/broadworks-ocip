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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSessionAuditModifyResponse14sp3;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with session audit.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSessionAuditModifyRequest14sp3 extends ComplexType implements ComplexInterface
{
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
     * @return SystemSessionAuditModifyResponse14sp3
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
        $this->isAuditActive = (boolean) $isAuditActive;
    }

    /**
     * 
     */
    public function getIsAuditActive()
    {
        return (!$this->isAuditActive) ?: $this->isAuditActive;
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
        return (!$this->releaseCallOnAuditFailure) ?: $this->releaseCallOnAuditFailure;
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
        return (!$this->isSIPRefreshAllowedOnAudit) ?: $this->isSIPRefreshAllowedOnAudit;
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
        return (!$this->allowUpdateForSIPRefresh) ?: $this->allowUpdateForSIPRefresh;
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
        return (!$this->isSIPSessionTimerActive) ?: $this->isSIPSessionTimerActive;
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
        return (!$this->enforceSIPSessionExpiresMaximum) ?: $this->enforceSIPSessionExpiresMaximum;
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
        return (!$this->alwaysUseSessionTimerWhenSupported) ?: $this->alwaysUseSessionTimerWhenSupported;
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
        return (!$this->enableEmergencyCallAlarmTimer) ?: $this->enableEmergencyCallAlarmTimer;
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
        return (!$this->enableEmergencyCallCleanupTimer) ?: $this->enableEmergencyCallCleanupTimer;
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
