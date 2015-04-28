<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the ServiceProviderMaliciousCallTraceGetRequest.
 *         The response contains the service provider Malicious Call Trace 
 *         settings.
 */
class ServiceProviderMaliciousCallTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderMaliciousCallTraceGetResponse';
    protected $useSystemPlayMCTWarningAnnouncement;
    protected $playMCTWarningAnnouncement;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\ServiceProviderMaliciousCallTraceGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
