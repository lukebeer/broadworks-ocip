<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemApplicationServerSetGetUsageRequest.
 *         The response contains a 3 column table with column headings "Organization Id" (the enterprise or service provider name), 
 *         "Organization Type" (either 'enterprise' or 'service provider'), "Group Id".
 */
class SystemApplicationServerSetGetUsageResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemApplicationServerSetGetUsageResponse';
    public    $name                                = __CLASS__;
    protected $applicationServerSetSubscriberTable = null;


    /**
     * 
     */
    public function setApplicationServerSetSubscriberTable(core:OCITable $applicationServerSetSubscriberTable = null)
    {
        $this->applicationServerSetSubscriberTable = core:OCITable $applicationServerSetSubscriberTable;
    }

    /**
     * 
     */
    public function getApplicationServerSetSubscriberTable()
    {
        return (!$this->applicationServerSetSubscriberTable) ?: $this->applicationServerSetSubscriberTable->getValue();
    }
}
