<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\MediaName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to delete a Media from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMediaDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $mediaName  = null;

    public function __construct(
         $mediaName
    ) {
        $this->setMediaName($mediaName);
    }

    public function setMediaName($mediaName = null)
    {
        $this->mediaName = ($mediaName InstanceOf MediaName)
             ? $mediaName
             : new MediaName($mediaName);
    }

    public function getMediaName()
    {
        return (!$this->mediaName) ?: $this->mediaName->value();
    }
}
