<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the ServiceProviderMaliciousCallTraceGetRequest.
 *         The response contains the service provider Malicious Call Trace 
 *         settings.
 */
class ServiceProviderMaliciousCallTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useSystemPlayMCTWarningAnnouncement,
             $playMCTWarningAnnouncement
    ) {
        $this->useSystemPlayMCTWarningAnnouncement = $useSystemPlayMCTWarningAnnouncement;
        $this->playMCTWarningAnnouncement          = $playMCTWarningAnnouncement;
        $this->args                                = func_get_args();
    }

    public function setUseSystemPlayMCTWarningAnnouncement($useSystemPlayMCTWarningAnnouncement)
    {
        $useSystemPlayMCTWarningAnnouncement and $this->useSystemPlayMCTWarningAnnouncement = new xs:boolean($useSystemPlayMCTWarningAnnouncement);
    }

    public function getUseSystemPlayMCTWarningAnnouncement()
    {
        return (!$this->useSystemPlayMCTWarningAnnouncement) ?: $this->useSystemPlayMCTWarningAnnouncement->value();
    }

    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement)
    {
        $playMCTWarningAnnouncement and $this->playMCTWarningAnnouncement = new xs:boolean($playMCTWarningAnnouncement);
    }

    public function getPlayMCTWarningAnnouncement()
    {
        return (!$this->playMCTWarningAnnouncement) ?: $this->playMCTWarningAnnouncement->value();
    }
}
