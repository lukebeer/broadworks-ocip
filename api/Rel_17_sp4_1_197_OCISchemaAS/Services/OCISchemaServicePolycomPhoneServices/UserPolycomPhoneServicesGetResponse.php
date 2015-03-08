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
    public    $name                                          = __CLASS__;
    protected $integratePhoneDirectoryWithBroadWorks         = null;
    protected $includeUserPersonalPhoneListInDirectory       = null;
    protected $includeGroupCustomContactDirectoryInDirectory = null;
    protected $groupCustomContactDirectory                   = null;


    /**
     * 
     */
    public function setIntegratePhoneDirectoryWithBroadWorks($integratePhoneDirectoryWithBroadWorks = null)
    {
        $this->integratePhoneDirectoryWithBroadWorks = (boolean) $integratePhoneDirectoryWithBroadWorks;
    }

    /**
     * 
     */
    public function getIntegratePhoneDirectoryWithBroadWorks()
    {
        return (!$this->integratePhoneDirectoryWithBroadWorks) ?: $this->integratePhoneDirectoryWithBroadWorks->getValue();
    }

    /**
     * 
     */
    public function setIncludeUserPersonalPhoneListInDirectory($includeUserPersonalPhoneListInDirectory = null)
    {
        $this->includeUserPersonalPhoneListInDirectory = (boolean) $includeUserPersonalPhoneListInDirectory;
    }

    /**
     * 
     */
    public function getIncludeUserPersonalPhoneListInDirectory()
    {
        return (!$this->includeUserPersonalPhoneListInDirectory) ?: $this->includeUserPersonalPhoneListInDirectory->getValue();
    }

    /**
     * 
     */
    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory = null)
    {
        $this->includeGroupCustomContactDirectoryInDirectory = (boolean) $includeGroupCustomContactDirectoryInDirectory;
    }

    /**
     * 
     */
    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return (!$this->includeGroupCustomContactDirectoryInDirectory) ?: $this->includeGroupCustomContactDirectoryInDirectory->getValue();
    }

    /**
     * Custom Contact Directory name.
     */
    public function setGroupCustomContactDirectory($groupCustomContactDirectory = null)
    {
        $this->groupCustomContactDirectory = ($groupCustomContactDirectory InstanceOf CustomContactDirectoryName)
             ? $groupCustomContactDirectory
             : new CustomContactDirectoryName($groupCustomContactDirectory);
    }

    /**
     * Custom Contact Directory name.
     */
    public function getGroupCustomContactDirectory()
    {
        return (!$this->groupCustomContactDirectory) ?: $this->groupCustomContactDirectory->getValue();
    }
}
