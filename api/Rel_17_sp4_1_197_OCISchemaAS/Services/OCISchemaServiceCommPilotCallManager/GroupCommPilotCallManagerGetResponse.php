<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotCallManager; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager\CommPilotCallManagerGroupDirectoryDisplaySelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupCommPilotCallManagerGetRequest.
 */
class GroupCommPilotCallManagerGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotCallManager\GroupCommPilotCallManagerGetResponse';
    public    $name           = __CLASS__;
    protected $groupDirectory = null;


    /**
     * Choices for commPilot call manager group directory display.
     */
    public function setGroupDirectory($groupDirectory = null)
    {
        $this->groupDirectory = ($groupDirectory InstanceOf CommPilotCallManagerGroupDirectoryDisplaySelection)
             ? $groupDirectory
             : new CommPilotCallManagerGroupDirectoryDisplaySelection($groupDirectory);
    }

    /**
     * Choices for commPilot call manager group directory display.
     */
    public function getGroupDirectory()
    {
        return (!$this->groupDirectory) ?: $this->groupDirectory->getValue();
    }
}
