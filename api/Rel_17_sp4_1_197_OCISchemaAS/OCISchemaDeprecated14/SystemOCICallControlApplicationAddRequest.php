<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCICallControlApplicationDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add an application to the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationAddRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $applicationId    = null;
    protected $enableSystemWide = null;
    protected $description      = null;

    public function __construct(
         $applicationId,
         $enableSystemWide,
         $description = null
    ) {
        $this->setApplicationId($applicationId);
        $this->setEnableSystemWide($enableSystemWide);
        $this->setDescription($description);
    }

    /**
     * A OCI Call Control Application Id.
     */
    public function setApplicationId($applicationId = null)
    {
        $this->applicationId = ($applicationId InstanceOf OCICallControlApplicationId)
             ? $applicationId
             : new OCICallControlApplicationId($applicationId);
    }

    /**
     * A OCI Call Control Application Id.
     */
    public function getApplicationId()
    {
        return (!$this->applicationId) ?: $this->applicationId->getValue();
    }

    /**
     * 
     */
    public function setEnableSystemWide($enableSystemWide = null)
    {
        $this->enableSystemWide = (boolean) $enableSystemWide;
    }

    /**
     * 
     */
    public function getEnableSystemWide()
    {
        return (!$this->enableSystemWide) ?: $this->enableSystemWide->getValue();
    }

    /**
     * The description for the entry in the OCI call control application list.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf OCICallControlApplicationDescription)
             ? $description
             : new OCICallControlApplicationDescription($description);
    }

    /**
     * The description for the entry in the OCI call control application list.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
