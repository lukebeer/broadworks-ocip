<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OfficeZoneDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemOfficeZoneGetRequest.
 *         The response contains the Office Zone information.
 */
class SystemOfficeZoneGetResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'SystemOfficeZoneGetResponse';
    protected $description     = null;
    protected $zoneName        = null;
    protected $primaryZoneName = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOfficeZoneGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf OfficeZoneDescription)
             ? $description
             : new OfficeZoneDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneDescription $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
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

    /**
     * 
     */
    public function setPrimaryZoneName($primaryZoneName = null)
    {
        if (!$primaryZoneName) return $this;
        $this->primaryZoneName = ($primaryZoneName InstanceOf ZoneName)
             ? $primaryZoneName
             : new ZoneName($primaryZoneName);
        $this->primaryZoneName->setName('primaryZoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $primaryZoneName
     */
    public function getPrimaryZoneName()
    {
        return $this->primaryZoneName->getValue();
    }
}
