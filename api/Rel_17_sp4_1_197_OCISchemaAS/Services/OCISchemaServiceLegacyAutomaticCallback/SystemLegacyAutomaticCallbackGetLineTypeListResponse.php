<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback\SystemLegacyAutomaticCallbackGetLineTypeListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemLegacyAutomaticCallbackGetLineTypeListRequest. Returns a 3 column
 *         table with column headings: "Line Type", "Match" and "No Match". The possible values
 *         for the "Match" and "No Match" columns are "Accept" and "Deny".
 */
class SystemLegacyAutomaticCallbackGetLineTypeListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $lineTypeTable = null;

    /**
     * @return SystemLegacyAutomaticCallbackGetLineTypeListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLineTypeTable(core:OCITable $lineTypeTable = null)
    {
        $this->lineTypeTable =  $lineTypeTable;
    }

    /**
     * 
     */
    public function getLineTypeTable()
    {
        return (!$this->lineTypeTable) ?: $this->lineTypeTable->getValue();
    }
}
