<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OfficeZoneDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ReplacementZoneList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an existing Office Zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOfficeZoneModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemOfficeZoneModifyRequest';
    protected $officeZoneName      = null;
    protected $newOfficeZoneName   = null;
    protected $description         = null;
    protected $replacementZoneList = null;
    protected $primaryZoneName     = null;

    public function __construct(
         $officeZoneName,
         $newOfficeZoneName = null,
         $description = null,
         ReplacementZoneList $replacementZoneList = null,
         $primaryZoneName = null
    ) {
        $this->setOfficeZoneName($officeZoneName);
        $this->setNewOfficeZoneName($newOfficeZoneName);
        $this->setDescription($description);
        $this->setReplacementZoneList($replacementZoneList);
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
    public function setNewOfficeZoneName($newOfficeZoneName = null)
    {
        if (!$newOfficeZoneName) return $this;
        $this->newOfficeZoneName = ($newOfficeZoneName InstanceOf OfficeZoneName)
             ? $newOfficeZoneName
             : new OfficeZoneName($newOfficeZoneName);
        $this->newOfficeZoneName->setName('newOfficeZoneName');
        return $this;
    }

    /**
     * 
     * @return OfficeZoneName
     */
    public function getNewOfficeZoneName()
    {
        return $this->newOfficeZoneName->getValue();
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
    public function setReplacementZoneList(ReplacementZoneList $replacementZoneList = null)
    {
        if (!$replacementZoneList) return $this;
        $this->replacementZoneList = $replacementZoneList;
        $this->replacementZoneList->setName('replacementZoneList');
        return $this;
    }

    /**
     * 
     * @return ReplacementZoneList
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
