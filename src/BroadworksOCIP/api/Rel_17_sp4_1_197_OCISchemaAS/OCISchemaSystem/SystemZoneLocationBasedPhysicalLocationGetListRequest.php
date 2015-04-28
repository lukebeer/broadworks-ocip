<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaPhysicalLocation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Gets a list of physical locations assigned to a zone.
 *         Response is SystemZoneLocationBasedPhysicalLocationGetListResponse or an ErrorResponse.
 */
class SystemZoneLocationBasedPhysicalLocationGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneLocationBasedPhysicalLocationGetListResponse';
    public    $elementName = 'SystemZoneLocationBasedPhysicalLocationGetListRequest';
    protected $zoneName;
    protected $responseSizeLimit;
    protected $searchCriteriaPhysicalLocation;

    public function __construct(
         $zoneName = '',
         $responseSizeLimit = null,
         $searchCriteriaPhysicalLocation = null
    ) {
        $this->setZoneName($zoneName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneLocationBasedPhysicalLocationGetListResponse $response
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
    public function setSearchCriteriaPhysicalLocation(SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation = null)
    {
        $this->searchCriteriaPhysicalLocation = ($searchCriteriaPhysicalLocation InstanceOf SearchCriteriaPhysicalLocation)
             ? $searchCriteriaPhysicalLocation
             : new SearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation);
        $this->searchCriteriaPhysicalLocation->setElementName('searchCriteriaPhysicalLocation');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation
     */
    public function getSearchCriteriaPhysicalLocation()
    {
        return $this->searchCriteriaPhysicalLocation;
    }
}
