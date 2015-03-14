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
    public    $name                                    = 'SystemSIPDeviceTypeGetListRequest';
    protected $responseSizeLimit                       = null;
    protected $searchCriteriaDeviceType                = null;
    protected $searchCriteriaExactSignalingAddressType = null;

    public function __construct(
         $responseSizeLimit = null,
         SearchCriteriaDeviceType $searchCriteriaDeviceType = null,
         SearchCriteriaExactSignalingAddressType $searchCriteriaExactSignalingAddressType = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceType($searchCriteriaDeviceType);
        $this->setSearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        if (!$responseSizeLimit) return $this;
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaDeviceType(SearchCriteriaDeviceType $searchCriteriaDeviceType = null)
    {
        if (!$searchCriteriaDeviceType) return $this;
        $this->searchCriteriaDeviceType = ($searchCriteriaDeviceType InstanceOf SearchCriteriaDeviceType)
             ? $searchCriteriaDeviceType
             : new SearchCriteriaDeviceType($searchCriteriaDeviceType);
        $this->searchCriteriaDeviceType->setName('searchCriteriaDeviceType');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDeviceType $searchCriteriaDeviceType
     */
    public function getSearchCriteriaDeviceType()
    {
        return $this->searchCriteriaDeviceType;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactSignalingAddressType(SearchCriteriaExactSignalingAddressType $searchCriteriaExactSignalingAddressType = null)
    {
        if (!$searchCriteriaExactSignalingAddressType) return $this;
        $this->searchCriteriaExactSignalingAddressType = ($searchCriteriaExactSignalingAddressType InstanceOf SearchCriteriaExactSignalingAddressType)
             ? $searchCriteriaExactSignalingAddressType
             : new SearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType);
        $this->searchCriteriaExactSignalingAddressType->setName('searchCriteriaExactSignalingAddressType');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactSignalingAddressType $searchCriteriaExactSignalingAddressType
     */
    public function getSearchCriteriaExactSignalingAddressType()
    {
        return $this->searchCriteriaExactSignalingAddressType;
    }
}
