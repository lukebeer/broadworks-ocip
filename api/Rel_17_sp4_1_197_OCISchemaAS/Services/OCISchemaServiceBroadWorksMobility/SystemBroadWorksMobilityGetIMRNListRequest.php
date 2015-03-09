<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaIMRN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetIMRNListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get the list of BroadWorks Mobility IMRN numbers defined in the system.
 *         The response is either a SystemBroadWorksMobilityIMRNGetListResponse
 *         or an ErrorResponse.
 */
class SystemBroadWorksMobilityGetIMRNListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetIMRNListResponse';
    public    $name               = __CLASS__;
    protected $searchCriteriaIMRN = null;

    public function __construct(
          $searchCriteriaIMRN = null
    ) {
        $this->setSearchCriteriaIMRN($searchCriteriaIMRN);
    }

    /**
     * @return SystemBroadWorksMobilityGetIMRNListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Criteria for searching for an IMRN Number.
     */
    public function setSearchCriteriaIMRN(SearchCriteriaIMRN $searchCriteriaIMRN = null)
    {
        $this->searchCriteriaIMRN =  $searchCriteriaIMRN;
    }

    /**
     * Criteria for searching for an IMRN Number.
     */
    public function getSearchCriteriaIMRN()
    {
        return (!$this->searchCriteriaIMRN) ?: $this->searchCriteriaIMRN->getValue();
    }
}
