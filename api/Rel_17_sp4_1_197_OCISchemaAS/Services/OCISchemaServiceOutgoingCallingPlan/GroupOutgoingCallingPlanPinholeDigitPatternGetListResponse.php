<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest.
 *         Contains a table with column headings: "Name", "Digit Pattern".
 */
class GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse';
    protected $digitPatternTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\GroupOutgoingCallingPlanPinholeDigitPatternGetListResponse $response
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
        $this->digitPatternTable->setName('digitPatternTable');
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
