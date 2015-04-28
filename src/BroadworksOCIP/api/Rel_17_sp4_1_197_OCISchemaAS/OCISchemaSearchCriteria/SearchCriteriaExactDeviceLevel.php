<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceLevel;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for a particular device level.
 */
class SearchCriteriaExactDeviceLevel extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactDeviceLevel';
    protected $deviceLevel;

    public function __construct(
         $deviceLevel = ''
    ) {
        $this->setDeviceLevel($deviceLevel);
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
    public function setDeviceLevel($deviceLevel = null)
    {
        $this->deviceLevel = ($deviceLevel InstanceOf AccessDeviceLevel)
             ? $deviceLevel
             : new AccessDeviceLevel($deviceLevel);
        $this->deviceLevel->setElementName('deviceLevel');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceLevel $deviceLevel
     */
    public function getDeviceLevel()
    {
        return ($this->deviceLevel)
            ? $this->deviceLevel->getElementValue()
            : null;
    }
}
