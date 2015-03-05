<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallRecordingPlatformName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallRecordingGetPlatformListRequest.
 *          Contains the default system Call Recording platform and a table with columns headings "Name", "Net Address", "Port", "Transport Type", "Media Stream", "Description" of Call Recording platforms.  The system default recording platform also appears in the table with the other platforms.
 */
class SystemCallRecordingGetPlatformListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $systemDefault=null,
             $callRecordingPlatformTable
    ) {
        $this->systemDefault              = $systemDefault;
        $this->callRecordingPlatformTable = $callRecordingPlatformTable;
        $this->args                       = func_get_args();
    }

    public function setSystemDefault($systemDefault)
    {
        $systemDefault and $this->systemDefault = new CallRecordingPlatformName($systemDefault);
    }

    public function getSystemDefault()
    {
        return (!$this->systemDefault) ?: $this->systemDefault->value();
    }

    public function setCallRecordingPlatformTable($callRecordingPlatformTable)
    {
        $callRecordingPlatformTable and $this->callRecordingPlatformTable = new core:OCITable($callRecordingPlatformTable);
    }

    public function getCallRecordingPlatformTable()
    {
        return (!$this->callRecordingPlatformTable) ?: $this->callRecordingPlatformTable->value();
    }
}
