<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemDeviceTypeExportRequest.
 */
class SystemDeviceTypeExportResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;
    protected $file = null;


    /**
     * URL.
     */
    public function setFile($file = null)
    {
        $this->file = ($file InstanceOf URL)
             ? $file
             : new URL($file);
    }

    /**
     * URL.
     */
    public function getFile()
    {
        return (!$this->file) ?: $this->file->getValue();
    }
}
