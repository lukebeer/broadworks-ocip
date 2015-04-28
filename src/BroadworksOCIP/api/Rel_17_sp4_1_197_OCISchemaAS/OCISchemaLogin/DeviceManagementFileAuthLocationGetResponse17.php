<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryUserName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Return the address and credentials of the File Repository hosting the requested access device file. 
 *         Also return the file name and path on the File Repository. 
 *         This is a response to DeviceManagementFileAuthLocationGetRequest17.
 */
class DeviceManagementFileAuthLocationGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'DeviceManagementFileAuthLocationGetResponse17';
    protected $fileRepositoryUserName;
    protected $fileRepositoryPassword;
    protected $netAddress;
    protected $remoteFileFormat;
    protected $portNumber;
    protected $rootDirectory;
    protected $cpeFileDirectory;
    protected $secure;
    protected $macInNonRequestURI;
    protected $macFormatInNonRequestURI;
    protected $useHttpDigestAuthentication;
    protected $macBasedFileAuthentication;
    protected $userNamePasswordFileAuthentication;
    protected $completionNotification;
    protected $fileCategory;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\DeviceManagementFileAuthLocationGetResponse17 $response
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
        $this->fileRepositoryUserName = ($fileRepositoryUserName InstanceOf FileRepositoryUserName)
             ? $fileRepositoryUserName
             : new FileRepositoryUserName($fileRepositoryUserName);
        $this->fileRepositoryUserName->setElementName('fileRepositoryUserName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserName $fileRepositoryUserName
     */
    public function getFileRepositoryUserName()
    {
        return ($this->fileRepositoryUserName)
            ? $this->fileRepositoryUserName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFileRepositoryPassword($fileRepositoryPassword = null)
    {
        $this->fileRepositoryPassword = ($fileRepositoryPassword InstanceOf FileRepositoryUserPassword)
             ? $fileRepositoryPassword
             : new FileRepositoryUserPassword($fileRepositoryPassword);
        $this->fileRepositoryPassword->setElementName('fileRepositoryPassword');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryUserPassword $fileRepositoryPassword
     */
    public function getFileRepositoryPassword()
    {
        return ($this->fileRepositoryPassword)
            ? $this->fileRepositoryPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
        $this->remoteFileFormat->setElementName('remoteFileFormat');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileFormat $remoteFileFormat
     */
    public function getRemoteFileFormat()
    {
        return ($this->remoteFileFormat)
            ? $this->remoteFileFormat->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPortNumber($portNumber = null)
    {
        $this->portNumber = ($portNumber InstanceOf Port)
             ? $portNumber
             : new Port($portNumber);
        $this->portNumber->setElementName('portNumber');
        return $this;
    }

    /**
     * 
     * @return Port $portNumber
     */
    public function getPortNumber()
    {
        return ($this->portNumber)
            ? $this->portNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRootDirectory($rootDirectory = null)
    {
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
        $this->rootDirectory->setElementName('rootDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $rootDirectory
     */
    public function getRootDirectory()
    {
        return ($this->rootDirectory)
            ? $this->rootDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
        $this->cpeFileDirectory->setElementName('cpeFileDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $cpeFileDirectory
     */
    public function getCpeFileDirectory()
    {
        return ($this->cpeFileDirectory)
            ? $this->cpeFileDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSecure($secure = null)
    {
        $this->secure = new PrimitiveType($secure);
        $this->secure->setElementName('secure');
        return $this;
    }

    /**
     * 
     * @return boolean $secure
     */
    public function getSecure()
    {
        return ($this->secure)
            ? $this->secure->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        $this->macInNonRequestURI = new PrimitiveType($macInNonRequestURI);
        $this->macInNonRequestURI->setElementName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return boolean $macInNonRequestURI
     */
    public function getMacInNonRequestURI()
    {
        return ($this->macInNonRequestURI)
            ? $this->macInNonRequestURI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setElementName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI $macFormatInNonRequestURI
     */
    public function getMacFormatInNonRequestURI()
    {
        return ($this->macFormatInNonRequestURI)
            ? $this->macFormatInNonRequestURI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        $this->useHttpDigestAuthentication = new PrimitiveType($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setElementName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $useHttpDigestAuthentication
     */
    public function getUseHttpDigestAuthentication()
    {
        return ($this->useHttpDigestAuthentication)
            ? $this->useHttpDigestAuthentication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        $this->macBasedFileAuthentication = new PrimitiveType($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setElementName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $macBasedFileAuthentication
     */
    public function getMacBasedFileAuthentication()
    {
        return ($this->macBasedFileAuthentication)
            ? $this->macBasedFileAuthentication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        $this->userNamePasswordFileAuthentication = new PrimitiveType($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setElementName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $userNamePasswordFileAuthentication
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return ($this->userNamePasswordFileAuthentication)
            ? $this->userNamePasswordFileAuthentication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCompletionNotification($completionNotification = null)
    {
        $this->completionNotification = new PrimitiveType($completionNotification);
        $this->completionNotification->setElementName('completionNotification');
        return $this;
    }

    /**
     * 
     * @return boolean $completionNotification
     */
    public function getCompletionNotification()
    {
        return ($this->completionNotification)
            ? $this->completionNotification->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFileCategory($fileCategory = null)
    {
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
        $this->fileCategory->setElementName('fileCategory');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileCategory $fileCategory
     */
    public function getFileCategory()
    {
        return ($this->fileCategory)
            ? $this->fileCategory->getElementValue()
            : null;
    }
}
