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
 * Add a call center reporting server.
 * 
 *         name - A unique name given to the CCR inside the AS.
 *                CCR are associated to the Call Center through that name.
 *         url - The Reporting Server URL used by the BroadWorks Call Center
 *               client to connect to the CCR.
 *         netAddress - The address used by the CCR to connect to the CAP-S-CallCenter port on the AS.
 *                      Only connections from configured CCR are accepted.
 *         description - An optional description text.
 * 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterReportingServerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'SystemCallCenterReportingServerAddRequest';
    protected $name        = null;
    protected $url         = null;
    protected $netAddress  = null;
    protected $description = null;

    public function __construct(
         $name,
         $url,
         $netAddress,
         $description = null
    ) {
        $this->setName($name);
        $this->setUrl($url);
        $this->setNetAddress($netAddress);
        $this->setDescription($description);
    }

    /**
     * @return 
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
     * @return CallCenterReportingServerName
     */
    public function getName()
    {
        return $this->name->getValue();
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
     * @return URL
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
     * @return NetAddress
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
     * @return CallCenterReportingServerDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
