<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupInstantConferencingGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Ports", "Department", "Is Active".
 *         The column values for "Is Active" can either be true, or false.
 */
class GroupInstantConferencingGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInstantConferencingGetInstanceListResponse';
    protected $instantConferencingTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\GroupInstantConferencingGetInstanceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInstantConferencingTable(TableType $instantConferencingTable = null)
    {
        $this->instantConferencingTable = $instantConferencingTable;
        $this->instantConferencingTable->setElementName('instantConferencingTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getInstantConferencingTable()
    {
        return $this->instantConferencingTable;
    }
}
