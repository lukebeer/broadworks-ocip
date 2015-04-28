<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Estimated Wait Message Options
 */
class EstimatedWaitMessageOptionsRead extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EstimatedWaitMessageOptionsRead';
    protected $enabled;
    protected $operatingMode;
    protected $playPositionHighVolume;
    protected $playTimeHighVolume;
    protected $maximumPositions;
    protected $maximumWaitingMinutes;
    protected $defaultCallHandlingMinutes;

    public function __construct(
         $enabled = '',
         $operatingMode = '',
         $playPositionHighVolume = '',
         $playTimeHighVolume = '',
         $maximumPositions = '',
         $maximumWaitingMinutes = '',
         $defaultCallHandlingMinutes = ''
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
        $this->enabled->setElementName('enabled');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $enabled
     */
    public function getEnabled()
    {
        return ($this->enabled)
            ? $this->enabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOperatingMode($operatingMode = null)
    {
        $this->operatingMode = new SimpleContent($operatingMode);
        $this->operatingMode->setElementName('operatingMode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $operatingMode
     */
    public function getOperatingMode()
    {
        return ($this->operatingMode)
            ? $this->operatingMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayPositionHighVolume($playPositionHighVolume = null)
    {
        $this->playPositionHighVolume = new SimpleContent($playPositionHighVolume);
        $this->playPositionHighVolume->setElementName('playPositionHighVolume');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $playPositionHighVolume
     */
    public function getPlayPositionHighVolume()
    {
        return ($this->playPositionHighVolume)
            ? $this->playPositionHighVolume->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayTimeHighVolume($playTimeHighVolume = null)
    {
        $this->playTimeHighVolume = new SimpleContent($playTimeHighVolume);
        $this->playTimeHighVolume->setElementName('playTimeHighVolume');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $playTimeHighVolume
     */
    public function getPlayTimeHighVolume()
    {
        return ($this->playTimeHighVolume)
            ? $this->playTimeHighVolume->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaximumPositions($maximumPositions = null)
    {
        $this->maximumPositions = new SimpleContent($maximumPositions);
        $this->maximumPositions->setElementName('maximumPositions');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maximumPositions
     */
    public function getMaximumPositions()
    {
        return ($this->maximumPositions)
            ? $this->maximumPositions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaximumWaitingMinutes($maximumWaitingMinutes = null)
    {
        $this->maximumWaitingMinutes = new SimpleContent($maximumWaitingMinutes);
        $this->maximumWaitingMinutes->setElementName('maximumWaitingMinutes');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maximumWaitingMinutes
     */
    public function getMaximumWaitingMinutes()
    {
        return ($this->maximumWaitingMinutes)
            ? $this->maximumWaitingMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultCallHandlingMinutes($defaultCallHandlingMinutes = null)
    {
        $this->defaultCallHandlingMinutes = new SimpleContent($defaultCallHandlingMinutes);
        $this->defaultCallHandlingMinutes->setElementName('defaultCallHandlingMinutes');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $defaultCallHandlingMinutes
     */
    public function getDefaultCallHandlingMinutes()
    {
        return ($this->defaultCallHandlingMinutes)
            ? $this->defaultCallHandlingMinutes->getElementValue()
            : null;
    }
}
