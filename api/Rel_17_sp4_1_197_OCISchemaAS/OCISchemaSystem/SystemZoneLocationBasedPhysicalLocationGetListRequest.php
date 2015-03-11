<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaPhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneLocationBasedPhysicalLocationGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Gets a list of physical locations assigned to a zone.
 *         Response is SystemZoneLocationBasedPhysicalLocationGetListResponse or an ErrorResponse.
 */
class SystemZoneLocationBasedPhysicalLocationGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneLocationBasedPhysicalLocationGetListResponse';
    public    $name                           = 'SystemZoneLocationBasedPhysicalLocationGetListRequest';
    protected $zoneName                       = null;
    protected $responseSizeLimit              = null;
    protected $searchCriteriaPhysicalLocation = null;

    public function __construct(
         $zoneName,
         $responseSizeLimit = null,
         SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation = null
    ) {
        $this->setZoneName($zoneName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation);
    }

    /**
     * @return SystemZoneLocationBasedPhysicalLocationGetListResponse
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
        if (!$zoneName) return $this;
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
        $this->zoneName->setName('zoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName
     */
    public function getZoneName()
    {
        return $this->zoneName->getValue();
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
     * @return ResponseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit->getValue();
    }

    /**
     * 
     */
    public function setSearchCriteriaPhysicalLocation(SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation = null)
    {
        if (!$searchCriteriaPhysicalLocation) return $this;
        $this->searchCriteriaPhysicalLocation = ($searchCriteriaPhysicalLocation InstanceOf SearchCriteriaPhysicalLocation)
             ? $searchCriteriaPhysicalLocation
             : new SearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation);
        $this->searchCriteriaPhysicalLocation->setName('searchCriteriaPhysicalLocation');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaPhysicalLocation
     */
    public function getSearchCriteriaPhysicalLocation()
    {
        return $this->searchCriteriaPhysicalLocation;
    }
}
