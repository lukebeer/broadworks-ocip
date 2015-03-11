<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SequentialRingLocation;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                         = 'UserSequentialRingGetResponse13mp16';
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
        if (!$ringBaseLocationFirst) return $this;
        $this->ringBaseLocationFirst = new PrimitiveType($ringBaseLocationFirst);
        $this->ringBaseLocationFirst->setName('ringBaseLocationFirst');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRingBaseLocationFirst()
    {
        return $this->ringBaseLocationFirst->getValue();
    }

    /**
     * 
     */
    public function setBaseLocationNumberOfRings($baseLocationNumberOfRings = null)
    {
        if (!$baseLocationNumberOfRings) return $this;
        $this->baseLocationNumberOfRings = ($baseLocationNumberOfRings InstanceOf SequentialRingNumberOfRings)
             ? $baseLocationNumberOfRings
             : new SequentialRingNumberOfRings($baseLocationNumberOfRings);
        $this->baseLocationNumberOfRings->setName('baseLocationNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return SequentialRingNumberOfRings
     */
    public function getBaseLocationNumberOfRings()
    {
        return $this->baseLocationNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setContinueIfBaseLocationIsBusy($continueIfBaseLocationIsBusy = null)
    {
        if (!$continueIfBaseLocationIsBusy) return $this;
        $this->continueIfBaseLocationIsBusy = new PrimitiveType($continueIfBaseLocationIsBusy);
        $this->continueIfBaseLocationIsBusy->setName('continueIfBaseLocationIsBusy');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getContinueIfBaseLocationIsBusy()
    {
        return $this->continueIfBaseLocationIsBusy->getValue();
    }

    /**
     * 
     */
    public function setCallerMayStopSearch($callerMayStopSearch = null)
    {
        if (!$callerMayStopSearch) return $this;
        $this->callerMayStopSearch = new PrimitiveType($callerMayStopSearch);
        $this->callerMayStopSearch->setName('callerMayStopSearch');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getCallerMayStopSearch()
    {
        return $this->callerMayStopSearch->getValue();
    }

    /**
     * 
     */
    public function setLocation01(SequentialRingLocation $Location01 = null)
    {
        if (!$Location01) return $this;
        $this->Location01 = $Location01;
        $this->Location01->setName('Location01');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation
     */
    public function getLocation01()
    {
        return $this->Location01;
    }

    /**
     * 
     */
    public function setLocation02(SequentialRingLocation $Location02 = null)
    {
        if (!$Location02) return $this;
        $this->Location02 = $Location02;
        $this->Location02->setName('Location02');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation
     */
    public function getLocation02()
    {
        return $this->Location02;
    }

    /**
     * 
     */
    public function setLocation03(SequentialRingLocation $Location03 = null)
    {
        if (!$Location03) return $this;
        $this->Location03 = $Location03;
        $this->Location03->setName('Location03');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation
     */
    public function getLocation03()
    {
        return $this->Location03;
    }

    /**
     * 
     */
    public function setLocation04(SequentialRingLocation $Location04 = null)
    {
        if (!$Location04) return $this;
        $this->Location04 = $Location04;
        $this->Location04->setName('Location04');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation
     */
    public function getLocation04()
    {
        return $this->Location04;
    }

    /**
     * 
     */
    public function setLocation05(SequentialRingLocation $Location05 = null)
    {
        if (!$Location05) return $this;
        $this->Location05 = $Location05;
        $this->Location05->setName('Location05');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocation
     */
    public function getLocation05()
    {
        return $this->Location05;
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        if (!$criteriaTable) return $this;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable->getValue();
    }
}
