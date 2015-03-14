<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaServerSelectionRouteTimerMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaServerResponseTimerMilliseconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                                       = 'SystemMediaServerParametersGetResponse';
    protected $mediaServerResponseTimerMilliseconds       = null;
    protected $mediaServerSelectionRouteTimerMilliseconds = null;
    protected $useStaticMediaServerDevice                 = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMediaServerParametersGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds = null)
    {
        if (!$mediaServerResponseTimerMilliseconds) return $this;
        $this->mediaServerResponseTimerMilliseconds = ($mediaServerResponseTimerMilliseconds InstanceOf MediaServerResponseTimerMilliseconds)
             ? $mediaServerResponseTimerMilliseconds
             : new MediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds);
        $this->mediaServerResponseTimerMilliseconds->setName('mediaServerResponseTimerMilliseconds');
        return $this;
    }

    /**
     * 
     * @return MediaServerResponseTimerMilliseconds $mediaServerResponseTimerMilliseconds
     */
    public function getMediaServerResponseTimerMilliseconds()
    {
        return $this->mediaServerResponseTimerMilliseconds->getValue();
    }

    /**
     * 
     */
    public function setMediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds = null)
    {
        if (!$mediaServerSelectionRouteTimerMilliseconds) return $this;
        $this->mediaServerSelectionRouteTimerMilliseconds = ($mediaServerSelectionRouteTimerMilliseconds InstanceOf MediaServerSelectionRouteTimerMilliseconds)
             ? $mediaServerSelectionRouteTimerMilliseconds
             : new MediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds);
        $this->mediaServerSelectionRouteTimerMilliseconds->setName('mediaServerSelectionRouteTimerMilliseconds');
        return $this;
    }

    /**
     * 
     * @return MediaServerSelectionRouteTimerMilliseconds $mediaServerSelectionRouteTimerMilliseconds
     */
    public function getMediaServerSelectionRouteTimerMilliseconds()
    {
        return $this->mediaServerSelectionRouteTimerMilliseconds->getValue();
    }

    /**
     * 
     */
    public function setUseStaticMediaServerDevice($useStaticMediaServerDevice = null)
    {
        if (!$useStaticMediaServerDevice) return $this;
        $this->useStaticMediaServerDevice = new PrimitiveType($useStaticMediaServerDevice);
        $this->useStaticMediaServerDevice->setName('useStaticMediaServerDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $useStaticMediaServerDevice
     */
    public function getUseStaticMediaServerDevice()
    {
        return $this->useStaticMediaServerDevice->getValue();
    }
}
