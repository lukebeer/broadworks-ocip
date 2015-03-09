<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactSignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get the list of sip device types in the system.
 *         See Also: SystemDeviceTypeGetAvailableListRequest.
 *         The response is either SystemSIPDeviceTypeGetListResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeGetListResponse';
    public    $name                                    = __CLASS__;
    protected $responseSizeLimit                       = null;
    protected $searchCriteriaDeviceType                = null;
    protected $searchCriteriaExactSignalingAddressType = null;

    public function __construct(
         $responseSizeLimit = null,
          $searchCriteriaDeviceType = null,
          $searchCriteriaExactSignalingAddressType = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceType($searchCriteriaDeviceType);
        $this->setSearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType);
    }

    /**
     * @return SystemSIPDeviceTypeGetListResponse
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
     * Criteria for searching for device type.
     */
    public function setSearchCriteriaDeviceType(SearchCriteriaDeviceType $searchCriteriaDeviceType = null)
    {
        $this->searchCriteriaDeviceType =  $searchCriteriaDeviceType;
    }

    /**
     * Criteria for searching for device type.
     */
    public function getSearchCriteriaDeviceType()
    {
        return (!$this->searchCriteriaDeviceType) ?: $this->searchCriteriaDeviceType->getValue();
    }

    /**
     * Criteria for searching for a particular fully specified SignalingAddressType.
     */
    public function setSearchCriteriaExactSignalingAddressType(SearchCriteriaExactSignalingAddressType $searchCriteriaExactSignalingAddressType = null)
    {
        $this->searchCriteriaExactSignalingAddressType =  $searchCriteriaExactSignalingAddressType;
    }

    /**
     * Criteria for searching for a particular fully specified SignalingAddressType.
     */
    public function getSearchCriteriaExactSignalingAddressType()
    {
        return (!$this->searchCriteriaExactSignalingAddressType) ?: $this->searchCriteriaExactSignalingAddressType->getValue();
    }
}
