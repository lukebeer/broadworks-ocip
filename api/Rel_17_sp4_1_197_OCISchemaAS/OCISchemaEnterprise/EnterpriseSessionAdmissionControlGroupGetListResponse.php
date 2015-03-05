<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseSessionAdmissionControlGroupGetListRequest.
 *         Contains a table of session admission control group configured in the enterprise.
 *         The column headings are: "Name", "Is Default", "Maximum Sessions", "Maximum Originating Sessions", "Maximum Terminating Sessions"..
 */
class EnterpriseSessionAdmissionControlGroupGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $sessionAdmissionControlGroupTable
    ) {
        $this->sessionAdmissionControlGroupTable = $sessionAdmissionControlGroupTable;
        $this->args                              = func_get_args();
    }

    public function setSessionAdmissionControlGroupTable($sessionAdmissionControlGroupTable)
    {
        $sessionAdmissionControlGroupTable and $this->sessionAdmissionControlGroupTable = new core:OCITable($sessionAdmissionControlGroupTable);
    }

    public function getSessionAdmissionControlGroupTable()
    {
        return (!$this->sessionAdmissionControlGroupTable) ?: $this->sessionAdmissionControlGroupTable->value();
    }
}
