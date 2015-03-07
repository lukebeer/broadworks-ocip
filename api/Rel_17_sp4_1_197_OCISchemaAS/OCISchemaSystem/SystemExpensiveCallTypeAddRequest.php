<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaTreatmentFileName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add an alternate call indicator to the list of expensive alternate call indicators.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExpensiveCallTypeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $alternateCallIndicator  = null;
    protected $treatmentAudioFile      = null;

    public function __construct(
         $alternateCallIndicator,
         $treatmentAudioFile = null
    ) {
        $this->setAlternateCallIndicator($alternateCallIndicator);
        $this->setTreatmentAudioFile($treatmentAudioFile);
    }

    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        $this->alternateCallIndicator = ($alternateCallIndicator InstanceOf NetworkServerAlternateCallIndicator)
             ? $alternateCallIndicator
             : new NetworkServerAlternateCallIndicator($alternateCallIndicator);
    }

    public function getAlternateCallIndicator()
    {
        return (!$this->alternateCallIndicator) ?: $this->alternateCallIndicator->value();
    }

    public function setTreatmentAudioFile($treatmentAudioFile = null)
    {
        $this->treatmentAudioFile = ($treatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $treatmentAudioFile
             : new MediaTreatmentFileName($treatmentAudioFile);
    }

    public function getTreatmentAudioFile()
    {
        return (!$this->treatmentAudioFile) ?: $this->treatmentAudioFile->value();
    }
}
