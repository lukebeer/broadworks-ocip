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
    public    $elementName = 'CommPilotExpressSRRedirectionWithRing';
    protected $phoneNumber;
    protected $numberOfTimesToRing;

    public function __construct(
         $phoneNumber = null,
         $numberOfTimesToRing = ''
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
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfTimesToRing($numberOfTimesToRing = null)
    {
        $this->numberOfTimesToRing = new SimpleContent($numberOfTimesToRing);
        $this->numberOfTimesToRing->setElementName('numberOfTimesToRing');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfTimesToRing
     */
    public function getNumberOfTimesToRing()
    {
        return ($this->numberOfTimesToRing)
            ? $this->numberOfTimesToRing->getElementValue()
            : null;
    }
}
