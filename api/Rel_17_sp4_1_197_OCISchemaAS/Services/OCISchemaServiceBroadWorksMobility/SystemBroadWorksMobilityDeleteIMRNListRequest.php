<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Removes a BroadWorks Mobility IMRN number from the system. 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityDeleteIMRNListRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $imrnNumber = null;

    public function __construct(
         $imrnNumber = null
    ) {
        $this->setImrnNumber($imrnNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setImrnNumber($imrnNumber = null)
    {
        $this->imrnNumber = ($imrnNumber InstanceOf DN)
             ? $imrnNumber
             : new DN($imrnNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getImrnNumber()
    {
        return (!$this->imrnNumber) ?: $this->imrnNumber->getValue();
    }
}
