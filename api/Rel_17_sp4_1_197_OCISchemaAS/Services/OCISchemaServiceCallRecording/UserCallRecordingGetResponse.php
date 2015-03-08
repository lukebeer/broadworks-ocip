<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\RecordingOption;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCallRecordingGetRequest.
 *         The response contains the user's Call Recording option information.
 */
class UserCallRecordingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording\UserCallRecordingGetResponse';
    public    $name            = __CLASS__;
    protected $recordingOption = null;


    /**
     * Recording Service Configuration.
     */
    public function setRecordingOption($recordingOption = null)
    {
        $this->recordingOption = ($recordingOption InstanceOf RecordingOption)
             ? $recordingOption
             : new RecordingOption($recordingOption);
    }

    /**
     * Recording Service Configuration.
     */
    public function getRecordingOption()
    {
        return (!$this->recordingOption) ?: $this->recordingOption->getValue();
    }
}
