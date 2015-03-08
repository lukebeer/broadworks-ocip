<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete a system holiday schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemHolidayScheduleDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $holidayScheduleName = null;

    public function __construct(
         $holidayScheduleName
    ) {
        $this->setHolidayScheduleName($holidayScheduleName);
    }

    /**
     * Schedule name.
     */
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
    }

    /**
     * Schedule name.
     */
    public function getHolidayScheduleName()
    {
        return (!$this->holidayScheduleName) ?: $this->holidayScheduleName->getValue();
    }
}
