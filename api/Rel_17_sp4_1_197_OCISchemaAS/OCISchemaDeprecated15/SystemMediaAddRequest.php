<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaBandwidthEnforcementType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaBandwidthBitsPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\MediaType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CodecName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a Media to the system.
 *             The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = 'SystemMediaAddRequest';
    protected $mediaName                = null;
    protected $codecName                = null;
    protected $mediaType                = null;
    protected $bandwidthEnforcementType = null;
    protected $mediaBandwidth           = null;

    public function __construct(
         $mediaName,
         $codecName,
         $mediaType,
         $bandwidthEnforcementType,
         $mediaBandwidth = null
    ) {
        $this->setMediaName($mediaName);
        $this->setCodecName($codecName);
        $this->setMediaType($mediaType);
        $this->setBandwidthEnforcementType($bandwidthEnforcementType);
        $this->setMediaBandwidth($mediaBandwidth);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMediaName($mediaName = null)
    {
        if (!$mediaName) return $this;
        $this->mediaName = ($mediaName InstanceOf MediaName)
             ? $mediaName
             : new MediaName($mediaName);
        $this->mediaName->setName('mediaName');
        return $this;
    }

    /**
     * 
     * @return MediaName
     */
    public function getMediaName()
    {
        return $this->mediaName->getValue();
    }

    /**
     * 
     */
    public function setCodecName($codecName = null)
    {
        if (!$codecName) return $this;
        $this->codecName = ($codecName InstanceOf CodecName)
             ? $codecName
             : new CodecName($codecName);
        $this->codecName->setName('codecName');
        return $this;
    }

    /**
     * 
     * @return CodecName
     */
    public function getCodecName()
    {
        return $this->codecName->getValue();
    }

    /**
     * 
     */
    public function setMediaType($mediaType = null)
    {
        if (!$mediaType) return $this;
        $this->mediaType = ($mediaType InstanceOf MediaType)
             ? $mediaType
             : new MediaType($mediaType);
        $this->mediaType->setName('mediaType');
        return $this;
    }

    /**
     * 
     * @return MediaType
     */
    public function getMediaType()
    {
        return $this->mediaType->getValue();
    }

    /**
     * 
     */
    public function setBandwidthEnforcementType($bandwidthEnforcementType = null)
    {
        if (!$bandwidthEnforcementType) return $this;
        $this->bandwidthEnforcementType = ($bandwidthEnforcementType InstanceOf MediaBandwidthEnforcementType)
             ? $bandwidthEnforcementType
             : new MediaBandwidthEnforcementType($bandwidthEnforcementType);
        $this->bandwidthEnforcementType->setName('bandwidthEnforcementType');
        return $this;
    }

    /**
     * 
     * @return MediaBandwidthEnforcementType
     */
    public function getBandwidthEnforcementType()
    {
        return $this->bandwidthEnforcementType->getValue();
    }

    /**
     * 
     */
    public function setMediaBandwidth($mediaBandwidth = null)
    {
        if (!$mediaBandwidth) return $this;
        $this->mediaBandwidth = ($mediaBandwidth InstanceOf MediaBandwidthBitsPerSecond)
             ? $mediaBandwidth
             : new MediaBandwidthBitsPerSecond($mediaBandwidth);
        $this->mediaBandwidth->setName('mediaBandwidth');
        return $this;
    }

    /**
     * 
     * @return MediaBandwidthBitsPerSecond
     */
    public function getMediaBandwidth()
    {
        return $this->mediaBandwidth->getValue();
    }
}
