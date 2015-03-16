<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPatternCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an existing Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest';
    protected $serviceProviderId;
    protected $name;
    protected $newName;
    protected $description;
    protected $addMatchDigitPattern;
    protected $deleteMatchDigitPattern;

    public function __construct(
         $serviceProviderId = '',
         $name = '',
         $newName = null,
         $description = null,
         $addMatchDigitPattern = null,
         $deleteMatchDigitPattern = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
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
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
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
        return ($this->newName) ? $this->newName->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
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
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setAddMatchDigitPattern($addMatchDigitPattern = null)
    {
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
        return ($this->addMatchDigitPattern) ? $this->addMatchDigitPattern->getValue() : null;
    }

    /**
     * 
     */
    public function setDeleteMatchDigitPattern($deleteMatchDigitPattern = null)
    {
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
        return ($this->deleteMatchDigitPattern) ? $this->deleteMatchDigitPattern->getValue() : null;
    }
}
