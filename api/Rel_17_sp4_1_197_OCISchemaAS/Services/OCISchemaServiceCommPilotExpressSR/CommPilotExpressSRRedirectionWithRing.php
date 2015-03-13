<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express SR Forward Number Entry with number of times to ring.
 */
class CommPilotExpressSRRedirectionWithRing extends ComplexType implements ComplexInterface
{
    public    $name                = 'CommPilotExpressSRRedirectionWithRing';
    protected $phoneNumber         = null;
    protected $numberOfTimesToRing = null;

    public function __construct(
         $phoneNumber = null,
         $numberOfTimesToRing
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setNumberOfTimesToRing($numberOfTimesToRing);
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
    public function setNumberOfTimesToRing($numberOfTimesToRing = null)
    {
        if (!$numberOfTimesToRing) return $this;
        $this->numberOfTimesToRing = new SimpleContent($numberOfTimesToRing);
        $this->numberOfTimesToRing->setName('numberOfTimesToRing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfTimesToRing
     */
    public function getNumberOfTimesToRing()
    {
        return $this->numberOfTimesToRing->getValue();
    }
}
