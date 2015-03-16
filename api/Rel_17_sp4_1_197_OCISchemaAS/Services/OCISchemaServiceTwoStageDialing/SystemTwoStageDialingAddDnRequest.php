<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing\TwoStageDialingDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add Two Stage Dialing number to the system.
 *              The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTwoStageDialingAddDnRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemTwoStageDialingAddDnRequest';
    protected $phoneNumber;
    protected $description;

    public function __construct(
         $phoneNumber = '',
         $description = null
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setDescription($description);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf TwoStageDialingDescription)
             ? $description
             : new TwoStageDialingDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return TwoStageDialingDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }
}
