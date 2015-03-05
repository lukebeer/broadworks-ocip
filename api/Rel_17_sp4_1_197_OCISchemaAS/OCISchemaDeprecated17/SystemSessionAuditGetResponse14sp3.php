<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAuditIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAuditTimeoutPeriodSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPSessionExpiresMinimumSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPSessionExpiresMaximumSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPSessionExpiresTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionTimerRefresher;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSessionAuditGetRequest14sp3.
 */
class SystemSessionAuditGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isAuditActive,
             $auditIntervalSeconds,
             $auditTimeoutSeconds,
             $releaseCallOnAuditFailure,
             $isSIPRefreshAllowedOnAudit,
             $allowUpdateForSIPRefresh,
             $isSIPSessionTimerActive,
             $sipSessionExpiresMinimumSeconds,
             $enforceSIPSessionExpiresMaximum,
             $sipSessionExpiresMaximumSeconds,
             $sipSessionExpiresTimerSeconds,
             $alwaysUseSessionTimerWhenSupported,
             $preferredSessionTimerRefresher
    ) {
        $this->isAuditActive                      = $isAuditActive;
        $this->auditIntervalSeconds               = $auditIntervalSeconds;
        $this->auditTimeoutSeconds                = $auditTimeoutSeconds;
        $this->releaseCallOnAuditFailure          = $releaseCallOnAuditFailure;
        $this->isSIPRefreshAllowedOnAudit         = $isSIPRefreshAllowedOnAudit;
        $this->allowUpdateForSIPRefresh           = $allowUpdateForSIPRefresh;
        $this->isSIPSessionTimerActive            = $isSIPSessionTimerActive;
        $this->sipSessionExpiresMinimumSeconds    = $sipSessionExpiresMinimumSeconds;
        $this->enforceSIPSessionExpiresMaximum    = $enforceSIPSessionExpiresMaximum;
        $this->sipSessionExpiresMaximumSeconds    = $sipSessionExpiresMaximumSeconds;
        $this->sipSessionExpiresTimerSeconds      = $sipSessionExpiresTimerSeconds;
        $this->alwaysUseSessionTimerWhenSupported = $alwaysUseSessionTimerWhenSupported;
        $this->preferredSessionTimerRefresher     = $preferredSessionTimerRefresher;
        $this->args                               = func_get_args();
    }

    public function setIsAuditActive($isAuditActive)
    {
        $isAuditActive and $this->isAuditActive = new xs:boolean($isAuditActive);
    }

    public function getIsAuditActive()
    {
        return (!$this->isAuditActive) ?: $this->isAuditActive->value();
    }

    public function setAuditIntervalSeconds($auditIntervalSeconds)
    {
        $auditIntervalSeconds and $this->auditIntervalSeconds = new SessionAuditIntervalSeconds($auditIntervalSeconds);
    }

    public function getAuditIntervalSeconds()
    {
        return (!$this->auditIntervalSeconds) ?: $this->auditIntervalSeconds->value();
    }

    public function setAuditTimeoutSeconds($auditTimeoutSeconds)
    {
        $auditTimeoutSeconds and $this->auditTimeoutSeconds = new SessionAuditTimeoutPeriodSeconds($auditTimeoutSeconds);
    }

    public function getAuditTimeoutSeconds()
    {
        return (!$this->auditTimeoutSeconds) ?: $this->auditTimeoutSeconds->value();
    }

    public function setReleaseCallOnAuditFailure($releaseCallOnAuditFailure)
    {
        $releaseCallOnAuditFailure and $this->releaseCallOnAuditFailure = new xs:boolean($releaseCallOnAuditFailure);
    }

    public function getReleaseCallOnAuditFailure()
    {
        return (!$this->releaseCallOnAuditFailure) ?: $this->releaseCallOnAuditFailure->value();
    }

    public function setIsSIPRefreshAllowedOnAudit($isSIPRefreshAllowedOnAudit)
    {
        $isSIPRefreshAllowedOnAudit and $this->isSIPRefreshAllowedOnAudit = new xs:boolean($isSIPRefreshAllowedOnAudit);
    }

    public function getIsSIPRefreshAllowedOnAudit()
    {
        return (!$this->isSIPRefreshAllowedOnAudit) ?: $this->isSIPRefreshAllowedOnAudit->value();
    }

    public function setAllowUpdateForSIPRefresh($allowUpdateForSIPRefresh)
    {
        $allowUpdateForSIPRefresh and $this->allowUpdateForSIPRefresh = new xs:boolean($allowUpdateForSIPRefresh);
    }

    public function getAllowUpdateForSIPRefresh()
    {
        return (!$this->allowUpdateForSIPRefresh) ?: $this->allowUpdateForSIPRefresh->value();
    }

    public function setIsSIPSessionTimerActive($isSIPSessionTimerActive)
    {
        $isSIPSessionTimerActive and $this->isSIPSessionTimerActive = new xs:boolean($isSIPSessionTimerActive);
    }

    public function getIsSIPSessionTimerActive()
    {
        return (!$this->isSIPSessionTimerActive) ?: $this->isSIPSessionTimerActive->value();
    }

    public function setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds)
    {
        $sipSessionExpiresMinimumSeconds and $this->sipSessionExpiresMinimumSeconds = new SIPSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds);
    }

    public function getSipSessionExpiresMinimumSeconds()
    {
        return (!$this->sipSessionExpiresMinimumSeconds) ?: $this->sipSessionExpiresMinimumSeconds->value();
    }

    public function setEnforceSIPSessionExpiresMaximum($enforceSIPSessionExpiresMaximum)
    {
        $enforceSIPSessionExpiresMaximum and $this->enforceSIPSessionExpiresMaximum = new xs:boolean($enforceSIPSessionExpiresMaximum);
    }

    public function getEnforceSIPSessionExpiresMaximum()
    {
        return (!$this->enforceSIPSessionExpiresMaximum) ?: $this->enforceSIPSessionExpiresMaximum->value();
    }

    public function setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds)
    {
        $sipSessionExpiresMaximumSeconds and $this->sipSessionExpiresMaximumSeconds = new SIPSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds);
    }

    public function getSipSessionExpiresMaximumSeconds()
    {
        return (!$this->sipSessionExpiresMaximumSeconds) ?: $this->sipSessionExpiresMaximumSeconds->value();
    }

    public function setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds)
    {
        $sipSessionExpiresTimerSeconds and $this->sipSessionExpiresTimerSeconds = new SIPSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds);
    }

    public function getSipSessionExpiresTimerSeconds()
    {
        return (!$this->sipSessionExpiresTimerSeconds) ?: $this->sipSessionExpiresTimerSeconds->value();
    }

    public function setAlwaysUseSessionTimerWhenSupported($alwaysUseSessionTimerWhenSupported)
    {
        $alwaysUseSessionTimerWhenSupported and $this->alwaysUseSessionTimerWhenSupported = new xs:boolean($alwaysUseSessionTimerWhenSupported);
    }

    public function getAlwaysUseSessionTimerWhenSupported()
    {
        return (!$this->alwaysUseSessionTimerWhenSupported) ?: $this->alwaysUseSessionTimerWhenSupported->value();
    }

    public function setPreferredSessionTimerRefresher($preferredSessionTimerRefresher)
    {
        $preferredSessionTimerRefresher and $this->preferredSessionTimerRefresher = new SessionTimerRefresher($preferredSessionTimerRefresher);
    }

    public function getPreferredSessionTimerRefresher()
    {
        return (!$this->preferredSessionTimerRefresher) ?: $this->preferredSessionTimerRefresher->value();
    }
}
