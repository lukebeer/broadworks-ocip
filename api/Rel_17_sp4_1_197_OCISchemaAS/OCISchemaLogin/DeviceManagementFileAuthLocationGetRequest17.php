<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\DeviceManagementFileAuthLocationGetResponse17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the address and credentials of the File Repository hosting the requested access device file. 
 *         Also get the file name and path on the File Repository. 
 *         The response is either a DeviceManagementFileAuthLocationGetResponse17 or an ErrorResponse.
 */
class DeviceManagementFileAuthLocationGetRequest17 extends ComplexType implements ComplexInterface
{
    public    $responseType             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\DeviceManagementFileAuthLocationGetResponse17';
    public    $name                     = 'DeviceManagementFileAuthLocationGetRequest17';
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
     * @return DeviceManagementFileAuthLocationGetResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceAccessProtocol($deviceAccessProtocol = null)
    {
        if (!$deviceAccessProtocol) return $this;
        $this->deviceAccessProtocol = ($deviceAccessProtocol InstanceOf DeviceAccessProtocol16)
             ? $deviceAccessProtocol
             : new DeviceAccessProtocol16($deviceAccessProtocol);
        $this->deviceAccessProtocol->setName('deviceAccessProtocol');
        return $this;
    }

    /**
     * 
     * @return DeviceAccessProtocol16
     */
    public function getDeviceAccessProtocol()
    {
        return $this->deviceAccessProtocol->getValue();
    }

    /**
     * 
     */
    public function setDeviceAccessMethod($deviceAccessMethod = null)
    {
        if (!$deviceAccessMethod) return $this;
        $this->deviceAccessMethod = ($deviceAccessMethod InstanceOf FileRepositoryAccessType)
             ? $deviceAccessMethod
             : new FileRepositoryAccessType($deviceAccessMethod);
        $this->deviceAccessMethod->setName('deviceAccessMethod');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryAccessType
     */
    public function getDeviceAccessMethod()
    {
        return $this->deviceAccessMethod->getValue();
    }

    /**
     * 
     */
    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        if (!$deviceAccessURI) return $this;
        $this->deviceAccessURI = ($deviceAccessURI InstanceOf DeviceManagementAccessURI)
             ? $deviceAccessURI
             : new DeviceManagementAccessURI($deviceAccessURI);
        $this->deviceAccessURI->setName('deviceAccessURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI
     */
    public function getDeviceAccessURI()
    {
        return $this->deviceAccessURI->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceUserName($accessDeviceUserName = null)
    {
        if (!$accessDeviceUserName) return $this;
        $this->accessDeviceUserName = ($accessDeviceUserName InstanceOf UserId)
             ? $accessDeviceUserName
             : new UserId($accessDeviceUserName);
        $this->accessDeviceUserName->setName('accessDeviceUserName');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getAccessDeviceUserName()
    {
        return $this->accessDeviceUserName->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceUserPassword($accessDeviceUserPassword = null)
    {
        if (!$accessDeviceUserPassword) return $this;
        $this->accessDeviceUserPassword = ($accessDeviceUserPassword InstanceOf Password)
             ? $accessDeviceUserPassword
             : new Password($accessDeviceUserPassword);
        $this->accessDeviceUserPassword->setName('accessDeviceUserPassword');
        return $this;
    }

    /**
     * 
     * @return Password
     */
    public function getAccessDeviceUserPassword()
    {
        return $this->accessDeviceUserPassword->getValue();
    }

    /**
     * 
     */
    public function setSignedPassword($signedPassword = null)
    {
        if (!$signedPassword) return $this;
        $this->signedPassword = ($signedPassword InstanceOf SignedPassword)
             ? $signedPassword
             : new SignedPassword($signedPassword);
        $this->signedPassword->setName('signedPassword');
        return $this;
    }

    /**
     * 
     * @return SignedPassword
     */
    public function getSignedPassword()
    {
        return $this->signedPassword->getValue();
    }

    /**
     * 
     */
    public function setMacAddress($macAddress = null)
    {
        if (!$macAddress) return $this;
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
        $this->macAddress->setName('macAddress');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMACAddress
     */
    public function getMacAddress()
    {
        return $this->macAddress->getValue();
    }

    /**
     * 
     */
    public function setRealmName($realmName = null)
    {
        if (!$realmName) return $this;
        $this->realmName = ($realmName InstanceOf RealmName)
             ? $realmName
             : new RealmName($realmName);
        $this->realmName->setName('realmName');
        return $this;
    }

    /**
     * 
     * @return RealmName
     */
    public function getRealmName()
    {
        return $this->realmName->getValue();
    }

    /**
     * 
     */
    public function setDigestHa1Complement($digestHa1Complement = null)
    {
        if (!$digestHa1Complement) return $this;
        $this->digestHa1Complement = ($digestHa1Complement InstanceOf DigestHa1Complement)
             ? $digestHa1Complement
             : new DigestHa1Complement($digestHa1Complement);
        $this->digestHa1Complement->setName('digestHa1Complement');
        return $this;
    }

    /**
     * 
     * @return DigestHa1Complement
     */
    public function getDigestHa1Complement()
    {
        return $this->digestHa1Complement->getValue();
    }

    /**
     * 
     */
    public function setDigestResponse($digestResponse = null)
    {
        if (!$digestResponse) return $this;
        $this->digestResponse = ($digestResponse InstanceOf Md5Hash)
             ? $digestResponse
             : new Md5Hash($digestResponse);
        $this->digestResponse->setName('digestResponse');
        return $this;
    }

    /**
     * 
     * @return Md5Hash
     */
    public function getDigestResponse()
    {
        return $this->digestResponse->getValue();
    }
}
