<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceCommunicationBarringProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkTranslationIndex;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a new Network Class of Service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNetworkClassOfServiceAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $description=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8=null,
             NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9=null,
             $networkTranslationIndex=null
    ) {
        $this->name                         = new NetworkClassOfServiceName($name);
        $this->description                  = new NetworkClassOfServiceDescription($description);
        $this->communicationBarringProfile0 = $communicationBarringProfile0;
        $this->communicationBarringProfile1 = $communicationBarringProfile1;
        $this->communicationBarringProfile2 = $communicationBarringProfile2;
        $this->communicationBarringProfile3 = $communicationBarringProfile3;
        $this->communicationBarringProfile4 = $communicationBarringProfile4;
        $this->communicationBarringProfile5 = $communicationBarringProfile5;
        $this->communicationBarringProfile6 = $communicationBarringProfile6;
        $this->communicationBarringProfile7 = $communicationBarringProfile7;
        $this->communicationBarringProfile8 = $communicationBarringProfile8;
        $this->communicationBarringProfile9 = $communicationBarringProfile9;
        $this->networkTranslationIndex      = $networkTranslationIndex;
        $this->args                         = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new NetworkClassOfServiceName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new NetworkClassOfServiceDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setCommunicationBarringProfile0($communicationBarringProfile0)
    {
        $communicationBarringProfile0 and $this->communicationBarringProfile0 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile0);
    }

    public function getCommunicationBarringProfile0()
    {
        return (!$this->communicationBarringProfile0) ?: $this->communicationBarringProfile0->value();
    }

    public function setCommunicationBarringProfile1($communicationBarringProfile1)
    {
        $communicationBarringProfile1 and $this->communicationBarringProfile1 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile1);
    }

    public function getCommunicationBarringProfile1()
    {
        return (!$this->communicationBarringProfile1) ?: $this->communicationBarringProfile1->value();
    }

    public function setCommunicationBarringProfile2($communicationBarringProfile2)
    {
        $communicationBarringProfile2 and $this->communicationBarringProfile2 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile2);
    }

    public function getCommunicationBarringProfile2()
    {
        return (!$this->communicationBarringProfile2) ?: $this->communicationBarringProfile2->value();
    }

    public function setCommunicationBarringProfile3($communicationBarringProfile3)
    {
        $communicationBarringProfile3 and $this->communicationBarringProfile3 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile3);
    }

    public function getCommunicationBarringProfile3()
    {
        return (!$this->communicationBarringProfile3) ?: $this->communicationBarringProfile3->value();
    }

    public function setCommunicationBarringProfile4($communicationBarringProfile4)
    {
        $communicationBarringProfile4 and $this->communicationBarringProfile4 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile4);
    }

    public function getCommunicationBarringProfile4()
    {
        return (!$this->communicationBarringProfile4) ?: $this->communicationBarringProfile4->value();
    }

    public function setCommunicationBarringProfile5($communicationBarringProfile5)
    {
        $communicationBarringProfile5 and $this->communicationBarringProfile5 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile5);
    }

    public function getCommunicationBarringProfile5()
    {
        return (!$this->communicationBarringProfile5) ?: $this->communicationBarringProfile5->value();
    }

    public function setCommunicationBarringProfile6($communicationBarringProfile6)
    {
        $communicationBarringProfile6 and $this->communicationBarringProfile6 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile6);
    }

    public function getCommunicationBarringProfile6()
    {
        return (!$this->communicationBarringProfile6) ?: $this->communicationBarringProfile6->value();
    }

    public function setCommunicationBarringProfile7($communicationBarringProfile7)
    {
        $communicationBarringProfile7 and $this->communicationBarringProfile7 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile7);
    }

    public function getCommunicationBarringProfile7()
    {
        return (!$this->communicationBarringProfile7) ?: $this->communicationBarringProfile7->value();
    }

    public function setCommunicationBarringProfile8($communicationBarringProfile8)
    {
        $communicationBarringProfile8 and $this->communicationBarringProfile8 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile8);
    }

    public function getCommunicationBarringProfile8()
    {
        return (!$this->communicationBarringProfile8) ?: $this->communicationBarringProfile8->value();
    }

    public function setCommunicationBarringProfile9($communicationBarringProfile9)
    {
        $communicationBarringProfile9 and $this->communicationBarringProfile9 = new NetworkClassOfServiceCommunicationBarringProfile($communicationBarringProfile9);
    }

    public function getCommunicationBarringProfile9()
    {
        return (!$this->communicationBarringProfile9) ?: $this->communicationBarringProfile9->value();
    }

    public function setNetworkTranslationIndex($networkTranslationIndex)
    {
        $networkTranslationIndex and $this->networkTranslationIndex = new NetworkTranslationIndex($networkTranslationIndex);
    }

    public function getNetworkTranslationIndex()
    {
        return (!$this->networkTranslationIndex) ?: $this->networkTranslationIndex->value();
    }
}
