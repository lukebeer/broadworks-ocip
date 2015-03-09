<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\UserInstantConferencingGetInstanceListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserInstantConferencingGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Ports", "Is Active", "Is Device Integrated".
 *         The column values for "Is Active" can either be true, or false.
 */
class UserInstantConferencingGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $instantConferencingTable = null;

    /**
     * @return UserInstantConferencingGetInstanceListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstantConferencingTable(core:OCITable $instantConferencingTable = null)
    {
        $this->instantConferencingTable =  $instantConferencingTable;
    }

    /**
     * 
     */
    public function getInstantConferencingTable()
    {
        return (!$this->instantConferencingTable) ?: $this->instantConferencingTable->getValue();
    }
}
