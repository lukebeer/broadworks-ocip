<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditTimeoutPeriodSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresMinimumSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresMaximumSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPSessionExpiresTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionAuditIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SessionTimerRefresher;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSessionAuditGetRequest14sp3.
 */
class SystemSessionAuditGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                               = 'SystemSessionAuditGetResponse14sp3';
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

    /**
     * @return SystemSessionAuditGetResponse14sp3
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
        if (!$isAuditActive) return $this;
        $this->isAuditActive = new PrimitiveType($isAuditActive);
        $this->isAuditActive->setName('isAuditActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsAuditActive()
    {
        return $this->isAuditActive->getValue();
    }

    /**
     * 
     */
    public function setAuditIntervalSeconds($auditIntervalSeconds = null)
    {
        if (!$auditIntervalSeconds) return $this;
        $this->auditIntervalSeconds = ($auditIntervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $auditIntervalSeconds
             : new SessionAuditIntervalSeconds($auditIntervalSeconds);
        $this->auditIntervalSeconds->setName('auditIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditIntervalSeconds
     */
    public function getAuditIntervalSeconds()
    {
        return $this->auditIntervalSeconds->getValue();
    }

    /**
     * 
     */
    public function setAuditTimeoutSeconds($auditTimeoutSeconds = null)
    {
        if (!$auditTimeoutSeconds) return $this;
        $this->auditTimeoutSeconds = ($auditTimeoutSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $auditTimeoutSeconds
             : new SessionAuditTimeoutPeriodSeconds($auditTimeoutSeconds);
        $this->auditTimeoutSeconds->setName('auditTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditTimeoutPeriodSeconds
     */
    public function getAuditTimeoutSeconds()
    {
        return $this->auditTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setReleaseCallOnAuditFailure($releaseCallOnAuditFailure = null)
    {
        if (!$releaseCallOnAuditFailure) return $this;
        $this->releaseCallOnAuditFailure = new PrimitiveType($releaseCallOnAuditFailure);
        $this->releaseCallOnAuditFailure->setName('releaseCallOnAuditFailure');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getReleaseCallOnAuditFailure()
    {
        return $this->releaseCallOnAuditFailure->getValue();
    }

    /**
     * 
     */
    public function setIsSIPRefreshAllowedOnAudit($isSIPRefreshAllowedOnAudit = null)
    {
        if (!$isSIPRefreshAllowedOnAudit) return $this;
        $this->isSIPRefreshAllowedOnAudit = new PrimitiveType($isSIPRefreshAllowedOnAudit);
        $this->isSIPRefreshAllowedOnAudit->setName('isSIPRefreshAllowedOnAudit');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsSIPRefreshAllowedOnAudit()
    {
        return $this->isSIPRefreshAllowedOnAudit->getValue();
    }

    /**
     * 
     */
    public function setAllowUpdateForSIPRefresh($allowUpdateForSIPRefresh = null)
    {
        if (!$allowUpdateForSIPRefresh) return $this;
        $this->allowUpdateForSIPRefresh = new PrimitiveType($allowUpdateForSIPRefresh);
        $this->allowUpdateForSIPRefresh->setName('allowUpdateForSIPRefresh');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowUpdateForSIPRefresh()
    {
        return $this->allowUpdateForSIPRefresh->getValue();
    }

    /**
     * 
     */
    public function setIsSIPSessionTimerActive($isSIPSessionTimerActive = null)
    {
        if (!$isSIPSessionTimerActive) return $this;
        $this->isSIPSessionTimerActive = new PrimitiveType($isSIPSessionTimerActive);
        $this->isSIPSessionTimerActive->setName('isSIPSessionTimerActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsSIPSessionTimerActive()
    {
        return $this->isSIPSessionTimerActive->getValue();
    }

    /**
     * 
     */
    public function setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds = null)
    {
        if (!$sipSessionExpiresMinimumSeconds) return $this;
        $this->sipSessionExpiresMinimumSeconds = ($sipSessionExpiresMinimumSeconds InstanceOf SIPSessionExpiresMinimumSeconds)
             ? $sipSessionExpiresMinimumSeconds
             : new SIPSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds);
        $this->sipSessionExpiresMinimumSeconds->setName('sipSessionExpiresMinimumSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresMinimumSeconds
     */
    public function getSipSessionExpiresMinimumSeconds()
    {
        return $this->sipSessionExpiresMinimumSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnforceSIPSessionExpiresMaximum($enforceSIPSessionExpiresMaximum = null)
    {
        if (!$enforceSIPSessionExpiresMaximum) return $this;
        $this->enforceSIPSessionExpiresMaximum = new PrimitiveType($enforceSIPSessionExpiresMaximum);
        $this->enforceSIPSessionExpiresMaximum->setName('enforceSIPSessionExpiresMaximum');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnforceSIPSessionExpiresMaximum()
    {
        return $this->enforceSIPSessionExpiresMaximum->getValue();
    }

    /**
     * 
     */
    public function setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds = null)
    {
        if (!$sipSessionExpiresMaximumSeconds) return $this;
        $this->sipSessionExpiresMaximumSeconds = ($sipSessionExpiresMaximumSeconds InstanceOf SIPSessionExpiresMaximumSeconds)
             ? $sipSessionExpiresMaximumSeconds
             : new SIPSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds);
        $this->sipSessionExpiresMaximumSeconds->setName('sipSessionExpiresMaximumSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresMaximumSeconds
     */
    public function getSipSessionExpiresMaximumSeconds()
    {
        return $this->sipSessionExpiresMaximumSeconds->getValue();
    }

    /**
     * 
     */
    public function setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds = null)
    {
        if (!$sipSessionExpiresTimerSeconds) return $this;
        $this->sipSessionExpiresTimerSeconds = ($sipSessionExpiresTimerSeconds InstanceOf SIPSessionExpiresTimerSeconds)
             ? $sipSessionExpiresTimerSeconds
             : new SIPSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds);
        $this->sipSessionExpiresTimerSeconds->setName('sipSessionExpiresTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresTimerSeconds
     */
    public function getSipSessionExpiresTimerSeconds()
    {
        return $this->sipSessionExpiresTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setAlwaysUseSessionTimerWhenSupported($alwaysUseSessionTimerWhenSupported = null)
    {
        if (!$alwaysUseSessionTimerWhenSupported) return $this;
        $this->alwaysUseSessionTimerWhenSupported = new PrimitiveType($alwaysUseSessionTimerWhenSupported);
        $this->alwaysUseSessionTimerWhenSupported->setName('alwaysUseSessionTimerWhenSupported');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlwaysUseSessionTimerWhenSupported()
    {
        return $this->alwaysUseSessionTimerWhenSupported->getValue();
    }

    /**
     * 
     */
    public function setPreferredSessionTimerRefresher($preferredSessionTimerRefresher = null)
    {
        if (!$preferredSessionTimerRefresher) return $this;
        $this->preferredSessionTimerRefresher = ($preferredSessionTimerRefresher InstanceOf SessionTimerRefresher)
             ? $preferredSessionTimerRefresher
             : new SessionTimerRefresher($preferredSessionTimerRefresher);
        $this->preferredSessionTimerRefresher->setName('preferredSessionTimerRefresher');
        return $this;
    }

    /**
     * 
     * @return SessionTimerRefresher
     */
    public function getPreferredSessionTimerRefresher()
    {
        return $this->preferredSessionTimerRefresher->getValue();
    }
}
