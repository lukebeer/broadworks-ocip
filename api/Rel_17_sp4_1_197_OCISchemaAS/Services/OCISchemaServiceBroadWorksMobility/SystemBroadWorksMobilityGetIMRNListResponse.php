<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemBroadWorksMobilityDnGetListRequest.
 */
class SystemBroadWorksMobilityGetIMRNListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'SystemBroadWorksMobilityGetIMRNListResponse';
    protected $imrnNumber = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetIMRNListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setImrnNumber($imrnNumber = null)
    {
        if (!$imrnNumber) return $this;
        $this->imrnNumber = ($imrnNumber InstanceOf DN)
             ? $imrnNumber
             : new DN($imrnNumber);
        $this->imrnNumber->setName('imrnNumber');
        return $this;
    }

    /**
     * 
     * @return DN $imrnNumber
     */
    public function getImrnNumber()
    {
        return $this->imrnNumber->getValue();
    }
}
