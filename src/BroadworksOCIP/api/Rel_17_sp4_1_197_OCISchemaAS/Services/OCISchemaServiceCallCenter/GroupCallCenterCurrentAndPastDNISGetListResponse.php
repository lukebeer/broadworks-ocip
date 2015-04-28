<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterCurrentAndPastDNISGetListRequest.
 */
class GroupCallCenterCurrentAndPastDNISGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterCurrentAndPastDNISGetListResponse';
    protected $name;
    protected $deletedName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastDNISGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DNISName)
             ? $name
             : new DNISName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return DNISName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeletedName($deletedName = null)
    {
        $this->deletedName = ($deletedName InstanceOf DNISName)
             ? $deletedName
             : new DNISName($deletedName);
        $this->deletedName->setElementName('deletedName');
        return $this;
    }

    /**
     * 
     * @return DNISName $deletedName
     */
    public function getDeletedName()
    {
        return ($this->deletedName)
            ? $this->deletedName->getElementValue()
            : null;
    }
}
