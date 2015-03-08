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
    public    $name                  = __CLASS__;
    protected $applicationServerSets = null;


    /**
     * Application Server set name.
     */
    public function setApplicationServerSets($applicationServerSets = null)
    {
        $this->applicationServerSets = ($applicationServerSets InstanceOf ApplicationServerSetName)
             ? $applicationServerSets
             : new ApplicationServerSetName($applicationServerSets);
    }

    /**
     * Application Server set name.
     */
    public function getApplicationServerSets()
    {
        return (!$this->applicationServerSets) ?: $this->applicationServerSets->getValue();
    }
}
