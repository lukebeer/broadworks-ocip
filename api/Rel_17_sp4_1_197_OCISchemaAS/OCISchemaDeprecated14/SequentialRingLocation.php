<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Sequential Ring Location.
 *         Replaced By: SequentialRingLocation14sp4
 */
class SequentialRingLocation extends ComplexType implements ComplexInterface
{
    public    $name          = 'SequentialRingLocation';
    protected $phoneNumber   = null;
    protected $numberOfRings = null;

    public function __construct(
         $phoneNumber = null,
         $numberOfRings
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setNumberOfRings($numberOfRings);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setNumberOfRings($numberOfRings = null)
    {
        if (!$numberOfRings) return $this;
        $this->numberOfRings = new SimpleContent($numberOfRings);
        $this->numberOfRings->setName('numberOfRings');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfRings
     */
    public function getNumberOfRings()
    {
        return $this->numberOfRings->getValue();
    }
}
