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
     * Response to GroupPolycomPhoneServicesGetRequest.
 */
class GroupPolycomPhoneServicesGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices\GroupPolycomPhoneServicesGetResponse';
    public    $name                                          = __CLASS__;
    protected $includeGroupCommonPhoneListInDirectory        = null;
    protected $includeGroupCustomContactDirectoryInDirectory = null;
    protected $groupCustomContactDirectory                   = null;


    /**
     * 
     */
    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory = null)
    {
        $this->includeGroupCommonPhoneListInDirectory = (boolean) $includeGroupCommonPhoneListInDirectory;
    }

    /**
     * 
     */
    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return (!$this->includeGroupCommonPhoneListInDirectory) ?: $this->includeGroupCommonPhoneListInDirectory->getValue();
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
