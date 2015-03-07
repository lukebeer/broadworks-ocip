<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\IMRNTimeoutMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the BroadWorks Mobility system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBroadWorksMobilityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $enableLocationServices     = null;
    protected $enableMSRNLookup           = null;
    protected $enableMobileStateChecking  = null;
    protected $denyCallOriginations       = null;
    protected $denyCallTerminations       = null;
    protected $imrnTimeoutMilliseconds    = null;
    protected $scfSignalingIPAddress      = null;
    protected $scfSignalingPort           = null;

    public function __construct(
         $enableLocationServices = null,
         $enableMSRNLookup = null,
         $enableMobileStateChecking = null,
         $denyCallOriginations = null,
         $denyCallTerminations = null,
         $imrnTimeoutMilliseconds = null,
         $scfSignalingIPAddress = null,
         $scfSignalingPort = null
    ) {
        $this->setEnableLocationServices($enableLocationServices);
        $this->setEnableMSRNLookup($enableMSRNLookup);
        $this->setEnableMobileStateChecking($enableMobileStateChecking);
        $this->setDenyCallOriginations($denyCallOriginations);
        $this->setDenyCallTerminations($denyCallTerminations);
        $this->setImrnTimeoutMilliseconds($imrnTimeoutMilliseconds);
        $this->setScfSignalingIPAddress($scfSignalingIPAddress);
        $this->setScfSignalingPort($scfSignalingPort);
    }

    public function setEnableLocationServices(xs:boolean $enableLocationServices = null)
    {
    }

    public function getEnableLocationServices()
    {
        return (!$this->enableLocationServices) ?: $this->enableLocationServices->value();
    }

    public function setEnableMSRNLookup(xs:boolean $enableMSRNLookup = null)
    {
    }

    public function getEnableMSRNLookup()
    {
        return (!$this->enableMSRNLookup) ?: $this->enableMSRNLookup->value();
    }

    public function setEnableMobileStateChecking(xs:boolean $enableMobileStateChecking = null)
    {
    }

    public function getEnableMobileStateChecking()
    {
        return (!$this->enableMobileStateChecking) ?: $this->enableMobileStateChecking->value();
    }

    public function setDenyCallOriginations(xs:boolean $denyCallOriginations = null)
    {
    }

    public function getDenyCallOriginations()
    {
        return (!$this->denyCallOriginations) ?: $this->denyCallOriginations->value();
    }

    public function setDenyCallTerminations(xs:boolean $denyCallTerminations = null)
    {
    }

    public function getDenyCallTerminations()
    {
        return (!$this->denyCallTerminations) ?: $this->denyCallTerminations->value();
    }

    public function setImrnTimeoutMilliseconds($imrnTimeoutMilliseconds = null)
    {
        $this->imrnTimeoutMilliseconds = ($imrnTimeoutMilliseconds InstanceOf IMRNTimeoutMilliseconds)
             ? $imrnTimeoutMilliseconds
             : new IMRNTimeoutMilliseconds($imrnTimeoutMilliseconds);
    }

    public function getImrnTimeoutMilliseconds()
    {
        return (!$this->imrnTimeoutMilliseconds) ?: $this->imrnTimeoutMilliseconds->value();
    }

    public function setScfSignalingIPAddress($scfSignalingIPAddress = null)
    {
        $this->scfSignalingIPAddress = ($scfSignalingIPAddress InstanceOf IPAddress)
             ? $scfSignalingIPAddress
             : new IPAddress($scfSignalingIPAddress);
    }

    public function getScfSignalingIPAddress()
    {
        return (!$this->scfSignalingIPAddress) ?: $this->scfSignalingIPAddress->value();
    }

    public function setScfSignalingPort($scfSignalingPort = null)
    {
        $this->scfSignalingPort = ($scfSignalingPort InstanceOf Port)
             ? $scfSignalingPort
             : new Port($scfSignalingPort);
    }

    public function getScfSignalingPort()
    {
        return (!$this->scfSignalingPort) ?: $this->scfSignalingPort->value();
    }
}
