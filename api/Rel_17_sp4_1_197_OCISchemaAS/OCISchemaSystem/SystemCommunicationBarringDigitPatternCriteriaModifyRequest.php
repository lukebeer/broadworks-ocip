<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an existing Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringDigitPatternCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = 'SystemCommunicationBarringDigitPatternCriteriaModifyRequest';
    protected $name                    = null;
    protected $newName                 = null;
    protected $description             = null;
    protected $addMatchDigitPattern    = null;
    protected $deleteMatchDigitPattern = null;

    public function __construct(
         $name,
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
        if (!$name) return $this;
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf DigitPatternCriteriaName)
             ? $newName
             : new DigitPatternCriteriaName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaName $newName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf DigitPatternCriteriaDescription)
             ? $description
             : new DigitPatternCriteriaDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return DigitPatternCriteriaDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setAddMatchDigitPattern($addMatchDigitPattern = null)
    {
        if (!$addMatchDigitPattern) return $this;
        $this->addMatchDigitPattern = ($addMatchDigitPattern InstanceOf DigitPattern)
             ? $addMatchDigitPattern
             : new DigitPattern($addMatchDigitPattern);
        $this->addMatchDigitPattern->setName('addMatchDigitPattern');
        return $this;
    }

    /**
     * 
     * @return DigitPattern $addMatchDigitPattern
     */
    public function getAddMatchDigitPattern()
    {
        return $this->addMatchDigitPattern->getValue();
    }

    /**
     * 
     */
    public function setDeleteMatchDigitPattern($deleteMatchDigitPattern = null)
    {
        if (!$deleteMatchDigitPattern) return $this;
        $this->deleteMatchDigitPattern = ($deleteMatchDigitPattern InstanceOf DigitPattern)
             ? $deleteMatchDigitPattern
             : new DigitPattern($deleteMatchDigitPattern);
        $this->deleteMatchDigitPattern->setName('deleteMatchDigitPattern');
        return $this;
    }

    /**
     * 
     * @return DigitPattern $deleteMatchDigitPattern
     */
    public function getDeleteMatchDigitPattern()
    {
        return $this->deleteMatchDigitPattern->getValue();
    }
}
