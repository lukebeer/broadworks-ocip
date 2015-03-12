<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderAdminGetListRequest14.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Administrator Type", "Language".
 */
class ServiceProviderAdminGetListResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                      = 'ServiceProviderAdminGetListResponse14';
    protected $serviceProviderAdminTable = null;

    /**
     * @return ServiceProviderAdminGetListResponse14
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderAdminTable(TableType $serviceProviderAdminTable = null)
    {
        if (!$serviceProviderAdminTable) return $this;
        $this->serviceProviderAdminTable = $serviceProviderAdminTable;
        $this->serviceProviderAdminTable->setName('serviceProviderAdminTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceProviderAdminTable()
    {
        return $this->serviceProviderAdminTable;
    }
}
