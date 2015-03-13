<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get an existing Calling Party Category in system.
 *         The response is either a SystemCallingPartyCategoryGetResponse or an ErrorResponse.
 */
class SystemCallingPartyCategoryGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetResponse';
    public    $name     = 'SystemCallingPartyCategoryGetRequest';
    protected $category = null;

    public function __construct(
         $category
    ) {
        $this->setCategory($category);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetResponse $response
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
        $this->category = ($category InstanceOf CallingPartyCategoryName)
             ? $category
             : new CallingPartyCategoryName($category);
        $this->category->setName('category');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategoryName $category
     */
    public function getCategory()
    {
        return $this->category->getValue();
    }
}
