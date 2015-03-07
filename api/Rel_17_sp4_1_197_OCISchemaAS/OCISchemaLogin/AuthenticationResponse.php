<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitalSignatureAlgorithm;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * AuthenticationRequest/Response is 1st stage of the 2 stage OCI login process.
 */
class AuthenticationResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $userId             = null;
    protected $nonce              = null;
    protected $passwordAlgorithm  = null;


    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setNonce(xs:string $nonce = null)
    {
    }

    public function getNonce()
    {
        return (!$this->nonce) ?: $this->nonce->value();
    }

    public function setPasswordAlgorithm($passwordAlgorithm = null)
    {
        $this->passwordAlgorithm = ($passwordAlgorithm InstanceOf DigitalSignatureAlgorithm)
             ? $passwordAlgorithm
             : new DigitalSignatureAlgorithm($passwordAlgorithm);
    }

    public function getPasswordAlgorithm()
    {
        return (!$this->passwordAlgorithm) ?: $this->passwordAlgorithm->value();
    }
}
