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
 * Contains an ordered list of zones to use to replace the current list of zones in an Office Zone.
 */
class ReplacementZoneList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementZoneList';
    protected $zoneName;

    public function __construct(
         $zoneName = null
    ) {
        $this->setZoneName($zoneName);
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
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = new SimpleContent($zoneName);
        $this->zoneName->setElementName('zoneName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $zoneName
     */
    public function getZoneName()
    {
        return ($this->zoneName)
            ? $this->zoneName->getElementValue()
            : null;
    }
}
