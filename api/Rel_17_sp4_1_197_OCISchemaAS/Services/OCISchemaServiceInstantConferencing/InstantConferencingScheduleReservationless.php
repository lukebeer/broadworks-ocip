<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Reservationless conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleReservationless extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $endDate  = null;

    public function __construct(
         $endDate
    ) {
        $this->setEndDate($endDate);
    }

    public function setEndDate(xs:date $endDate = null)
    {
    }

    public function getEndDate()
    {
        return (!$this->endDate) ?: $this->endDate->value();
    }
}
