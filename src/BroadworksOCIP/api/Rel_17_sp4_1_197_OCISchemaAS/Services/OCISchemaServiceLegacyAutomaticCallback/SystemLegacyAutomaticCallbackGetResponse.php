<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackMaxMonitorsPerOriginator;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackMaxMonitorsPerTerminator;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackTRingSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT10TMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT10OMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT8Seconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT6Minutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT2Minutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT4Seconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT5Seconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT7Minutes;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemLegacyAutomaticCallbackGetRequest.
 */
class SystemLegacyAutomaticCallbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLegacyAutomaticCallbackGetResponse';
    protected $maxMonitorsPerOriginator;
    protected $maxMonitorsPerTerminator;
    protected $t2Minutes;
    protected $t4Seconds;
    protected $t5Seconds;
    protected $t6Minutes;
    protected $t7Minutes;
    protected $t8Seconds;
    protected $tRingSeconds;
    protected $t10OMinutes;
    protected $t10TMinutes;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\SystemLegacyAutomaticCallbackGetResponse $response
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
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf LegacyAutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new LegacyAutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->maxMonitorsPerOriginator->setElementName('maxMonitorsPerOriginator');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackMaxMonitorsPerOriginator $maxMonitorsPerOriginator
     */
    public function getMaxMonitorsPerOriginator()
    {
        return ($this->maxMonitorsPerOriginator)
            ? $this->maxMonitorsPerOriginator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator = null)
    {
        $this->maxMonitorsPerTerminator = ($maxMonitorsPerTerminator InstanceOf LegacyAutomaticCallbackMaxMonitorsPerTerminator)
             ? $maxMonitorsPerTerminator
             : new LegacyAutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->maxMonitorsPerTerminator->setElementName('maxMonitorsPerTerminator');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackMaxMonitorsPerTerminator $maxMonitorsPerTerminator
     */
    public function getMaxMonitorsPerTerminator()
    {
        return ($this->maxMonitorsPerTerminator)
            ? $this->maxMonitorsPerTerminator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setT2Minutes($t2Minutes = null)
    {
        $this->t2Minutes = ($t2Minutes InstanceOf LegacyAutomaticCallbackT2Minutes)
             ? $t2Minutes
             : new LegacyAutomaticCallbackT2Minutes($t2Minutes);
        $this->t2Minutes->setElementName('t2Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT2Minutes $t2Minutes
     */
    public function getT2Minutes()
    {
        return ($this->t2Minutes)
            ? $this->t2Minutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setT4Seconds($t4Seconds = null)
    {
        $this->t4Seconds = ($t4Seconds InstanceOf LegacyAutomaticCallbackT4Seconds)
             ? $t4Seconds
             : new LegacyAutomaticCallbackT4Seconds($t4Seconds);
        $this->t4Seconds->setElementName('t4Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT4Seconds $t4Seconds
     */
    public function getT4Seconds()
    {
        return ($this->t4Seconds)
            ? $this->t4Seconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setT5Seconds($t5Seconds = null)
    {
        $this->t5Seconds = ($t5Seconds InstanceOf LegacyAutomaticCallbackT5Seconds)
             ? $t5Seconds
             : new LegacyAutomaticCallbackT5Seconds($t5Seconds);
        $this->t5Seconds->setElementName('t5Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT5Seconds $t5Seconds
     */
    public function getT5Seconds()
    {
        return ($this->t5Seconds)
            ? $this->t5Seconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setT6Minutes($t6Minutes = null)
    {
        $this->t6Minutes = ($t6Minutes InstanceOf LegacyAutomaticCallbackT6Minutes)
             ? $t6Minutes
             : new LegacyAutomaticCallbackT6Minutes($t6Minutes);
        $this->t6Minutes->setElementName('t6Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT6Minutes $t6Minutes
     */
    public function getT6Minutes()
    {
        return ($this->t6Minutes)
            ? $this->t6Minutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setT7Minutes($t7Minutes = null)
    {
        $this->t7Minutes = ($t7Minutes InstanceOf LegacyAutomaticCallbackT7Minutes)
             ? $t7Minutes
             : new LegacyAutomaticCallbackT7Minutes($t7Minutes);
        $this->t7Minutes->setElementName('t7Minutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT7Minutes $t7Minutes
     */
    public function getT7Minutes()
    {
        return ($this->t7Minutes)
            ? $this->t7Minutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setT8Seconds($t8Seconds = null)
    {
        $this->t8Seconds = ($t8Seconds InstanceOf LegacyAutomaticCallbackT8Seconds)
             ? $t8Seconds
             : new LegacyAutomaticCallbackT8Seconds($t8Seconds);
        $this->t8Seconds->setElementName('t8Seconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT8Seconds $t8Seconds
     */
    public function getT8Seconds()
    {
        return ($this->t8Seconds)
            ? $this->t8Seconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTRingSeconds($tRingSeconds = null)
    {
        $this->tRingSeconds = ($tRingSeconds InstanceOf LegacyAutomaticCallbackTRingSeconds)
             ? $tRingSeconds
             : new LegacyAutomaticCallbackTRingSeconds($tRingSeconds);
        $this->tRingSeconds->setElementName('tRingSeconds');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackTRingSeconds $tRingSeconds
     */
    public function getTRingSeconds()
    {
        return ($this->tRingSeconds)
            ? $this->tRingSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setT10OMinutes($t10OMinutes = null)
    {
        $this->t10OMinutes = ($t10OMinutes InstanceOf LegacyAutomaticCallbackT10OMinutes)
             ? $t10OMinutes
             : new LegacyAutomaticCallbackT10OMinutes($t10OMinutes);
        $this->t10OMinutes->setElementName('t10OMinutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT10OMinutes $t10OMinutes
     */
    public function getT10OMinutes()
    {
        return ($this->t10OMinutes)
            ? $this->t10OMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setT10TMinutes($t10TMinutes = null)
    {
        $this->t10TMinutes = ($t10TMinutes InstanceOf LegacyAutomaticCallbackT10TMinutes)
             ? $t10TMinutes
             : new LegacyAutomaticCallbackT10TMinutes($t10TMinutes);
        $this->t10TMinutes->setElementName('t10TMinutes');
        return $this;
    }

    /**
     * 
     * @return LegacyAutomaticCallbackT10TMinutes $t10TMinutes
     */
    public function getT10TMinutes()
    {
        return ($this->t10TMinutes)
            ? $this->t10TMinutes->getElementValue()
            : null;
    }
}
