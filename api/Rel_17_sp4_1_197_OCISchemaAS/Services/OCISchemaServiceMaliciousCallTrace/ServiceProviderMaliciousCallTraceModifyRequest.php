<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the service provider's Malicious Call Trace settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderMaliciousCallTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $serviceProviderId                    = null;
    protected $useSystemPlayMCTWarningAnnouncement  = null;
    protected $playMCTWarningAnnouncement           = null;

    public function __construct(
         $serviceProviderId,
         $useSystemPlayMCTWarningAnnouncement = null,
         $playMCTWarningAnnouncement = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setUseSystemPlayMCTWarningAnnouncement($useSystemPlayMCTWarningAnnouncement);
        $this->setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setUseSystemPlayMCTWarningAnnouncement(xs:boolean $useSystemPlayMCTWarningAnnouncement = null)
    {
    }

    public function getUseSystemPlayMCTWarningAnnouncement()
    {
        return (!$this->useSystemPlayMCTWarningAnnouncement) ?: $this->useSystemPlayMCTWarningAnnouncement->value();
    }

    public function setPlayMCTWarningAnnouncement(xs:boolean $playMCTWarningAnnouncement = null)
    {
    }

    public function getPlayMCTWarningAnnouncement()
    {
        return (!$this->playMCTWarningAnnouncement) ?: $this->playMCTWarningAnnouncement->value();
    }
}
