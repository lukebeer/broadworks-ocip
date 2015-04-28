<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceChargeNumber; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Charge Number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserChargeNumberModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserChargeNumberModifyRequest';
    protected $userId;
    protected $phoneNumber;
    protected $useChargeNumberForEnhancedTranslations;
    protected $sendChargeNumberToNetwork;

    public function __construct(
         $userId = '',
         $phoneNumber = null,
         $useChargeNumberForEnhancedTranslations = null,
         $sendChargeNumberToNetwork = null
    ) {
        $this->setUserId($userId);
        $this->setPhoneNumber($phoneNumber);
        $this->setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations);
        $this->setSendChargeNumberToNetwork($sendChargeNumberToNetwork);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations = null)
    {
        $this->useChargeNumberForEnhancedTranslations = new PrimitiveType($useChargeNumberForEnhancedTranslations);
        $this->useChargeNumberForEnhancedTranslations->setElementName('useChargeNumberForEnhancedTranslations');
        return $this;
    }

    /**
     * 
     * @return boolean $useChargeNumberForEnhancedTranslations
     */
    public function getUseChargeNumberForEnhancedTranslations()
    {
        return ($this->useChargeNumberForEnhancedTranslations)
            ? $this->useChargeNumberForEnhancedTranslations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendChargeNumberToNetwork($sendChargeNumberToNetwork = null)
    {
        $this->sendChargeNumberToNetwork = new PrimitiveType($sendChargeNumberToNetwork);
        $this->sendChargeNumberToNetwork->setElementName('sendChargeNumberToNetwork');
        return $this;
    }

    /**
     * 
     * @return boolean $sendChargeNumberToNetwork
     */
    public function getSendChargeNumberToNetwork()
    {
        return ($this->sendChargeNumberToNetwork)
            ? $this->sendChargeNumberToNetwork->getElementValue()
            : null;
    }
}
