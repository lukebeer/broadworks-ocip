<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the service provider's Malicious Call Trace settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderMaliciousCallTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = 'ServiceProviderMaliciousCallTraceModifyRequest';
    protected $serviceProviderId                   = null;
    protected $useSystemPlayMCTWarningAnnouncement = null;
    protected $playMCTWarningAnnouncement          = null;

    public function __construct(
         $serviceProviderId,
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
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
