<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceCommunicationBarringProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkTranslationIndex;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemNetworkClassOfServiceGetRequest17.
 *         The response contains the Network Class of Service information.
 */
class SystemNetworkClassOfServiceGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                         = 'SystemNetworkClassOfServiceGetResponse17';
    protected $description                  = null;
    protected $communicationBarringProfile0 = null;
    protected $communicationBarringProfile1 = null;
    protected $communicationBarringProfile2 = null;
    protected $communicationBarringProfile3 = null;
    protected $communicationBarringProfile4 = null;
    protected $communicationBarringProfile5 = null;
    protected $communicationBarringProfile6 = null;
    protected $communicationBarringProfile7 = null;
    protected $communicationBarringProfile8 = null;
    protected $communicationBarringProfile9 = null;
    protected $networkTranslationIndex      = null;

    /**
     * @return SystemNetworkClassOfServiceGetResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf NetworkClassOfServiceDescription)
             ? $description
             : new NetworkClassOfServiceDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile0(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0 = null)
    {
        if (!$communicationBarringProfile0) return $this;
        $this->communicationBarringProfile0 = $communicationBarringProfile0;
        $this->communicationBarringProfile0->setName('communicationBarringProfile0');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile0()
    {
        return $this->communicationBarringProfile0;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile1(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1 = null)
    {
        if (!$communicationBarringProfile1) return $this;
        $this->communicationBarringProfile1 = $communicationBarringProfile1;
        $this->communicationBarringProfile1->setName('communicationBarringProfile1');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile1()
    {
        return $this->communicationBarringProfile1;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile2(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2 = null)
    {
        if (!$communicationBarringProfile2) return $this;
        $this->communicationBarringProfile2 = $communicationBarringProfile2;
        $this->communicationBarringProfile2->setName('communicationBarringProfile2');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile2()
    {
        return $this->communicationBarringProfile2;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile3(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3 = null)
    {
        if (!$communicationBarringProfile3) return $this;
        $this->communicationBarringProfile3 = $communicationBarringProfile3;
        $this->communicationBarringProfile3->setName('communicationBarringProfile3');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile3()
    {
        return $this->communicationBarringProfile3;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile4(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4 = null)
    {
        if (!$communicationBarringProfile4) return $this;
        $this->communicationBarringProfile4 = $communicationBarringProfile4;
        $this->communicationBarringProfile4->setName('communicationBarringProfile4');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile4()
    {
        return $this->communicationBarringProfile4;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile5(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5 = null)
    {
        if (!$communicationBarringProfile5) return $this;
        $this->communicationBarringProfile5 = $communicationBarringProfile5;
        $this->communicationBarringProfile5->setName('communicationBarringProfile5');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile5()
    {
        return $this->communicationBarringProfile5;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile6(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6 = null)
    {
        if (!$communicationBarringProfile6) return $this;
        $this->communicationBarringProfile6 = $communicationBarringProfile6;
        $this->communicationBarringProfile6->setName('communicationBarringProfile6');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile6()
    {
        return $this->communicationBarringProfile6;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile7(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7 = null)
    {
        if (!$communicationBarringProfile7) return $this;
        $this->communicationBarringProfile7 = $communicationBarringProfile7;
        $this->communicationBarringProfile7->setName('communicationBarringProfile7');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile7()
    {
        return $this->communicationBarringProfile7;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile8(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8 = null)
    {
        if (!$communicationBarringProfile8) return $this;
        $this->communicationBarringProfile8 = $communicationBarringProfile8;
        $this->communicationBarringProfile8->setName('communicationBarringProfile8');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile8()
    {
        return $this->communicationBarringProfile8;
    }

    /**
     * 
     */
    public function setCommunicationBarringProfile9(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9 = null)
    {
        if (!$communicationBarringProfile9) return $this;
        $this->communicationBarringProfile9 = $communicationBarringProfile9;
        $this->communicationBarringProfile9->setName('communicationBarringProfile9');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceCommunicationBarringProfile
     */
    public function getCommunicationBarringProfile9()
    {
        return $this->communicationBarringProfile9;
    }

    /**
     * 
     */
    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        if (!$networkTranslationIndex) return $this;
        $this->networkTranslationIndex = ($networkTranslationIndex InstanceOf NetworkTranslationIndex)
             ? $networkTranslationIndex
             : new NetworkTranslationIndex($networkTranslationIndex);
        $this->networkTranslationIndex->setName('networkTranslationIndex');
        return $this;
    }

    /**
     * 
     * @return NetworkTranslationIndex
     */
    public function getNetworkTranslationIndex()
    {
        return $this->networkTranslationIndex->getValue();
    }
}
