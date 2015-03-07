<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests the contents of a file.
 *         The response is either a SystemFileGetContentResponse or an
 *         ErrorResponse.
 */
class SystemFileGetContentRequest extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $fileName  = null;

    public function __construct(
         $fileName
    ) {
        $this->setFileName($fileName);
    }

    public function setFileName($fileName = null)
    {
        $this->fileName = ($fileName InstanceOf FileName)
             ? $fileName
             : new FileName($fileName);
    }

    public function getFileName()
    {
        return (!$this->fileName) ?: $this->fileName->value();
    }
}
