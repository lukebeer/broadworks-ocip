<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointGetDNISListRequest.
 *         Contains a table with column headings: "Name", "Phone Number", "Extension".
 */
class GroupRoutePointGetDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointGetDNISListResponse';
    protected $displayDNISNumber;
    protected $displayDNISName;
    protected $dnisTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDisplayDNISNumber($displayDNISNumber = null)
    {
        $this->displayDNISNumber = new PrimitiveType($displayDNISNumber);
        $this->displayDNISNumber->setName('displayDNISNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISNumber
     */
    public function getDisplayDNISNumber()
    {
        return ($this->displayDNISNumber) ? $this->displayDNISNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        $this->displayDNISName = new PrimitiveType($displayDNISName);
        $this->displayDNISName->setName('displayDNISName');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISName
     */
    public function getDisplayDNISName()
    {
        return ($this->displayDNISName) ? $this->displayDNISName->getValue() : null;
    }

    /**
     * 
     */
    public function setDnisTable(TableType $dnisTable = null)
    {
        $this->dnisTable = $dnisTable;
        $this->dnisTable->setName('dnisTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDnisTable()
    {
        return $this->dnisTable;
    }
}
