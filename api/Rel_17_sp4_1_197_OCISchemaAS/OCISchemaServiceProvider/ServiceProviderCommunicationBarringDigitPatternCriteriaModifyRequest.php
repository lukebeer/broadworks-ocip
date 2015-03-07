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


/**
 * Modify an existing Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $serviceProviderId        = null;
    protected $name                     = null;
    protected $newName                  = null;
    protected $description              = null;
    protected $addMatchDigitPattern     = null;
    protected $deleteMatchDigitPattern  = null;

    public function __construct(
         $serviceProviderId,
         $name,
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

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DigitPatternCriteriaName)
             ? $name
             : new DigitPatternCriteriaName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf DigitPatternCriteriaName)
             ? $newName
             : new DigitPatternCriteriaName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf DigitPatternCriteriaDescription)
             ? $description
             : new DigitPatternCriteriaDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setAddMatchDigitPattern($addMatchDigitPattern = null)
    {
        $this->addMatchDigitPattern = ($addMatchDigitPattern InstanceOf DigitPattern)
             ? $addMatchDigitPattern
             : new DigitPattern($addMatchDigitPattern);
    }

    public function getAddMatchDigitPattern()
    {
        return (!$this->addMatchDigitPattern) ?: $this->addMatchDigitPattern->value();
    }

    public function setDeleteMatchDigitPattern($deleteMatchDigitPattern = null)
    {
        $this->deleteMatchDigitPattern = ($deleteMatchDigitPattern InstanceOf DigitPattern)
             ? $deleteMatchDigitPattern
             : new DigitPattern($deleteMatchDigitPattern);
    }

    public function getDeleteMatchDigitPattern()
    {
        return (!$this->deleteMatchDigitPattern) ?: $this->deleteMatchDigitPattern->value();
    }
}
