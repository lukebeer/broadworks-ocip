<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PrimaryInfoGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests information about the primary server for high-availability support.
 */
class PrimaryInfoGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PrimaryInfoGetResponse';
    public    $name                   = __CLASS__;
    protected $isPrivate              = null;
    protected $isAddressInfoRequested = null;

    public function __construct(
         $isPrivate,
         $isAddressInfoRequested
    ) {
        $this->setIsPrivate($isPrivate);
        $this->setIsAddressInfoRequested($isAddressInfoRequested);
    }

    /**
     * @return PrimaryInfoGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsPrivate($isPrivate = null)
    {
        $this->isPrivate = (boolean) $isPrivate;
    }

    /**
     * 
     */
    public function getIsPrivate()
    {
        return (!$this->isPrivate) ?: $this->isPrivate;
    }

    /**
     * 
     */
    public function setIsAddressInfoRequested($isAddressInfoRequested = null)
    {
        $this->isAddressInfoRequested = (boolean) $isAddressInfoRequested;
    }

    /**
     * 
     */
    public function getIsAddressInfoRequested()
    {
        return (!$this->isAddressInfoRequested) ?: $this->isAddressInfoRequested;
    }
}
