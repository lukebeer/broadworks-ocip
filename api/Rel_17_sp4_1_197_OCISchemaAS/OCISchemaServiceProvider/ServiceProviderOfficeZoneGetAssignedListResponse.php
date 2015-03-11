<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderOfficeZoneGetAssignedListRequest.
 *         Contains a table of all Office Zones assigned to the
 *         service provider. The column headings are: "Name", "Description" and "Default".
 */
class ServiceProviderOfficeZoneGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'ServiceProviderOfficeZoneGetAssignedListResponse';
    protected $officeZoneTable = null;

    /**
     * @return ServiceProviderOfficeZoneGetAssignedListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOfficeZoneTable(core:OCITable $officeZoneTable = null)
    {
        if (!$officeZoneTable) return $this;
        $this->officeZoneTable->setName('officeZoneTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getOfficeZoneTable()
    {
        return $this->officeZoneTable->getValue();
    }
}
