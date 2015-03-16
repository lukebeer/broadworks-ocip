<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\IMRNTimeoutMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the BroadWorks Mobility system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBroadWorksMobilityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBroadWorksMobilityModifyRequest';
    protected $enableLocationServices;
    protected $enableMSRNLookup;
    protected $enableMobileStateChecking;
    protected $denyCallOriginations;
    protected $denyCallTerminations;
    protected $imrnTimeoutMilliseconds;
    protected $scfSignalingIPAddress;
    protected $scfSignalingPort;

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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableLocationServices($enableLocationServices = null)
    {
        $this->enableLocationServices = new PrimitiveType($enableLocationServices);
        $this->enableLocationServices->setElementName('enableLocationServices');
        return $this;
    }

    /**
     * 
     * @return boolean $enableLocationServices
     */
    public function getEnableLocationServices()
    {
        return ($this->enableLocationServices)
            ? $this->enableLocationServices->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableMSRNLookup($enableMSRNLookup = null)
    {
        $this->enableMSRNLookup = new PrimitiveType($enableMSRNLookup);
        $this->enableMSRNLookup->setElementName('enableMSRNLookup');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMSRNLookup
     */
    public function getEnableMSRNLookup()
    {
        return ($this->enableMSRNLookup)
            ? $this->enableMSRNLookup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking = null)
    {
        $this->enableMobileStateChecking = new PrimitiveType($enableMobileStateChecking);
        $this->enableMobileStateChecking->setElementName('enableMobileStateChecking');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMobileStateChecking
     */
    public function getEnableMobileStateChecking()
    {
        return ($this->enableMobileStateChecking)
            ? $this->enableMobileStateChecking->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        $this->denyCallOriginations = new PrimitiveType($denyCallOriginations);
        $this->denyCallOriginations->setElementName('denyCallOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallOriginations
     */
    public function getDenyCallOriginations()
    {
        return ($this->denyCallOriginations)
            ? $this->denyCallOriginations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        $this->denyCallTerminations = new PrimitiveType($denyCallTerminations);
        $this->denyCallTerminations->setElementName('denyCallTerminations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallTerminations
     */
    public function getDenyCallTerminations()
    {
        return ($this->denyCallTerminations)
            ? $this->denyCallTerminations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setImrnTimeoutMilliseconds($imrnTimeoutMilliseconds = null)
    {
        $this->imrnTimeoutMilliseconds = ($imrnTimeoutMilliseconds InstanceOf IMRNTimeoutMilliseconds)
             ? $imrnTimeoutMilliseconds
             : new IMRNTimeoutMilliseconds($imrnTimeoutMilliseconds);
        $this->imrnTimeoutMilliseconds->setElementName('imrnTimeoutMilliseconds');
        return $this;
    }

    /**
     * 
     * @return IMRNTimeoutMilliseconds $imrnTimeoutMilliseconds
     */
    public function getImrnTimeoutMilliseconds()
    {
        return ($this->imrnTimeoutMilliseconds)
            ? $this->imrnTimeoutMilliseconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScfSignalingIPAddress($scfSignalingIPAddress = null)
    {
        $this->scfSignalingIPAddress = ($scfSignalingIPAddress InstanceOf IPAddress)
             ? $scfSignalingIPAddress
             : new IPAddress($scfSignalingIPAddress);
        $this->scfSignalingIPAddress->setElementName('scfSignalingIPAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $scfSignalingIPAddress
     */
    public function getScfSignalingIPAddress()
    {
        return ($this->scfSignalingIPAddress)
            ? $this->scfSignalingIPAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScfSignalingPort($scfSignalingPort = null)
    {
        $this->scfSignalingPort = ($scfSignalingPort InstanceOf Port)
             ? $scfSignalingPort
             : new Port($scfSignalingPort);
        $this->scfSignalingPort->setElementName('scfSignalingPort');
        return $this;
    }

    /**
     * 
     * @return Port $scfSignalingPort
     */
    public function getScfSignalingPort()
    {
        return ($this->scfSignalingPort)
            ? $this->scfSignalingPort->getElementValue()
            : null;
    }
}
