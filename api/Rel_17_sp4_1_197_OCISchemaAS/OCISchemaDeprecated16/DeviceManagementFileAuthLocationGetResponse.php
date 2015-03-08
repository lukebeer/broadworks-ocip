<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Return the address and credentials of the File Repository hosting the requested access device file. Also return the file name and path on the File Repository. This is a response to DeviceManagementFileAuthLocationGetRequest.
 */
class DeviceManagementFileAuthLocationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
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
     * A user id for a File Repository.
     */
    public function setFileRepositoryUserName($fileRepositoryUserName = null)
    {
        $this->fileRepositoryUserName = ($fileRepositoryUserName InstanceOf FileRepositoryUserName)
             ? $fileRepositoryUserName
             : new FileRepositoryUserName($fileRepositoryUserName);
    }

    /**
     * A user id for a File Repository.
     */
    public function getFileRepositoryUserName()
    {
        return (!$this->fileRepositoryUserName) ?: $this->fileRepositoryUserName->getValue();
    }

    /**
     * A password for a File Repository.
     */
    public function setFileRepositoryPassword($fileRepositoryPassword = null)
    {
        $this->fileRepositoryPassword = ($fileRepositoryPassword InstanceOf FileRepositoryUserPassword)
             ? $fileRepositoryPassword
             : new FileRepositoryUserPassword($fileRepositoryPassword);
    }

    /**
     * A password for a File Repository.
     */
    public function getFileRepositoryPassword()
    {
        return (!$this->fileRepositoryPassword) ?: $this->fileRepositoryPassword->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * The file name format for an access device file managed by the Device Management System on BroadWorks.
     */
    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
    }

    /**
     * The file name format for an access device file managed by the Device Management System on BroadWorks.
     */
    public function getRemoteFileFormat()
    {
        return (!$this->remoteFileFormat) ?: $this->remoteFileFormat->getValue();
    }

    /**
     * TCP/IP Port.
     */
    public function setPortNumber($portNumber = null)
    {
        $this->portNumber = ($portNumber InstanceOf Port)
             ? $portNumber
             : new Port($portNumber);
    }

    /**
     * TCP/IP Port.
     */
    public function getPortNumber()
    {
        return (!$this->portNumber) ?: $this->portNumber->getValue();
    }

    /**
     * CPE Configuration File Directory.
     */
    public function setRootDirectory($rootDirectory = null)
    {
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
    }

    /**
     * CPE Configuration File Directory.
     */
    public function getRootDirectory()
    {
        return (!$this->rootDirectory) ?: $this->rootDirectory->getValue();
    }

    /**
     * CPE Configuration File Directory.
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
    }

    /**
     * CPE Configuration File Directory.
     */
    public function getCpeFileDirectory()
    {
        return (!$this->cpeFileDirectory) ?: $this->cpeFileDirectory->getValue();
    }

    /**
     * 
     */
    public function setSecure($secure = null)
    {
        $this->secure = (boolean) $secure;
    }

    /**
     * 
     */
    public function getSecure()
    {
        return (!$this->secure) ?: $this->secure->getValue();
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        $this->macInNonRequestURI = (boolean) $macInNonRequestURI;
    }

    /**
     * 
     */
    public function getMacInNonRequestURI()
    {
        return (!$this->macInNonRequestURI) ?: $this->macInNonRequestURI->getValue();
    }

    /**
     * The access URI that a device uses to access files on BroadWorks.
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
    }

    /**
     * The access URI that a device uses to access files on BroadWorks.
     */
    public function getMacFormatInNonRequestURI()
    {
        return (!$this->macFormatInNonRequestURI) ?: $this->macFormatInNonRequestURI->getValue();
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        $this->useHttpDigestAuthentication = (boolean) $useHttpDigestAuthentication;
    }

    /**
     * 
     */
    public function getUseHttpDigestAuthentication()
    {
        return (!$this->useHttpDigestAuthentication) ?: $this->useHttpDigestAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        $this->macBasedFileAuthentication = (boolean) $macBasedFileAuthentication;
    }

    /**
     * 
     */
    public function getMacBasedFileAuthentication()
    {
        return (!$this->macBasedFileAuthentication) ?: $this->macBasedFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        $this->userNamePasswordFileAuthentication = (boolean) $userNamePasswordFileAuthentication;
    }

    /**
     * 
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return (!$this->userNamePasswordFileAuthentication) ?: $this->userNamePasswordFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setCompletionNotification($completionNotification = null)
    {
        $this->completionNotification = (boolean) $completionNotification;
    }

    /**
     * 
     */
    public function getCompletionNotification()
    {
        return (!$this->completionNotification) ?: $this->completionNotification->getValue();
    }

    /**
     * The file category for an access device file managed by the Device Management System on BroadWorks. A static file has no variable content and only one copy is required on the repository.
     */
    public function setFileCategory($fileCategory = null)
    {
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
    }

    /**
     * The file category for an access device file managed by the Device Management System on BroadWorks. A static file has no variable content and only one copy is required on the repository.
     */
    public function getFileCategory()
    {
        return (!$this->fileCategory) ?: $this->fileCategory->getValue();
    }
}
