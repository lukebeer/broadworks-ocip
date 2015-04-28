<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitalSignatureAlgorithm;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * AuthenticationRequest/Response is 1st stage of the 2 stage OCI login process.
 */
class AuthenticationResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AuthenticationResponse';
    protected $userId;
    protected $nonce;
    protected $passwordAlgorithm;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\AuthenticationResponse $response
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
    public function setNonce($nonce = null)
    {
        $this->nonce = new PrimitiveType($nonce);
        $this->nonce->setElementName('nonce');
        return $this;
    }

    /**
     * 
     * @return string $nonce
     */
    public function getNonce()
    {
        return ($this->nonce)
            ? $this->nonce->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPasswordAlgorithm($passwordAlgorithm = null)
    {
        $this->passwordAlgorithm = ($passwordAlgorithm InstanceOf DigitalSignatureAlgorithm)
             ? $passwordAlgorithm
             : new DigitalSignatureAlgorithm($passwordAlgorithm);
        $this->passwordAlgorithm->setElementName('passwordAlgorithm');
        return $this;
    }

    /**
     * 
     * @return DigitalSignatureAlgorithm $passwordAlgorithm
     */
    public function getPasswordAlgorithm()
    {
        return ($this->passwordAlgorithm)
            ? $this->passwordAlgorithm->getElementValue()
            : null;
    }
}
