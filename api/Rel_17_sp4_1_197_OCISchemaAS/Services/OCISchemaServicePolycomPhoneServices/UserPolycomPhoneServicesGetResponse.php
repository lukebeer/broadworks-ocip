<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPolycomPhoneServicesGetRequest.
 */
class UserPolycomPhoneServicesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                           = __CLASS__;
    protected $integratePhoneDirectoryWithBroadWorks          = null;
    protected $includeUserPersonalPhoneListInDirectory        = null;
    protected $includeGroupCustomContactDirectoryInDirectory  = null;
    protected $groupCustomContactDirectory                    = null;


    public function setIntegratePhoneDirectoryWithBroadWorks(xs:boolean $integratePhoneDirectoryWithBroadWorks = null)
    {
    }

    public function getIntegratePhoneDirectoryWithBroadWorks()
    {
        return (!$this->integratePhoneDirectoryWithBroadWorks) ?: $this->integratePhoneDirectoryWithBroadWorks->value();
    }

    public function setIncludeUserPersonalPhoneListInDirectory(xs:boolean $includeUserPersonalPhoneListInDirectory = null)
    {
    }

    public function getIncludeUserPersonalPhoneListInDirectory()
    {
        return (!$this->includeUserPersonalPhoneListInDirectory) ?: $this->includeUserPersonalPhoneListInDirectory->value();
    }

    public function setIncludeGroupCustomContactDirectoryInDirectory(xs:boolean $includeGroupCustomContactDirectoryInDirectory = null)
    {
    }

    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return (!$this->includeGroupCustomContactDirectoryInDirectory) ?: $this->includeGroupCustomContactDirectoryInDirectory->value();
    }

    public function setGroupCustomContactDirectory($groupCustomContactDirectory = null)
    {
        $this->groupCustomContactDirectory = ($groupCustomContactDirectory InstanceOf CustomContactDirectoryName)
             ? $groupCustomContactDirectory
             : new CustomContactDirectoryName($groupCustomContactDirectory);
    }

    public function getGroupCustomContactDirectory()
    {
        return (!$this->groupCustomContactDirectory) ?: $this->groupCustomContactDirectory->value();
    }
}
