<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify an existing Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringDigitPatternCriteriaModifyRequest';
    protected $name;
    protected $newName;
    protected $description;
    protected $addMatchDigitPattern;
    protected $deleteMatchDigitPattern;

    public function __construct(
         $name = '',
         $newName = null,
         $description = null,
         $addMatchDigitPattern = null,
         $deleteMatchDigitPattern = null
    ) {
        $this->setName($name);
        $this->setNewName($newName);
        $this->setDescription($description);
        $this->setAddMatchDigitPattern($addMatchDigitPattern);
        $this->setDeleteMatchDigitPattern($deleteMatchDigitPattern);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf DigitPatternCriteriaName)
             ? $newName
             : new DigitPatternCriteriaName($newName);
        $this->newName->setElementName('newName');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaName $newName
     */
    public function getNewName()
    {
        return ($this->newName)
            ? $this->newName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DigitPatternCriteriaDescription)
             ? $description
             : new DigitPatternCriteriaDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAddMatchDigitPattern($addMatchDigitPattern = null)
    {
        $this->addMatchDigitPattern = ($addMatchDigitPattern InstanceOf DigitPattern)
             ? $addMatchDigitPattern
             : new DigitPattern($addMatchDigitPattern);
        $this->addMatchDigitPattern->setElementName('addMatchDigitPattern');
        return $this;
    }

    /**
     * 
     * @return DigitPattern $addMatchDigitPattern
     */
    public function getAddMatchDigitPattern()
    {
        return ($this->addMatchDigitPattern)
            ? $this->addMatchDigitPattern->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeleteMatchDigitPattern($deleteMatchDigitPattern = null)
    {
        $this->deleteMatchDigitPattern = ($deleteMatchDigitPattern InstanceOf DigitPattern)
             ? $deleteMatchDigitPattern
             : new DigitPattern($deleteMatchDigitPattern);
        $this->deleteMatchDigitPattern->setElementName('deleteMatchDigitPattern');
        return $this;
    }

    /**
     * 
     * @return DigitPattern $deleteMatchDigitPattern
     */
    public function getDeleteMatchDigitPattern()
    {
        return ($this->deleteMatchDigitPattern)
            ? $this->deleteMatchDigitPattern->getElementValue()
            : null;
    }
}
