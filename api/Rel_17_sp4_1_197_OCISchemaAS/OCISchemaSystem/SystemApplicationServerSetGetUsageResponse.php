<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemApplicationServerSetGetUsageRequest.
 *         The response contains a 3 column table with column headings "Organization Id" (the enterprise or service provider name), 
 *         "Organization Type" (either 'enterprise' or 'service provider'), "Group Id".
 */
class SystemApplicationServerSetGetUsageResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $applicationServerSetSubscriberTable
    ) {
        $this->applicationServerSetSubscriberTable = $applicationServerSetSubscriberTable;
        $this->args                                = func_get_args();
    }

    public function setApplicationServerSetSubscriberTable($applicationServerSetSubscriberTable)
    {
        $applicationServerSetSubscriberTable and $this->applicationServerSetSubscriberTable = new core:OCITable($applicationServerSetSubscriberTable);
    }

    public function getApplicationServerSetSubscriberTable()
    {
        return (!$this->applicationServerSetSubscriberTable) ?: $this->applicationServerSetSubscriberTable->value();
    }
}
