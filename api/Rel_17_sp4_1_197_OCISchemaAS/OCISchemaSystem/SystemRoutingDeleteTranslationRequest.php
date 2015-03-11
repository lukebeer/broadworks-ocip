<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingDigits;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to delete a digit routing table entry from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingDeleteTranslationRequest extends ComplexType implements ComplexInterface
{
    public    $name   = 'SystemRoutingDeleteTranslationRequest';
    protected $digits = null;

    public function __construct(
         $digits
    ) {
        $this->setDigits($digits);
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
    public function setDigits($digits = null)
    {
        if (!$digits) return $this;
        $this->digits = ($digits InstanceOf RoutingDigits)
             ? $digits
             : new RoutingDigits($digits);
        $this->digits->setName('digits');
        return $this;
    }

    /**
     * 
     * @return RoutingDigits
     */
    public function getDigits()
    {
        return $this->digits->getValue();
    }
}
