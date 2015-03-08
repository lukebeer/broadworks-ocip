<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCICallControlApplicationId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Delete an entry from the OCI call control application list.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemOCICallControlApplicationDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $applicationId = null;

    public function __construct(
         $applicationId
    ) {
        $this->setApplicationId($applicationId);
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
}
