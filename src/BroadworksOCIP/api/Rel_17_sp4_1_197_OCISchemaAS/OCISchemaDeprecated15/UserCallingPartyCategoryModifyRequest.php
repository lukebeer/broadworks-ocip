<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallingPartyCategorySelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Calling Party Category.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallingPartyCategoryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallingPartyCategoryModifyRequest';
    protected $userId;
    protected $category;

    public function __construct(
         $userId = '',
         $category = null
    ) {
        $this->setUserId($userId);
        $this->setCategory($category);
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
    public function setCategory($category = null)
    {
        $this->category = ($category InstanceOf CallingPartyCategorySelection)
             ? $category
             : new CallingPartyCategorySelection($category);
        $this->category->setElementName('category');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategorySelection $category
     */
    public function getCategory()
    {
        return ($this->category)
            ? $this->category->getElementValue()
            : null;
    }
}
