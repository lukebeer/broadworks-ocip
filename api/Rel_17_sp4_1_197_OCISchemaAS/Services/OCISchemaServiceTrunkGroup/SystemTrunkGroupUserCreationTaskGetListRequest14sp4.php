<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\SystemTrunkGroupUserCreationTaskGetListResponse14sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of user creation tasks in the system.
 *         The response is either SystemTrunkGroupUserCreationTaskGetListResponse14sp4 or ErrorResponse.
 */
class SystemTrunkGroupUserCreationTaskGetListRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\SystemTrunkGroupUserCreationTaskGetListResponse14sp4';
    public    $name = 'SystemTrunkGroupUserCreationTaskGetListRequest14sp4';

    public function __construct(    ) {
    }

    /**
     * @return SystemTrunkGroupUserCreationTaskGetListResponse14sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }
}
