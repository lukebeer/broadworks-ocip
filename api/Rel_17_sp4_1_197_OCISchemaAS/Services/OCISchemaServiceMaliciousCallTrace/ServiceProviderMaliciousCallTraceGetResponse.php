<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                                = 'ServiceProviderMaliciousCallTraceGetResponse';
    protected $useSystemPlayMCTWarningAnnouncement = null;
    protected $playMCTWarningAnnouncement          = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\ServiceProviderMaliciousCallTraceGetResponse $response
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
        if (!$useSystemPlayMCTWarningAnnouncement) return $this;
        $this->useSystemPlayMCTWarningAnnouncement = new PrimitiveType($useSystemPlayMCTWarningAnnouncement);
        $this->useSystemPlayMCTWarningAnnouncement->setName('useSystemPlayMCTWarningAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemPlayMCTWarningAnnouncement
     */
    public function getUseSystemPlayMCTWarningAnnouncement()
    {
        return $this->useSystemPlayMCTWarningAnnouncement->getValue();
    }

    /**
     * 
     */
    public function setPlayMCTWarningAnnouncement($playMCTWarningAnnouncement = null)
    {
        if (!$playMCTWarningAnnouncement) return $this;
        $this->playMCTWarningAnnouncement = new PrimitiveType($playMCTWarningAnnouncement);
        $this->playMCTWarningAnnouncement->setName('playMCTWarningAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $playMCTWarningAnnouncement
     */
    public function getPlayMCTWarningAnnouncement()
    {
        return $this->playMCTWarningAnnouncement->getValue();
    }
}
