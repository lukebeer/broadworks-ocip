<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the system's calling name retrieval attributes.
 *         The response is either a SystemCallingNameRetrievalGetResponse16sp1 or an ErrorResponse.
 *       
 *         Replaced by: SystemCallingNameRetrievalGetRequest17sp4
 */
class SystemCallingNameRetrievalGetRequest16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
