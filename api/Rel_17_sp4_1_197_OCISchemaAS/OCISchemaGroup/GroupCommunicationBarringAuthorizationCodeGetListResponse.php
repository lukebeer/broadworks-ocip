<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCommunicationBarringAuthorizationCodeGetListRequest.
 *         Contains a list of Communication Barring Authorization Codes
 *         assigned to the group.
 */
class GroupCommunicationBarringAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCommunicationBarringAuthorizationCodeGetListResponse';
    protected $code;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommunicationBarringAuthorizationCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCode(CommunicationBarringAuthorizationCodeEntry $code = null)
    {
        $this->code = ($code InstanceOf CommunicationBarringAuthorizationCodeEntry)
             ? $code
             : new CommunicationBarringAuthorizationCodeEntry($code);
        $this->code->setName('code');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringAuthorizationCodeEntry $code
     */
    public function getCode()
    {
        return $this->code;
    }
}
