<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateQueryFilterValueReplacementList;
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
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateQueryFilterValueReplacementList';
    public    $name        = 'CallCenterReportDataTemplateQueryFilterValueReplacementList';
    protected $filterValue = null;

    public function __construct(
         $filterValue = null
    ) {
        $this->setFilterValue($filterValue);
    }

    /**
     * @return CallCenterReportDataTemplateQueryFilterValueReplacementList
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
        if (!$filterValue) return $this;
        $this->filterValue = new SimpleContent($filterValue);
        $this->filterValue->setName('filterValue');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getFilterValue()
    {
        return $this->filterValue->getValue();
    }
}
