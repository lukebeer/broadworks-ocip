<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemOCIGetACLListRequest.
 *         Returns a 2 coulmn table with column headings:
 *           "Net Address" and "Description".
 */
class SystemOCIGetACLListResponse extends ComplexType implements ComplexInterface
{
    public    $name     = 'SystemOCIGetACLListResponse';
    protected $aclTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCIGetACLListResponse $response
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
        if (!$aclTable) return $this;
        $this->aclTable = $aclTable;
        $this->aclTable->setName('aclTable');
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
