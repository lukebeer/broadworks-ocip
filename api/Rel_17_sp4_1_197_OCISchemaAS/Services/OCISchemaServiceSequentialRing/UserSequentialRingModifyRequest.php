<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingLocationModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSequentialRing\SequentialRingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's sequential ring service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSequentialRingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = 'UserSequentialRingModifyRequest';
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

    /**
     * @return 
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
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
    public function setLocation01(SequentialRingLocationModify $Location01 = null)
    {
        if (!$Location01) return $this;
        $this->Location01 = $Location01;
        $this->Location01->setName('Location01');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify
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
        if (!$Location02) return $this;
        $this->Location02 = $Location02;
        $this->Location02->setName('Location02');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify
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
        if (!$Location03) return $this;
        $this->Location03 = $Location03;
        $this->Location03->setName('Location03');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify
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
        if (!$Location04) return $this;
        $this->Location04 = $Location04;
        $this->Location04->setName('Location04');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify
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
        if (!$Location05) return $this;
        $this->Location05 = $Location05;
        $this->Location05->setName('Location05');
        return $this;
    }

    /**
     * 
     * @return SequentialRingLocationModify
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
        if (!$criteriaActivation) return $this;
        $this->criteriaActivation = $criteriaActivation;
        $this->criteriaActivation->setName('criteriaActivation');
        return $this;
    }

    /**
     * 
     * @return CriteriaActivation
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }
}
