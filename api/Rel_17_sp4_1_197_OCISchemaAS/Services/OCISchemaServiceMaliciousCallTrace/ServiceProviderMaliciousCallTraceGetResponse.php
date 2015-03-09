<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace\ServiceProviderMaliciousCallTraceGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderMaliciousCallTraceGetRequest.
 *         The response contains the service provider Malicious Call Trace 
 *         settings.
 */
class ServiceProviderMaliciousCallTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $useSystemPlayMCTWarningAnnouncement = null;
    protected $playMCTWarningAnnouncement          = null;

    /**
     * @return ServiceProviderMaliciousCallTraceGetResponse
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
        $this->useSystemPlayMCTWarningAnnouncement = (boolean) $useSystemPlayMCTWarningAnnouncement;
    }

    /**
     * 
     */
    public function getUseSystemPlayMCTWarningAnnouncement()
    {
        return (!$this->useSystemPlayMCTWarningAnnouncement) ?: $this->useSystemPlayMCTWarningAnnouncement;
    }

    /**
     * 
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement = null)
    {
        $this->playMCTWarningAnnouncement = (boolean) $playMCTWarningAnnouncement;
    }

    /**
     * 
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return (!$this->playMCTWarningAnnouncement) ?: $this->playMCTWarningAnnouncement;
    }
}
