<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SequentialRingLocation;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSequentialRingGetRequest13mp16. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule" and "Calls From".
 *         Replaced By: UserSequentialRingGetResponse14sp4
 */
class UserSequentialRingGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $ringBaseLocationFirst         = null;
    protected $baseLocationNumberOfRings     = null;
    protected $continueIfBaseLocationIsBusy  = null;
    protected $callerMayStopSearch           = null;
    protected $Location01                    = null;
    protected $Location02                    = null;
    protected $Location03                    = null;
    protected $Location04                    = null;
    protected $Location05                    = null;
    protected $criteriaTable                 = null;


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

    public function setLocation01(SequentialRingLocation $Location01 = null)
    {
    }

    public function getLocation01()
    {
        return (!$this->Location01) ?: $this->Location01->value();
    }

    public function setLocation02(SequentialRingLocation $Location02 = null)
    {
    }

    public function getLocation02()
    {
        return (!$this->Location02) ?: $this->Location02->value();
    }

    public function setLocation03(SequentialRingLocation $Location03 = null)
    {
    }

    public function getLocation03()
    {
        return (!$this->Location03) ?: $this->Location03->value();
    }

    public function setLocation04(SequentialRingLocation $Location04 = null)
    {
    }

    public function getLocation04()
    {
        return (!$this->Location04) ?: $this->Location04->value();
    }

    public function setLocation05(SequentialRingLocation $Location05 = null)
    {
    }

    public function getLocation05()
    {
        return (!$this->Location05) ?: $this->Location05->value();
    }

    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
