<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAlternateNumbers; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AlternateNumberEntry17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Alternate Numbers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAlternateNumbersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $distinctiveRing=null,
             $alternateEntry01=null,
             $alternateEntry02=null,
             $alternateEntry03=null,
             $alternateEntry04=null,
             $alternateEntry05=null,
             $alternateEntry06=null,
             $alternateEntry07=null,
             $alternateEntry08=null,
             $alternateEntry09=null,
             $alternateEntry10=null
    ) {
        $this->userId           = new UserId($userId);
        $this->distinctiveRing  = $distinctiveRing;
        $this->alternateEntry01 = $alternateEntry01;
        $this->alternateEntry02 = $alternateEntry02;
        $this->alternateEntry03 = $alternateEntry03;
        $this->alternateEntry04 = $alternateEntry04;
        $this->alternateEntry05 = $alternateEntry05;
        $this->alternateEntry06 = $alternateEntry06;
        $this->alternateEntry07 = $alternateEntry07;
        $this->alternateEntry08 = $alternateEntry08;
        $this->alternateEntry09 = $alternateEntry09;
        $this->alternateEntry10 = $alternateEntry10;
        $this->args             = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setDistinctiveRing($distinctiveRing)
    {
        $distinctiveRing and $this->distinctiveRing = new xs:boolean($distinctiveRing);
    }

    public function getDistinctiveRing()
    {
        return (!$this->distinctiveRing) ?: $this->distinctiveRing->value();
    }

    public function setAlternateEntry01($alternateEntry01)
    {
        $alternateEntry01 and $this->alternateEntry01 = new AlternateNumberEntry17($alternateEntry01);
    }

    public function getAlternateEntry01()
    {
        return (!$this->alternateEntry01) ?: $this->alternateEntry01->value();
    }

    public function setAlternateEntry02($alternateEntry02)
    {
        $alternateEntry02 and $this->alternateEntry02 = new AlternateNumberEntry17($alternateEntry02);
    }

    public function getAlternateEntry02()
    {
        return (!$this->alternateEntry02) ?: $this->alternateEntry02->value();
    }

    public function setAlternateEntry03($alternateEntry03)
    {
        $alternateEntry03 and $this->alternateEntry03 = new AlternateNumberEntry17($alternateEntry03);
    }

    public function getAlternateEntry03()
    {
        return (!$this->alternateEntry03) ?: $this->alternateEntry03->value();
    }

    public function setAlternateEntry04($alternateEntry04)
    {
        $alternateEntry04 and $this->alternateEntry04 = new AlternateNumberEntry17($alternateEntry04);
    }

    public function getAlternateEntry04()
    {
        return (!$this->alternateEntry04) ?: $this->alternateEntry04->value();
    }

    public function setAlternateEntry05($alternateEntry05)
    {
        $alternateEntry05 and $this->alternateEntry05 = new AlternateNumberEntry17($alternateEntry05);
    }

    public function getAlternateEntry05()
    {
        return (!$this->alternateEntry05) ?: $this->alternateEntry05->value();
    }

    public function setAlternateEntry06($alternateEntry06)
    {
        $alternateEntry06 and $this->alternateEntry06 = new AlternateNumberEntry17($alternateEntry06);
    }

    public function getAlternateEntry06()
    {
        return (!$this->alternateEntry06) ?: $this->alternateEntry06->value();
    }

    public function setAlternateEntry07($alternateEntry07)
    {
        $alternateEntry07 and $this->alternateEntry07 = new AlternateNumberEntry17($alternateEntry07);
    }

    public function getAlternateEntry07()
    {
        return (!$this->alternateEntry07) ?: $this->alternateEntry07->value();
    }

    public function setAlternateEntry08($alternateEntry08)
    {
        $alternateEntry08 and $this->alternateEntry08 = new AlternateNumberEntry17($alternateEntry08);
    }

    public function getAlternateEntry08()
    {
        return (!$this->alternateEntry08) ?: $this->alternateEntry08->value();
    }

    public function setAlternateEntry09($alternateEntry09)
    {
        $alternateEntry09 and $this->alternateEntry09 = new AlternateNumberEntry17($alternateEntry09);
    }

    public function getAlternateEntry09()
    {
        return (!$this->alternateEntry09) ?: $this->alternateEntry09->value();
    }

    public function setAlternateEntry10($alternateEntry10)
    {
        $alternateEntry10 and $this->alternateEntry10 = new AlternateNumberEntry17($alternateEntry10);
    }

    public function getAlternateEntry10()
    {
        return (!$this->alternateEntry10) ?: $this->alternateEntry10->value();
    }
}
