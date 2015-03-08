<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAlternateNumbers; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\AlternateNumberEntry17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserAlternateNumbersGetRequest17.
 */
class UserAlternateNumbersGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
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
     * 
     */
    public function setDistinctiveRing($distinctiveRing = null)
    {
        $this->distinctiveRing = (boolean) $distinctiveRing;
    }

    /**
     * 
     */
    public function getDistinctiveRing()
    {
        return (!$this->distinctiveRing) ?: $this->distinctiveRing->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry01(AlternateNumberEntry17 $alternateEntry01 = null)
    {
        $this->alternateEntry01 =  $alternateEntry01;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry01()
    {
        return (!$this->alternateEntry01) ?: $this->alternateEntry01->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry02(AlternateNumberEntry17 $alternateEntry02 = null)
    {
        $this->alternateEntry02 =  $alternateEntry02;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry02()
    {
        return (!$this->alternateEntry02) ?: $this->alternateEntry02->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry03(AlternateNumberEntry17 $alternateEntry03 = null)
    {
        $this->alternateEntry03 =  $alternateEntry03;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry03()
    {
        return (!$this->alternateEntry03) ?: $this->alternateEntry03->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry04(AlternateNumberEntry17 $alternateEntry04 = null)
    {
        $this->alternateEntry04 =  $alternateEntry04;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry04()
    {
        return (!$this->alternateEntry04) ?: $this->alternateEntry04->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry05(AlternateNumberEntry17 $alternateEntry05 = null)
    {
        $this->alternateEntry05 =  $alternateEntry05;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry05()
    {
        return (!$this->alternateEntry05) ?: $this->alternateEntry05->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry06(AlternateNumberEntry17 $alternateEntry06 = null)
    {
        $this->alternateEntry06 =  $alternateEntry06;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry06()
    {
        return (!$this->alternateEntry06) ?: $this->alternateEntry06->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry07(AlternateNumberEntry17 $alternateEntry07 = null)
    {
        $this->alternateEntry07 =  $alternateEntry07;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry07()
    {
        return (!$this->alternateEntry07) ?: $this->alternateEntry07->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry08(AlternateNumberEntry17 $alternateEntry08 = null)
    {
        $this->alternateEntry08 =  $alternateEntry08;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry08()
    {
        return (!$this->alternateEntry08) ?: $this->alternateEntry08->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry09(AlternateNumberEntry17 $alternateEntry09 = null)
    {
        $this->alternateEntry09 =  $alternateEntry09;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry09()
    {
        return (!$this->alternateEntry09) ?: $this->alternateEntry09->getValue();
    }

    /**
     * Alternate Number Entry.
     */
    public function setAlternateEntry10(AlternateNumberEntry17 $alternateEntry10 = null)
    {
        $this->alternateEntry10 =  $alternateEntry10;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry10()
    {
        return (!$this->alternateEntry10) ?: $this->alternateEntry10->getValue();
    }
}
