<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBusyLampField; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with the Busy Lamp Field
 *         Service. The response is either a SuccessResponse or an 
 *         ErrorResponse.
 */
class SystemBusyLampFieldModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBusyLampFieldModifyRequest';
    protected $displayLocalUserIdentityLastNameFirst;

    public function __construct(
         $displayLocalUserIdentityLastNameFirst = null
    ) {
        $this->setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst);
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
    public function setDisplayLocalUserIdentityLastNameFirst($displayLocalUserIdentityLastNameFirst = null)
    {
        $this->displayLocalUserIdentityLastNameFirst = new PrimitiveType($displayLocalUserIdentityLastNameFirst);
        $this->displayLocalUserIdentityLastNameFirst->setElementName('displayLocalUserIdentityLastNameFirst');
        return $this;
    }

    /**
     * 
     * @return boolean $displayLocalUserIdentityLastNameFirst
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return ($this->displayLocalUserIdentityLastNameFirst)
            ? $this->displayLocalUserIdentityLastNameFirst->getElementValue()
            : null;
    }
}
