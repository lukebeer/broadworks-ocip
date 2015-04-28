<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAuthorizationCodeEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupCommunicationBarringAuthorizationCodeGetListRequest.
 *         Contains a list of Communication Barring Authorization Codes
 *         assigned to the group.
 */
class GroupCommunicationBarringAuthorizationCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCommunicationBarringAuthorizationCodeGetListResponse';
    protected $code;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupCommunicationBarringAuthorizationCodeGetListResponse $response
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
        $this->code->setElementName('code');
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
