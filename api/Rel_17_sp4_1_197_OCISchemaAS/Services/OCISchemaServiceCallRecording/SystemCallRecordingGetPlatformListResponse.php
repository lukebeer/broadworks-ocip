<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\CallRecordingPlatformName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemCallRecordingGetPlatformListRequest.
 *          Contains the default system Call Recording platform and a table with columns headings "Name", "Net Address", "Port", "Transport Type", "Media Stream", "Description" of Call Recording platforms.  The system default recording platform also appears in the table with the other platforms.
 */
class SystemCallRecordingGetPlatformListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording\SystemCallRecordingGetPlatformListResponse';
    public    $name                       = __CLASS__;
    protected $systemDefault              = null;
    protected $callRecordingPlatformTable = null;


    /**
     * Call Recording Platform Name.
     */
    public function setSystemDefault($systemDefault = null)
    {
        $this->systemDefault = ($systemDefault InstanceOf CallRecordingPlatformName)
             ? $systemDefault
             : new CallRecordingPlatformName($systemDefault);
    }

    /**
     * Call Recording Platform Name.
     */
    public function getSystemDefault()
    {
        return (!$this->systemDefault) ?: $this->systemDefault->getValue();
    }

    /**
     * 
     */
    public function setCallRecordingPlatformTable(core:OCITable $callRecordingPlatformTable = null)
    {
        $this->callRecordingPlatformTable = core:OCITable $callRecordingPlatformTable;
    }

    /**
     * 
     */
    public function getCallRecordingPlatformTable()
    {
        return (!$this->callRecordingPlatformTable) ?: $this->callRecordingPlatformTable->getValue();
    }
}
