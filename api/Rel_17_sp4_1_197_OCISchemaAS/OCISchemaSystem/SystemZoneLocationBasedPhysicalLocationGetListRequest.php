<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SearchCriteriaPhysicalLocation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Gets a list of physical locations assigned to a zone.
 *         Response is SystemZoneLocationBasedPhysicalLocationGetListResponse or an ErrorResponse.
 */
class SystemZoneLocationBasedPhysicalLocationGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $zoneName,
             $responseSizeLimit=null,
             $searchCriteriaPhysicalLocation=null
    ) {
        $this->zoneName                       = new ZoneName($zoneName);
        $this->responseSizeLimit              = $responseSizeLimit;
        $this->searchCriteriaPhysicalLocation = $searchCriteriaPhysicalLocation;
        $this->args                           = func_get_args();
    }

    public function setZoneName($zoneName)
    {
        $zoneName and $this->zoneName = new ZoneName($zoneName);
    }

    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->value();
    }

    public function setResponseSizeLimit($responseSizeLimit)
    {
        $responseSizeLimit and $this->responseSizeLimit = new ResponseSizeLimit($responseSizeLimit);
    }

    public function getResponseSizeLimit()
    {
        return (!$this->responseSizeLimit) ?: $this->responseSizeLimit->value();
    }

    public function setSearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation)
    {
        $searchCriteriaPhysicalLocation and $this->searchCriteriaPhysicalLocation = new SearchCriteriaPhysicalLocation($searchCriteriaPhysicalLocation);
    }

    public function getSearchCriteriaPhysicalLocation()
    {
        return (!$this->searchCriteriaPhysicalLocation) ?: $this->searchCriteriaPhysicalLocation->value();
    }
}
