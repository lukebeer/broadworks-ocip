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
     * Delete a Call Recording platform.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallRecordingDeletePlatformRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;
    protected $name = null;

    public function __construct(
         $name
    ) {
        $this->setName($name);
    }

    /**
     * Call Recording Platform Name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallRecordingPlatformName)
             ? $name
             : new CallRecordingPlatformName($name);
    }

    /**
     * Call Recording Platform Name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }
}