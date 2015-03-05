<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Return the address and credentials of the File Repository hosting the requested access device file. Also return the file name and path on the File Repository. This is a response to DeviceManagementFileAuthLocationGetRequest.
 */
class DeviceManagementFileAuthLocationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $fileRepositoryUserName,
             $fileRepositoryPassword,
             $netAddress,
             $remoteFileFormat,
             $portNumber=null,
             $rootDirectory=null,
             $cpeFileDirectory=null,
             $secure=null,
             $macInNonRequestURI=null,
             $macFormatInNonRequestURI=null,
             $useHttpDigestAuthentication=null,
             $macBasedFileAuthentication=null,
             $userNamePasswordFileAuthentication=null,
             $completionNotification=null,
             $fileCategory=null
    ) {
        $this->fileRepositoryUserName             = new FileRepositoryUserName($fileRepositoryUserName);
        $this->fileRepositoryPassword             = new FileRepositoryUserPassword($fileRepositoryPassword);
        $this->netAddress                         = new NetAddress($netAddress);
        $this->remoteFileFormat                   = new DeviceManagementFileFormat($remoteFileFormat);
        $this->portNumber                         = new Port($portNumber);
        $this->rootDirectory                      = new CPEFileDirectory($rootDirectory);
        $this->cpeFileDirectory                   = new CPEFileDirectory($cpeFileDirectory);
        $this->secure                             = $secure;
        $this->macInNonRequestURI                 = $macInNonRequestURI;
        $this->macFormatInNonRequestURI           = new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->useHttpDigestAuthentication        = $useHttpDigestAuthentication;
        $this->macBasedFileAuthentication         = $macBasedFileAuthentication;
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        $this->completionNotification             = $completionNotification;
        $this->fileCategory                       = new DeviceManagementFileCategory($fileCategory);
        $this->args                               = func_get_args();
    }

    public function setFileRepositoryUserName($fileRepositoryUserName)
    {
        $fileRepositoryUserName and $this->fileRepositoryUserName = new FileRepositoryUserName($fileRepositoryUserName);
    }

    public function getFileRepositoryUserName()
    {
        return (!$this->fileRepositoryUserName) ?: $this->fileRepositoryUserName->value();
    }

    public function setFileRepositoryPassword($fileRepositoryPassword)
    {
        $fileRepositoryPassword and $this->fileRepositoryPassword = new FileRepositoryUserPassword($fileRepositoryPassword);
    }

    public function getFileRepositoryPassword()
    {
        return (!$this->fileRepositoryPassword) ?: $this->fileRepositoryPassword->value();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new NetAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setRemoteFileFormat($remoteFileFormat)
    {
        $remoteFileFormat and $this->remoteFileFormat = new DeviceManagementFileFormat($remoteFileFormat);
    }

    public function getRemoteFileFormat()
    {
        return (!$this->remoteFileFormat) ?: $this->remoteFileFormat->value();
    }

    public function setPortNumber($portNumber)
    {
        $portNumber and $this->portNumber = new Port($portNumber);
    }

    public function getPortNumber()
    {
        return (!$this->portNumber) ?: $this->portNumber->value();
    }

    public function setRootDirectory($rootDirectory)
    {
        $rootDirectory and $this->rootDirectory = new CPEFileDirectory($rootDirectory);
    }

    public function getRootDirectory()
    {
        return (!$this->rootDirectory) ?: $this->rootDirectory->value();
    }

    public function setCpeFileDirectory($cpeFileDirectory)
    {
        $cpeFileDirectory and $this->cpeFileDirectory = new CPEFileDirectory($cpeFileDirectory);
    }

    public function getCpeFileDirectory()
    {
        return (!$this->cpeFileDirectory) ?: $this->cpeFileDirectory->value();
    }

    public function setSecure($secure)
    {
        $secure and $this->secure = new xs:boolean($secure);
    }

    public function getSecure()
    {
        return (!$this->secure) ?: $this->secure->value();
    }

    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $macInNonRequestURI and $this->macInNonRequestURI = new xs:boolean($macInNonRequestURI);
    }

    public function getMacInNonRequestURI()
    {
        return (!$this->macInNonRequestURI) ?: $this->macInNonRequestURI->value();
    }

    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $macFormatInNonRequestURI and $this->macFormatInNonRequestURI = new DeviceManagementAccessURI($macFormatInNonRequestURI);
    }

    public function getMacFormatInNonRequestURI()
    {
        return (!$this->macFormatInNonRequestURI) ?: $this->macFormatInNonRequestURI->value();
    }

    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $useHttpDigestAuthentication and $this->useHttpDigestAuthentication = new xs:boolean($useHttpDigestAuthentication);
    }

    public function getUseHttpDigestAuthentication()
    {
        return (!$this->useHttpDigestAuthentication) ?: $this->useHttpDigestAuthentication->value();
    }

    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $macBasedFileAuthentication and $this->macBasedFileAuthentication = new xs:boolean($macBasedFileAuthentication);
    }

    public function getMacBasedFileAuthentication()
    {
        return (!$this->macBasedFileAuthentication) ?: $this->macBasedFileAuthentication->value();
    }

    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $userNamePasswordFileAuthentication and $this->userNamePasswordFileAuthentication = new xs:boolean($userNamePasswordFileAuthentication);
    }

    public function getUserNamePasswordFileAuthentication()
    {
        return (!$this->userNamePasswordFileAuthentication) ?: $this->userNamePasswordFileAuthentication->value();
    }

    public function setCompletionNotification($completionNotification)
    {
        $completionNotification and $this->completionNotification = new xs:boolean($completionNotification);
    }

    public function getCompletionNotification()
    {
        return (!$this->completionNotification) ?: $this->completionNotification->value();
    }

    public function setFileCategory($fileCategory)
    {
        $fileCategory and $this->fileCategory = new DeviceManagementFileCategory($fileCategory);
    }

    public function getFileCategory()
    {
        return (!$this->fileCategory) ?: $this->fileCategory->value();
    }
}
