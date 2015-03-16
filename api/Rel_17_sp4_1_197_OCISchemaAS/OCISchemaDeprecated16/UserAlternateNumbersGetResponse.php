<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\AlternateNumberEntry;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAlternateNumbersGetRequest.
 */
class UserAlternateNumbersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserAlternateNumbersGetResponse';
    protected $distinctiveRing;
    protected $alternateEntry01;
    protected $alternateEntry02;
    protected $alternateEntry03;
    protected $alternateEntry04;
    protected $alternateEntry05;
    protected $alternateEntry06;
    protected $alternateEntry07;
    protected $alternateEntry08;
    protected $alternateEntry09;
    protected $alternateEntry10;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserAlternateNumbersGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDistinctiveRing($distinctiveRing = null)
    {
        $this->distinctiveRing = new PrimitiveType($distinctiveRing);
        $this->distinctiveRing->setName('distinctiveRing');
        return $this;
    }

    /**
     * 
     * @return boolean $distinctiveRing
     */
    public function getDistinctiveRing()
    {
        return ($this->distinctiveRing) ? $this->distinctiveRing->getValue() : null;
    }

    /**
     * 
     */
    public function setAlternateEntry01(AlternateNumberEntry $alternateEntry01 = null)
    {
        $this->alternateEntry01 = ($alternateEntry01 InstanceOf AlternateNumberEntry)
             ? $alternateEntry01
             : new AlternateNumberEntry($alternateEntry01);
        $this->alternateEntry01->setName('alternateEntry01');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry01
     */
    public function getAlternateEntry01()
    {
        return $this->alternateEntry01;
    }

    /**
     * 
     */
    public function setAlternateEntry02(AlternateNumberEntry $alternateEntry02 = null)
    {
        $this->alternateEntry02 = ($alternateEntry02 InstanceOf AlternateNumberEntry)
             ? $alternateEntry02
             : new AlternateNumberEntry($alternateEntry02);
        $this->alternateEntry02->setName('alternateEntry02');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry02
     */
    public function getAlternateEntry02()
    {
        return $this->alternateEntry02;
    }

    /**
     * 
     */
    public function setAlternateEntry03(AlternateNumberEntry $alternateEntry03 = null)
    {
        $this->alternateEntry03 = ($alternateEntry03 InstanceOf AlternateNumberEntry)
             ? $alternateEntry03
             : new AlternateNumberEntry($alternateEntry03);
        $this->alternateEntry03->setName('alternateEntry03');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry03
     */
    public function getAlternateEntry03()
    {
        return $this->alternateEntry03;
    }

    /**
     * 
     */
    public function setAlternateEntry04(AlternateNumberEntry $alternateEntry04 = null)
    {
        $this->alternateEntry04 = ($alternateEntry04 InstanceOf AlternateNumberEntry)
             ? $alternateEntry04
             : new AlternateNumberEntry($alternateEntry04);
        $this->alternateEntry04->setName('alternateEntry04');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry04
     */
    public function getAlternateEntry04()
    {
        return $this->alternateEntry04;
    }

    /**
     * 
     */
    public function setAlternateEntry05(AlternateNumberEntry $alternateEntry05 = null)
    {
        $this->alternateEntry05 = ($alternateEntry05 InstanceOf AlternateNumberEntry)
             ? $alternateEntry05
             : new AlternateNumberEntry($alternateEntry05);
        $this->alternateEntry05->setName('alternateEntry05');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry05
     */
    public function getAlternateEntry05()
    {
        return $this->alternateEntry05;
    }

    /**
     * 
     */
    public function setAlternateEntry06(AlternateNumberEntry $alternateEntry06 = null)
    {
        $this->alternateEntry06 = ($alternateEntry06 InstanceOf AlternateNumberEntry)
             ? $alternateEntry06
             : new AlternateNumberEntry($alternateEntry06);
        $this->alternateEntry06->setName('alternateEntry06');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry06
     */
    public function getAlternateEntry06()
    {
        return $this->alternateEntry06;
    }

    /**
     * 
     */
    public function setAlternateEntry07(AlternateNumberEntry $alternateEntry07 = null)
    {
        $this->alternateEntry07 = ($alternateEntry07 InstanceOf AlternateNumberEntry)
             ? $alternateEntry07
             : new AlternateNumberEntry($alternateEntry07);
        $this->alternateEntry07->setName('alternateEntry07');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry07
     */
    public function getAlternateEntry07()
    {
        return $this->alternateEntry07;
    }

    /**
     * 
     */
    public function setAlternateEntry08(AlternateNumberEntry $alternateEntry08 = null)
    {
        $this->alternateEntry08 = ($alternateEntry08 InstanceOf AlternateNumberEntry)
             ? $alternateEntry08
             : new AlternateNumberEntry($alternateEntry08);
        $this->alternateEntry08->setName('alternateEntry08');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry08
     */
    public function getAlternateEntry08()
    {
        return $this->alternateEntry08;
    }

    /**
     * 
     */
    public function setAlternateEntry09(AlternateNumberEntry $alternateEntry09 = null)
    {
        $this->alternateEntry09 = ($alternateEntry09 InstanceOf AlternateNumberEntry)
             ? $alternateEntry09
             : new AlternateNumberEntry($alternateEntry09);
        $this->alternateEntry09->setName('alternateEntry09');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry09
     */
    public function getAlternateEntry09()
    {
        return $this->alternateEntry09;
    }

    /**
     * 
     */
    public function setAlternateEntry10(AlternateNumberEntry $alternateEntry10 = null)
    {
        $this->alternateEntry10 = ($alternateEntry10 InstanceOf AlternateNumberEntry)
             ? $alternateEntry10
             : new AlternateNumberEntry($alternateEntry10);
        $this->alternateEntry10->setName('alternateEntry10');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry $alternateEntry10
     */
    public function getAlternateEntry10()
    {
        return $this->alternateEntry10;
    }
}
