<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Get list of Call Recording platforms.
 *         The response is either SystemCallRecordingGetPlatformListResponse or ErrorResponse.
 */
class SystemCallRecordingGetPlatformListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallRecording\SystemCallRecordingGetPlatformListResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
