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
    public    $name                         = __CLASS__;
    protected $userId                       = null;
    protected $ringBaseLocationFirst        = null;
    protected $baseLocationNumberOfRings    = null;
    protected $continueIfBaseLocationIsBusy = null;
    protected $callerMayStopSearch          = null;
    protected $Location01                   = null;
    protected $Location02                   = null;
    protected $Location03                   = null;
    protected $Location04                   = null;
    protected $Location05                   = null;
    protected $criteriaActivation           = null;

    public function __construct(
         $userId,
         $ringBaseLocationFirst = null,
         $baseLocationNumberOfRings = null,
         $continueIfBaseLocationIsBusy = null,
         $callerMayStopSearch = null,
          $Location01 = null,
          $Location02 = null,
          $Location03 = null,
          $Location04 = null,
          $Location05 = null,
          $criteriaActivation = null
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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setRingBaseLocationFirst($ringBaseLocationFirst = null)
    {
        $this->ringBaseLocationFirst = (boolean) $ringBaseLocationFirst;
    }

    /**
     * 
     */
    public function getRingBaseLocationFirst()
    {
        return (!$this->ringBaseLocationFirst) ?: $this->ringBaseLocationFirst->getValue();
    }

    /**
     * Number of Rings until call is redirected to next location in sequence.
     */
    public function setBaseLocationNumberOfRings($baseLocationNumberOfRings = null)
    {
        $this->baseLocationNumberOfRings = ($baseLocationNumberOfRings InstanceOf SequentialRingNumberOfRings)
             ? $baseLocationNumberOfRings
             : new SequentialRingNumberOfRings($baseLocationNumberOfRings);
    }

    /**
     * Number of Rings until call is redirected to next location in sequence.
     */
    public function getBaseLocationNumberOfRings()
    {
        return (!$this->baseLocationNumberOfRings) ?: $this->baseLocationNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setContinueIfBaseLocationIsBusy($continueIfBaseLocationIsBusy = null)
    {
        $this->continueIfBaseLocationIsBusy = (boolean) $continueIfBaseLocationIsBusy;
    }

    /**
     * 
     */
    public function getContinueIfBaseLocationIsBusy()
    {
        return (!$this->continueIfBaseLocationIsBusy) ?: $this->continueIfBaseLocationIsBusy->getValue();
    }

    /**
     * 
     */
    public function setCallerMayStopSearch($callerMayStopSearch = null)
    {
        $this->callerMayStopSearch = (boolean) $callerMayStopSearch;
    }

    /**
     * 
     */
    public function getCallerMayStopSearch()
    {
        return (!$this->callerMayStopSearch) ?: $this->callerMayStopSearch->getValue();
    }

    /**
     * Sequential Ring Location.
     */
    public function setLocation01(SequentialRingLocationModify $Location01 = null)
    {
        $this->Location01 =  $Location01;
    }

    /**
     * Sequential Ring Location.
     */
    public function getLocation01()
    {
        return (!$this->Location01) ?: $this->Location01->getValue();
    }

    /**
     * Sequential Ring Location.
     */
    public function setLocation02(SequentialRingLocationModify $Location02 = null)
    {
        $this->Location02 =  $Location02;
    }

    /**
     * Sequential Ring Location.
     */
    public function getLocation02()
    {
        return (!$this->Location02) ?: $this->Location02->getValue();
    }

    /**
     * Sequential Ring Location.
     */
    public function setLocation03(SequentialRingLocationModify $Location03 = null)
    {
        $this->Location03 =  $Location03;
    }

    /**
     * Sequential Ring Location.
     */
    public function getLocation03()
    {
        return (!$this->Location03) ?: $this->Location03->getValue();
    }

    /**
     * Sequential Ring Location.
     */
    public function setLocation04(SequentialRingLocationModify $Location04 = null)
    {
        $this->Location04 =  $Location04;
    }

    /**
     * Sequential Ring Location.
     */
    public function getLocation04()
    {
        return (!$this->Location04) ?: $this->Location04->getValue();
    }

    /**
     * Sequential Ring Location.
     */
    public function setLocation05(SequentialRingLocationModify $Location05 = null)
    {
        $this->Location05 =  $Location05;
    }

    /**
     * Sequential Ring Location.
     */
    public function getLocation05()
    {
        return (!$this->Location05) ?: $this->Location05->getValue();
    }

    /**
     * Criteria active status indicator
     */
    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
        $this->criteriaActivation =  $criteriaActivation;
    }

    /**
     * Criteria active status indicator
     */
    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->getValue();
    }
}
