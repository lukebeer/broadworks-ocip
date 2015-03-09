<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISListResponse;
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
    public    $name              = __CLASS__;
    protected $displayDNISNumber = null;
    protected $displayDNISName   = null;
    protected $dnisTable         = null;

    /**
     * @return GroupRoutePointGetDNISListResponse
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
        $this->displayDNISNumber = (boolean) $displayDNISNumber;
    }

    /**
     * 
     */
    public function getDisplayDNISNumber()
    {
        return (!$this->displayDNISNumber) ?: $this->displayDNISNumber;
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        $this->displayDNISName = (boolean) $displayDNISName;
    }

    /**
     * 
     */
    public function getDisplayDNISName()
    {
        return (!$this->displayDNISName) ?: $this->displayDNISName;
    }

    /**
     * 
     */
    public function setDnisTable(core:OCITable $dnisTable = null)
    {
        $this->dnisTable =  $dnisTable;
    }

    /**
     * 
     */
    public function getDnisTable()
    {
        return (!$this->dnisTable) ?: $this->dnisTable->getValue();
    }
}
