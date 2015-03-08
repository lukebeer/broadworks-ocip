<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupSessionAdmissionControlGroupGetListRequest.
 *         Contains a table of session admission control group configured in the group.
 *         The column headings are: "Name", "Is Default", "Maximum Sessions", "Maximum Originating Sessions", "Maximum Terminating Sessions".
 */
class GroupSessionAdmissionControlGroupGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupSessionAdmissionControlGroupGetListResponse';
    public    $name                              = __CLASS__;
    protected $sessionAdmissionControlGroupTable = null;


    /**
     * 
     */
    public function setSessionAdmissionControlGroupTable(core:OCITable $sessionAdmissionControlGroupTable = null)
    {
        $this->sessionAdmissionControlGroupTable = core:OCITable $sessionAdmissionControlGroupTable;
    }

    /**
     * 
     */
    public function getSessionAdmissionControlGroupTable()
    {
        return (!$this->sessionAdmissionControlGroupTable) ?: $this->sessionAdmissionControlGroupTable->getValue();
    }
}