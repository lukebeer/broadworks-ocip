<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection\SelectiveCallRejectionCriteriaCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSelectiveCallRejectionGetCriteriaRequest16sp1.
 *         Private Phone Numbers are omitted from the fromDnCriteria.
 */
class UserSelectiveCallRejectionGetCriteriaResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSelectiveCallRejectionGetCriteriaResponse16sp1';
    protected $timeSchedule;
    protected $fromDnCriteria;
    protected $blacklisted;
    protected $holidaySchedule;
    protected $private;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection\UserSelectiveCallRejectionGetCriteriaResponse16sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf TimeSchedule)
             ? $timeSchedule
             : new TimeSchedule($timeSchedule);
        $this->timeSchedule->setElementName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $timeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * 
     */
    public function setFromDnCriteria(SelectiveCallRejectionCriteriaCallType $fromDnCriteria = null)
    {
        $this->fromDnCriteria = ($fromDnCriteria InstanceOf SelectiveCallRejectionCriteriaCallType)
             ? $fromDnCriteria
             : new SelectiveCallRejectionCriteriaCallType($fromDnCriteria);
        $this->fromDnCriteria->setElementName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return SelectiveCallRejectionCriteriaCallType $fromDnCriteria
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * 
     */
    public function setBlacklisted($blacklisted = null)
    {
        $this->blacklisted = new PrimitiveType($blacklisted);
        $this->blacklisted->setElementName('blacklisted');
        return $this;
    }

    /**
     * 
     * @return boolean $blacklisted
     */
    public function getBlacklisted()
    {
        return ($this->blacklisted)
            ? $this->blacklisted->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        $this->holidaySchedule = ($holidaySchedule InstanceOf HolidaySchedule)
             ? $holidaySchedule
             : new HolidaySchedule($holidaySchedule);
        $this->holidaySchedule->setElementName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule $holidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * 
     */
    public function setPrivate($private = null)
    {
        $this->private = new PrimitiveType($private);
        $this->private->setElementName('private');
        return $this;
    }

    /**
     * 
     * @return boolean $private
     */
    public function getPrivate()
    {
        return ($this->private)
            ? $this->private->getElementValue()
            : null;
    }
}
