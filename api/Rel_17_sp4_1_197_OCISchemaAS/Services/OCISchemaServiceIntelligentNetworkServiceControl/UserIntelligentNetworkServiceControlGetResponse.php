<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl\UserIntelligentNetworkServiceControlGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserIntelligentNetworkServiceControlGetRequest.
 */
class UserIntelligentNetworkServiceControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $preAnswerActionsEnabled = null;

    /**
     * @return UserIntelligentNetworkServiceControlGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPreAnswerActionsEnabled($preAnswerActionsEnabled = null)
    {
        $this->preAnswerActionsEnabled = (boolean) $preAnswerActionsEnabled;
    }

    /**
     * 
     */
    public function getPreAnswerActionsEnabled()
    {
        return (!$this->preAnswerActionsEnabled) ?: $this->preAnswerActionsEnabled;
    }
}
