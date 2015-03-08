<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to a SystemFileGetContentRequest. The fileContent length returned is limited to 128KBytes.
 */
class SystemFileGetContentResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileGetContentResponse';
    public    $name        = __CLASS__;
    protected $fileContent = null;


    /**
     * 
     */
    public function setFileContent(xs:base64Binary $fileContent = null)
    {
        $this->fileContent = xs:base64Binary $fileContent;
    }

    /**
     * 
     */
    public function getFileContent()
    {
        return (!$this->fileContent) ?: $this->fileContent->getValue();
    }
}