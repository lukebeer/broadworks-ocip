<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\AlternateNumberEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserAlternateNumbersGetRequest.
 */
class UserAlternateNumbersGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserAlternateNumbersGetResponse';
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
    public function setAlternateEntry01(AlternateNumberEntry $alternateEntry01 = null)
    {
        $this->alternateEntry01 = AlternateNumberEntry $alternateEntry01;
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
    public function setAlternateEntry02(AlternateNumberEntry $alternateEntry02 = null)
    {
        $this->alternateEntry02 = AlternateNumberEntry $alternateEntry02;
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
    public function setAlternateEntry03(AlternateNumberEntry $alternateEntry03 = null)
    {
        $this->alternateEntry03 = AlternateNumberEntry $alternateEntry03;
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
    public function setAlternateEntry04(AlternateNumberEntry $alternateEntry04 = null)
    {
        $this->alternateEntry04 = AlternateNumberEntry $alternateEntry04;
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
    public function setAlternateEntry05(AlternateNumberEntry $alternateEntry05 = null)
    {
        $this->alternateEntry05 = AlternateNumberEntry $alternateEntry05;
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
    public function setAlternateEntry06(AlternateNumberEntry $alternateEntry06 = null)
    {
        $this->alternateEntry06 = AlternateNumberEntry $alternateEntry06;
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
    public function setAlternateEntry07(AlternateNumberEntry $alternateEntry07 = null)
    {
        $this->alternateEntry07 = AlternateNumberEntry $alternateEntry07;
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
    public function setAlternateEntry08(AlternateNumberEntry $alternateEntry08 = null)
    {
        $this->alternateEntry08 = AlternateNumberEntry $alternateEntry08;
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
    public function setAlternateEntry09(AlternateNumberEntry $alternateEntry09 = null)
    {
        $this->alternateEntry09 = AlternateNumberEntry $alternateEntry09;
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
    public function setAlternateEntry10(AlternateNumberEntry $alternateEntry10 = null)
    {
        $this->alternateEntry10 = AlternateNumberEntry $alternateEntry10;
    }

    /**
     * Alternate Number Entry.
     */
    public function getAlternateEntry10()
    {
        return (!$this->alternateEntry10) ?: $this->alternateEntry10->getValue();
    }
}