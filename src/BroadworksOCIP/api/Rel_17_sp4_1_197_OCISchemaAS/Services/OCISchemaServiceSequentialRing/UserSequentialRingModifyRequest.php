<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingLocationModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingNumberOfRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's sequential ring service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSequentialRingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSequentialRingModifyRequest';
    protected $userId;
    protected $ringBaseLocationFirst;
    protected $baseLocationNumberOfRings;
    protected $continueIfBaseLocationIsBusy;
    protected $callerMayStopSearch;
    protected $Location01;
    protected $Location02;
    protected $Location03;
    protected $Location04;
    protected $Location05;
    protected $criteriaActivation;

    public function __construct(
         $userId = '',
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
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRingBaseLocationFirst($ringBaseLocationFirst = null)
    {
        $this->ringBaseLocationFirst = new PrimitiveType($ringBaseLocationFirst);
        $this->ringBaseLocationFirst->setElementName('ringBaseLocationFirst');
        return $this;
    }

    /**
     * 
     * @return boolean $ringBaseLocationFirst
     */
    public function getRingBaseLocationFirst()
    {
        return ($this->ringBaseLocationFirst)
            ? $this->ringBaseLocationFirst->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBaseLocationNumberOfRings($baseLocationNumberOfRings = null)
    {
        $this->baseLocationNumberOfRings = ($baseLocationNumberOfRings InstanceOf SequentialRingNumberOfRings)
             ? $baseLocationNumberOfRings
             : new SequentialRingNumberOfRings($baseLocationNumberOfRings);
        $this->baseLocationNumberOfRings->setElementName('baseLocationNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return SequentialRingNumberOfRings $baseLocationNumberOfRings
     */
    public function getBaseLocationNumberOfRings()
    {
        return ($this->baseLocationNumberOfRings)
            ? $this->baseLocationNumberOfRings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContinueIfBaseLocationIsBusy($continueIfBaseLocationIsBusy = null)
    {
        $this->continueIfBaseLocationIsBusy = new PrimitiveType($continueIfBaseLocationIsBusy);
        $this->continueIfBaseLocationIsBusy->setElementName('continueIfBaseLocationIsBusy');
        return $this;
    }

    /**
     * 
     * @return boolean $continueIfBaseLocationIsBusy
     */
    public function getContinueIfBaseLocationIsBusy()
    {
        return ($this->continueIfBaseLocationIsBusy)
            ? $this->continueIfBaseLocationIsBusy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallerMayStopSearch($callerMayStopSearch = null)
    {
        $this->callerMayStopSearch = new PrimitiveType($callerMayStopSearch);
        $this->callerMayStopSearch->setElementName('callerMayStopSearch');
        return $this;
    }

    /**
     * 
     * @return boolean $callerMayStopSearch
     */
    public function getCallerMayStopSearch()
    {
        return ($this->callerMayStopSearch)
            ? $this->callerMayStopSearch->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocation01(SequentialRingLocationModify $Location01 = null)
    {
        $this->Location01 = ($Location01 InstanceOf SequentialRingLocationModify)
             ? $Location01
             : new SequentialRingLocationModify($Location01);
        $this->Location01->setElementName('Location01');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify $Location01
     */
    public function getLocation01()
    {
        return $this->Location01;
    }

    /**
     * 
     */
    public function setLocation02(SequentialRingLocationModify $Location02 = null)
    {
        $this->Location02 = ($Location02 InstanceOf SequentialRingLocationModify)
             ? $Location02
             : new SequentialRingLocationModify($Location02);
        $this->Location02->setElementName('Location02');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify $Location02
     */
    public function getLocation02()
    {
        return $this->Location02;
    }

    /**
     * 
     */
    public function setLocation03(SequentialRingLocationModify $Location03 = null)
    {
        $this->Location03 = ($Location03 InstanceOf SequentialRingLocationModify)
             ? $Location03
             : new SequentialRingLocationModify($Location03);
        $this->Location03->setElementName('Location03');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify $Location03
     */
    public function getLocation03()
    {
        return $this->Location03;
    }

    /**
     * 
     */
    public function setLocation04(SequentialRingLocationModify $Location04 = null)
    {
        $this->Location04 = ($Location04 InstanceOf SequentialRingLocationModify)
             ? $Location04
             : new SequentialRingLocationModify($Location04);
        $this->Location04->setElementName('Location04');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify $Location04
     */
    public function getLocation04()
    {
        return $this->Location04;
    }

    /**
     * 
     */
    public function setLocation05(SequentialRingLocationModify $Location05 = null)
    {
        $this->Location05 = ($Location05 InstanceOf SequentialRingLocationModify)
             ? $Location05
             : new SequentialRingLocationModify($Location05);
        $this->Location05->setElementName('Location05');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify $Location05
     */
    public function getLocation05()
    {
        return $this->Location05;
    }

    /**
     * 
     */
    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
        $this->criteriaActivation = ($criteriaActivation InstanceOf CriteriaActivation)
             ? $criteriaActivation
             : new CriteriaActivation($criteriaActivation);
        $this->criteriaActivation->setElementName('criteriaActivation');
        return $this;
    }

    /**
     * 
     * @return CriteriaActivation $criteriaActivation
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }
}
