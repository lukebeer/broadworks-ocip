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
 * Contains a 4 column table with column headings 'Instance', 'Realm', 'ApplicationID', and 'Default'.  One row is present for each Diameter routing realm.
 */
class SystemBwDiameterRoutingRealmGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemBwDiameterRoutingRealmGetListResponse';
    protected $routingRealmTable = null;

    /**
     * @return SystemBwDiameterRoutingRealmGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingRealmTable(TableType $routingRealmTable = null)
    {
        if (!$routingRealmTable) return $this;
        $this->routingRealmTable = $routingRealmTable;
        $this->routingRealmTable->setName('routingRealmTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRoutingRealmTable()
    {
        return $this->routingRealmTable;
    }
}
