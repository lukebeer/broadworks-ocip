<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Outgoing Calling Plan transfer numbers.
 */
class OutgoingCallingPlanTransferNumbersModify extends ComplexType implements ComplexInterface
{
    public    $name          = 'OutgoingCallingPlanTransferNumbersModify';
    protected $phoneNumber01 = null;
    protected $phoneNumber02 = null;
    protected $phoneNumber03 = null;

    public function __construct(
         $phoneNumber01 = null,
         $phoneNumber02 = null,
         $phoneNumber03 = null
    ) {
        $this->setPhoneNumber01($phoneNumber01);
        $this->setPhoneNumber02($phoneNumber02);
        $this->setPhoneNumber03($phoneNumber03);
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
    public function setPhoneNumber01($phoneNumber01 = null)
    {
        if (!$phoneNumber01) return $this;
        $this->phoneNumber01 = new SimpleContent($phoneNumber01);
        $this->phoneNumber01->setName('phoneNumber01');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber01
     */
    public function getPhoneNumber01()
    {
        return $this->phoneNumber01->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber02($phoneNumber02 = null)
    {
        if (!$phoneNumber02) return $this;
        $this->phoneNumber02 = new SimpleContent($phoneNumber02);
        $this->phoneNumber02->setName('phoneNumber02');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber02
     */
    public function getPhoneNumber02()
    {
        return $this->phoneNumber02->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber03($phoneNumber03 = null)
    {
        if (!$phoneNumber03) return $this;
        $this->phoneNumber03 = new SimpleContent($phoneNumber03);
        $this->phoneNumber03->setName('phoneNumber03');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber03
     */
    public function getPhoneNumber03()
    {
        return $this->phoneNumber03->getValue();
    }
}
