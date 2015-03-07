<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the EnterpriseCallCenterAgentUnavailableCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 */
class EnterpriseCallCenterAgentUnavailableCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $unavailableCodesTable  = null;


    public function setUnavailableCodesTable(core:OCITable $unavailableCodesTable = null)
    {
    }

    public function getUnavailableCodesTable()
    {
        return (!$this->unavailableCodesTable) ?: $this->unavailableCodesTable->value();
    }
}
