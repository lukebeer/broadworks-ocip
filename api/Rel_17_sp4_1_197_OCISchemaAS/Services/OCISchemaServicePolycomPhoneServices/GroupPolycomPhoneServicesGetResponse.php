<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupPolycomPhoneServicesGetRequest.
 */
class GroupPolycomPhoneServicesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $includeGroupCommonPhoneListInDirectory,
             $includeGroupCustomContactDirectoryInDirectory,
             $groupCustomContactDirectory=null
    ) {
        $this->includeGroupCommonPhoneListInDirectory        = $includeGroupCommonPhoneListInDirectory;
        $this->includeGroupCustomContactDirectoryInDirectory = $includeGroupCustomContactDirectoryInDirectory;
        $this->groupCustomContactDirectory                   = new CustomContactDirectoryName($groupCustomContactDirectory);
        $this->args                                          = func_get_args();
    }

    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory)
    {
        $includeGroupCommonPhoneListInDirectory and $this->includeGroupCommonPhoneListInDirectory = new xs:boolean($includeGroupCommonPhoneListInDirectory);
    }

    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return (!$this->includeGroupCommonPhoneListInDirectory) ?: $this->includeGroupCommonPhoneListInDirectory->value();
    }

    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory)
    {
        $includeGroupCustomContactDirectoryInDirectory and $this->includeGroupCustomContactDirectoryInDirectory = new xs:boolean($includeGroupCustomContactDirectoryInDirectory);
    }

    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return (!$this->includeGroupCustomContactDirectoryInDirectory) ?: $this->includeGroupCustomContactDirectoryInDirectory->value();
    }

    public function setGroupCustomContactDirectory($groupCustomContactDirectory)
    {
        $groupCustomContactDirectory and $this->groupCustomContactDirectory = new CustomContactDirectoryName($groupCustomContactDirectory);
    }

    public function getGroupCustomContactDirectory()
    {
        return (!$this->groupCustomContactDirectory) ?: $this->groupCustomContactDirectory->value();
    }
}
