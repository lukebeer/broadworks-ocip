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
     * The OCITable type is used in responses only, never in requests.
 *         The table consists of rows and columns of strings. Each column has a column
 *         heading. Clients should search the column headings to find a particular
 *         column. Clients should not assume any particular column order as future
 *         revisions of the protocol may move or add columns.
 */
class OCITable extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE\OCITable';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
