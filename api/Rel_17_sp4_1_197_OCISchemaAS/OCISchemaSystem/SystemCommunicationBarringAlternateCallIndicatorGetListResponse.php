<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringAlternateCallIndicatorGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemCommunicationBarringAlternateCallIndicatorGetListRequest. Contains a table with one row per Communication Barring Alternate Call Indicator.  The table column headings are: "Alternate Call Indicator" and "Network Server Alternate Call Indicator".
 */
class SystemCommunicationBarringAlternateCallIndicatorGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $alternateCallIndicatorTable = null;

    /**
     * @return SystemCommunicationBarringAlternateCallIndicatorGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlternateCallIndicatorTable(core:OCITable $alternateCallIndicatorTable = null)
    {
        $this->alternateCallIndicatorTable =  $alternateCallIndicatorTable;
    }

    /**
     * 
     */
    public function getAlternateCallIndicatorTable()
    {
        return (!$this->alternateCallIndicatorTable) ?: $this->alternateCallIndicatorTable->getValue();
    }
}
