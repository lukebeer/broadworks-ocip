<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name              = 'GroupRoutePointGetDNISListResponse';
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
        if (!$displayDNISNumber) return $this;
        $this->displayDNISNumber = new PrimitiveType($displayDNISNumber);
        $this->displayDNISNumber->setName('displayDNISNumber');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisplayDNISNumber()
    {
        return $this->displayDNISNumber->getValue();
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        if (!$displayDNISName) return $this;
        $this->displayDNISName = new PrimitiveType($displayDNISName);
        $this->displayDNISName->setName('displayDNISName');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDisplayDNISName()
    {
        return $this->displayDNISName->getValue();
    }

    /**
     * 
     */
    public function setDnisTable(core:OCITable $dnisTable = null)
    {
        if (!$dnisTable) return $this;
        $this->dnisTable->setName('dnisTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getDnisTable()
    {
        return $this->dnisTable->getValue();
    }
}
