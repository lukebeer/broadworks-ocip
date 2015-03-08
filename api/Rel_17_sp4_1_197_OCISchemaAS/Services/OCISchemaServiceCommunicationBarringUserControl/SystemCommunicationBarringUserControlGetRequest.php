<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Gets the Communication Barring system level settings.
 *         The response is either SystemCommunicationBarringUserControlGetResponse or ErrorResponse.
 */
class SystemCommunicationBarringUserControlGetRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl\SystemCommunicationBarringUserControlGetResponse';
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
