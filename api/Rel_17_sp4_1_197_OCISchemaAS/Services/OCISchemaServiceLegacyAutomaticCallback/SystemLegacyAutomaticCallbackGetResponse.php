<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackMaxMonitorsPerTerminator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackTRingSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT10TMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT10OMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT8Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT6Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT2Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT4Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT5Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT7Minutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemLegacyAutomaticCallbackGetRequest.
 */
class SystemLegacyAutomaticCallbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = 'SystemLegacyAutomaticCallbackGetResponse';
    protected $maxMonitorsPerOriginator = null;
    protected $maxMonitorsPerTerminator = null;
    protected $t2Minutes                = null;
    protected $t4Seconds                = null;
    protected $t5Seconds                = null;
    protected $t6Minutes                = null;
    protected $t7Minutes                = null;
    protected $t8Seconds                = null;
    protected $tRingSeconds             = null;
    protected $t10OMinutes              = null;
    protected $t10TMinutes              = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\SystemLegacyAutomaticCallbackGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator = null)
    {
        if (!$maxMonitorsPerOriginator) return $this;
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf LegacyAutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new LegacyAutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->maxMonitorsPerOriginator->setName('maxMonitorsPerOriginator');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackMaxMonitorsPerOriginator $maxMonitorsPerOriginator
     */
    public function getMaxMonitorsPerOriginator()
    {
        return $this->maxMonitorsPerOriginator->getValue();
    }

    /**
     * 
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator = null)
    {
        if (!$maxMonitorsPerTerminator) return $this;
        $this->maxMonitorsPerTerminator = ($maxMonitorsPerTerminator InstanceOf LegacyAutomaticCallbackMaxMonitorsPerTerminator)
             ? $maxMonitorsPerTerminator
             : new LegacyAutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->maxMonitorsPerTerminator->setName('maxMonitorsPerTerminator');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackMaxMonitorsPerTerminator $maxMonitorsPerTerminator
     */
    public function getMaxMonitorsPerTerminator()
    {
        return $this->maxMonitorsPerTerminator->getValue();
    }

    /**
     * 
     */
    public function setT2Minutes($t2Minutes = null)
    {
        if (!$t2Minutes) return $this;
        $this->t2Minutes = ($t2Minutes InstanceOf LegacyAutomaticCallbackT2Minutes)
             ? $t2Minutes
             : new LegacyAutomaticCallbackT2Minutes($t2Minutes);
        $this->t2Minutes->setName('t2Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT2Minutes $t2Minutes
     */
    public function getT2Minutes()
    {
        return $this->t2Minutes->getValue();
    }

    /**
     * 
     */
    public function setT4Seconds($t4Seconds = null)
    {
        if (!$t4Seconds) return $this;
        $this->t4Seconds = ($t4Seconds InstanceOf LegacyAutomaticCallbackT4Seconds)
             ? $t4Seconds
             : new LegacyAutomaticCallbackT4Seconds($t4Seconds);
        $this->t4Seconds->setName('t4Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT4Seconds $t4Seconds
     */
    public function getT4Seconds()
    {
        return $this->t4Seconds->getValue();
    }

    /**
     * 
     */
    public function setT5Seconds($t5Seconds = null)
    {
        if (!$t5Seconds) return $this;
        $this->t5Seconds = ($t5Seconds InstanceOf LegacyAutomaticCallbackT5Seconds)
             ? $t5Seconds
             : new LegacyAutomaticCallbackT5Seconds($t5Seconds);
        $this->t5Seconds->setName('t5Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT5Seconds $t5Seconds
     */
    public function getT5Seconds()
    {
        return $this->t5Seconds->getValue();
    }

    /**
     * 
     */
    public function setT6Minutes($t6Minutes = null)
    {
        if (!$t6Minutes) return $this;
        $this->t6Minutes = ($t6Minutes InstanceOf LegacyAutomaticCallbackT6Minutes)
             ? $t6Minutes
             : new LegacyAutomaticCallbackT6Minutes($t6Minutes);
        $this->t6Minutes->setName('t6Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT6Minutes $t6Minutes
     */
    public function getT6Minutes()
    {
        return $this->t6Minutes->getValue();
    }

    /**
     * 
     */
    public function setT7Minutes($t7Minutes = null)
    {
        if (!$t7Minutes) return $this;
        $this->t7Minutes = ($t7Minutes InstanceOf LegacyAutomaticCallbackT7Minutes)
             ? $t7Minutes
             : new LegacyAutomaticCallbackT7Minutes($t7Minutes);
        $this->t7Minutes->setName('t7Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT7Minutes $t7Minutes
     */
    public function getT7Minutes()
    {
        return $this->t7Minutes->getValue();
    }

    /**
     * 
     */
    public function setT8Seconds($t8Seconds = null)
    {
        if (!$t8Seconds) return $this;
        $this->t8Seconds = ($t8Seconds InstanceOf LegacyAutomaticCallbackT8Seconds)
             ? $t8Seconds
             : new LegacyAutomaticCallbackT8Seconds($t8Seconds);
        $this->t8Seconds->setName('t8Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT8Seconds $t8Seconds
     */
    public function getT8Seconds()
    {
        return $this->t8Seconds->getValue();
    }

    /**
     * 
     */
    public function setTRingSeconds($tRingSeconds = null)
    {
        if (!$tRingSeconds) return $this;
        $this->tRingSeconds = ($tRingSeconds InstanceOf LegacyAutomaticCallbackTRingSeconds)
             ? $tRingSeconds
             : new LegacyAutomaticCallbackTRingSeconds($tRingSeconds);
        $this->tRingSeconds->setName('tRingSeconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackTRingSeconds $tRingSeconds
     */
    public function getTRingSeconds()
    {
        return $this->tRingSeconds->getValue();
    }

    /**
     * 
     */
    public function setT10OMinutes($t10OMinutes = null)
    {
        if (!$t10OMinutes) return $this;
        $this->t10OMinutes = ($t10OMinutes InstanceOf LegacyAutomaticCallbackT10OMinutes)
             ? $t10OMinutes
             : new LegacyAutomaticCallbackT10OMinutes($t10OMinutes);
        $this->t10OMinutes->setName('t10OMinutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT10OMinutes $t10OMinutes
     */
    public function getT10OMinutes()
    {
        return $this->t10OMinutes->getValue();
    }

    /**
     * 
     */
    public function setT10TMinutes($t10TMinutes = null)
    {
        if (!$t10TMinutes) return $this;
        $this->t10TMinutes = ($t10TMinutes InstanceOf LegacyAutomaticCallbackT10TMinutes)
             ? $t10TMinutes
             : new LegacyAutomaticCallbackT10TMinutes($t10TMinutes);
        $this->t10TMinutes->setName('t10TMinutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT10TMinutes $t10TMinutes
     */
    public function getT10TMinutes()
    {
        return $this->t10TMinutes->getValue();
    }
}
