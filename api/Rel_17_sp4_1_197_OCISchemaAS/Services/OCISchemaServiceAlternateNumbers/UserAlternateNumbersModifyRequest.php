<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers\AlternateNumberEntry17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Alternate Numbers.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAlternateNumbersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserAlternateNumbersModifyRequest';
    protected $userId;
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

    public function __construct(
         $userId = '',
         $distinctiveRing = null,
         AlternateNumberEntry17 $alternateEntry01 = null,
         AlternateNumberEntry17 $alternateEntry02 = null,
         AlternateNumberEntry17 $alternateEntry03 = null,
         AlternateNumberEntry17 $alternateEntry04 = null,
         AlternateNumberEntry17 $alternateEntry05 = null,
         AlternateNumberEntry17 $alternateEntry06 = null,
         AlternateNumberEntry17 $alternateEntry07 = null,
         AlternateNumberEntry17 $alternateEntry08 = null,
         AlternateNumberEntry17 $alternateEntry09 = null,
         AlternateNumberEntry17 $alternateEntry10 = null
    ) {
        $this->setUserId($userId);
        $this->setDistinctiveRing($distinctiveRing);
        $this->setAlternateEntry01($alternateEntry01);
        $this->setAlternateEntry02($alternateEntry02);
        $this->setAlternateEntry03($alternateEntry03);
        $this->setAlternateEntry04($alternateEntry04);
        $this->setAlternateEntry05($alternateEntry05);
        $this->setAlternateEntry06($alternateEntry06);
        $this->setAlternateEntry07($alternateEntry07);
        $this->setAlternateEntry08($alternateEntry08);
        $this->setAlternateEntry09($alternateEntry09);
        $this->setAlternateEntry10($alternateEntry10);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
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
    public function setAlternateEntry01(AlternateNumberEntry17 $alternateEntry01 = null)
    {
        $this->alternateEntry01 = ($alternateEntry01 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry01
             : new AlternateNumberEntry17($alternateEntry01);
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
        $this->alternateEntry02 = ($alternateEntry02 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry02
             : new AlternateNumberEntry17($alternateEntry02);
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
        $this->alternateEntry03 = ($alternateEntry03 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry03
             : new AlternateNumberEntry17($alternateEntry03);
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
        $this->alternateEntry04 = ($alternateEntry04 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry04
             : new AlternateNumberEntry17($alternateEntry04);
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
        $this->alternateEntry05 = ($alternateEntry05 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry05
             : new AlternateNumberEntry17($alternateEntry05);
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
        $this->alternateEntry06 = ($alternateEntry06 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry06
             : new AlternateNumberEntry17($alternateEntry06);
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
        $this->alternateEntry07 = ($alternateEntry07 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry07
             : new AlternateNumberEntry17($alternateEntry07);
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
        $this->alternateEntry08 = ($alternateEntry08 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry08
             : new AlternateNumberEntry17($alternateEntry08);
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
        $this->alternateEntry09 = ($alternateEntry09 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry09
             : new AlternateNumberEntry17($alternateEntry09);
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
        $this->alternateEntry10 = ($alternateEntry10 InstanceOf AlternateNumberEntry17)
             ? $alternateEntry10
             : new AlternateNumberEntry17($alternateEntry10);
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
