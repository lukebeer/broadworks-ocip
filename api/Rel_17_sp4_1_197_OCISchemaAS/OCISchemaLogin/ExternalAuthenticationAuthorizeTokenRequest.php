<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LoginToken;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\ExternalAuthenticationAuthorizeTokenResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * This command is part of the Portal API.
 *         Sent when a Web or CLI user logs in using external authentication.
 *         The password must be hashed. The password hashing algorithm is:
 *         1) The message digest of the user's plain password is calculated using the SHA algorithm.
 *         2) For every four bits in the 160-bit digest, starting from the first bit, it is
 *            converted into a character in ASCII Hex format (0 through 9, a through f).
 *            The result is a 40-character string, for example, f7a9e24777ec23212c54d7a350bc5bea5477fdbb.
 *         3) The above string then is used to populate the password field in the request.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ExternalAuthenticationAuthorizeTokenRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $userId     = null;
    protected $password   = null;
    protected $loginToken = null;

    public function __construct(
         $userId,
         $password = null,
         $loginToken
    ) {
        $this->setUserId($userId);
        $this->setPassword($password);
        $this->setLoginToken($loginToken);
    }

    /**
     * @return ExternalAuthenticationAuthorizeTokenResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
    }

    /**
     * 
     */
    public function getPassword()
    {
        return (!$this->password) ?: $this->password->getValue();
    }

    /**
     * Login Token.
     */
    public function setLoginToken($loginToken = null)
    {
        $this->loginToken = ($loginToken InstanceOf LoginToken)
             ? $loginToken
             : new LoginToken($loginToken);
    }

    /**
     * Login Token.
     */
    public function getLoginToken()
    {
        return (!$this->loginToken) ?: $this->loginToken->getValue();
    }
}
