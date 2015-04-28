<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserServiceGetAssignmentListRequest.
 *         Contains two tables, one for the service packs, and one for the user services.
 *         The user table has the column headings: "Service Name", "Assigned",
 *         The service pack table's column headings are: "Service Pack Name", "Assigned", "Description".
 *         The "Assigned" column has either a true or false value
 */
class UserServiceGetAssignmentListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserServiceGetAssignmentListResponse';
    protected $servicePacksAssignmentTable;
    protected $userServicesAssignmentTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserServiceGetAssignmentListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServicePacksAssignmentTable(TableType $servicePacksAssignmentTable = null)
    {
        $this->servicePacksAssignmentTable = $servicePacksAssignmentTable;
        $this->servicePacksAssignmentTable->setElementName('servicePacksAssignmentTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServicePacksAssignmentTable()
    {
        return $this->servicePacksAssignmentTable;
    }

    /**
     * 
     */
    public function setUserServicesAssignmentTable(TableType $userServicesAssignmentTable = null)
    {
        $this->userServicesAssignmentTable = $userServicesAssignmentTable;
        $this->userServicesAssignmentTable->setElementName('userServicesAssignmentTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserServicesAssignmentTable()
    {
        return $this->userServicesAssignmentTable;
    }
}
