<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemAdminGetListRequest.
 *         Contains a 6 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Type", "Read Only", "Language".
 */
class SystemAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAdminGetListResponse';
    protected $systemAdminTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAdminGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSystemAdminTable(TableType $systemAdminTable = null)
    {
        $this->systemAdminTable = $systemAdminTable;
        $this->systemAdminTable->setElementName('systemAdminTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSystemAdminTable()
    {
        return $this->systemAdminTable;
    }
}
