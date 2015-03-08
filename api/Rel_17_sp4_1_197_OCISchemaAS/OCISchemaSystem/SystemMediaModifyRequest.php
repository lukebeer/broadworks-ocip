<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaBandwidthEnforcementType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaBandwidthBitsPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CodecName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a media.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $mediaName                = null;
    protected $codecName                = null;
    protected $bandwidthEnforcementType = null;
    protected $mediaBandwidth           = null;

    public function __construct(
         $mediaName,
         $codecName = null,
         $bandwidthEnforcementType = null,
         $mediaBandwidth = null
    ) {
        $this->setMediaName($mediaName);
        $this->setCodecName($codecName);
        $this->setBandwidthEnforcementType($bandwidthEnforcementType);
        $this->setMediaBandwidth($mediaBandwidth);
    }

    /**
     * Media name
     */
    public function setMediaName($mediaName = null)
    {
        $this->mediaName = ($mediaName InstanceOf MediaName)
             ? $mediaName
             : new MediaName($mediaName);
    }

    /**
     * Media name
     */
    public function getMediaName()
    {
        return (!$this->mediaName) ?: $this->mediaName->getValue();
    }

    /**
     * Codec name
     */
    public function setCodecName($codecName = null)
    {
        $this->codecName = ($codecName InstanceOf CodecName)
             ? $codecName
             : new CodecName($codecName);
    }

    /**
     * Codec name
     */
    public function getCodecName()
    {
        return (!$this->codecName) ?: $this->codecName->getValue();
    }

    /**
     * Types of bandwidth enforcement.
     */
    public function setBandwidthEnforcementType($bandwidthEnforcementType = null)
    {
        $this->bandwidthEnforcementType = ($bandwidthEnforcementType InstanceOf MediaBandwidthEnforcementType)
             ? $bandwidthEnforcementType
             : new MediaBandwidthEnforcementType($bandwidthEnforcementType);
    }

    /**
     * Types of bandwidth enforcement.
     */
    public function getBandwidthEnforcementType()
    {
        return (!$this->bandwidthEnforcementType) ?: $this->bandwidthEnforcementType->getValue();
    }

    /**
     * Bandwidth for a Media.
     */
    public function setMediaBandwidth($mediaBandwidth = null)
    {
        $this->mediaBandwidth = ($mediaBandwidth InstanceOf MediaBandwidthBitsPerSecond)
             ? $mediaBandwidth
             : new MediaBandwidthBitsPerSecond($mediaBandwidth);
    }

    /**
     * Bandwidth for a Media.
     */
    public function getMediaBandwidth()
    {
        return (!$this->mediaBandwidth) ?: $this->mediaBandwidth->getValue();
    }
}
