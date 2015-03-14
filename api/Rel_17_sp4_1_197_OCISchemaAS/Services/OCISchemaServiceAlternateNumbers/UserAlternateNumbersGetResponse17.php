<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\AlternateNumberEntry17;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAlternateNumbersGetRequest17.
 */
class UserAlternateNumbersGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name             = 'UserAlternateNumbersGetResponse17';
    protected $distinctiveRing  = null;
    protected $alternateEntry01 = null;
    protected $alternateEntry02 = null;
    protected $alternateEntry03 = null;
    protected $alternateEntry04 = null;
    protected $alternateEntry05 = null;
    protected $alternateEntry06 = null;
    protected $alternateEntry07 = null;
    protected $alternateEntry08 = null;
    protected $alternateEntry09 = null;
    protected $alternateEntry10 = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\UserAlternateNumbersGetResponse17 $response
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
        if (!$distinctiveRing) return $this;
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
        return $this->distinctiveRing->getValue();
    }

    /**
     * 
     */
    public function setAlternateEntry01(AlternateNumberEntry17 $alternateEntry01 = null)
    {
        if (!$alternateEntry01) return $this;
        $this->alternateEntry01 = $alternateEntry01;
        $this->alternateEntry01->setName('alternateEntry01');
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
        if (!$alternateEntry02) return $this;
        $this->alternateEntry02 = $alternateEntry02;
        $this->alternateEntry02->setName('alternateEntry02');
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
        if (!$alternateEntry03) return $this;
        $this->alternateEntry03 = $alternateEntry03;
        $this->alternateEntry03->setName('alternateEntry03');
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
        if (!$alternateEntry04) return $this;
        $this->alternateEntry04 = $alternateEntry04;
        $this->alternateEntry04->setName('alternateEntry04');
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
        if (!$alternateEntry05) return $this;
        $this->alternateEntry05 = $alternateEntry05;
        $this->alternateEntry05->setName('alternateEntry05');
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
        if (!$alternateEntry06) return $this;
        $this->alternateEntry06 = $alternateEntry06;
        $this->alternateEntry06->setName('alternateEntry06');
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
        if (!$alternateEntry07) return $this;
        $this->alternateEntry07 = $alternateEntry07;
        $this->alternateEntry07->setName('alternateEntry07');
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
        if (!$alternateEntry08) return $this;
        $this->alternateEntry08 = $alternateEntry08;
        $this->alternateEntry08->setName('alternateEntry08');
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
        if (!$alternateEntry09) return $this;
        $this->alternateEntry09 = $alternateEntry09;
        $this->alternateEntry09->setName('alternateEntry09');
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
        if (!$alternateEntry10) return $this;
        $this->alternateEntry10 = $alternateEntry10;
        $this->alternateEntry10->setName('alternateEntry10');
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
