<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAccessDeviceFileGetRequest.
 */
class UserAccessDeviceFileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name        = 'UserAccessDeviceFileGetResponse';
    protected $templateUrl = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserAccessDeviceFileGetResponse $response
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
        if (!$templateUrl) return $this;
        $this->templateUrl = ($templateUrl InstanceOf URL)
             ? $templateUrl
             : new URL($templateUrl);
        $this->templateUrl->setName('templateUrl');
        return $this;
    }

    /**
     * 
     * @return URL $templateUrl
     */
    public function getTemplateUrl()
    {
        return $this->templateUrl->getValue();
    }
}
