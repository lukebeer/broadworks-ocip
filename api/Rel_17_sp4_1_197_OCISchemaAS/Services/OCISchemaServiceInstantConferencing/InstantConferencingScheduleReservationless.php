<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Reservationless conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleReservationless extends ComplexType implements ComplexInterface
{
    public    $name    = 'InstantConferencingScheduleReservationless';
    protected $endDate = null;

    public function __construct(
         $endDate
    ) {
        $this->setEndDate($endDate);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEndDate(xs:date $endDate = null)
    {
        if (!$endDate) return $this;
        $this->endDate->setName('endDate');
        return $this;
    }

    /**
     * 
     * @return xs:date $endDate
     */
    public function getEndDate()
    {
        return $this->endDate->getValue();
    }
}
