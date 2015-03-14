<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria active status indicator
 */
class CriteriaActivation extends ComplexType implements ComplexInterface
{
    public    $name         = 'CriteriaActivation';
    protected $criteriaName = null;
    protected $isActive     = null;

    public function __construct(
         $criteriaName,
         $isActive
    ) {
        $this->setCriteriaName($criteriaName);
        $this->setIsActive($isActive);
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
    public function setCriteriaName($criteriaName = null)
    {
        if (!$criteriaName) return $this;
        $this->criteriaName = new SimpleContent($criteriaName);
        $this->criteriaName->setName('criteriaName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $criteriaName
     */
    public function getCriteriaName()
    {
        return $this->criteriaName->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new SimpleContent($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }
}
