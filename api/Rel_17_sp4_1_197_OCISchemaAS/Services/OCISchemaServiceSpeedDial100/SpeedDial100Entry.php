<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the speed dial 100 prefix setting for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SpeedDial100Entry extends ComplexType implements ComplexInterface
{
    public    $name        = 'SpeedDial100Entry';
    protected $speedCode   = null;
    protected $phoneNumber = null;
    protected $description = null;

    public function __construct(
         $speedCode,
         $phoneNumber,
         $description = null
    ) {
        $this->setSpeedCode($speedCode);
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
    public function setSpeedCode($speedCode = null)
    {
        if (!$speedCode) return $this;
        $this->speedCode = new SimpleContent($speedCode);
        $this->speedCode->setName('speedCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $speedCode
     */
    public function getSpeedCode()
    {
        return $this->speedCode->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        if (!$phoneNumber) return $this;
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = new SimpleContent($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $description
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }
}
