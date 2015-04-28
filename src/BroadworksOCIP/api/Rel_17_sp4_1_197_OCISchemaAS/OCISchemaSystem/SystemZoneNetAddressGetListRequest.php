<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaZoneIPAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Gets a list of IP Addresses and/or Ranges assigned to a zone.
 *         Response is SystemZoneNetAddressGetListResponse or an ErrorResponse.
 */
class SystemZoneNetAddressGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneNetAddressGetListResponse';
    public    $elementName = 'SystemZoneNetAddressGetListRequest';
    protected $zoneName;
    protected $responseSizeLimit;
    protected $searchCriteriaZoneIPAddress;

    public function __construct(
         $zoneName = '',
         $responseSizeLimit = null,
         $searchCriteriaZoneIPAddress = null
    ) {
        $this->setZoneName($zoneName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneNetAddressGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
        $this->zoneName->setElementName('zoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $zoneName
     */
    public function getZoneName()
    {
        return ($this->zoneName)
            ? $this->zoneName->getElementValue()
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
    public function setSearchCriteriaZoneIPAddress(SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress = null)
    {
        $this->searchCriteriaZoneIPAddress = ($searchCriteriaZoneIPAddress InstanceOf SearchCriteriaZoneIPAddress)
             ? $searchCriteriaZoneIPAddress
             : new SearchCriteriaZoneIPAddress($searchCriteriaZoneIPAddress);
        $this->searchCriteriaZoneIPAddress->setElementName('searchCriteriaZoneIPAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaZoneIPAddress $searchCriteriaZoneIPAddress
     */
    public function getSearchCriteriaZoneIPAddress()
    {
        return $this->searchCriteriaZoneIPAddress;
    }
}
