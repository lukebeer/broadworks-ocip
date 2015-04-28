<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager\CommPilotCallManagerGroupDirectoryDisplaySelection;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupCommPilotCallManagerGetRequest.
 */
class GroupCommPilotCallManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCommPilotCallManagerGetResponse';
    protected $groupDirectory;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager\GroupCommPilotCallManagerGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupDirectory($groupDirectory = null)
    {
        $this->groupDirectory = ($groupDirectory InstanceOf CommPilotCallManagerGroupDirectoryDisplaySelection)
             ? $groupDirectory
             : new CommPilotCallManagerGroupDirectoryDisplaySelection($groupDirectory);
        $this->groupDirectory->setElementName('groupDirectory');
        return $this;
    }

    /**
     * 
     * @return CommPilotCallManagerGroupDirectoryDisplaySelection $groupDirectory
     */
    public function getGroupDirectory()
    {
        return ($this->groupDirectory)
            ? $this->groupDirectory->getElementValue()
            : null;
    }
}
