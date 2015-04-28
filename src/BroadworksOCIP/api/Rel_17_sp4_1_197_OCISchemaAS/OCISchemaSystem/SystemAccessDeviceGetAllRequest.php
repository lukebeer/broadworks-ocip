<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceServiceProvider;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceMACAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceNetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDeviceName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests the list of all access devices in the entire system.
 *         Prior to release 14, this functionality was provided with the SystemAccessDeviceGetListRequest.
 *         The response is either SystemAccessDeviceGetAllResponse or ErrorResponse.
 */
class SystemAccessDeviceGetAllRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceGetAllResponse';
    public    $elementName = 'SystemAccessDeviceGetAllRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaDeviceName;
    protected $searchCriteriaDeviceMACAddress;
    protected $searchCriteriaDeviceNetAddress;
    protected $searchCriteriaGroupId;
    protected $searchCriteriaExactDeviceType;
    protected $searchCriteriaExactDeviceServiceProvider;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaDeviceName = null,
         $searchCriteriaDeviceMACAddress = null,
         $searchCriteriaDeviceNetAddress = null,
         $searchCriteriaGroupId = null,
         $searchCriteriaExactDeviceType = null,
         $searchCriteriaExactDeviceServiceProvider = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->setSearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->setSearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
        $this->setSearchCriteriaExactDeviceServiceProvider($searchCriteriaExactDeviceServiceProvider);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceGetAllResponse $response
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
    public function setSearchCriteriaDeviceName(SearchCriteriaDeviceName $searchCriteriaDeviceName = null)
    {
        $this->searchCriteriaDeviceName = ($searchCriteriaDeviceName InstanceOf SearchCriteriaDeviceName)
             ? $searchCriteriaDeviceName
             : new SearchCriteriaDeviceName($searchCriteriaDeviceName);
        $this->searchCriteriaDeviceName->setElementName('searchCriteriaDeviceName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDeviceName $searchCriteriaDeviceName
     */
    public function getSearchCriteriaDeviceName()
    {
        return $this->searchCriteriaDeviceName;
    }

    /**
     * 
     */
    public function setSearchCriteriaDeviceMACAddress(SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress = null)
    {
        $this->searchCriteriaDeviceMACAddress = ($searchCriteriaDeviceMACAddress InstanceOf SearchCriteriaDeviceMACAddress)
             ? $searchCriteriaDeviceMACAddress
             : new SearchCriteriaDeviceMACAddress($searchCriteriaDeviceMACAddress);
        $this->searchCriteriaDeviceMACAddress->setElementName('searchCriteriaDeviceMACAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDeviceMACAddress $searchCriteriaDeviceMACAddress
     */
    public function getSearchCriteriaDeviceMACAddress()
    {
        return $this->searchCriteriaDeviceMACAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaDeviceNetAddress(SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress = null)
    {
        $this->searchCriteriaDeviceNetAddress = ($searchCriteriaDeviceNetAddress InstanceOf SearchCriteriaDeviceNetAddress)
             ? $searchCriteriaDeviceNetAddress
             : new SearchCriteriaDeviceNetAddress($searchCriteriaDeviceNetAddress);
        $this->searchCriteriaDeviceNetAddress->setElementName('searchCriteriaDeviceNetAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDeviceNetAddress $searchCriteriaDeviceNetAddress
     */
    public function getSearchCriteriaDeviceNetAddress()
    {
        return $this->searchCriteriaDeviceNetAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId = ($searchCriteriaGroupId InstanceOf SearchCriteriaGroupId)
             ? $searchCriteriaGroupId
             : new SearchCriteriaGroupId($searchCriteriaGroupId);
        $this->searchCriteriaGroupId->setElementName('searchCriteriaGroupId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupId $searchCriteriaGroupId
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactDeviceType(SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType = null)
    {
        $this->searchCriteriaExactDeviceType = ($searchCriteriaExactDeviceType InstanceOf SearchCriteriaExactDeviceType)
             ? $searchCriteriaExactDeviceType
             : new SearchCriteriaExactDeviceType($searchCriteriaExactDeviceType);
        $this->searchCriteriaExactDeviceType->setElementName('searchCriteriaExactDeviceType');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactDeviceType $searchCriteriaExactDeviceType
     */
    public function getSearchCriteriaExactDeviceType()
    {
        return $this->searchCriteriaExactDeviceType;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactDeviceServiceProvider(SearchCriteriaExactDeviceServiceProvider $searchCriteriaExactDeviceServiceProvider = null)
    {
        $this->searchCriteriaExactDeviceServiceProvider = ($searchCriteriaExactDeviceServiceProvider InstanceOf SearchCriteriaExactDeviceServiceProvider)
             ? $searchCriteriaExactDeviceServiceProvider
             : new SearchCriteriaExactDeviceServiceProvider($searchCriteriaExactDeviceServiceProvider);
        $this->searchCriteriaExactDeviceServiceProvider->setElementName('searchCriteriaExactDeviceServiceProvider');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactDeviceServiceProvider $searchCriteriaExactDeviceServiceProvider
     */
    public function getSearchCriteriaExactDeviceServiceProvider()
    {
        return $this->searchCriteriaExactDeviceServiceProvider;
    }
}
