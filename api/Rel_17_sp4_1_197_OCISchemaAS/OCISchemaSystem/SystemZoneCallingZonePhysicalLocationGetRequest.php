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
 * Returns a zone calling physical location for a given zone.
 * 	     Response is SystemZoneCallingZonePhysicalLocationGetResponse or an ErrorResponse.
 */
class SystemZoneCallingZonePhysicalLocationGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneCallingZonePhysicalLocationGetResponse';
    public    $name = 'SystemZoneCallingZonePhysicalLocationGetRequest';
    protected $zoneName;

    public function __construct(
         $zoneName = ''
    ) {
        $this->setZoneName($zoneName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneCallingZonePhysicalLocationGetResponse $response
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
        return ($this->zoneName) ? $this->zoneName->getValue() : null;
    }
}
