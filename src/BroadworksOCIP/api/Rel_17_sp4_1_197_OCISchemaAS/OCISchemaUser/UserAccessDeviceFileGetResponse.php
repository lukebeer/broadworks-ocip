<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserAccessDeviceFileGetRequest.
 */
class UserAccessDeviceFileGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAccessDeviceFileGetResponse';
    protected $templateUrl;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserAccessDeviceFileGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTemplateUrl($templateUrl = null)
    {
        $this->templateUrl = ($templateUrl InstanceOf URL)
             ? $templateUrl
             : new URL($templateUrl);
        $this->templateUrl->setElementName('templateUrl');
        return $this;
    }

    /**
     * 
     * @return URL $templateUrl
     */
    public function getTemplateUrl()
    {
        return ($this->templateUrl)
            ? $this->templateUrl->getElementValue()
            : null;
    }
}
