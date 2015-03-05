<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Codec;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCodecGetListRequest.
 */
class SystemCodecGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $codec=null
    ) {
        $this->codec = $codec;
        $this->args  = func_get_args();
    }

    public function setCodec($codec)
    {
        $codec and $this->codec = new Codec($codec);
    }

    public function getCodec()
    {
        return (!$this->codec) ?: $this->codec->value();
    }
}
