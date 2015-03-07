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
    public    $name                            = __CLASS__;
    protected $zoneName                        = null;
    protected $responseSizeLimit               = null;
    protected $searchCriteriaPhysicalLocation  = null;

    public function __construct(
         $zoneName,
         $responseSizeLimit = null,
         SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation = null
    ) {
        $this->setZoneName($zoneName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation);
    }

    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
    }

    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->value();
    }

    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaPhysicalLocation(SearchCriteriaPhysicalLocation $searchCriteriaPhysicalLocation = null)
    {
    }

    public function getSearchCriteriaPhysicalLocation()
    {
        return (!$this->searchCriteriaPhysicalLocation) ?: $this->searchCriteriaPhysicalLocation->value();
    }
}
