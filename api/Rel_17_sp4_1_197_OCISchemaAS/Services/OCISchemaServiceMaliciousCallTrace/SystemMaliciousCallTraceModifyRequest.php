<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Malicious Call Trace system parameter.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMaliciousCallTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $playMCTWarningAnnouncement  = null;

    public function __construct(
         $playMCTWarningAnnouncement = null
    ) {
        $this->setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement);
    }

    public function setPlayMCTWarningAnnouncement(xs:boolean $playMCTWarningAnnouncement = null)
    {
    }

    public function getPlayMCTWarningAnnouncement()
    {
        return (!$this->playMCTWarningAnnouncement) ?: $this->playMCTWarningAnnouncement->value();
    }
}
