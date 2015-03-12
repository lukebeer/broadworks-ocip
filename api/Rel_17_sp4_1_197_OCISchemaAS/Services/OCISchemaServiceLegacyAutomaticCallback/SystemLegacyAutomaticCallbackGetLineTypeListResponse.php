<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\core\Builder\Types\TableType;
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
    public    $name          = 'SystemLegacyAutomaticCallbackGetLineTypeListResponse';
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
    public function setLineTypeTable(TableType $lineTypeTable = null)
    {
        if (!$lineTypeTable) return $this;
        $this->lineTypeTable = $lineTypeTable;
        $this->lineTypeTable->setName('lineTypeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLineTypeTable()
    {
        return $this->lineTypeTable->getValue();
    }
}
