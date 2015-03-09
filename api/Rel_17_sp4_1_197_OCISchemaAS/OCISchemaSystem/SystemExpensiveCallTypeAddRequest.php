<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaTreatmentFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemExpensiveCallTypeAddResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an alternate call indicator to the list of expensive alternate call indicators.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExpensiveCallTypeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $alternateCallIndicator = null;
    protected $treatmentAudioFile     = null;

    public function __construct(
         $alternateCallIndicator,
         $treatmentAudioFile = null
    ) {
        $this->setAlternateCallIndicator($alternateCallIndicator);
        $this->setTreatmentAudioFile($treatmentAudioFile);
    }

    /**
     * @return SystemExpensiveCallTypeAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Network Server Alternate Call Indicator.
     */
    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        $this->alternateCallIndicator = ($alternateCallIndicator InstanceOf NetworkServerAlternateCallIndicator)
             ? $alternateCallIndicator
             : new NetworkServerAlternateCallIndicator($alternateCallIndicator);
    }

    /**
     * Network Server Alternate Call Indicator.
     */
    public function getAlternateCallIndicator()
    {
        return (!$this->alternateCallIndicator) ?: $this->alternateCallIndicator->getValue();
    }

    /**
     * Audio or video treatment file name.
     */
    public function setTreatmentAudioFile($treatmentAudioFile = null)
    {
        $this->treatmentAudioFile = ($treatmentAudioFile InstanceOf MediaTreatmentFileName)
             ? $treatmentAudioFile
             : new MediaTreatmentFileName($treatmentAudioFile);
    }

    /**
     * Audio or video treatment file name.
     */
    public function getTreatmentAudioFile()
    {
        return (!$this->treatmentAudioFile) ?: $this->treatmentAudioFile->getValue();
    }
}
