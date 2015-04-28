<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaServerSelectionRouteTimerMilliseconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaServerResponseTimerMilliseconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemMediaServerParametersGetListRequest.
 *         Contains a list of system Media Server parameters.
 */
class SystemMediaServerParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMediaServerParametersGetResponse';
    protected $mediaServerResponseTimerMilliseconds;
    protected $mediaServerSelectionRouteTimerMilliseconds;
    protected $useStaticMediaServerDevice;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMediaServerParametersGetResponse $response
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
        $this->mediaServerResponseTimerMilliseconds = ($mediaServerResponseTimerMilliseconds InstanceOf MediaServerResponseTimerMilliseconds)
             ? $mediaServerResponseTimerMilliseconds
             : new MediaServerResponseTimerMilliseconds($mediaServerResponseTimerMilliseconds);
        $this->mediaServerResponseTimerMilliseconds->setElementName('mediaServerResponseTimerMilliseconds');
        return $this;
    }

    /**
     * 
     * @return MediaServerResponseTimerMilliseconds $mediaServerResponseTimerMilliseconds
     */
    public function getMediaServerResponseTimerMilliseconds()
    {
        return ($this->mediaServerResponseTimerMilliseconds)
            ? $this->mediaServerResponseTimerMilliseconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds = null)
    {
        $this->mediaServerSelectionRouteTimerMilliseconds = ($mediaServerSelectionRouteTimerMilliseconds InstanceOf MediaServerSelectionRouteTimerMilliseconds)
             ? $mediaServerSelectionRouteTimerMilliseconds
             : new MediaServerSelectionRouteTimerMilliseconds($mediaServerSelectionRouteTimerMilliseconds);
        $this->mediaServerSelectionRouteTimerMilliseconds->setElementName('mediaServerSelectionRouteTimerMilliseconds');
        return $this;
    }

    /**
     * 
     * @return MediaServerSelectionRouteTimerMilliseconds $mediaServerSelectionRouteTimerMilliseconds
     */
    public function getMediaServerSelectionRouteTimerMilliseconds()
    {
        return ($this->mediaServerSelectionRouteTimerMilliseconds)
            ? $this->mediaServerSelectionRouteTimerMilliseconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseStaticMediaServerDevice($useStaticMediaServerDevice = null)
    {
        $this->useStaticMediaServerDevice = new PrimitiveType($useStaticMediaServerDevice);
        $this->useStaticMediaServerDevice->setElementName('useStaticMediaServerDevice');
        return $this;
    }

    /**
     * 
     * @return boolean $useStaticMediaServerDevice
     */
    public function getUseStaticMediaServerDevice()
    {
        return ($this->useStaticMediaServerDevice)
            ? $this->useStaticMediaServerDevice->getElementValue()
            : null;
    }
}
