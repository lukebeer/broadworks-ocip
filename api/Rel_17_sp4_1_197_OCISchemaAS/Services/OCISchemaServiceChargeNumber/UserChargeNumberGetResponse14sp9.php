<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceChargeNumber; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserChargeNumberGetRequest14sp9.
 */
class UserChargeNumberGetResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserChargeNumberGetResponse14sp9';
    protected $phoneNumber;
    protected $useChargeNumberForEnhancedTranslations;
    protected $sendChargeNumberToNetwork;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceChargeNumber\UserChargeNumberGetResponse14sp9 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
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
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations = null)
    {
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
        return ($this->useChargeNumberForEnhancedTranslations) ? $this->useChargeNumberForEnhancedTranslations->getValue() : null;
    }

    /**
     * 
     */
    public function setSendChargeNumberToNetwork($sendChargeNumberToNetwork = null)
    {
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
        return ($this->sendChargeNumberToNetwork) ? $this->sendChargeNumberToNetwork->getValue() : null;
    }
}
