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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the address and credentials of the File Repository hosting the requested access device file. Also get the file name and path on the File Repository. The response is either a DeviceManagementFileAuthLocationGetResponse or an ErrorResponse.
 */
class DeviceManagementFileAuthLocationGetRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $deviceAccessProtocol      = null;
    protected $deviceAccessMethod        = null;
    protected $deviceAccessURI           = null;
    protected $accessDeviceUserName      = null;
    protected $accessDeviceUserPassword  = null;
    protected $signedPassword            = null;
    protected $macAddress                = null;
    protected $realmName                 = null;
    protected $digestHa1Complement       = null;
    protected $digestResponse            = null;

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

    public function setDeviceAccessProtocol($deviceAccessProtocol = null)
    {
        $this->deviceAccessProtocol = ($deviceAccessProtocol InstanceOf DeviceAccessProtocol16)
             ? $deviceAccessProtocol
             : new DeviceAccessProtocol16($deviceAccessProtocol);
    }

    public function getDeviceAccessProtocol()
    {
        return (!$this->deviceAccessProtocol) ?: $this->deviceAccessProtocol->value();
    }

    public function setDeviceAccessMethod($deviceAccessMethod = null)
    {
        $this->deviceAccessMethod = ($deviceAccessMethod InstanceOf FileRepositoryAccessType)
             ? $deviceAccessMethod
             : new FileRepositoryAccessType($deviceAccessMethod);
    }

    public function getDeviceAccessMethod()
    {
        return (!$this->deviceAccessMethod) ?: $this->deviceAccessMethod->value();
    }

    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        $this->deviceAccessURI = ($deviceAccessURI InstanceOf DeviceManagementAccessURI)
             ? $deviceAccessURI
             : new DeviceManagementAccessURI($deviceAccessURI);
    }

    public function getDeviceAccessURI()
    {
        return (!$this->deviceAccessURI) ?: $this->deviceAccessURI->value();
    }

    public function setAccessDeviceUserName($accessDeviceUserName = null)
    {
        $this->accessDeviceUserName = ($accessDeviceUserName InstanceOf UserId)
             ? $accessDeviceUserName
             : new UserId($accessDeviceUserName);
    }

    public function getAccessDeviceUserName()
    {
        return (!$this->accessDeviceUserName) ?: $this->accessDeviceUserName->value();
    }

    public function setAccessDeviceUserPassword($accessDeviceUserPassword = null)
    {
        $this->accessDeviceUserPassword = ($accessDeviceUserPassword InstanceOf Password)
             ? $accessDeviceUserPassword
             : new Password($accessDeviceUserPassword);
    }

    public function getAccessDeviceUserPassword()
    {
        return (!$this->accessDeviceUserPassword) ?: $this->accessDeviceUserPassword->value();
    }

    public function setSignedPassword($signedPassword = null)
    {
        $this->signedPassword = ($signedPassword InstanceOf SignedPassword)
             ? $signedPassword
             : new SignedPassword($signedPassword);
    }

    public function getSignedPassword()
    {
        return (!$this->signedPassword) ?: $this->signedPassword->value();
    }

    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
    }

    public function getMacAddress()
    {
        return (!$this->macAddress) ?: $this->macAddress->value();
    }

    public function setRealmName($realmName = null)
    {
        $this->realmName = ($realmName InstanceOf RealmName)
             ? $realmName
             : new RealmName($realmName);
    }

    public function getRealmName()
    {
        return (!$this->realmName) ?: $this->realmName->value();
    }

    public function setDigestHa1Complement($digestHa1Complement = null)
    {
        $this->digestHa1Complement = ($digestHa1Complement InstanceOf DigestHa1Complement)
             ? $digestHa1Complement
             : new DigestHa1Complement($digestHa1Complement);
    }

    public function getDigestHa1Complement()
    {
        return (!$this->digestHa1Complement) ?: $this->digestHa1Complement->value();
    }

    public function setDigestResponse($digestResponse = null)
    {
        $this->digestResponse = ($digestResponse InstanceOf Md5Hash)
             ? $digestResponse
             : new Md5Hash($digestResponse);
    }

    public function getDigestResponse()
    {
        return (!$this->digestResponse) ?: $this->digestResponse->value();
    }
}
