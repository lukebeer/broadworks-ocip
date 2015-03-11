<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection\SelectiveCallRejectionCriteriaCallTypeModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a criteria for the user's selective call rejection service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSelectiveCallRejectionModifyCriteriaRequest16 extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserSelectiveCallRejectionModifyCriteriaRequest16';
    protected $userId          = null;
    protected $criteriaName    = null;
    protected $newCriteriaName = null;
    protected $timeSchedule    = null;
    protected $fromDnCriteria  = null;
    protected $holidaySchedule = null;
    protected $blacklisted     = null;

    public function __construct(
         $userId,
         $criteriaName,
         $newCriteriaName = null,
         TimeSchedule $timeSchedule = null,
         SelectiveCallRejectionCriteriaCallTypeModify $fromDnCriteria = null,
         HolidaySchedule $holidaySchedule = null,
         $blacklisted = null
    ) {
        $this->setUserId($userId);
        $this->setCriteriaName($criteriaName);
        $this->setNewCriteriaName($newCriteriaName);
        $this->setTimeSchedule($timeSchedule);
        $this->setFromDnCriteria($fromDnCriteria);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setBlacklisted($blacklisted);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setCriteriaName($criteriaName = null)
    {
        if (!$criteriaName) return $this;
        $this->criteriaName = ($criteriaName InstanceOf CriteriaName)
             ? $criteriaName
             : new CriteriaName($criteriaName);
        $this->criteriaName->setName('criteriaName');
        return $this;
    }

    /**
     * 
     * @return CriteriaName
     */
    public function getCriteriaName()
    {
        return $this->criteriaName->getValue();
    }

    /**
     * 
     */
    public function setNewCriteriaName($newCriteriaName = null)
    {
        if (!$newCriteriaName) return $this;
        $this->newCriteriaName = ($newCriteriaName InstanceOf CriteriaName)
             ? $newCriteriaName
             : new CriteriaName($newCriteriaName);
        $this->newCriteriaName->setName('newCriteriaName');
        return $this;
    }

    /**
     * 
     * @return CriteriaName
     */
    public function getNewCriteriaName()
    {
        return $this->newCriteriaName->getValue();
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        if (!$timeSchedule) return $this;
        $this->timeSchedule = $timeSchedule;
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * 
     */
    public function setFromDnCriteria(SelectiveCallRejectionCriteriaCallTypeModify $fromDnCriteria = null)
    {
        if (!$fromDnCriteria) return $this;
        $this->fromDnCriteria = $fromDnCriteria;
        $this->fromDnCriteria->setName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return SelectiveCallRejectionCriteriaCallTypeModify
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }

    /**
     * 
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        if (!$holidaySchedule) return $this;
        $this->holidaySchedule = $holidaySchedule;
        $this->holidaySchedule->setName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * 
     */
    public function setBlacklisted($blacklisted = null)
    {
        if (!$blacklisted) return $this;
        $this->blacklisted = new PrimitiveType($blacklisted);
        $this->blacklisted->setName('blacklisted');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getBlacklisted()
    {
        return $this->blacklisted->getValue();
    }
}
