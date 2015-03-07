<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaServerSelectionRouteTimerMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaServerResponseTimerMilliseconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemMediaServerParametersGetListRequest.
 *         Contains a list of system Media Server parameters.
 */
class SystemMediaServerParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $mediaServerResponseTimerMilliseconds        = null;
    protected $mediaServerSelectionRouteTimerMilliseconds  = null;
    protected $useStaticMediaServerDevice                  = null;


    public function setMediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds = null)
    {
        $this->mediaServerResponseTimerMilliseconds = ($mediaServerResponseTimerMilliseconds InstanceOf MediaServerResponseTimerMilliseconds)
             ? $mediaServerResponseTimerMilliseconds
             : new MediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds);
    }

    public function getMediaServerResponseTimerMilliseconds()
    {
        return (!$this->mediaServerResponseTimerMilliseconds) ?: $this->mediaServerResponseTimerMilliseconds->value();
    }

    public function setMediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds = null)
    {
        $this->mediaServerSelectionRouteTimerMilliseconds = ($mediaServerSelectionRouteTimerMilliseconds InstanceOf MediaServerSelectionRouteTimerMilliseconds)
             ? $mediaServerSelectionRouteTimerMilliseconds
             : new MediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds);
    }

    public function getMediaServerSelectionRouteTimerMilliseconds()
    {
        return (!$this->mediaServerSelectionRouteTimerMilliseconds) ?: $this->mediaServerSelectionRouteTimerMilliseconds->value();
    }

    public function setUseStaticMediaServerDevice(xs:boolean $useStaticMediaServerDevice = null)
    {
    }

    public function getUseStaticMediaServerDevice()
    {
        return (!$this->useStaticMediaServerDevice) ?: $this->useStaticMediaServerDevice->value();
    }
}
