<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IMRNTimeoutMilliseconds;
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
    public    $name = __CLASS__;

    public function __construct(
             $enableLocationServices=null,
             $enableMSRNLookup=null,
             $enableMobileStateChecking=null,
             $denyCallOriginations=null,
             $denyCallTerminations=null,
             $imrnTimeoutMilliseconds=null,
             $scfSignalingIPAddress=null,
             $scfSignalingPort=null
    ) {
        $this->enableLocationServices    = $enableLocationServices;
        $this->enableMSRNLookup          = $enableMSRNLookup;
        $this->enableMobileStateChecking = $enableMobileStateChecking;
        $this->denyCallOriginations      = $denyCallOriginations;
        $this->denyCallTerminations      = $denyCallTerminations;
        $this->imrnTimeoutMilliseconds   = $imrnTimeoutMilliseconds;
        $this->scfSignalingIPAddress     = new IPAddress($scfSignalingIPAddress);
        $this->scfSignalingPort          = new Port($scfSignalingPort);
        $this->args                      = func_get_args();
    }

    public function setEnableLocationServices($enableLocationServices)
    {
        $enableLocationServices and $this->enableLocationServices = new xs:boolean($enableLocationServices);
    }

    public function getEnableLocationServices()
    {
        return (!$this->enableLocationServices) ?: $this->enableLocationServices->value();
    }

    public function setEnableMSRNLookup($enableMSRNLookup)
    {
        $enableMSRNLookup and $this->enableMSRNLookup = new xs:boolean($enableMSRNLookup);
    }

    public function getEnableMSRNLookup()
    {
        return (!$this->enableMSRNLookup) ?: $this->enableMSRNLookup->value();
    }

    public function setEnableMobileStateChecking($enableMobileStateChecking)
    {
        $enableMobileStateChecking and $this->enableMobileStateChecking = new xs:boolean($enableMobileStateChecking);
    }

    public function getEnableMobileStateChecking()
    {
        return (!$this->enableMobileStateChecking) ?: $this->enableMobileStateChecking->value();
    }

    public function setDenyCallOriginations($denyCallOriginations)
    {
        $denyCallOriginations and $this->denyCallOriginations = new xs:boolean($denyCallOriginations);
    }

    public function getDenyCallOriginations()
    {
        return (!$this->denyCallOriginations) ?: $this->denyCallOriginations->value();
    }

    public function setDenyCallTerminations($denyCallTerminations)
    {
        $denyCallTerminations and $this->denyCallTerminations = new xs:boolean($denyCallTerminations);
    }

    public function getDenyCallTerminations()
    {
        return (!$this->denyCallTerminations) ?: $this->denyCallTerminations->value();
    }

    public function setImrnTimeoutMilliseconds($imrnTimeoutMilliseconds)
    {
        $imrnTimeoutMilliseconds and $this->imrnTimeoutMilliseconds = new IMRNTimeoutMilliseconds($imrnTimeoutMilliseconds);
    }

    public function getImrnTimeoutMilliseconds()
    {
        return (!$this->imrnTimeoutMilliseconds) ?: $this->imrnTimeoutMilliseconds->value();
    }

    public function setScfSignalingIPAddress($scfSignalingIPAddress)
    {
        $scfSignalingIPAddress and $this->scfSignalingIPAddress = new IPAddress($scfSignalingIPAddress);
    }

    public function getScfSignalingIPAddress()
    {
        return (!$this->scfSignalingIPAddress) ?: $this->scfSignalingIPAddress->value();
    }

    public function setScfSignalingPort($scfSignalingPort)
    {
        $scfSignalingPort and $this->scfSignalingPort = new Port($scfSignalingPort);
    }

    public function getScfSignalingPort()
    {
        return (!$this->scfSignalingPort) ?: $this->scfSignalingPort->value();
    }
}
