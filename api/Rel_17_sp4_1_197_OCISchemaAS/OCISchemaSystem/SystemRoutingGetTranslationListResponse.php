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
     * Response to SystemRoutingGetTranslationListRequest. The column headings are "Routing Digits"
 *         and "Route".
 */
class SystemRoutingGetTranslationListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutingGetTranslationListResponse';
    public    $name         = __CLASS__;
    protected $routingTable = null;


    /**
     * 
     */
    public function setRoutingTable(core:OCITable $routingTable = null)
    {
        $this->routingTable = core:OCITable $routingTable;
    }

    /**
     * 
     */
    public function getRoutingTable()
    {
        return (!$this->routingTable) ?: $this->routingTable->getValue();
    }
}
