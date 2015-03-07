<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\FileRepositoryProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a file repository.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $name                   = null;
    protected $rootDirectory          = null;
    protected $secure                 = null;
    protected $netAddress             = null;
    protected $ftpPassive             = null;
    protected $protocol               = null;
    protected $port                   = null;
    protected $ftpRemoteVerification  = null;

    public function __construct(
         $name,
         $rootDirectory = null,
         $secure = null,
         $netAddress = null,
         $ftpPassive = null,
         $protocol = null,
         $port = null,
         $ftpRemoteVerification = null
    ) {
        $this->setName($name);
        $this->setRootDirectory($rootDirectory);
        $this->setSecure($secure);
        $this->setNetAddress($netAddress);
        $this->setFtpPassive($ftpPassive);
        $this->setProtocol($protocol);
        $this->setPort($port);
        $this->setFtpRemoteVerification($ftpRemoteVerification);
    }

    public function setName($name = null)
    {
        $this->name = ($name InstanceOf FileRepositoryName)
             ? $name
             : new FileRepositoryName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
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

    public function setSecure(xs:boolean $secure = null)
    {
    }

    public function getSecure()
    {
        return (!$this->secure) ?: $this->secure->value();
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

    public function setFtpPassive(xs:boolean $ftpPassive = null)
    {
    }

    public function getFtpPassive()
    {
        return (!$this->ftpPassive) ?: $this->ftpPassive->value();
    }

    public function setProtocol($protocol = null)
    {
        $this->protocol = ($protocol InstanceOf FileRepositoryProtocol)
             ? $protocol
             : new FileRepositoryProtocol($protocol);
    }

    public function getProtocol()
    {
        return (!$this->protocol) ?: $this->protocol->value();
    }

    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port)
             ? $port
             : new Port($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }

    public function setFtpRemoteVerification(xs:boolean $ftpRemoteVerification = null)
    {
    }

    public function getFtpRemoteVerification()
    {
        return (!$this->ftpRemoteVerification) ?: $this->ftpRemoteVerification->value();
    }
}
