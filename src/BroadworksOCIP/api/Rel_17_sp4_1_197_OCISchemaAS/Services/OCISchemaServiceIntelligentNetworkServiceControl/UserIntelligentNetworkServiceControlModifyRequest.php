<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Intelligent Network Service Control.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserIntelligentNetworkServiceControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserIntelligentNetworkServiceControlModifyRequest';
    protected $userId;
    protected $preAnswerActionsEnabled;

    public function __construct(
         $userId = '',
         $preAnswerActionsEnabled = null
    ) {
        $this->setUserId($userId);
        $this->setPreAnswerActionsEnabled($preAnswerActionsEnabled);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPreAnswerActionsEnabled($preAnswerActionsEnabled = null)
    {
        $this->preAnswerActionsEnabled = new PrimitiveType($preAnswerActionsEnabled);
        $this->preAnswerActionsEnabled->setElementName('preAnswerActionsEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $preAnswerActionsEnabled
     */
    public function getPreAnswerActionsEnabled()
    {
        return ($this->preAnswerActionsEnabled)
            ? $this->preAnswerActionsEnabled->getElementValue()
            : null;
    }
}
