<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * The OCIDataResponse is an abstract base type for all responses containing some sort of data other than
 *         merely a success or failure indication.
 */
class OCIDataResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

}
