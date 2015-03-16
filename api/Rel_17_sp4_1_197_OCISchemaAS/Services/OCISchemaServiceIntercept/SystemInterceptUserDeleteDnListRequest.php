<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete an Intercept User number(s) from the system.
 *               The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInterceptUserDeleteDnListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInterceptUserDeleteDnListRequest';
    protected $phoneNumbers;

    public function __construct(
         $phoneNumbers = null
    ) {
        $this->setPhoneNumbers($phoneNumbers);
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
    public function setPhoneNumbers($phoneNumbers = null)
    {
        $this->phoneNumbers = ($phoneNumbers InstanceOf DN)
             ? $phoneNumbers
             : new DN($phoneNumbers);
        $this->phoneNumbers->setElementName('phoneNumbers');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumbers
     */
    public function getPhoneNumbers()
    {
        return ($this->phoneNumbers)
            ? $this->phoneNumbers->getElementValue()
            : null;
    }
}
