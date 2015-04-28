<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallingPartyCategorySelection;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallingPartyCategoryGetRequest.
 */
class UserCallingPartyCategoryGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallingPartyCategoryGetResponse';
    protected $category;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserCallingPartyCategoryGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
