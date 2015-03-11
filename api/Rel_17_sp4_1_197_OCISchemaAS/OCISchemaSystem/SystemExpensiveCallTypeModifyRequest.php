<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerAlternateCallIndicator;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an existing call indicator in the list of expensive alternate call indicators.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExpensiveCallTypeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'SystemExpensiveCallTypeModifyRequest';
    protected $alternateCallIndicator = null;

    public function __construct(
         $alternateCallIndicator
    ) {
        $this->setAlternateCallIndicator($alternateCallIndicator);
    }

    /**
     * @return 
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
        if (!$alternateCallIndicator) return $this;
        $this->alternateCallIndicator = ($alternateCallIndicator InstanceOf NetworkServerAlternateCallIndicator)
             ? $alternateCallIndicator
             : new NetworkServerAlternateCallIndicator($alternateCallIndicator);
        $this->alternateCallIndicator->setName('alternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return NetworkServerAlternateCallIndicator
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator->getValue();
    }
}
