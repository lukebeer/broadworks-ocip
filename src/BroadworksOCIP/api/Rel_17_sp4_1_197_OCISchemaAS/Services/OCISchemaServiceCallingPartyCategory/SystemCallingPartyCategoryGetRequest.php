<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\CallingPartyCategoryName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get an existing Calling Party Category in system.
 *         The response is either a SystemCallingPartyCategoryGetResponse or an ErrorResponse.
 */
class SystemCallingPartyCategoryGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetResponse';
    public    $elementName = 'SystemCallingPartyCategoryGetRequest';
    protected $category;

    public function __construct(
         $category = ''
    ) {
        $this->setCategory($category);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPartyCategory\SystemCallingPartyCategoryGetResponse $response
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
        $this->category = ($category InstanceOf CallingPartyCategoryName)
             ? $category
             : new CallingPartyCategoryName($category);
        $this->category->setElementName('category');
        return $this;
    }

    /**
     * 
     * @return CallingPartyCategoryName $category
     */
    public function getCategory()
    {
        return ($this->category)
            ? $this->category->getElementValue()
            : null;
    }
}
