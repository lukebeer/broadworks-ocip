<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserInstantConferencingGetStandAloneSlideShowContentRequest.
 *         Contains a table with column headings:
 *         "Image Source URL", "Slide End Time", "Slide Number" and "Slide Document Name".
 */
class UserInstantConferencingGetStandAloneSlideShowContentResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'UserInstantConferencingGetStandAloneSlideShowContentResponse';
    protected $audioURL              = null;
    protected $slideShowContentTable = null;

    /**
     * @return UserInstantConferencingGetStandAloneSlideShowContentResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAudioURL($audioURL = null)
    {
        if (!$audioURL) return $this;
        $this->audioURL = ($audioURL InstanceOf URL)
             ? $audioURL
             : new URL($audioURL);
        $this->audioURL->setName('audioURL');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getAudioURL()
    {
        return $this->audioURL->getValue();
    }

    /**
     * 
     */
    public function setSlideShowContentTable(TableType $slideShowContentTable = null)
    {
        if (!$slideShowContentTable) return $this;
        $this->slideShowContentTable = $slideShowContentTable;
        $this->slideShowContentTable->setName('slideShowContentTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSlideShowContentTable()
    {
        return $this->slideShowContentTable->getValue();
    }
}
