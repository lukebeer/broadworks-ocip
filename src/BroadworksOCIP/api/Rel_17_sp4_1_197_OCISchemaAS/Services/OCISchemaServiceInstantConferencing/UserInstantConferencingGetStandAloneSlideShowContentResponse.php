<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserInstantConferencingGetStandAloneSlideShowContentRequest.
 *         Contains a table with column headings:
 *         "Image Source URL", "Slide End Time", "Slide Number" and "Slide Document Name".
 */
class UserInstantConferencingGetStandAloneSlideShowContentResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetStandAloneSlideShowContentResponse';
    protected $audioURL;
    protected $slideShowContentTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetStandAloneSlideShowContentResponse $response
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
        $this->audioURL = ($audioURL InstanceOf URL)
             ? $audioURL
             : new URL($audioURL);
        $this->audioURL->setElementName('audioURL');
        return $this;
    }

    /**
     * 
     * @return URL $audioURL
     */
    public function getAudioURL()
    {
        return ($this->audioURL)
            ? $this->audioURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSlideShowContentTable(TableType $slideShowContentTable = null)
    {
        $this->slideShowContentTable = $slideShowContentTable;
        $this->slideShowContentTable->setElementName('slideShowContentTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSlideShowContentTable()
    {
        return $this->slideShowContentTable;
    }
}
