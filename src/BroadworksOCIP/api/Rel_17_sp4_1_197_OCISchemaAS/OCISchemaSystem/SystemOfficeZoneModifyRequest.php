<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OfficeZoneDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ReplacementZoneList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify an existing Office Zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOfficeZoneModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOfficeZoneModifyRequest';
    protected $officeZoneName;
    protected $newOfficeZoneName;
    protected $description;
    protected $replacementZoneList;
    protected $primaryZoneName;

    public function __construct(
         $officeZoneName = '',
         $newOfficeZoneName = null,
         $description = null,
         $replacementZoneList = null,
         $primaryZoneName = null
    ) {
        $this->setOfficeZoneName($officeZoneName);
        $this->setNewOfficeZoneName($newOfficeZoneName);
        $this->setDescription($description);
        $this->setReplacementZoneList($replacementZoneList);
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
    public function setNewOfficeZoneName($newOfficeZoneName = null)
    {
        $this->newOfficeZoneName = ($newOfficeZoneName InstanceOf OfficeZoneName)
             ? $newOfficeZoneName
             : new OfficeZoneName($newOfficeZoneName);
        $this->newOfficeZoneName->setElementName('newOfficeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName $newOfficeZoneName
     */
    public function getNewOfficeZoneName()
    {
        return ($this->newOfficeZoneName)
            ? $this->newOfficeZoneName->getElementValue()
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
    public function setReplacementZoneList(ReplacementZoneList $replacementZoneList = null)
    {
        $this->replacementZoneList = ($replacementZoneList InstanceOf ReplacementZoneList)
             ? $replacementZoneList
             : new ReplacementZoneList($replacementZoneList);
        $this->replacementZoneList->setElementName('replacementZoneList');
        return $this;
    }

    /**
     * 
     * @return ReplacementZoneList $replacementZoneList
     */
    public function getReplacementZoneList()
    {
        return $this->replacementZoneList;
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
