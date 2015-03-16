<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Maps a BroadWorks language to a device-equivalent language.
 */
class DeviceManagementLanguageMapping extends ComplexType implements ComplexInterface
{
    public    $name = 'DeviceManagementLanguageMapping';
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
        $this->broadWorksLanguage->setName('broadWorksLanguage');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $broadWorksLanguage
     */
    public function getBroadWorksLanguage()
    {
        return ($this->broadWorksLanguage) ? $this->broadWorksLanguage->getValue() : null;
    }

    /**
     * 
     */
    public function setDeviceLanguage($deviceLanguage = null)
    {
        $this->deviceLanguage = new SimpleContent($deviceLanguage);
        $this->deviceLanguage->setName('deviceLanguage');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deviceLanguage
     */
    public function getDeviceLanguage()
    {
        return ($this->deviceLanguage) ? $this->deviceLanguage->getValue() : null;
    }
}
