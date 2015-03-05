<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CodecName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaBandwidthEnforcementType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaBandwidthBitsPerSecond;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a media.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mediaName,
             $codecName=null,
             $bandwidthEnforcementType=null,
             $mediaBandwidth=null
    ) {
        $this->mediaName                = $mediaName;
        $this->codecName                = $codecName;
        $this->bandwidthEnforcementType = $bandwidthEnforcementType;
        $this->mediaBandwidth           = $mediaBandwidth;
        $this->args                     = func_get_args();
    }

    public function setMediaName($mediaName)
    {
        $mediaName and $this->mediaName = new MediaName($mediaName);
    }

    public function getMediaName()
    {
        return (!$this->mediaName) ?: $this->mediaName->value();
    }

    public function setCodecName($codecName)
    {
        $codecName and $this->codecName = new CodecName($codecName);
    }

    public function getCodecName()
    {
        return (!$this->codecName) ?: $this->codecName->value();
    }

    public function setBandwidthEnforcementType($bandwidthEnforcementType)
    {
        $bandwidthEnforcementType and $this->bandwidthEnforcementType = new MediaBandwidthEnforcementType($bandwidthEnforcementType);
    }

    public function getBandwidthEnforcementType()
    {
        return (!$this->bandwidthEnforcementType) ?: $this->bandwidthEnforcementType->value();
    }

    public function setMediaBandwidth($mediaBandwidth)
    {
        $mediaBandwidth and $this->mediaBandwidth = new MediaBandwidthBitsPerSecond($mediaBandwidth);
    }

    public function getMediaBandwidth()
    {
        return (!$this->mediaBandwidth) ?: $this->mediaBandwidth->value();
    }
}
