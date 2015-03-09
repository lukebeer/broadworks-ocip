<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaServerSelectionRouteTimerMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaServerResponseTimerMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMediaServerParametersGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemMediaServerParametersGetListRequest.
 *         Contains a list of system Media Server parameters.
 */
class SystemMediaServerParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $mediaServerResponseTimerMilliseconds       = null;
    protected $mediaServerSelectionRouteTimerMilliseconds = null;
    protected $useStaticMediaServerDevice                 = null;

    /**
     * @return SystemMediaServerParametersGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Media Server timer length.
     */
    public function setMediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds = null)
    {
        $this->mediaServerResponseTimerMilliseconds = ($mediaServerResponseTimerMilliseconds InstanceOf MediaServerResponseTimerMilliseconds)
             ? $mediaServerResponseTimerMilliseconds
             : new MediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds);
    }

    /**
     * Media Server timer length.
     */
    public function getMediaServerResponseTimerMilliseconds()
    {
        return (!$this->mediaServerResponseTimerMilliseconds) ?: $this->mediaServerResponseTimerMilliseconds->getValue();
    }

    /**
     * Media Server selection route timer length.
     */
    public function setMediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds = null)
    {
        $this->mediaServerSelectionRouteTimerMilliseconds = ($mediaServerSelectionRouteTimerMilliseconds InstanceOf MediaServerSelectionRouteTimerMilliseconds)
             ? $mediaServerSelectionRouteTimerMilliseconds
             : new MediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds);
    }

    /**
     * Media Server selection route timer length.
     */
    public function getMediaServerSelectionRouteTimerMilliseconds()
    {
        return (!$this->mediaServerSelectionRouteTimerMilliseconds) ?: $this->mediaServerSelectionRouteTimerMilliseconds->getValue();
    }

    /**
     * 
     */
    public function setUseStaticMediaServerDevice($useStaticMediaServerDevice = null)
    {
        $this->useStaticMediaServerDevice = (boolean) $useStaticMediaServerDevice;
    }

    /**
     * 
     */
    public function getUseStaticMediaServerDevice()
    {
        return (!$this->useStaticMediaServerDevice) ?: $this->useStaticMediaServerDevice;
    }
}
