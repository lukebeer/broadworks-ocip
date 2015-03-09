<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDnGetUtilizationListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDnUtilizationGetListRequest.
 *         The table columns are: "Service Provider Id", "Phone Numbers", "Assigned to Groups",
 *         "Percentage Assigned", "Is Enterprise" and "Activated on Groups".
 */
class SystemDnGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $dnUtilizationTable = null;

    /**
     * @return SystemDnGetUtilizationListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnUtilizationTable(core:OCITable $dnUtilizationTable = null)
    {
        $this->dnUtilizationTable =  $dnUtilizationTable;
    }

    /**
     * 
     */
    public function getDnUtilizationTable()
    {
        return (!$this->dnUtilizationTable) ?: $this->dnUtilizationTable->getValue();
    }
}
