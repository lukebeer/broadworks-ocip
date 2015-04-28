<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the service provider's Malicious Call Trace settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderMaliciousCallTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderMaliciousCallTraceModifyRequest';
    protected $serviceProviderId;
    protected $useSystemPlayMCTWarningAnnouncement;
    protected $playMCTWarningAnnouncement;

    public function __construct(
         $serviceProviderId = '',
         $useSystemPlayMCTWarningAnnouncement = null,
         $playMCTWarningAnnouncement = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setUseSystemPlayMCTWarningAnnouncement($useSystemPlayMCTWarningAnnouncement);
        $this->setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSystemPlayMCTWarningAnnouncement($useSystemPlayMCTWarningAnnouncement = null)
    {
        $this->useSystemPlayMCTWarningAnnouncement = new PrimitiveType($useSystemPlayMCTWarningAnnouncement);
        $this->useSystemPlayMCTWarningAnnouncement->setElementName('useSystemPlayMCTWarningAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemPlayMCTWarningAnnouncement
     */
    public function getUseSystemPlayMCTWarningAnnouncement()
    {
        return ($this->useSystemPlayMCTWarningAnnouncement)
            ? $this->useSystemPlayMCTWarningAnnouncement->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement = null)
    {
        $this->playMCTWarningAnnouncement = new PrimitiveType($playMCTWarningAnnouncement);
        $this->playMCTWarningAnnouncement->setElementName('playMCTWarningAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $playMCTWarningAnnouncement
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return ($this->playMCTWarningAnnouncement)
            ? $this->playMCTWarningAnnouncement->getElementValue()
            : null;
    }
}
