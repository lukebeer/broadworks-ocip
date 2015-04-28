<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignedPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * LoginRequest14sp4 is 2nd stage of the 2 stage OCI login process.
 *         The signedPassword is not required for external authentication login from a trusted host (ACL).
 */
class LoginRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LoginResponse14sp4';
    public    $elementName = 'LoginRequest14sp4';
    protected $userId;
    protected $signedPassword;
    protected $plainTextPassword;

    public function __construct(
         $userId = '',
         $signedPassword = null,
         $plainTextPassword = null
    ) {
        $this->setUserId($userId);
        $this->setSignedPassword($signedPassword);
        $this->setPlainTextPassword($plainTextPassword);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LoginResponse14sp4 $response
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
    public function setSignedPassword($signedPassword = null)
    {
        $this->signedPassword = ($signedPassword InstanceOf SignedPassword)
             ? $signedPassword
             : new SignedPassword($signedPassword);
        $this->signedPassword->setElementName('signedPassword');
        return $this;
    }

    /**
     * 
     * @return SignedPassword $signedPassword
     */
    public function getSignedPassword()
    {
        return ($this->signedPassword)
            ? $this->signedPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlainTextPassword($plainTextPassword = null)
    {
        $this->plainTextPassword = ($plainTextPassword InstanceOf Password)
             ? $plainTextPassword
             : new Password($plainTextPassword);
        $this->plainTextPassword->setElementName('plainTextPassword');
        return $this;
    }

    /**
     * 
     * @return Password $plainTextPassword
     */
    public function getPlainTextPassword()
    {
        return ($this->plainTextPassword)
            ? $this->plainTextPassword->getElementValue()
            : null;
    }
}
