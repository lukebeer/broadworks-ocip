<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Maps a BroadWorks language to a device-equivalent language.
 */
class DeviceManagementLanguageMapping extends ComplexType implements ComplexInterface
{
    public    $elementName = 'DeviceManagementLanguageMapping';
    protected $broadWorksLanguage;
    protected $deviceLanguage;

    public function __construct(
         $broadWorksLanguage = '',
         $deviceLanguage = ''
    ) {
        $this->setBroadWorksLanguage($broadWorksLanguage);
        $this->setDeviceLanguage($deviceLanguage);
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
    public function setBroadWorksLanguage($broadWorksLanguage = null)
    {
        $this->broadWorksLanguage = new SimpleContent($broadWorksLanguage);
        $this->broadWorksLanguage->setElementName('broadWorksLanguage');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $broadWorksLanguage
     */
    public function getBroadWorksLanguage()
    {
        return ($this->broadWorksLanguage)
            ? $this->broadWorksLanguage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceLanguage($deviceLanguage = null)
    {
        $this->deviceLanguage = new SimpleContent($deviceLanguage);
        $this->deviceLanguage->setElementName('deviceLanguage');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceLanguage
     */
    public function getDeviceLanguage()
    {
        return ($this->deviceLanguage)
            ? $this->deviceLanguage->getElementValue()
            : null;
    }
}
