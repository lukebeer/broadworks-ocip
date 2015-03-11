<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupSessionAdmissionControlGroupGetListRequest.
 *         Contains a table of session admission control group configured in the group.
 *         The column headings are: "Name", "Is Default", "Maximum Sessions", "Maximum Originating Sessions", "Maximum Terminating Sessions".
 */
class GroupSessionAdmissionControlGroupGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = 'GroupSessionAdmissionControlGroupGetListResponse';
    protected $sessionAdmissionControlGroupTable = null;

    /**
     * @return GroupSessionAdmissionControlGroupGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSessionAdmissionControlGroupTable(core:OCITable $sessionAdmissionControlGroupTable = null)
    {
        if (!$sessionAdmissionControlGroupTable) return $this;
        $this->sessionAdmissionControlGroupTable->setName('sessionAdmissionControlGroupTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getSessionAdmissionControlGroupTable()
    {
        return $this->sessionAdmissionControlGroupTable->getValue();
    }
}
