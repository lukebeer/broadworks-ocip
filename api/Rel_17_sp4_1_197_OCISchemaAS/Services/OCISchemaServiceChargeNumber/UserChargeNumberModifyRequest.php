<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceChargeNumber; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Charge Number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserChargeNumberModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                   = 'UserChargeNumberModifyRequest';
    protected $userId                                 = null;
    protected $phoneNumber                            = null;
    protected $useChargeNumberForEnhancedTranslations = null;
    protected $sendChargeNumberToNetwork              = null;

    public function __construct(
         $userId,
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations = null)
    {
        if (!$useChargeNumberForEnhancedTranslations) return $this;
        $this->useChargeNumberForEnhancedTranslations = new PrimitiveType($useChargeNumberForEnhancedTranslations);
        $this->useChargeNumberForEnhancedTranslations->setName('useChargeNumberForEnhancedTranslations');
        return $this;
    }

    /**
     * 
     * @return boolean $useChargeNumberForEnhancedTranslations
     */
    public function getUseChargeNumberForEnhancedTranslations()
    {
        return $this->useChargeNumberForEnhancedTranslations->getValue();
    }

    /**
     * 
     */
    public function setSendChargeNumberToNetwork($sendChargeNumberToNetwork = null)
    {
        if (!$sendChargeNumberToNetwork) return $this;
        $this->sendChargeNumberToNetwork = new PrimitiveType($sendChargeNumberToNetwork);
        $this->sendChargeNumberToNetwork->setName('sendChargeNumberToNetwork');
        return $this;
    }

    /**
     * 
     * @return boolean $sendChargeNumberToNetwork
     */
    public function getSendChargeNumberToNetwork()
    {
        return $this->sendChargeNumberToNetwork->getValue();
    }
}
