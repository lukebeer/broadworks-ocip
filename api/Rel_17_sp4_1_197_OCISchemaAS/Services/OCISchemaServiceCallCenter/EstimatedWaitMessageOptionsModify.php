<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Estimated Wait Message Options
 */
class EstimatedWaitMessageOptionsModify extends ComplexType implements ComplexInterface
{
    public    $name = 'EstimatedWaitMessageOptionsModify';
    protected $enabled;
    protected $operatingMode;
    protected $playPositionHighVolume;
    protected $playTimeHighVolume;
    protected $maximumPositions;
    protected $maximumWaitingMinutes;
    protected $defaultCallHandlingMinutes;

    public function __construct(
         $enabled = null,
         $operatingMode = null,
         $playPositionHighVolume = null,
         $playTimeHighVolume = null,
         $maximumPositions = null,
         $maximumWaitingMinutes = null,
         $defaultCallHandlingMinutes = null
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
     * @return mixed $response
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
        $this->enabled = new SimpleContent($enabled);
        $this->enabled->setName('enabled');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $enabled
     */
    public function getEnabled()
    {
        return ($this->enabled) ? $this->enabled->getValue() : null;
    }

    /**
     * 
     */
    public function setOperatingMode($operatingMode = null)
    {
        $this->operatingMode = new SimpleContent($operatingMode);
        $this->operatingMode->setName('operatingMode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $operatingMode
     */
    public function getOperatingMode()
    {
        return ($this->operatingMode) ? $this->operatingMode->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayPositionHighVolume($playPositionHighVolume = null)
    {
        $this->playPositionHighVolume = new SimpleContent($playPositionHighVolume);
        $this->playPositionHighVolume->setName('playPositionHighVolume');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $playPositionHighVolume
     */
    public function getPlayPositionHighVolume()
    {
        return ($this->playPositionHighVolume) ? $this->playPositionHighVolume->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayTimeHighVolume($playTimeHighVolume = null)
    {
        $this->playTimeHighVolume = new SimpleContent($playTimeHighVolume);
        $this->playTimeHighVolume->setName('playTimeHighVolume');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $playTimeHighVolume
     */
    public function getPlayTimeHighVolume()
    {
        return ($this->playTimeHighVolume) ? $this->playTimeHighVolume->getValue() : null;
    }

    /**
     * 
     */
    public function setMaximumPositions($maximumPositions = null)
    {
        $this->maximumPositions = new SimpleContent($maximumPositions);
        $this->maximumPositions->setName('maximumPositions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maximumPositions
     */
    public function getMaximumPositions()
    {
        return ($this->maximumPositions) ? $this->maximumPositions->getValue() : null;
    }

    /**
     * 
     */
    public function setMaximumWaitingMinutes($maximumWaitingMinutes = null)
    {
        $this->maximumWaitingMinutes = new SimpleContent($maximumWaitingMinutes);
        $this->maximumWaitingMinutes->setName('maximumWaitingMinutes');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maximumWaitingMinutes
     */
    public function getMaximumWaitingMinutes()
    {
        return ($this->maximumWaitingMinutes) ? $this->maximumWaitingMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultCallHandlingMinutes($defaultCallHandlingMinutes = null)
    {
        $this->defaultCallHandlingMinutes = new SimpleContent($defaultCallHandlingMinutes);
        $this->defaultCallHandlingMinutes->setName('defaultCallHandlingMinutes');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $defaultCallHandlingMinutes
     */
    public function getDefaultCallHandlingMinutes()
    {
        return ($this->defaultCallHandlingMinutes) ? $this->defaultCallHandlingMinutes->getValue() : null;
    }
}
