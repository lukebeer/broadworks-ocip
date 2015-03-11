<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallingPartyCategorySelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallingPartyCategoryGetRequest.
 */
class UserCallingPartyCategoryGetResponse extends ComplexType implements ComplexInterface
{
    public    $name     = 'UserCallingPartyCategoryGetResponse';
    protected $category = null;

    /**
     * @return UserCallingPartyCategoryGetResponse
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
        if (!$category) return $this;
        $this->category = ($category InstanceOf CallingPartyCategorySelection)
             ? $category
             : new CallingPartyCategorySelection($category);
        $this->category->setName('category');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategorySelection
     */
    public function getCategory()
    {
        return $this->category->getValue();
    }
}
