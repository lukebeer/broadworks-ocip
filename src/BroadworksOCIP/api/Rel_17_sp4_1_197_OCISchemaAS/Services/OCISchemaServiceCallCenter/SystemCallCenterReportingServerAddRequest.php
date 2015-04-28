<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $elementName = 'SystemCallCenterReportingServerAddRequest';
    protected $name;
    protected $url;
    protected $netAddress;
    protected $description;

    public function __construct(
         $name = '',
         $url = '',
         $netAddress = '',
         $description = null
    ) {
        $this->setName($name);
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
        $this->name = ($name InstanceOf CallCenterReportingServerName)
             ? $name
             : new CallCenterReportingServerName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName $name
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
    public function setUrl($url = null)
    {
        $this->url = ($url InstanceOf URL)
             ? $url
             : new URL($url);
        $this->url->setElementName('url');
        return $this;
    }

    /**
     * 
     * @return URL $url
     */
    public function getUrl()
    {
        return ($this->url)
            ? $this->url->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterReportingServerDescription)
             ? $description
             : new CallCenterReportingServerDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
