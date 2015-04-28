<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupRoutePointGetDNISListRequest.
 *         Contains a table with column headings: "Name", "Phone Number", "Extension".
 */
class GroupRoutePointGetDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointGetDNISListResponse';
    protected $displayDNISNumber;
    protected $displayDNISName;
    protected $dnisTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISListResponse $response
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
        $this->displayDNISNumber->setElementName('displayDNISNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISNumber
     */
    public function getDisplayDNISNumber()
    {
        return ($this->displayDNISNumber)
            ? $this->displayDNISNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        $this->displayDNISName = new PrimitiveType($displayDNISName);
        $this->displayDNISName->setElementName('displayDNISName');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISName
     */
    public function getDisplayDNISName()
    {
        return ($this->displayDNISName)
            ? $this->displayDNISName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDnisTable(TableType $dnisTable = null)
    {
        $this->dnisTable = $dnisTable;
        $this->dnisTable->setElementName('dnisTable');
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
