<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OCIReportingMessageName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemOCIReportingGetMessageNameListRequest.
 */
class SystemOCIReportingGetMessageNameListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $messageNameStartsWith=null
    ) {
        $this->messageNameStartsWith = $messageNameStartsWith;
        $this->args                  = func_get_args();
    }

    public function setMessageNameStartsWith($messageNameStartsWith)
    {
        $messageNameStartsWith and $this->messageNameStartsWith = new OCIReportingMessageName($messageNameStartsWith);
    }

    public function getMessageNameStartsWith()
    {
        return (!$this->messageNameStartsWith) ?: $this->messageNameStartsWith->value();
    }
}
