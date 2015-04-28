<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExpensiveCallNotificationPostAnnouncementDelaySeconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the expensive call notification service parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExpensiveCallNotificationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemExpensiveCallNotificationModifyRequest';
    protected $enablePostAnnouncementDelayTimer;
    protected $postAnnouncementDelaySeconds;

    public function __construct(
         $enablePostAnnouncementDelayTimer = null,
         $postAnnouncementDelaySeconds = null
    ) {
        $this->setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer);
        $this->setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
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
    public function setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer = null)
    {
        $this->enablePostAnnouncementDelayTimer = new PrimitiveType($enablePostAnnouncementDelayTimer);
        $this->enablePostAnnouncementDelayTimer->setElementName('enablePostAnnouncementDelayTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $enablePostAnnouncementDelayTimer
     */
    public function getEnablePostAnnouncementDelayTimer()
    {
        return ($this->enablePostAnnouncementDelayTimer)
            ? $this->enablePostAnnouncementDelayTimer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds = null)
    {
        $this->postAnnouncementDelaySeconds = ($postAnnouncementDelaySeconds InstanceOf ExpensiveCallNotificationPostAnnouncementDelaySeconds)
             ? $postAnnouncementDelaySeconds
             : new ExpensiveCallNotificationPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
        $this->postAnnouncementDelaySeconds->setElementName('postAnnouncementDelaySeconds');
        return $this;
    }

    /**
     * 
     * @return ExpensiveCallNotificationPostAnnouncementDelaySeconds $postAnnouncementDelaySeconds
     */
    public function getPostAnnouncementDelaySeconds()
    {
        return ($this->postAnnouncementDelaySeconds)
            ? $this->postAnnouncementDelaySeconds->getElementValue()
            : null;
    }
}
