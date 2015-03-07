<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPSupportedInterface;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPContentType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPAddContentTypeRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $contentType  = null;
    protected $interface    = null;

    public function __construct(
         $contentType,
         $interface
    ) {
        $this->setContentType($contentType);
        $this->setInterface($interface);
    }

    public function setContentType($contentType = null)
    {
        $this->contentType = ($contentType InstanceOf SystemSIPContentType)
             ? $contentType
             : new SystemSIPContentType($contentType);
    }

    public function getContentType()
    {
        return (!$this->contentType) ?: $this->contentType->value();
    }

    public function setInterface($interface = null)
    {
        $this->interface = ($interface InstanceOf SystemSIPSupportedInterface)
             ? $interface
             : new SystemSIPSupportedInterface($interface);
    }

    public function getInterface()
    {
        return (!$this->interface) ?: $this->interface->value();
    }
}
