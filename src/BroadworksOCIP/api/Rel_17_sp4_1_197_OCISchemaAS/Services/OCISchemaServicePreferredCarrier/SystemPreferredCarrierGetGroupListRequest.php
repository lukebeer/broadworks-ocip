<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceProvider;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests a list of groups using the specified carrier.  It is possible to restrict the
 *         number of rows returned by specifying various search criteria. Multiple search criteria
 *         are logically ANDed together.
 *         The response is either a SystemPreferredCarrierGetGroupListResponse or an ErrorResponse.
 */
class SystemPreferredCarrierGetGroupListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetGroupListResponse';
    public    $elementName = 'SystemPreferredCarrierGetGroupListRequest';
    protected $carrier;
    protected $responseSizeLimit;
    protected $searchCriteriaGroupId;
    protected $searchCriteriaGroupName;
    protected $searchCriteriaExactServiceProvider;

    public function __construct(
         $carrier = '',
         $responseSizeLimit = null,
         $searchCriteriaGroupId = null,
         $searchCriteriaGroupName = null,
         $searchCriteriaExactServiceProvider = null
    ) {
        $this->setCarrier($carrier);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaGroupName($searchCriteriaGroupName);
        $this->setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetGroupListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCarrier($carrier = null)
    {
        $this->carrier = ($carrier InstanceOf PreferredCarrierName)
             ? $carrier
             : new PreferredCarrierName($carrier);
        $this->carrier->setElementName('carrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $carrier
     */
    public function getCarrier()
    {
        return ($this->carrier)
            ? $this->carrier->getElementValue()
            : null;
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
    public function setSearchCriteriaGroupName(SearchCriteriaGroupName $searchCriteriaGroupName = null)
    {
        $this->searchCriteriaGroupName = ($searchCriteriaGroupName InstanceOf SearchCriteriaGroupName)
             ? $searchCriteriaGroupName
             : new SearchCriteriaGroupName($searchCriteriaGroupName);
        $this->searchCriteriaGroupName->setElementName('searchCriteriaGroupName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupName $searchCriteriaGroupName
     */
    public function getSearchCriteriaGroupName()
    {
        return $this->searchCriteriaGroupName;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactServiceProvider(SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider = null)
    {
        $this->searchCriteriaExactServiceProvider = ($searchCriteriaExactServiceProvider InstanceOf SearchCriteriaExactServiceProvider)
             ? $searchCriteriaExactServiceProvider
             : new SearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
        $this->searchCriteriaExactServiceProvider->setElementName('searchCriteriaExactServiceProvider');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider
     */
    public function getSearchCriteriaExactServiceProvider()
    {
        return $this->searchCriteriaExactServiceProvider;
    }
}
