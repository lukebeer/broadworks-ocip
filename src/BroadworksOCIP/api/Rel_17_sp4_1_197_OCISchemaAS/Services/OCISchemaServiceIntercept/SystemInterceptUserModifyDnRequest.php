<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept\InterceptPhoneNumberDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a Intercept User number's description in the system.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInterceptUserModifyDnRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInterceptUserModifyDnRequest';
    protected $phoneNumber;
    protected $description;

    public function __construct(
         $phoneNumber = '',
         $description = null
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setDescription($description);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf InterceptPhoneNumberDescription)
             ? $description
             : new InterceptPhoneNumberDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return InterceptPhoneNumberDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
