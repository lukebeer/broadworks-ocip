<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSequentialRing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingLocationModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's sequential ring service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSequentialRingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $userId                        = null;
    protected $ringBaseLocationFirst         = null;
    protected $baseLocationNumberOfRings     = null;
    protected $continueIfBaseLocationIsBusy  = null;
    protected $callerMayStopSearch           = null;
    protected $Location01                    = null;
    protected $Location02                    = null;
    protected $Location03                    = null;
    protected $Location04                    = null;
    protected $Location05                    = null;
    protected $criteriaActivation            = null;

    public function __construct(
         $userId,
         $ringBaseLocationFirst = null,
         $baseLocationNumberOfRings = null,
         $continueIfBaseLocationIsBusy = null,
         $callerMayStopSearch = null,
         SequentialRingLocationModify $Location01 = null,
         SequentialRingLocationModify $Location02 = null,
         SequentialRingLocationModify $Location03 = null,
         SequentialRingLocationModify $Location04 = null,
         SequentialRingLocationModify $Location05 = null,
         CriteriaActivation $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setRingBaseLocationFirst($ringBaseLocationFirst);
        $this->setBaseLocationNumberOfRings($baseLocationNumberOfRings);
        $this->setContinueIfBaseLocationIsBusy($continueIfBaseLocationIsBusy);
        $this->setCallerMayStopSearch($callerMayStopSearch);
        $this->setLocation01($Location01);
        $this->setLocation02($Location02);
        $this->setLocation03($Location03);
        $this->setLocation04($Location04);
        $this->setLocation05($Location05);
        $this->setCriteriaActivation($criteriaActivation);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setRingBaseLocationFirst(xs:boolean $ringBaseLocationFirst = null)
    {
    }

    public function getRingBaseLocationFirst()
    {
        return (!$this->ringBaseLocationFirst) ?: $this->ringBaseLocationFirst->value();
    }

    public function setBaseLocationNumberOfRings($baseLocationNumberOfRings = null)
    {
        $this->baseLocationNumberOfRings = ($baseLocationNumberOfRings InstanceOf SequentialRingNumberOfRings)
             ? $baseLocationNumberOfRings
             : new SequentialRingNumberOfRings($baseLocationNumberOfRings);
    }

    public function getBaseLocationNumberOfRings()
    {
        return (!$this->baseLocationNumberOfRings) ?: $this->baseLocationNumberOfRings->value();
    }

    public function setContinueIfBaseLocationIsBusy(xs:boolean $continueIfBaseLocationIsBusy = null)
    {
    }

    public function getContinueIfBaseLocationIsBusy()
    {
        return (!$this->continueIfBaseLocationIsBusy) ?: $this->continueIfBaseLocationIsBusy->value();
    }

    public function setCallerMayStopSearch(xs:boolean $callerMayStopSearch = null)
    {
    }

    public function getCallerMayStopSearch()
    {
        return (!$this->callerMayStopSearch) ?: $this->callerMayStopSearch->value();
    }

    public function setLocation01(SequentialRingLocationModify $Location01 = null)
    {
    }

    public function getLocation01()
    {
        return (!$this->Location01) ?: $this->Location01->value();
    }

    public function setLocation02(SequentialRingLocationModify $Location02 = null)
    {
    }

    public function getLocation02()
    {
        return (!$this->Location02) ?: $this->Location02->value();
    }

    public function setLocation03(SequentialRingLocationModify $Location03 = null)
    {
    }

    public function getLocation03()
    {
        return (!$this->Location03) ?: $this->Location03->value();
    }

    public function setLocation04(SequentialRingLocationModify $Location04 = null)
    {
    }

    public function getLocation04()
    {
        return (!$this->Location04) ?: $this->Location04->value();
    }

    public function setLocation05(SequentialRingLocationModify $Location05 = null)
    {
    }

    public function getLocation05()
    {
        return (!$this->Location05) ?: $this->Location05->value();
    }

    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
    }

    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->value();
    }
}
