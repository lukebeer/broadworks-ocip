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
 * Response to the SystemNetworkClassOfServiceGetListRequest.
 *         The response contains a table of all Network Classes of Service 
 *         in the system. The column headings are "Name" and "Description"
 */
class SystemNetworkClassOfServiceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNetworkClassOfServiceGetListResponse';
    protected $networkClassOfServiceTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkClassOfServiceGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNetworkClassOfServiceTable(TableType $networkClassOfServiceTable = null)
    {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        $this->networkClassOfServiceTable->setElementName('networkClassOfServiceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getNetworkClassOfServiceTable()
    {
        return $this->networkClassOfServiceTable;
    }
}
