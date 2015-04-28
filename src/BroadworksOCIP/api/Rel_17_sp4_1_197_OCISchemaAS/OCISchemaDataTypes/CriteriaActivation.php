<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria active status indicator
 */
class CriteriaActivation extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CriteriaActivation';
    protected $criteriaName;
    protected $isActive;

    public function __construct(
         $criteriaName = '',
         $isActive = ''
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
        $this->criteriaName = new SimpleContent($criteriaName);
        $this->criteriaName->setElementName('criteriaName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $criteriaName
     */
    public function getCriteriaName()
    {
        return ($this->criteriaName)
            ? $this->criteriaName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new SimpleContent($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }
}
