<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the
 *         EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest.
 *         Contains a table with column headings: 
 *         "Home Zone Id", "Domain Name", "Mobile Country Code",
 *         "Mobile Network Code", "Local Area Code" and "Cell Identity".
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse';
    protected $homeZonesTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseBroadWorksMobileManagerGetHomeZoneListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHomeZonesTable(TableType $homeZonesTable = null)
    {
        if (!$homeZonesTable) return $this;
        $this->homeZonesTable = $homeZonesTable;
        $this->homeZonesTable->setName('homeZonesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getHomeZonesTable()
    {
        return $this->homeZonesTable;
    }
}
