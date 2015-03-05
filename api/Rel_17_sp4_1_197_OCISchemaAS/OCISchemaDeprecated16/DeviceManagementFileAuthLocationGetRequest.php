<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceAccessProtocol16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryAccessType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignedPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RealmName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigestHa1Complement;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Md5Hash;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the address and credentials of the File Repository hosting the requested access device file. Also get the file name and path on the File Repository. The response is either a DeviceManagementFileAuthLocationGetResponse or an ErrorResponse.
 */
class DeviceManagementFileAuthLocationGetRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceAccessProtocol,
             $deviceAccessMethod,
             $deviceAccessURI,
             $accessDeviceUserName=null,
             $accessDeviceUserPassword=null,
             $signedPassword=null,
             $macAddress=null,
             $realmName=null,
             $digestHa1Complement=null,
             $digestResponse=null
    ) {
        $this->deviceAccessProtocol     = new DeviceAccessProtocol16($deviceAccessProtocol);
        $this->deviceAccessMethod       = new FileRepositoryAccessType($deviceAccessMethod);
        $this->deviceAccessURI          = new DeviceManagementAccessURI($deviceAccessURI);
        $this->accessDeviceUserName     = new UserId($accessDeviceUserName);
        $this->accessDeviceUserPassword = new Password($accessDeviceUserPassword);
        $this->signedPassword           = new SignedPassword($signedPassword);
        $this->macAddress               = new AccessDeviceMACAddress($macAddress);
        $this->realmName                = new RealmName($realmName);
        $this->digestHa1Complement      = new DigestHa1Complement($digestHa1Complement);
        $this->digestResponse           = new Md5Hash($digestResponse);
        $this->args                     = func_get_args();
    }

    public function setDeviceAccessProtocol($deviceAccessProtocol)
    {
        $deviceAccessProtocol and $this->deviceAccessProtocol = new DeviceAccessProtocol16($deviceAccessProtocol);
    }

    public function getDeviceAccessProtocol()
    {
        return (!$this->deviceAccessProtocol) ?: $this->deviceAccessProtocol->value();
    }

    public function setDeviceAccessMethod($deviceAccessMethod)
    {
        $deviceAccessMethod and $this->deviceAccessMethod = new FileRepositoryAccessType($deviceAccessMethod);
    }

    public function getDeviceAccessMethod()
    {
        return (!$this->deviceAccessMethod) ?: $this->deviceAccessMethod->value();
    }

    public function setDeviceAccessURI($deviceAccessURI)
    {
        $deviceAccessURI and $this->deviceAccessURI = new DeviceManagementAccessURI($deviceAccessURI);
    }

    public function getDeviceAccessURI()
    {
        return (!$this->deviceAccessURI) ?: $this->deviceAccessURI->value();
    }

    public function setAccessDeviceUserName($accessDeviceUserName)
    {
        $accessDeviceUserName and $this->accessDeviceUserName = new UserId($accessDeviceUserName);
    }

    public function getAccessDeviceUserName()
    {
        return (!$this->accessDeviceUserName) ?: $this->accessDeviceUserName->value();
    }

    public function setAccessDeviceUserPassword($accessDeviceUserPassword)
    {
        $accessDeviceUserPassword and $this->accessDeviceUserPassword = new Password($accessDeviceUserPassword);
    }

    public function getAccessDeviceUserPassword()
    {
        return (!$this->accessDeviceUserPassword) ?: $this->accessDeviceUserPassword->value();
    }

    public function setSignedPassword($signedPassword)
    {
        $signedPassword and $this->signedPassword = new SignedPassword($signedPassword);
    }

    public function getSignedPassword()
    {
        return (!$this->signedPassword) ?: $this->signedPassword->value();
    }

    public function setMacAddress($macAddress)
    {
        $macAddress and $this->macAddress = new AccessDeviceMACAddress($macAddress);
    }

    public function getMacAddress()
    {
        return (!$this->macAddress) ?: $this->macAddress->value();
    }

    public function setRealmName($realmName)
    {
        $realmName and $this->realmName = new RealmName($realmName);
    }

    public function getRealmName()
    {
        return (!$this->realmName) ?: $this->realmName->value();
    }

    public function setDigestHa1Complement($digestHa1Complement)
    {
        $digestHa1Complement and $this->digestHa1Complement = new DigestHa1Complement($digestHa1Complement);
    }

    public function getDigestHa1Complement()
    {
        return (!$this->digestHa1Complement) ?: $this->digestHa1Complement->value();
    }

    public function setDigestResponse($digestResponse)
    {
        $digestResponse and $this->digestResponse = new Md5Hash($digestResponse);
    }

    public function getDigestResponse()
    {
        return (!$this->digestResponse) ?: $this->digestResponse->value();
    }
}
