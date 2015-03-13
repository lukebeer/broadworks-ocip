<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a Zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemZoneDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name     = 'SystemZoneDeleteRequest';
    protected $zoneName = null;

    public function __construct(
         $zoneName
    ) {
        $this->setZoneName($zoneName);
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
    public function setZoneName($zoneName = null)
    {
        if (!$zoneName) return $this;
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
        $this->zoneName->setName('zoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $zoneName
     */
    public function getZoneName()
    {
        return $this->zoneName->getValue();
    }
}
