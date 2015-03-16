<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserGetServiceInstanceListInServiceProviderRequest.
 *         Contains a table with column headings :  "User Id", "Group Id", "Service Type",
 *         "Name", "Phone Number", "Extension", "Department" in a row for each Service Instance.  Possible values for Service Type column are ServiceType enums.
 */
class UserGetServiceInstanceListInServiceProviderResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserGetServiceInstanceListInServiceProviderResponse';
    protected $serviceInstanceTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetServiceInstanceListInServiceProviderResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceTable(TableType $serviceInstanceTable = null)
    {
        $this->serviceInstanceTable = $serviceInstanceTable;
        $this->serviceInstanceTable->setName('serviceInstanceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceInstanceTable()
    {
        return $this->serviceInstanceTable;
    }
}
