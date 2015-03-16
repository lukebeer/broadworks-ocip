<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of call center reporting data template query filter values that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class CallCenterReportDataTemplateQueryFilterValueReplacementList extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterReportDataTemplateQueryFilterValueReplacementList';
    protected $filterValue;

    public function __construct(
         $filterValue = null
    ) {
        $this->setFilterValue($filterValue);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFilterValue($filterValue = null)
    {
        $this->filterValue = new SimpleContent($filterValue);
        $this->filterValue->setName('filterValue');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $filterValue
     */
    public function getFilterValue()
    {
        return ($this->filterValue) ? $this->filterValue->getValue() : null;
    }
}
