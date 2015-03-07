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
    public    $name                                = __CLASS__;
    protected $fileRepositoryUserName              = null;
    protected $fileRepositoryPassword              = null;
    protected $netAddress                          = null;
    protected $remoteFileFormat                    = null;
    protected $portNumber                          = null;
    protected $rootDirectory                       = null;
    protected $cpeFileDirectory                    = null;
    protected $secure                              = null;
    protected $macInNonRequestURI                  = null;
    protected $macFormatInNonRequestURI            = null;
    protected $useHttpDigestAuthentication         = null;
    protected $macBasedFileAuthentication          = null;
    protected $userNamePasswordFileAuthentication  = null;
    protected $completionNotification              = null;
    protected $fileCategory                        = null;


    public function setFileRepositoryUserName($fileRepositoryUserName = null)
    {
        $this->fileRepositoryUserName = ($fileRepositoryUserName InstanceOf FileRepositoryUserName)
             ? $fileRepositoryUserName
             : new FileRepositoryUserName($fileRepositoryUserName);
    }

    public function getFileRepositoryUserName()
    {
        return (!$this->fileRepositoryUserName) ?: $this->fileRepositoryUserName->value();
    }

    public function setFileRepositoryPassword($fileRepositoryPassword = null)
    {
        $this->fileRepositoryPassword = ($fileRepositoryPassword InstanceOf FileRepositoryUserPassword)
             ? $fileRepositoryPassword
             : new FileRepositoryUserPassword($fileRepositoryPassword);
    }

    public function getFileRepositoryPassword()
    {
        return (!$this->fileRepositoryPassword) ?: $this->fileRepositoryPassword->value();
    }

    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
    }

    public function getRemoteFileFormat()
    {
        return (!$this->remoteFileFormat) ?: $this->remoteFileFormat->value();
    }

    public function setPortNumber($portNumber = null)
    {
        $this->portNumber = ($portNumber InstanceOf Port)
             ? $portNumber
             : new Port($portNumber);
    }

    public function getPortNumber()
    {
        return (!$this->portNumber) ?: $this->portNumber->value();
    }

    public function setRootDirectory($rootDirectory = null)
    {
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
    }

    public function getRootDirectory()
    {
        return (!$this->rootDirectory) ?: $this->rootDirectory->value();
    }

    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
    }

    public function getCpeFileDirectory()
    {
        return (!$this->cpeFileDirectory) ?: $this->cpeFileDirectory->value();
    }

    public function setSecure(xs:boolean $secure = null)
    {
    }

    public function getSecure()
    {
        return (!$this->secure) ?: $this->secure->value();
    }

    public function setMacInNonRequestURI(xs:boolean $macInNonRequestURI = null)
    {
    }

    public function getMacInNonRequestURI()
    {
        return (!$this->macInNonRequestURI) ?: $this->macInNonRequestURI->value();
    }

    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
    }

    public function getMacFormatInNonRequestURI()
    {
        return (!$this->macFormatInNonRequestURI) ?: $this->macFormatInNonRequestURI->value();
    }

    public function setUseHttpDigestAuthentication(xs:boolean $useHttpDigestAuthentication = null)
    {
    }

    public function getUseHttpDigestAuthentication()
    {
        return (!$this->useHttpDigestAuthentication) ?: $this->useHttpDigestAuthentication->value();
    }

    public function setMacBasedFileAuthentication(xs:boolean $macBasedFileAuthentication = null)
    {
    }

    public function getMacBasedFileAuthentication()
    {
        return (!$this->macBasedFileAuthentication) ?: $this->macBasedFileAuthentication->value();
    }

    public function setUserNamePasswordFileAuthentication(xs:boolean $userNamePasswordFileAuthentication = null)
    {
    }

    public function getUserNamePasswordFileAuthentication()
    {
        return (!$this->userNamePasswordFileAuthentication) ?: $this->userNamePasswordFileAuthentication->value();
    }

    public function setCompletionNotification(xs:boolean $completionNotification = null)
    {
    }

    public function getCompletionNotification()
    {
        return (!$this->completionNotification) ?: $this->completionNotification->value();
    }

    public function setFileCategory($fileCategory = null)
    {
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
    }

    public function getFileCategory()
    {
        return (!$this->fileCategory) ?: $this->fileCategory->value();
    }
}
