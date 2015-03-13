<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center reporting server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterReportingServerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'SystemCallCenterReportingServerModifyRequest';
    protected $name        = null;
    protected $newName     = null;
    protected $url         = null;
    protected $netAddress  = null;
    protected $description = null;

    public function __construct(
         $name,
         $newName = null,
         $url = null,
         $netAddress = null,
         $description = null
    ) {
        $this->setName($name);
        $this->setNewName($newName);
        $this->setUrl($url);
        $this->setNetAddress($netAddress);
        $this->setDescription($description);
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
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf CallCenterReportingServerName)
             ? $name
             : new CallCenterReportingServerName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf CallCenterReportingServerName)
             ? $newName
             : new CallCenterReportingServerName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName $newName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setUrl($url = null)
    {
        if (!$url) return $this;
        $this->url = ($url InstanceOf URL)
             ? $url
             : new URL($url);
        $this->url->setName('url');
        return $this;
    }

    /**
     * 
     * @return URL $url
     */
    public function getUrl()
    {
        return $this->url->getValue();
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        if (!$netAddress) return $this;
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return $this->netAddress->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf CallCenterReportingServerDescription)
             ? $description
             : new CallCenterReportingServerDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
