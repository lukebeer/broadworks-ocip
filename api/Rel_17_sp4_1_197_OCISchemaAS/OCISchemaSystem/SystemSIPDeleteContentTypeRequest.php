<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPContentType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Delete a content type for the SIP interface.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeleteContentTypeRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $contentType  = null;

    public function __construct(
         $contentType
    ) {
        $this->setContentType($contentType);
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
}
