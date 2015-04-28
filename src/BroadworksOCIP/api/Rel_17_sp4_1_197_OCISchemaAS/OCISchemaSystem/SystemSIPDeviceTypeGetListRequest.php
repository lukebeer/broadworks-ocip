<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactSignalingAddressType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get the list of sip device types in the system.
 *         See Also: SystemDeviceTypeGetAvailableListRequest.
 *         The response is either SystemSIPDeviceTypeGetListResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeGetListResponse';
    public    $elementName = 'SystemSIPDeviceTypeGetListRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaDeviceType;
    protected $searchCriteriaExactSignalingAddressType;

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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeGetListResponse $response
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
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setElementName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit)
            ? $this->responseSizeLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaDeviceType(SearchCriteriaDeviceType $searchCriteriaDeviceType = null)
    {
        $this->searchCriteriaDeviceType = ($searchCriteriaDeviceType InstanceOf SearchCriteriaDeviceType)
             ? $searchCriteriaDeviceType
             : new SearchCriteriaDeviceType($searchCriteriaDeviceType);
        $this->searchCriteriaDeviceType->setElementName('searchCriteriaDeviceType');
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
        $this->searchCriteriaExactSignalingAddressType = ($searchCriteriaExactSignalingAddressType InstanceOf SearchCriteriaExactSignalingAddressType)
             ? $searchCriteriaExactSignalingAddressType
             : new SearchCriteriaExactSignalingAddressType($searchCriteriaExactSignalingAddressType);
        $this->searchCriteriaExactSignalingAddressType->setElementName('searchCriteriaExactSignalingAddressType');
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
