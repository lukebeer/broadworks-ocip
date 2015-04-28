<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkTranslationIndex;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a Roaming Network.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoamingNetworkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoamingNetworkModifyRequest';
    protected $mscAddress;
    protected $networkTranslationIndex;

    public function __construct(
         $mscAddress = '',
         $networkTranslationIndex = null
    ) {
        $this->setMscAddress($mscAddress);
        $this->setNetworkTranslationIndex($networkTranslationIndex);
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
    public function setMscAddress($mscAddress = null)
    {
        $this->mscAddress = ($mscAddress InstanceOf DN)
             ? $mscAddress
             : new DN($mscAddress);
        $this->mscAddress->setElementName('mscAddress');
        return $this;
    }

    /**
     * 
     * @return DN $mscAddress
     */
    public function getMscAddress()
    {
        return ($this->mscAddress)
            ? $this->mscAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkTranslationIndex($networkTranslationIndex = null)
    {
        $this->networkTranslationIndex = ($networkTranslationIndex InstanceOf NetworkTranslationIndex)
             ? $networkTranslationIndex
             : new NetworkTranslationIndex($networkTranslationIndex);
        $this->networkTranslationIndex->setElementName('networkTranslationIndex');
        return $this;
    }

    /**
     * 
     * @return NetworkTranslationIndex $networkTranslationIndex
     */
    public function getNetworkTranslationIndex()
    {
        return ($this->networkTranslationIndex)
            ? $this->networkTranslationIndex->getElementValue()
            : null;
    }
}
