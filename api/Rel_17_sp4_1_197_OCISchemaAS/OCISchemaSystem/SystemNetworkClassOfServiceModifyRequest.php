<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceCommunicationBarringProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkTranslationIndex;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an existing Network Class of Service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkClassOfServiceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $name                          = null;
    protected $newName                       = null;
    protected $description                   = null;
    protected $communicationBarringProfile0  = null;
    protected $communicationBarringProfile1  = null;
    protected $communicationBarringProfile2  = null;
    protected $communicationBarringProfile3  = null;
    protected $communicationBarringProfile4  = null;
    protected $communicationBarringProfile5  = null;
    protected $communicationBarringProfile6  = null;
    protected $communicationBarringProfile7  = null;
    protected $communicationBarringProfile8  = null;
    protected $communicationBarringProfile9  = null;
    protected $networkTranslationIndex       = null;

    public function __construct(
         $name,
         $newName = null,
         $description = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8 = null,
         NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9 = null,
         $networkTranslationIndex = null
    ) {
        $this->setName($name);
        $this->setNewName($newName);
        $this->setDescription($description);
        $this->setCommunicationBarringProfile0($communicationBarringProfile0);
        $this->setCommunicationBarringProfile1($communicationBarringProfile1);
        $this->setCommunicationBarringProfile2($communicationBarringProfile2);
        $this->setCommunicationBarringProfile3($communicationBarringProfile3);
        $this->setCommunicationBarringProfile4($communicationBarringProfile4);
        $this->setCommunicationBarringProfile5($communicationBarringProfile5);
        $this->setCommunicationBarringProfile6($communicationBarringProfile6);
        $this->setCommunicationBarringProfile7($communicationBarringProfile7);
        $this->setCommunicationBarringProfile8($communicationBarringProfile8);
        $this->setCommunicationBarringProfile9($communicationBarringProfile9);
        $this->setNetworkTranslationIndex($networkTranslationIndex);
    }

    public function setName($name = null)
    {
        $this->name = ($name InstanceOf NetworkClassOfServiceName)
             ? $name
             : new NetworkClassOfServiceName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf NetworkClassOfServiceName)
             ? $newName
             : new NetworkClassOfServiceName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkClassOfServiceDescription)
             ? $description
             : new NetworkClassOfServiceDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setCommunicationBarringProfile0(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0 = null)
    {
    }

    public function getCommunicationBarringProfile0()
    {
        return (!$this->communicationBarringProfile0) ?: $this->communicationBarringProfile0->value();
    }

    public function setCommunicationBarringProfile1(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1 = null)
    {
    }

    public function getCommunicationBarringProfile1()
    {
        return (!$this->communicationBarringProfile1) ?: $this->communicationBarringProfile1->value();
    }

    public function setCommunicationBarringProfile2(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2 = null)
    {
    }

    public function getCommunicationBarringProfile2()
    {
        return (!$this->communicationBarringProfile2) ?: $this->communicationBarringProfile2->value();
    }

    public function setCommunicationBarringProfile3(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3 = null)
    {
    }

    public function getCommunicationBarringProfile3()
    {
        return (!$this->communicationBarringProfile3) ?: $this->communicationBarringProfile3->value();
    }

    public function setCommunicationBarringProfile4(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4 = null)
    {
    }

    public function getCommunicationBarringProfile4()
    {
        return (!$this->communicationBarringProfile4) ?: $this->communicationBarringProfile4->value();
    }

    public function setCommunicationBarringProfile5(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5 = null)
    {
    }

    public function getCommunicationBarringProfile5()
    {
        return (!$this->communicationBarringProfile5) ?: $this->communicationBarringProfile5->value();
    }

    public function setCommunicationBarringProfile6(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6 = null)
    {
    }

    public function getCommunicationBarringProfile6()
    {
        return (!$this->communicationBarringProfile6) ?: $this->communicationBarringProfile6->value();
    }

    public function setCommunicationBarringProfile7(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7 = null)
    {
    }

    public function getCommunicationBarringProfile7()
    {
        return (!$this->communicationBarringProfile7) ?: $this->communicationBarringProfile7->value();
    }

    public function setCommunicationBarringProfile8(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8 = null)
    {
    }

    public function getCommunicationBarringProfile8()
    {
        return (!$this->communicationBarringProfile8) ?: $this->communicationBarringProfile8->value();
    }

    public function setCommunicationBarringProfile9(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9 = null)
    {
    }

    public function getCommunicationBarringProfile9()
    {
        return (!$this->communicationBarringProfile9) ?: $this->communicationBarringProfile9->value();
    }

    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        $this->networkTranslationIndex = ($networkTranslationIndex InstanceOf NetworkTranslationIndex)
             ? $networkTranslationIndex
             : new NetworkTranslationIndex($networkTranslationIndex);
    }

    public function getNetworkTranslationIndex()
    {
        return (!$this->networkTranslationIndex) ?: $this->networkTranslationIndex->value();
    }
}
