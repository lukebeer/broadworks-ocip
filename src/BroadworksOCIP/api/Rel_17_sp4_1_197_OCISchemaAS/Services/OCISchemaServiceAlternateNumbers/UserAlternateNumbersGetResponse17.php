<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\AlternateNumberEntry17;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserAlternateNumbersGetRequest17.
 */
class UserAlternateNumbersGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAlternateNumbersGetResponse17';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\UserAlternateNumbersGetResponse17 $response
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
        $this->distinctiveRing->setElementName('distinctiveRing');
        return $this;
    }

    /**
     * 
     * @return boolean $distinctiveRing
     */
    public function getDistinctiveRing()
    {
        return ($this->distinctiveRing)
            ? $this->distinctiveRing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlternateEntry01(AlternateNumberEntry17 $alternateEntry01 = null)
    {
        $this->alternateEntry01 = ($alternateEntry01 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry01
             : new AlternateNumberEntry17($alternateEntry01);
        $this->alternateEntry01->setElementName('alternateEntry01');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry01
     */
    public function getAlternateEntry01()
    {
        return $this->alternateEntry01;
    }

    /**
     * 
     */
    public function setAlternateEntry02(AlternateNumberEntry17 $alternateEntry02 = null)
    {
        $this->alternateEntry02 = ($alternateEntry02 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry02
             : new AlternateNumberEntry17($alternateEntry02);
        $this->alternateEntry02->setElementName('alternateEntry02');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry02
     */
    public function getAlternateEntry02()
    {
        return $this->alternateEntry02;
    }

    /**
     * 
     */
    public function setAlternateEntry03(AlternateNumberEntry17 $alternateEntry03 = null)
    {
        $this->alternateEntry03 = ($alternateEntry03 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry03
             : new AlternateNumberEntry17($alternateEntry03);
        $this->alternateEntry03->setElementName('alternateEntry03');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry03
     */
    public function getAlternateEntry03()
    {
        return $this->alternateEntry03;
    }

    /**
     * 
     */
    public function setAlternateEntry04(AlternateNumberEntry17 $alternateEntry04 = null)
    {
        $this->alternateEntry04 = ($alternateEntry04 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry04
             : new AlternateNumberEntry17($alternateEntry04);
        $this->alternateEntry04->setElementName('alternateEntry04');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry04
     */
    public function getAlternateEntry04()
    {
        return $this->alternateEntry04;
    }

    /**
     * 
     */
    public function setAlternateEntry05(AlternateNumberEntry17 $alternateEntry05 = null)
    {
        $this->alternateEntry05 = ($alternateEntry05 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry05
             : new AlternateNumberEntry17($alternateEntry05);
        $this->alternateEntry05->setElementName('alternateEntry05');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry05
     */
    public function getAlternateEntry05()
    {
        return $this->alternateEntry05;
    }

    /**
     * 
     */
    public function setAlternateEntry06(AlternateNumberEntry17 $alternateEntry06 = null)
    {
        $this->alternateEntry06 = ($alternateEntry06 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry06
             : new AlternateNumberEntry17($alternateEntry06);
        $this->alternateEntry06->setElementName('alternateEntry06');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry06
     */
    public function getAlternateEntry06()
    {
        return $this->alternateEntry06;
    }

    /**
     * 
     */
    public function setAlternateEntry07(AlternateNumberEntry17 $alternateEntry07 = null)
    {
        $this->alternateEntry07 = ($alternateEntry07 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry07
             : new AlternateNumberEntry17($alternateEntry07);
        $this->alternateEntry07->setElementName('alternateEntry07');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry07
     */
    public function getAlternateEntry07()
    {
        return $this->alternateEntry07;
    }

    /**
     * 
     */
    public function setAlternateEntry08(AlternateNumberEntry17 $alternateEntry08 = null)
    {
        $this->alternateEntry08 = ($alternateEntry08 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry08
             : new AlternateNumberEntry17($alternateEntry08);
        $this->alternateEntry08->setElementName('alternateEntry08');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry08
     */
    public function getAlternateEntry08()
    {
        return $this->alternateEntry08;
    }

    /**
     * 
     */
    public function setAlternateEntry09(AlternateNumberEntry17 $alternateEntry09 = null)
    {
        $this->alternateEntry09 = ($alternateEntry09 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry09
             : new AlternateNumberEntry17($alternateEntry09);
        $this->alternateEntry09->setElementName('alternateEntry09');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry09
     */
    public function getAlternateEntry09()
    {
        return $this->alternateEntry09;
    }

    /**
     * 
     */
    public function setAlternateEntry10(AlternateNumberEntry17 $alternateEntry10 = null)
    {
        $this->alternateEntry10 = ($alternateEntry10 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry10
             : new AlternateNumberEntry17($alternateEntry10);
        $this->alternateEntry10->setElementName('alternateEntry10');
        return $this;
    }

    /**
     * 
     * @return AlternateNumberEntry17 $alternateEntry10
     */
    public function getAlternateEntry10()
    {
        return $this->alternateEntry10;
    }
}
