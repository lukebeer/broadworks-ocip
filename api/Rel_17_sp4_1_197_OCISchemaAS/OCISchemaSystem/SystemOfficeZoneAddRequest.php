<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OfficeZoneDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a new Office Zone.  The zoneList is an ordered list with the first member being of the highest priority. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOfficeZoneAddRequest extends ComplexType implements ComplexInterface
{
    public    $name            = 'SystemOfficeZoneAddRequest';
    protected $officeZoneName  = null;
    protected $description     = null;
    protected $zoneName        = null;
    protected $primaryZoneName = null;

    public function __construct(
         $officeZoneName,
         $description = null,
         $zoneName = null,
         $primaryZoneName
    ) {
        $this->setOfficeZoneName($officeZoneName);
        $this->setDescription($description);
        $this->setZoneName($zoneName);
        $this->setPrimaryZoneName($primaryZoneName);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOfficeZoneName($officeZoneName = null)
    {
        if (!$officeZoneName) return $this;
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
        $this->officeZoneName->setName('officeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName
     */
    public function getOfficeZoneName()
    {
        return $this->officeZoneName->getValue();
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
     * @return OfficeZoneDescription
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
     * @return ZoneName
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
     * @return ZoneName
     */
    public function getPrimaryZoneName()
    {
        return $this->primaryZoneName->getValue();
    }
}
