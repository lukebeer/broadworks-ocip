<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the tutorial flag setting for a user or admin.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class TutorialFlagModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'TutorialFlagModifyRequest';
    protected $userId;
    protected $enableTutorial;

    public function __construct(
         $userId = '',
         $enableTutorial = null
    ) {
        $this->setUserId($userId);
        $this->setEnableTutorial($enableTutorial);
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
    public function setEnableTutorial($enableTutorial = null)
    {
        $this->enableTutorial = new PrimitiveType($enableTutorial);
        $this->enableTutorial->setElementName('enableTutorial');
        return $this;
    }

    /**
     * 
     * @return boolean $enableTutorial
     */
    public function getEnableTutorial()
    {
        return ($this->enableTutorial)
            ? $this->enableTutorial->getElementValue()
            : null;
    }
}
