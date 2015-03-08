<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCallNotifyGetCriteriaRequest.
 */
class UserCallNotifyGetCriteriaResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserCallNotifyGetCriteriaResponse';
    public    $name           = __CLASS__;
    protected $timeSchedule   = null;
    protected $fromDnCriteria = null;


    /**
     * The from dn criteria.
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = TimeSchedule $timeSchedule;
    }

    /**
     * The from dn criteria.
     */
    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->getValue();
    }

    /**
     * The from dn criteria used within an add/get request.
     */
    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
        $this->fromDnCriteria = CriteriaFromDn $fromDnCriteria;
    }

    /**
     * The from dn criteria used within an add/get request.
     */
    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->getValue();
    }
}
