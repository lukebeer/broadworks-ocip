<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceCodeDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaServiceCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get all service codes that have been defined in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either SystemServiceCodeGetListResponse or ErrorResponse.
 */
class SystemServiceCodeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse';
    public    $name                                 = __CLASS__;
    protected $responseSizeLimit                    = null;
    protected $searchCriteriaServiceCode            = null;
    protected $searchCriteriaServiceCodeDescription = null;

    public function __construct(
         $responseSizeLimit = null,
          $searchCriteriaServiceCode = null,
          $searchCriteriaServiceCodeDescription = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaServiceCode($searchCriteriaServiceCode);
        $this->setSearchCriteriaServiceCodeDescription($searchCriteriaServiceCodeDescription);
    }

    /**
     * @return SystemServiceCodeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    /**
     * Maximum number of rows to return in response to a search.
     *         By convention, elements of this type can be omitted to allow an
     *         unlimited number or rows in the search result.
     */
    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->getValue();
    }

    /**
     * Criteria for searching for a Service Code.
     */
    public function setSearchCriteriaServiceCode(SearchCriteriaServiceCode $searchCriteriaServiceCode = null)
    {
        $this->searchCriteriaServiceCode =  $searchCriteriaServiceCode;
    }

    /**
     * Criteria for searching for a Service Code.
     */
    public function getSearchCriteriaServiceCode()
    {
        return (!$this->searchCriteriaServiceCode) ?: $this->searchCriteriaServiceCode->getValue();
    }

    /**
     * Criteria for searching for a Service Code description.
     */
    public function setSearchCriteriaServiceCodeDescription(SearchCriteriaServiceCodeDescription $searchCriteriaServiceCodeDescription = null)
    {
        $this->searchCriteriaServiceCodeDescription =  $searchCriteriaServiceCodeDescription;
    }

    /**
     * Criteria for searching for a Service Code description.
     */
    public function getSearchCriteriaServiceCodeDescription()
    {
        return (!$this->searchCriteriaServiceCodeDescription) ?: $this->searchCriteriaServiceCodeDescription->getValue();
    }
}
