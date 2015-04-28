<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupSessionAdmissionControlGroupGetListRequest.
 *         Contains a table of session admission control group configured in the group.
 *         The column headings are: "Name", "Is Default", "Maximum Sessions", "Maximum Originating Sessions", "Maximum Terminating Sessions".
 */
class GroupSessionAdmissionControlGroupGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupSessionAdmissionControlGroupGetListResponse';
    protected $sessionAdmissionControlGroupTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupSessionAdmissionControlGroupGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSessionAdmissionControlGroupTable(TableType $sessionAdmissionControlGroupTable = null)
    {
        $this->sessionAdmissionControlGroupTable = $sessionAdmissionControlGroupTable;
        $this->sessionAdmissionControlGroupTable->setElementName('sessionAdmissionControlGroupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSessionAdmissionControlGroupTable()
    {
        return $this->sessionAdmissionControlGroupTable;
    }
}
