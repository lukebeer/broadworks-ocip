<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupApplicationServerSetGetRequest.
 *         The response contains the group's Application Server set information.
 */
class GroupApplicationServerSetGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $applicationServerSetName=null
    ) {
        $this->applicationServerSetName = new ApplicationServerSetName($applicationServerSetName);
        $this->args                     = func_get_args();
    }

    public function setApplicationServerSetName($applicationServerSetName)
    {
        $applicationServerSetName and $this->applicationServerSetName = new ApplicationServerSetName($applicationServerSetName);
    }

    public function getApplicationServerSetName()
    {
        return (!$this->applicationServerSetName) ?: $this->applicationServerSetName->value();
    }
}
