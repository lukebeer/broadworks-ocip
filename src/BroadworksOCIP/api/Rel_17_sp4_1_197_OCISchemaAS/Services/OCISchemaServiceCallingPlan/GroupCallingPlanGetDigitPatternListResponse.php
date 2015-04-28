<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPlan; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupCallingPlanGetDigitPatternListRequest.
 *         Contains a table with column headings: "Name", "Digit Pattern".
 */
class GroupCallingPlanGetDigitPatternListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallingPlanGetDigitPatternListResponse';
    protected $digitPatternTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallingPlan\GroupCallingPlanGetDigitPatternListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDigitPatternTable(TableType $digitPatternTable = null)
    {
        $this->digitPatternTable = $digitPatternTable;
        $this->digitPatternTable->setElementName('digitPatternTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDigitPatternTable()
    {
        return $this->digitPatternTable;
    }
}
