<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemMultimediaPolicyGetRequest
 */
class SystemMultimediaPolicyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $restrictNonAudioVideoMediaTypes
    ) {
        $this->restrictNonAudioVideoMediaTypes = $restrictNonAudioVideoMediaTypes;
        $this->args                            = func_get_args();
    }

    public function setRestrictNonAudioVideoMediaTypes($restrictNonAudioVideoMediaTypes)
    {
        $restrictNonAudioVideoMediaTypes and $this->restrictNonAudioVideoMediaTypes = new xs:boolean($restrictNonAudioVideoMediaTypes);
    }

    public function getRestrictNonAudioVideoMediaTypes()
    {
        return (!$this->restrictNonAudioVideoMediaTypes) ?: $this->restrictNonAudioVideoMediaTypes->value();
    }
}
