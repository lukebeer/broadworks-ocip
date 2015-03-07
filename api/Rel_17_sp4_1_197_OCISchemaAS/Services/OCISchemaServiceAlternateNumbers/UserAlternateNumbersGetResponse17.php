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
    public    $name              = __CLASS__;
    protected $distinctiveRing   = null;
    protected $alternateEntry01  = null;
    protected $alternateEntry02  = null;
    protected $alternateEntry03  = null;
    protected $alternateEntry04  = null;
    protected $alternateEntry05  = null;
    protected $alternateEntry06  = null;
    protected $alternateEntry07  = null;
    protected $alternateEntry08  = null;
    protected $alternateEntry09  = null;
    protected $alternateEntry10  = null;


    public function setDistinctiveRing(xs:boolean $distinctiveRing = null)
    {
    }

    public function getDistinctiveRing()
    {
        return (!$this->distinctiveRing) ?: $this->distinctiveRing->value();
    }

    public function setAlternateEntry01(AlternateNumberEntry17 $alternateEntry01 = null)
    {
    }

    public function getAlternateEntry01()
    {
        return (!$this->alternateEntry01) ?: $this->alternateEntry01->value();
    }

    public function setAlternateEntry02(AlternateNumberEntry17 $alternateEntry02 = null)
    {
    }

    public function getAlternateEntry02()
    {
        return (!$this->alternateEntry02) ?: $this->alternateEntry02->value();
    }

    public function setAlternateEntry03(AlternateNumberEntry17 $alternateEntry03 = null)
    {
    }

    public function getAlternateEntry03()
    {
        return (!$this->alternateEntry03) ?: $this->alternateEntry03->value();
    }

    public function setAlternateEntry04(AlternateNumberEntry17 $alternateEntry04 = null)
    {
    }

    public function getAlternateEntry04()
    {
        return (!$this->alternateEntry04) ?: $this->alternateEntry04->value();
    }

    public function setAlternateEntry05(AlternateNumberEntry17 $alternateEntry05 = null)
    {
    }

    public function getAlternateEntry05()
    {
        return (!$this->alternateEntry05) ?: $this->alternateEntry05->value();
    }

    public function setAlternateEntry06(AlternateNumberEntry17 $alternateEntry06 = null)
    {
    }

    public function getAlternateEntry06()
    {
        return (!$this->alternateEntry06) ?: $this->alternateEntry06->value();
    }

    public function setAlternateEntry07(AlternateNumberEntry17 $alternateEntry07 = null)
    {
    }

    public function getAlternateEntry07()
    {
        return (!$this->alternateEntry07) ?: $this->alternateEntry07->value();
    }

    public function setAlternateEntry08(AlternateNumberEntry17 $alternateEntry08 = null)
    {
    }

    public function getAlternateEntry08()
    {
        return (!$this->alternateEntry08) ?: $this->alternateEntry08->value();
    }

    public function setAlternateEntry09(AlternateNumberEntry17 $alternateEntry09 = null)
    {
    }

    public function getAlternateEntry09()
    {
        return (!$this->alternateEntry09) ?: $this->alternateEntry09->value();
    }

    public function setAlternateEntry10(AlternateNumberEntry17 $alternateEntry10 = null)
    {
    }

    public function getAlternateEntry10()
    {
        return (!$this->alternateEntry10) ?: $this->alternateEntry10->value();
    }
}
