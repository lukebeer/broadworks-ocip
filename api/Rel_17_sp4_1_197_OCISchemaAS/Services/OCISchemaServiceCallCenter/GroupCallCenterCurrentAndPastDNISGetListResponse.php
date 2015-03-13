<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterCurrentAndPastDNISGetListRequest.
 */
class GroupCallCenterCurrentAndPastDNISGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name        = 'GroupCallCenterCurrentAndPastDNISGetListResponse';
    protected $name        = null;
    protected $deletedName = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterCurrentAndPastDNISGetListResponse $response
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
        if (!$name) return $this;
        $this->name = ($name InstanceOf DNISName)
             ? $name
             : new DNISName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return DNISName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setDeletedName($deletedName = null)
    {
        if (!$deletedName) return $this;
        $this->deletedName = ($deletedName InstanceOf DNISName)
             ? $deletedName
             : new DNISName($deletedName);
        $this->deletedName->setName('deletedName');
        return $this;
    }

    /**
     * 
     * @return DNISName $deletedName
     */
    public function getDeletedName()
    {
        return $this->deletedName->getValue();
    }
}
