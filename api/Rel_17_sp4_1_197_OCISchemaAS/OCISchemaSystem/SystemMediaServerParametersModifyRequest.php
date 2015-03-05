<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaServerResponseTimerMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaServerSelectionRouteTimerMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify Media Server system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemMediaServerParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mediaServerResponseTimerMilliseconds=null,
             $mediaServerSelectionRouteTimerMilliseconds=null,
             $useStaticMediaServerDevice=null
    ) {
        $this->mediaServerResponseTimerMilliseconds       = $mediaServerResponseTimerMilliseconds;
        $this->mediaServerSelectionRouteTimerMilliseconds = $mediaServerSelectionRouteTimerMilliseconds;
        $this->useStaticMediaServerDevice                 = $useStaticMediaServerDevice;
        $this->args                                       = func_get_args();
    }

    public function setMediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds)
    {
        $mediaServerResponseTimerMilliseconds and $this->mediaServerResponseTimerMilliseconds = new MediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds);
    }

    public function getMediaServerResponseTimerMilliseconds()
    {
        return (!$this->mediaServerResponseTimerMilliseconds) ?: $this->mediaServerResponseTimerMilliseconds->value();
    }

    public function setMediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds)
    {
        $mediaServerSelectionRouteTimerMilliseconds and $this->mediaServerSelectionRouteTimerMilliseconds = new MediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds);
    }

    public function getMediaServerSelectionRouteTimerMilliseconds()
    {
        return (!$this->mediaServerSelectionRouteTimerMilliseconds) ?: $this->mediaServerSelectionRouteTimerMilliseconds->value();
    }

    public function setUseStaticMediaServerDevice($useStaticMediaServerDevice)
    {
        $useStaticMediaServerDevice and $this->useStaticMediaServerDevice = new xs:boolean($useStaticMediaServerDevice);
    }

    public function getUseStaticMediaServerDevice()
    {
        return (!$this->useStaticMediaServerDevice) ?: $this->useStaticMediaServerDevice->value();
    }
}
