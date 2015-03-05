<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemApplicationServerSetGetListRequest.
 *         Contains the system set name and a table of Application Server sets.
 */
class SystemApplicationServerSetGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $applicationServerSets=null
    ) {
        $this->applicationServerSets = new ApplicationServerSetName($applicationServerSets);
        $this->args                  = func_get_args();
    }

    public function setApplicationServerSets($applicationServerSets)
    {
        $applicationServerSets and $this->applicationServerSets = new ApplicationServerSetName($applicationServerSets);
    }

    public function getApplicationServerSets()
    {
        return (!$this->applicationServerSets) ?: $this->applicationServerSets->value();
    }
}
