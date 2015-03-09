<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryAccessType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceAccessProtocol16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigestHa1Complement;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignedPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RealmName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Md5Hash;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\DeviceManagementFileAuthLocationGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the address and credentials of the File Repository hosting the requested access device file. Also get the file name and path on the File Repository. The response is either a DeviceManagementFileAuthLocationGetResponse or an ErrorResponse.
 */
class DeviceManagementFileAuthLocationGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\DeviceManagementFileAuthLocationGetResponse';
    public    $name                     = __CLASS__;
    protected $deviceAccessProtocol     = null;
    protected $deviceAccessMethod       = null;
    protected $deviceAccessURI          = null;
    protected $accessDeviceUserName     = null;
    protected $accessDeviceUserPassword = null;
    protected $signedPassword           = null;
    protected $macAddress               = null;
    protected $realmName                = null;
    protected $digestHa1Complement      = null;
    protected $digestResponse           = null;

    public function __construct(
         $deviceAccessProtocol,
         $deviceAccessMethod,
         $deviceAccessURI,
         $accessDeviceUserName = null,
         $accessDeviceUserPassword = null,
         $signedPassword = null,
         $macAddress = null,
         $realmName = null,
         $digestHa1Complement = null,
         $digestResponse = null
    ) {
        $this->setDeviceAccessProtocol($deviceAccessProtocol);
        $this->setDeviceAccessMethod($deviceAccessMethod);
        $this->setDeviceAccessURI($deviceAccessURI);
        $this->setAccessDeviceUserName($accessDeviceUserName);
        $this->setAccessDeviceUserPassword($accessDeviceUserPassword);
        $this->setSignedPassword($signedPassword);
        $this->setMacAddress($macAddress);
        $this->setRealmName($realmName);
        $this->setDigestHa1Complement($digestHa1Complement);
        $this->setDigestResponse($digestResponse);
    }

    /**
     * @return DeviceManagementFileAuthLocationGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Protocols that an access device can use to fetch files from BroadWorks.
     */
    public function setDeviceAccessProtocol($deviceAccessProtocol = null)
    {
        $this->deviceAccessProtocol = ($deviceAccessProtocol InstanceOf DeviceAccessProtocol16)
             ? $deviceAccessProtocol
             : new DeviceAccessProtocol16($deviceAccessProtocol);
    }

    /**
     * Protocols that an access device can use to fetch files from BroadWorks.
     */
    public function getDeviceAccessProtocol()
    {
        return (!$this->deviceAccessProtocol) ?: $this->deviceAccessProtocol->getValue();
    }

    /**
     * 
     */
    public function setDeviceAccessMethod($deviceAccessMethod = null)
    {
        $this->deviceAccessMethod = ($deviceAccessMethod InstanceOf FileRepositoryAccessType)
             ? $deviceAccessMethod
             : new FileRepositoryAccessType($deviceAccessMethod);
    }

    /**
     * 
     */
    public function getDeviceAccessMethod()
    {
        return (!$this->deviceAccessMethod) ?: $this->deviceAccessMethod->getValue();
    }

    /**
     * The access URI that a device uses to access files on BroadWorks.
     */
    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        $this->deviceAccessURI = ($deviceAccessURI InstanceOf DeviceManagementAccessURI)
             ? $deviceAccessURI
             : new DeviceManagementAccessURI($deviceAccessURI);
    }

    /**
     * The access URI that a device uses to access files on BroadWorks.
     */
    public function getDeviceAccessURI()
    {
        return (!$this->deviceAccessURI) ?: $this->deviceAccessURI->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setAccessDeviceUserName($accessDeviceUserName = null)
    {
        $this->accessDeviceUserName = ($accessDeviceUserName InstanceOf UserId)
             ? $accessDeviceUserName
             : new UserId($accessDeviceUserName);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getAccessDeviceUserName()
    {
        return (!$this->accessDeviceUserName) ?: $this->accessDeviceUserName->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceUserPassword($accessDeviceUserPassword = null)
    {
        $this->accessDeviceUserPassword = ($accessDeviceUserPassword InstanceOf Password)
             ? $accessDeviceUserPassword
             : new Password($accessDeviceUserPassword);
    }

    /**
     * 
     */
    public function getAccessDeviceUserPassword()
    {
        return (!$this->accessDeviceUserPassword) ?: $this->accessDeviceUserPassword->getValue();
    }

    /**
     * Signed Password.
     */
    public function setSignedPassword($signedPassword = null)
    {
        $this->signedPassword = ($signedPassword InstanceOf SignedPassword)
             ? $signedPassword
             : new SignedPassword($signedPassword);
    }

    /**
     * Signed Password.
     */
    public function getSignedPassword()
    {
        return (!$this->signedPassword) ?: $this->signedPassword->getValue();
    }

    /**
     * Access device MAC address.
     */
    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
    }

    /**
     * Access device MAC address.
     */
    public function getMacAddress()
    {
        return (!$this->macAddress) ?: $this->macAddress->getValue();
    }

    /**
     * Realm Name.
     */
    public function setRealmName($realmName = null)
    {
        $this->realmName = ($realmName InstanceOf RealmName)
             ? $realmName
             : new RealmName($realmName);
    }

    /**
     * Realm Name.
     */
    public function getRealmName()
    {
        return (!$this->realmName) ?: $this->realmName->getValue();
    }

    /**
     * Ha1 Complement of a Http Digest Authentication.
     */
    public function setDigestHa1Complement($digestHa1Complement = null)
    {
        $this->digestHa1Complement = ($digestHa1Complement InstanceOf DigestHa1Complement)
             ? $digestHa1Complement
             : new DigestHa1Complement($digestHa1Complement);
    }

    /**
     * Ha1 Complement of a Http Digest Authentication.
     */
    public function getDigestHa1Complement()
    {
        return (!$this->digestHa1Complement) ?: $this->digestHa1Complement->getValue();
    }

    /**
     * Byte Representation of a Md5 Hash.
     */
    public function setDigestResponse($digestResponse = null)
    {
        $this->digestResponse = ($digestResponse InstanceOf Md5Hash)
             ? $digestResponse
             : new Md5Hash($digestResponse);
    }

    /**
     * Byte Representation of a Md5 Hash.
     */
    public function getDigestResponse()
    {
        return (!$this->digestResponse) ?: $this->digestResponse->getValue();
    }
}
