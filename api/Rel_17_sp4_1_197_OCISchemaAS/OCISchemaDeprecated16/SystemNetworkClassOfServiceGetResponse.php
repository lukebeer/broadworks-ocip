<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceCommunicationBarringProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemNetworkClassOfServiceGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemNetworkClassOfServiceGetRequest.
 *         The response contains the Network Class of Service information.
 *         Replaced by: SystemNetworkClassOfServiceGetResponse17
 */
class SystemNetworkClassOfServiceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
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

    /**
     * @return SystemNetworkClassOfServiceGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Network Class of Service description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf NetworkClassOfServiceDescription)
             ? $description
             : new NetworkClassOfServiceDescription($description);
    }

    /**
     * Network Class of Service description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile0(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile0 = null)
    {
        $this->communicationBarringProfile0 =  $communicationBarringProfile0;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile0()
    {
        return (!$this->communicationBarringProfile0) ?: $this->communicationBarringProfile0->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile1(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile1 = null)
    {
        $this->communicationBarringProfile1 =  $communicationBarringProfile1;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile1()
    {
        return (!$this->communicationBarringProfile1) ?: $this->communicationBarringProfile1->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile2(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile2 = null)
    {
        $this->communicationBarringProfile2 =  $communicationBarringProfile2;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile2()
    {
        return (!$this->communicationBarringProfile2) ?: $this->communicationBarringProfile2->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile3(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile3 = null)
    {
        $this->communicationBarringProfile3 =  $communicationBarringProfile3;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile3()
    {
        return (!$this->communicationBarringProfile3) ?: $this->communicationBarringProfile3->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile4(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile4 = null)
    {
        $this->communicationBarringProfile4 =  $communicationBarringProfile4;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile4()
    {
        return (!$this->communicationBarringProfile4) ?: $this->communicationBarringProfile4->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile5(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile5 = null)
    {
        $this->communicationBarringProfile5 =  $communicationBarringProfile5;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile5()
    {
        return (!$this->communicationBarringProfile5) ?: $this->communicationBarringProfile5->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile6(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile6 = null)
    {
        $this->communicationBarringProfile6 =  $communicationBarringProfile6;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile6()
    {
        return (!$this->communicationBarringProfile6) ?: $this->communicationBarringProfile6->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile7(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile7 = null)
    {
        $this->communicationBarringProfile7 =  $communicationBarringProfile7;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile7()
    {
        return (!$this->communicationBarringProfile7) ?: $this->communicationBarringProfile7->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile8(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile8 = null)
    {
        $this->communicationBarringProfile8 =  $communicationBarringProfile8;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile8()
    {
        return (!$this->communicationBarringProfile8) ?: $this->communicationBarringProfile8->getValue();
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function setCommunicationBarringProfile9(NetworkClassOfServiceCommunicationBarringProfile $communicationBarringProfile9 = null)
    {
        $this->communicationBarringProfile9 =  $communicationBarringProfile9;
    }

    /**
     * Communication Barring Profile defined as part of the Network Class
     *         Of Service. There can be only one primary profile within a Network
     *         Class Of Service.
     */
    public function getCommunicationBarringProfile9()
    {
        return (!$this->communicationBarringProfile9) ?: $this->communicationBarringProfile9->getValue();
    }
}
