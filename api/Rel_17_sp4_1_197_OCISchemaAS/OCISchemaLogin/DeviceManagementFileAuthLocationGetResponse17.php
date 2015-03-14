<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Return the address and credentials of the File Repository hosting the requested access device file. 
 *         Also return the file name and path on the File Repository. 
 *         This is a response to DeviceManagementFileAuthLocationGetRequest17.
 */
class DeviceManagementFileAuthLocationGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                               = 'DeviceManagementFileAuthLocationGetResponse17';
    protected $fileRepositoryUserName             = null;
    protected $fileRepositoryPassword             = null;
    protected $netAddress                         = null;
    protected $remoteFileFormat                   = null;
    protected $portNumber                         = null;
    protected $rootDirectory                      = null;
    protected $cpeFileDirectory                   = null;
    protected $secure                             = null;
    protected $macInNonRequestURI                 = null;
    protected $macFormatInNonRequestURI           = null;
    protected $useHttpDigestAuthentication        = null;
    protected $macBasedFileAuthentication         = null;
    protected $userNamePasswordFileAuthentication = null;
    protected $completionNotification             = null;
    protected $fileCategory                       = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\DeviceManagementFileAuthLocationGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileRepositoryUserName($fileRepositoryUserName = null)
    {
        if (!$fileRepositoryUserName) return $this;
        $this->fileRepositoryUserName = ($fileRepositoryUserName InstanceOf FileRepositoryUserName)
             ? $fileRepositoryUserName
             : new FileRepositoryUserName($fileRepositoryUserName);
        $this->fileRepositoryUserName->setName('fileRepositoryUserName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserName $fileRepositoryUserName
     */
    public function getFileRepositoryUserName()
    {
        return $this->fileRepositoryUserName->getValue();
    }

    /**
     * 
     */
    public function setFileRepositoryPassword($fileRepositoryPassword = null)
    {
        if (!$fileRepositoryPassword) return $this;
        $this->fileRepositoryPassword = ($fileRepositoryPassword InstanceOf FileRepositoryUserPassword)
             ? $fileRepositoryPassword
             : new FileRepositoryUserPassword($fileRepositoryPassword);
        $this->fileRepositoryPassword->setName('fileRepositoryPassword');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserPassword $fileRepositoryPassword
     */
    public function getFileRepositoryPassword()
    {
        return $this->fileRepositoryPassword->getValue();
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        if (!$netAddress) return $this;
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return $this->netAddress->getValue();
    }

    /**
     * 
     */
    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        if (!$remoteFileFormat) return $this;
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
        $this->remoteFileFormat->setName('remoteFileFormat');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileFormat $remoteFileFormat
     */
    public function getRemoteFileFormat()
    {
        return $this->remoteFileFormat->getValue();
    }

    /**
     * 
     */
    public function setPortNumber($portNumber = null)
    {
        if (!$portNumber) return $this;
        $this->portNumber = ($portNumber InstanceOf Port)
             ? $portNumber
             : new Port($portNumber);
        $this->portNumber->setName('portNumber');
        return $this;
    }

    /**
     * 
     * @return Port $portNumber
     */
    public function getPortNumber()
    {
        return $this->portNumber->getValue();
    }

    /**
     * 
     */
    public function setRootDirectory($rootDirectory = null)
    {
        if (!$rootDirectory) return $this;
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
        $this->rootDirectory->setName('rootDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $rootDirectory
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory->getValue();
    }

    /**
     * 
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        if (!$cpeFileDirectory) return $this;
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
        $this->cpeFileDirectory->setName('cpeFileDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $cpeFileDirectory
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory->getValue();
    }

    /**
     * 
     */
    public function setSecure($secure = null)
    {
        if (!$secure) return $this;
        $this->secure = new PrimitiveType($secure);
        $this->secure->setName('secure');
        return $this;
    }

    /**
     * 
     * @return boolean $secure
     */
    public function getSecure()
    {
        return $this->secure->getValue();
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        if (!$macInNonRequestURI) return $this;
        $this->macInNonRequestURI = new PrimitiveType($macInNonRequestURI);
        $this->macInNonRequestURI->setName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return boolean $macInNonRequestURI
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI->getValue();
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        if (!$macFormatInNonRequestURI) return $this;
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI $macFormatInNonRequestURI
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI->getValue();
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        if (!$useHttpDigestAuthentication) return $this;
        $this->useHttpDigestAuthentication = new PrimitiveType($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $useHttpDigestAuthentication
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        if (!$macBasedFileAuthentication) return $this;
        $this->macBasedFileAuthentication = new PrimitiveType($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $macBasedFileAuthentication
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        if (!$userNamePasswordFileAuthentication) return $this;
        $this->userNamePasswordFileAuthentication = new PrimitiveType($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $userNamePasswordFileAuthentication
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setCompletionNotification($completionNotification = null)
    {
        if (!$completionNotification) return $this;
        $this->completionNotification = new PrimitiveType($completionNotification);
        $this->completionNotification->setName('completionNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $completionNotification
     */
    public function getCompletionNotification()
    {
        return $this->completionNotification->getValue();
    }

    /**
     * 
     */
    public function setFileCategory($fileCategory = null)
    {
        if (!$fileCategory) return $this;
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
        $this->fileCategory->setName('fileCategory');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileCategory $fileCategory
     */
    public function getFileCategory()
    {
        return $this->fileCategory->getValue();
    }
}
