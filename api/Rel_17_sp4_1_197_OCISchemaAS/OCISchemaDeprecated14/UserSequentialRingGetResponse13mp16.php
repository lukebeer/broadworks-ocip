<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SequentialRingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SequentialRingLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSequentialRingGetRequest13mp16. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule" and "Calls From".
 *         Replaced By: UserSequentialRingGetResponse14sp4
 */
class UserSequentialRingGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $ringBaseLocationFirst,
             $baseLocationNumberOfRings,
             $continueIfBaseLocationIsBusy,
             $callerMayStopSearch,
             $Location01,
             $Location02,
             $Location03,
             $Location04,
             $Location05,
             $criteriaTable
    ) {
        $this->ringBaseLocationFirst        = $ringBaseLocationFirst;
        $this->baseLocationNumberOfRings    = $baseLocationNumberOfRings;
        $this->continueIfBaseLocationIsBusy = $continueIfBaseLocationIsBusy;
        $this->callerMayStopSearch          = $callerMayStopSearch;
        $this->Location01                   = $Location01;
        $this->Location02                   = $Location02;
        $this->Location03                   = $Location03;
        $this->Location04                   = $Location04;
        $this->Location05                   = $Location05;
        $this->criteriaTable                = $criteriaTable;
        $this->args                         = func_get_args();
    }

    public function setRingBaseLocationFirst($ringBaseLocationFirst)
    {
        $ringBaseLocationFirst and $this->ringBaseLocationFirst = new xs:boolean($ringBaseLocationFirst);
    }

    public function getRingBaseLocationFirst()
    {
        return (!$this->ringBaseLocationFirst) ?: $this->ringBaseLocationFirst->value();
    }

    public function setBaseLocationNumberOfRings($baseLocationNumberOfRings)
    {
        $baseLocationNumberOfRings and $this->baseLocationNumberOfRings = new SequentialRingNumberOfRings($baseLocationNumberOfRings);
    }

    public function getBaseLocationNumberOfRings()
    {
        return (!$this->baseLocationNumberOfRings) ?: $this->baseLocationNumberOfRings->value();
    }

    public function setContinueIfBaseLocationIsBusy($continueIfBaseLocationIsBusy)
    {
        $continueIfBaseLocationIsBusy and $this->continueIfBaseLocationIsBusy = new xs:boolean($continueIfBaseLocationIsBusy);
    }

    public function getContinueIfBaseLocationIsBusy()
    {
        return (!$this->continueIfBaseLocationIsBusy) ?: $this->continueIfBaseLocationIsBusy->value();
    }

    public function setCallerMayStopSearch($callerMayStopSearch)
    {
        $callerMayStopSearch and $this->callerMayStopSearch = new xs:boolean($callerMayStopSearch);
    }

    public function getCallerMayStopSearch()
    {
        return (!$this->callerMayStopSearch) ?: $this->callerMayStopSearch->value();
    }

    public function setLocation01($Location01)
    {
        $Location01 and $this->Location01 = new SequentialRingLocation($Location01);
    }

    public function getLocation01()
    {
        return (!$this->Location01) ?: $this->Location01->value();
    }

    public function setLocation02($Location02)
    {
        $Location02 and $this->Location02 = new SequentialRingLocation($Location02);
    }

    public function getLocation02()
    {
        return (!$this->Location02) ?: $this->Location02->value();
    }

    public function setLocation03($Location03)
    {
        $Location03 and $this->Location03 = new SequentialRingLocation($Location03);
    }

    public function getLocation03()
    {
        return (!$this->Location03) ?: $this->Location03->value();
    }

    public function setLocation04($Location04)
    {
        $Location04 and $this->Location04 = new SequentialRingLocation($Location04);
    }

    public function getLocation04()
    {
        return (!$this->Location04) ?: $this->Location04->value();
    }

    public function setLocation05($Location05)
    {
        $Location05 and $this->Location05 = new SequentialRingLocation($Location05);
    }

    public function getLocation05()
    {
        return (!$this->Location05) ?: $this->Location05->value();
    }

    public function setCriteriaTable($criteriaTable)
    {
        $criteriaTable and $this->criteriaTable = new core:OCITable($criteriaTable);
    }

    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->value();
    }
}
