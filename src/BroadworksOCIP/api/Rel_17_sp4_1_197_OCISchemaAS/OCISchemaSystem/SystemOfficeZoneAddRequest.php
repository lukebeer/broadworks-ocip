<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OfficeZoneDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a new Office Zone.  The zoneList is an ordered list with the first member being of the highest priority. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOfficeZoneAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOfficeZoneAddRequest';
    protected $officeZoneName;
    protected $description;
    protected $zoneName;
    protected $primaryZoneName;

    public function __construct(
         $officeZoneName = '',
         $description = null,
         $zoneName = null,
         $primaryZoneName = ''
    ) {
        $this->setOfficeZoneName($officeZoneName);
        $this->setDescription($description);
        $this->setZoneName($zoneName);
        $this->setPrimaryZoneName($primaryZoneName);
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
    public function setOfficeZoneName($officeZoneName = null)
    {
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
        $this->officeZoneName->setElementName('officeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName $officeZoneName
     */
    public function getOfficeZoneName()
    {
        return ($this->officeZoneName)
            ? $this->officeZoneName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf OfficeZoneDescription)
             ? $description
             : new OfficeZoneDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
        $this->zoneName->setElementName('zoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $zoneName
     */
    public function getZoneName()
    {
        return ($this->zoneName)
            ? $this->zoneName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPrimaryZoneName($primaryZoneName = null)
    {
        $this->primaryZoneName = ($primaryZoneName InstanceOf ZoneName)
             ? $primaryZoneName
             : new ZoneName($primaryZoneName);
        $this->primaryZoneName->setElementName('primaryZoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $primaryZoneName
     */
    public function getPrimaryZoneName()
    {
        return ($this->primaryZoneName)
            ? $this->primaryZoneName->getElementValue()
            : null;
    }
}
