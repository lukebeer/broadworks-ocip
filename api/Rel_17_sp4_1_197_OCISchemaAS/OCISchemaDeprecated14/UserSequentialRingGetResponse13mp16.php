<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SequentialRingLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserSequentialRingGetResponse13mp16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSequentialRingGetRequest13mp16. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule" and "Calls From".
 *         Replaced By: UserSequentialRingGetResponse14sp4
 */
class UserSequentialRingGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $ringBaseLocationFirst        = null;
    protected $baseLocationNumberOfRings    = null;
    protected $continueIfBaseLocationIsBusy = null;
    protected $callerMayStopSearch          = null;
    protected $Location01                   = null;
    protected $Location02                   = null;
    protected $Location03                   = null;
    protected $Location04                   = null;
    protected $Location05                   = null;
    protected $criteriaTable                = null;

    /**
     * @return UserSequentialRingGetResponse13mp16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
        return (!$this->ringBaseLocationFirst) ?: $this->ringBaseLocationFirst;
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
        return (!$this->continueIfBaseLocationIsBusy) ?: $this->continueIfBaseLocationIsBusy;
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
        return (!$this->callerMayStopSearch) ?: $this->callerMayStopSearch;
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function setLocation01(SequentialRingLocation $Location01 = null)
    {
        $this->Location01 =  $Location01;
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function getLocation01()
    {
        return (!$this->Location01) ?: $this->Location01->getValue();
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function setLocation02(SequentialRingLocation $Location02 = null)
    {
        $this->Location02 =  $Location02;
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function getLocation02()
    {
        return (!$this->Location02) ?: $this->Location02->getValue();
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function setLocation03(SequentialRingLocation $Location03 = null)
    {
        $this->Location03 =  $Location03;
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function getLocation03()
    {
        return (!$this->Location03) ?: $this->Location03->getValue();
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function setLocation04(SequentialRingLocation $Location04 = null)
    {
        $this->Location04 =  $Location04;
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function getLocation04()
    {
        return (!$this->Location04) ?: $this->Location04->getValue();
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function setLocation05(SequentialRingLocation $Location05 = null)
    {
        $this->Location05 =  $Location05;
    }

    /**
     * Sequential Ring Location.
     *         Replaced By: SequentialRingLocation14sp4
     */
    public function getLocation05()
    {
        return (!$this->Location05) ?: $this->Location05->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        $this->criteriaTable =  $criteriaTable;
    }

    /**
     * 
     */
    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->getValue();
    }
}
