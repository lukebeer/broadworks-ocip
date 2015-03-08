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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Gets a list of physical locations assigned to a zone.
 *         Response is SystemZoneLocationBasedPhysicalLocationGetListResponse or an ErrorResponse.
 */
class SystemZoneLocationBasedPhysicalLocationGetListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneLocationBasedPhysicalLocationGetListResponse';
    public    $name                           = __CLASS__;
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
     * Zone Name.
     */
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
    }

    /**
     * Zone Name.
     */
    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->getValue();
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
     * Criteria for searching for a Physical Location.
     */
    public function setSearchCriteriaPhysicalLocation(SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation = null)
    {
        $this->searchCriteriaPhysicalLocation = SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation;
    }

    /**
     * Criteria for searching for a Physical Location.
     */
    public function getSearchCriteriaPhysicalLocation()
    {
        return (!$this->searchCriteriaPhysicalLocation) ?: $this->searchCriteriaPhysicalLocation->getValue();
    }
}