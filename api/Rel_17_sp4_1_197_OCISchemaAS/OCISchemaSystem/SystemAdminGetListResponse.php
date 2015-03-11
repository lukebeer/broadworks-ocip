<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAdminGetListRequest.
 *         Contains a 6 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Type", "Read Only", "Language".
 */
class SystemAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'SystemAdminGetListResponse';
    protected $systemAdminTable = null;

    /**
     * @return SystemAdminGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSystemAdminTable(core:OCITable $systemAdminTable = null)
    {
        if (!$systemAdminTable) return $this;
        $this->systemAdminTable->setName('systemAdminTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getSystemAdminTable()
    {
        return $this->systemAdminTable->getValue();
    }
}
