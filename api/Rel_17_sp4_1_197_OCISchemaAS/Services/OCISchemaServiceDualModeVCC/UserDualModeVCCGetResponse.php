<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDualModeVCC; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDualModeVCC\DualModeVCCSubscriberUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDualModeVCC\UserDualModeVCCGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserDualModeVCCGetRequest
 */
class UserDualModeVCCGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $subscriberUserName = null;

    /**
     * @return UserDualModeVCCGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Dual Mode VCC Service subscriber user name
     */
    public function setSubscriberUserName($subscriberUserName = null)
    {
        $this->subscriberUserName = ($subscriberUserName InstanceOf DualModeVCCSubscriberUserName)
             ? $subscriberUserName
             : new DualModeVCCSubscriberUserName($subscriberUserName);
    }

    /**
     * Dual Mode VCC Service subscriber user name
     */
    public function getSubscriberUserName()
    {
        return (!$this->subscriberUserName) ?: $this->subscriberUserName->getValue();
    }
}
