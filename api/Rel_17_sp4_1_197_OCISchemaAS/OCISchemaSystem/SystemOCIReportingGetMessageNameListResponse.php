<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OCIReportingMessageName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemOCIReportingGetMessageNameListRequest.
 */
class SystemOCIReportingGetMessageNameListResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $messageNameStartsWith  = null;


    public function setMessageNameStartsWith($messageNameStartsWith = null)
    {
        $this->messageNameStartsWith = ($messageNameStartsWith InstanceOf OCIReportingMessageName)
             ? $messageNameStartsWith
             : new OCIReportingMessageName($messageNameStartsWith);
    }

    public function getMessageNameStartsWith()
    {
        return (!$this->messageNameStartsWith) ?: $this->messageNameStartsWith->value();
    }
}
