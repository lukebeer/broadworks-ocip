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
 * Response to SystemBusyLampFieldGetRequest.
 */
class SystemBusyLampFieldGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                  = 'SystemBusyLampFieldGetResponse';
    protected $displayLocalUserIdentityLastNameFirst = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBusyLampField\SystemBusyLampFieldGetResponse $response
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
        if (!$displayLocalUserIdentityLastNameFirst) return $this;
        $this->displayLocalUserIdentityLastNameFirst = new PrimitiveType($displayLocalUserIdentityLastNameFirst);
        $this->displayLocalUserIdentityLastNameFirst->setName('displayLocalUserIdentityLastNameFirst');
        return $this;
    }

    /**
     * 
     * @return boolean $displayLocalUserIdentityLastNameFirst
     */
    public function getDisplayLocalUserIdentityLastNameFirst()
    {
        return $this->displayLocalUserIdentityLastNameFirst->getValue();
    }
}
