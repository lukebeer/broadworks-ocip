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
 * Dialable Caller ID routing order
 */
class DialableCallerIDCriteriaPriorityOrder extends ComplexType implements ComplexInterface
{
    public    $elementName = 'DialableCallerIDCriteriaPriorityOrder';
    protected $criteriaName;
    protected $priority;

    public function __construct(
         $criteriaName = '',
         $priority = ''
    ) {
        $this->setCriteriaName($criteriaName);
        $this->setPriority($priority);
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
    public function setPriority($priority = null)
    {
        $this->priority = new SimpleContent($priority);
        $this->priority->setElementName('priority');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $priority
     */
    public function getPriority()
    {
        return ($this->priority)
            ? $this->priority->getElementValue()
            : null;
    }
}
