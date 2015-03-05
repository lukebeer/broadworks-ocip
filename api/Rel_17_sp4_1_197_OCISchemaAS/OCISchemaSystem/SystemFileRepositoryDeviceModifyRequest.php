<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a file repository.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $rootDirectory=null,
             $secure=null,
             $netAddress=null,
             $ftpPassive=null,
             $protocol=null,
             $port=null,
             $ftpRemoteVerification=null
    ) {
        $this->name                  = new FileRepositoryName($name);
        $this->rootDirectory         = new CPEFileDirectory($rootDirectory);
        $this->secure                = $secure;
        $this->netAddress            = new NetAddress($netAddress);
        $this->ftpPassive            = $ftpPassive;
        $this->protocol              = $protocol;
        $this->port                  = new Port($port);
        $this->ftpRemoteVerification = $ftpRemoteVerification;
        $this->args                  = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new FileRepositoryName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setRootDirectory($rootDirectory)
    {
        $rootDirectory and $this->rootDirectory = new CPEFileDirectory($rootDirectory);
    }

    public function getRootDirectory()
    {
        return (!$this->rootDirectory) ?: $this->rootDirectory->value();
    }

    public function setSecure($secure)
    {
        $secure and $this->secure = new xs:boolean($secure);
    }

    public function getSecure()
    {
        return (!$this->secure) ?: $this->secure->value();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new NetAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setFtpPassive($ftpPassive)
    {
        $ftpPassive and $this->ftpPassive = new xs:boolean($ftpPassive);
    }

    public function getFtpPassive()
    {
        return (!$this->ftpPassive) ?: $this->ftpPassive->value();
    }

    public function setProtocol($protocol)
    {
        $protocol and $this->protocol = new FileRepositoryProtocol($protocol);
    }

    public function getProtocol()
    {
        return (!$this->protocol) ?: $this->protocol->value();
    }

    public function setPort($port)
    {
        $port and $this->port = new Port($port);
    }

    public function getPort()
    {
        return (!$this->port) ?: $this->port->value();
    }

    public function setFtpRemoteVerification($ftpRemoteVerification)
    {
        $ftpRemoteVerification and $this->ftpRemoteVerification = new xs:boolean($ftpRemoteVerification);
    }

    public function getFtpRemoteVerification()
    {
        return (!$this->ftpRemoteVerification) ?: $this->ftpRemoteVerification->value();
    }
}
