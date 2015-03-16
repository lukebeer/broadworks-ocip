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
    public    $name = 'SystemSessionAuditGetResponse14sp3';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemSessionAuditGetResponse14sp3 $response
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
        $this->isAuditActive->setName('isAuditActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isAuditActive
     */
    public function getIsAuditActive()
    {
        return ($this->isAuditActive) ? $this->isAuditActive->getValue() : null;
    }

    /**
     * 
     */
    public function setAuditIntervalSeconds($auditIntervalSeconds = null)
    {
        $this->auditIntervalSeconds = ($auditIntervalSeconds InstanceOf SessionAuditIntervalSeconds)
             ? $auditIntervalSeconds
             : new SessionAuditIntervalSeconds($auditIntervalSeconds);
        $this->auditIntervalSeconds->setName('auditIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditIntervalSeconds $auditIntervalSeconds
     */
    public function getAuditIntervalSeconds()
    {
        return ($this->auditIntervalSeconds) ? $this->auditIntervalSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setAuditTimeoutSeconds($auditTimeoutSeconds = null)
    {
        $this->auditTimeoutSeconds = ($auditTimeoutSeconds InstanceOf SessionAuditTimeoutPeriodSeconds)
             ? $auditTimeoutSeconds
             : new SessionAuditTimeoutPeriodSeconds($auditTimeoutSeconds);
        $this->auditTimeoutSeconds->setName('auditTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return SessionAuditTimeoutPeriodSeconds $auditTimeoutSeconds
     */
    public function getAuditTimeoutSeconds()
    {
        return ($this->auditTimeoutSeconds) ? $this->auditTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setReleaseCallOnAuditFailure($releaseCallOnAuditFailure = null)
    {
        $this->releaseCallOnAuditFailure = new PrimitiveType($releaseCallOnAuditFailure);
        $this->releaseCallOnAuditFailure->setName('releaseCallOnAuditFailure');
        return $this;
    }

    /**
     * 
     * @return boolean $releaseCallOnAuditFailure
     */
    public function getReleaseCallOnAuditFailure()
    {
        return ($this->releaseCallOnAuditFailure) ? $this->releaseCallOnAuditFailure->getValue() : null;
    }

    /**
     * 
     */
    public function setIsSIPRefreshAllowedOnAudit($isSIPRefreshAllowedOnAudit = null)
    {
        $this->isSIPRefreshAllowedOnAudit = new PrimitiveType($isSIPRefreshAllowedOnAudit);
        $this->isSIPRefreshAllowedOnAudit->setName('isSIPRefreshAllowedOnAudit');
        return $this;
    }

    /**
     * 
     * @return boolean $isSIPRefreshAllowedOnAudit
     */
    public function getIsSIPRefreshAllowedOnAudit()
    {
        return ($this->isSIPRefreshAllowedOnAudit) ? $this->isSIPRefreshAllowedOnAudit->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowUpdateForSIPRefresh($allowUpdateForSIPRefresh = null)
    {
        $this->allowUpdateForSIPRefresh = new PrimitiveType($allowUpdateForSIPRefresh);
        $this->allowUpdateForSIPRefresh->setName('allowUpdateForSIPRefresh');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUpdateForSIPRefresh
     */
    public function getAllowUpdateForSIPRefresh()
    {
        return ($this->allowUpdateForSIPRefresh) ? $this->allowUpdateForSIPRefresh->getValue() : null;
    }

    /**
     * 
     */
    public function setIsSIPSessionTimerActive($isSIPSessionTimerActive = null)
    {
        $this->isSIPSessionTimerActive = new PrimitiveType($isSIPSessionTimerActive);
        $this->isSIPSessionTimerActive->setName('isSIPSessionTimerActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isSIPSessionTimerActive
     */
    public function getIsSIPSessionTimerActive()
    {
        return ($this->isSIPSessionTimerActive) ? $this->isSIPSessionTimerActive->getValue() : null;
    }

    /**
     * 
     */
    public function setSipSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds = null)
    {
        $this->sipSessionExpiresMinimumSeconds = ($sipSessionExpiresMinimumSeconds InstanceOf SIPSessionExpiresMinimumSeconds)
             ? $sipSessionExpiresMinimumSeconds
             : new SIPSessionExpiresMinimumSeconds($sipSessionExpiresMinimumSeconds);
        $this->sipSessionExpiresMinimumSeconds->setName('sipSessionExpiresMinimumSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresMinimumSeconds $sipSessionExpiresMinimumSeconds
     */
    public function getSipSessionExpiresMinimumSeconds()
    {
        return ($this->sipSessionExpiresMinimumSeconds) ? $this->sipSessionExpiresMinimumSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setEnforceSIPSessionExpiresMaximum($enforceSIPSessionExpiresMaximum = null)
    {
        $this->enforceSIPSessionExpiresMaximum = new PrimitiveType($enforceSIPSessionExpiresMaximum);
        $this->enforceSIPSessionExpiresMaximum->setName('enforceSIPSessionExpiresMaximum');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceSIPSessionExpiresMaximum
     */
    public function getEnforceSIPSessionExpiresMaximum()
    {
        return ($this->enforceSIPSessionExpiresMaximum) ? $this->enforceSIPSessionExpiresMaximum->getValue() : null;
    }

    /**
     * 
     */
    public function setSipSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds = null)
    {
        $this->sipSessionExpiresMaximumSeconds = ($sipSessionExpiresMaximumSeconds InstanceOf SIPSessionExpiresMaximumSeconds)
             ? $sipSessionExpiresMaximumSeconds
             : new SIPSessionExpiresMaximumSeconds($sipSessionExpiresMaximumSeconds);
        $this->sipSessionExpiresMaximumSeconds->setName('sipSessionExpiresMaximumSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresMaximumSeconds $sipSessionExpiresMaximumSeconds
     */
    public function getSipSessionExpiresMaximumSeconds()
    {
        return ($this->sipSessionExpiresMaximumSeconds) ? $this->sipSessionExpiresMaximumSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setSipSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds = null)
    {
        $this->sipSessionExpiresTimerSeconds = ($sipSessionExpiresTimerSeconds InstanceOf SIPSessionExpiresTimerSeconds)
             ? $sipSessionExpiresTimerSeconds
             : new SIPSessionExpiresTimerSeconds($sipSessionExpiresTimerSeconds);
        $this->sipSessionExpiresTimerSeconds->setName('sipSessionExpiresTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return SIPSessionExpiresTimerSeconds $sipSessionExpiresTimerSeconds
     */
    public function getSipSessionExpiresTimerSeconds()
    {
        return ($this->sipSessionExpiresTimerSeconds) ? $this->sipSessionExpiresTimerSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setAlwaysUseSessionTimerWhenSupported($alwaysUseSessionTimerWhenSupported = null)
    {
        $this->alwaysUseSessionTimerWhenSupported = new PrimitiveType($alwaysUseSessionTimerWhenSupported);
        $this->alwaysUseSessionTimerWhenSupported->setName('alwaysUseSessionTimerWhenSupported');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysUseSessionTimerWhenSupported
     */
    public function getAlwaysUseSessionTimerWhenSupported()
    {
        return ($this->alwaysUseSessionTimerWhenSupported) ? $this->alwaysUseSessionTimerWhenSupported->getValue() : null;
    }

    /**
     * 
     */
    public function setPreferredSessionTimerRefresher($preferredSessionTimerRefresher = null)
    {
        $this->preferredSessionTimerRefresher = ($preferredSessionTimerRefresher InstanceOf SessionTimerRefresher)
             ? $preferredSessionTimerRefresher
             : new SessionTimerRefresher($preferredSessionTimerRefresher);
        $this->preferredSessionTimerRefresher->setName('preferredSessionTimerRefresher');
        return $this;
    }

    /**
     * 
     * @return SessionTimerRefresher $preferredSessionTimerRefresher
     */
    public function getPreferredSessionTimerRefresher()
    {
        return ($this->preferredSessionTimerRefresher) ? $this->preferredSessionTimerRefresher->getValue() : null;
    }
}
