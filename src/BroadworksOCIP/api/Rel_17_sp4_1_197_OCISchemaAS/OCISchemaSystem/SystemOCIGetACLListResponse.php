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
 * Response to SystemOCIGetACLListRequest.
 *         Returns a 2 coulmn table with column headings:
 *           "Net Address" and "Description".
 */
class SystemOCIGetACLListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOCIGetACLListResponse';
    protected $aclTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCIGetACLListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAclTable(TableType $aclTable = null)
    {
        $this->aclTable = $aclTable;
        $this->aclTable->setElementName('aclTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAclTable()
    {
        return $this->aclTable;
    }
}
