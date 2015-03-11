<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EstimatedWaitMessageOptionsRead;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Estimated Wait Message Options
 */
class EstimatedWaitMessageOptionsRead extends ComplexType implements ComplexInterface
{
    public    $responseType               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EstimatedWaitMessageOptionsRead';
    public    $name                       = 'EstimatedWaitMessageOptionsRead';
    protected $enabled                    = null;
    protected $operatingMode              = null;
    protected $playPositionHighVolume     = null;
    protected $playTimeHighVolume         = null;
    protected $maximumPositions           = null;
    protected $maximumWaitingMinutes      = null;
    protected $defaultCallHandlingMinutes = null;

    public function __construct(
         $enabled,
         $operatingMode,
         $playPositionHighVolume,
         $playTimeHighVolume,
         $maximumPositions,
         $maximumWaitingMinutes,
         $defaultCallHandlingMinutes
    ) {
        $this->setEnabled($enabled);
        $this->setOperatingMode($operatingMode);
        $this->setPlayPositionHighVolume($playPositionHighVolume);
        $this->setPlayTimeHighVolume($playTimeHighVolume);
        $this->setMaximumPositions($maximumPositions);
        $this->setMaximumWaitingMinutes($maximumWaitingMinutes);
        $this->setDefaultCallHandlingMinutes($defaultCallHandlingMinutes);
    }

    /**
     * @return EstimatedWaitMessageOptionsRead
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnabled($enabled = null)
    {
        if (!$enabled) return $this;
        $this->enabled = new SimpleContent($enabled);
        $this->enabled->setName('enabled');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getEnabled()
    {
        return $this->enabled->getValue();
    }

    /**
     * 
     */
    public function setOperatingMode($operatingMode = null)
    {
        if (!$operatingMode) return $this;
        $this->operatingMode = new SimpleContent($operatingMode);
        $this->operatingMode->setName('operatingMode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getOperatingMode()
    {
        return $this->operatingMode->getValue();
    }

    /**
     * 
     */
    public function setPlayPositionHighVolume($playPositionHighVolume = null)
    {
        if (!$playPositionHighVolume) return $this;
        $this->playPositionHighVolume = new SimpleContent($playPositionHighVolume);
        $this->playPositionHighVolume->setName('playPositionHighVolume');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getPlayPositionHighVolume()
    {
        return $this->playPositionHighVolume->getValue();
    }

    /**
     * 
     */
    public function setPlayTimeHighVolume($playTimeHighVolume = null)
    {
        if (!$playTimeHighVolume) return $this;
        $this->playTimeHighVolume = new SimpleContent($playTimeHighVolume);
        $this->playTimeHighVolume->setName('playTimeHighVolume');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getPlayTimeHighVolume()
    {
        return $this->playTimeHighVolume->getValue();
    }

    /**
     * 
     */
    public function setMaximumPositions($maximumPositions = null)
    {
        if (!$maximumPositions) return $this;
        $this->maximumPositions = new SimpleContent($maximumPositions);
        $this->maximumPositions->setName('maximumPositions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getMaximumPositions()
    {
        return $this->maximumPositions->getValue();
    }

    /**
     * 
     */
    public function setMaximumWaitingMinutes($maximumWaitingMinutes = null)
    {
        if (!$maximumWaitingMinutes) return $this;
        $this->maximumWaitingMinutes = new SimpleContent($maximumWaitingMinutes);
        $this->maximumWaitingMinutes->setName('maximumWaitingMinutes');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getMaximumWaitingMinutes()
    {
        return $this->maximumWaitingMinutes->getValue();
    }

    /**
     * 
     */
    public function setDefaultCallHandlingMinutes($defaultCallHandlingMinutes = null)
    {
        if (!$defaultCallHandlingMinutes) return $this;
        $this->defaultCallHandlingMinutes = new SimpleContent($defaultCallHandlingMinutes);
        $this->defaultCallHandlingMinutes->setName('defaultCallHandlingMinutes');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getDefaultCallHandlingMinutes()
    {
        return $this->defaultCallHandlingMinutes->getValue();
    }
}
