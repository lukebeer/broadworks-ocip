<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerAlternateCallIndicator;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemExpensiveCallTypeGetListRequest.
 *         Replaced by: SystemExpensiveCallTypeGetListResponse16sp1
 */
class SystemExpensiveCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemExpensiveCallTypeGetListResponse';
    protected $alternateCallIndicator;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemExpensiveCallTypeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        $this->alternateCallIndicator = ($alternateCallIndicator InstanceOf NetworkServerAlternateCallIndicator)
             ? $alternateCallIndicator
             : new NetworkServerAlternateCallIndicator($alternateCallIndicator);
        $this->alternateCallIndicator->setName('alternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return NetworkServerAlternateCallIndicator $alternateCallIndicator
     */
    public function getAlternateCallIndicator()
    {
        return ($this->alternateCallIndicator) ? $this->alternateCallIndicator->getValue() : null;
    }
}
