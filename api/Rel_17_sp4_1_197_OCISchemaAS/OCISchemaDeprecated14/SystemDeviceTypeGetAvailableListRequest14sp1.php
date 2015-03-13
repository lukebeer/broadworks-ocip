<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests a list of non-obsolete Identity/device profile types defined in the system. It is possible
 *         to get either all conference device types or all non-conferernce types. This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.
 *         The response is either SystemDeviceTypeGetlAvailableListResponse14sp1 or ErrorResponse.
 *         Replaced By: SystemDeviceTypeGetAvailableListRequest14sp3
 */
class SystemDeviceTypeGetAvailableListRequest14sp1 extends ComplexType implements ComplexInterface
{
    public    $responseType          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemDeviceTypeGetAvailableListResponse14sp1';
    public    $name                  = 'SystemDeviceTypeGetAvailableListRequest14sp1';
    protected $allowConference       = null;
    protected $allowMusicOnHold      = null;
    protected $onlyConference        = null;
    protected $onlyVideoCapable      = null;
    protected $onlyOptionalIpAddress = null;

    public function __construct(
         $allowConference,
         $allowMusicOnHold,
         $onlyConference,
         $onlyVideoCapable,
         $onlyOptionalIpAddress
    ) {
        $this->setAllowConference($allowConference);
        $this->setAllowMusicOnHold($allowMusicOnHold);
        $this->setOnlyConference($onlyConference);
        $this->setOnlyVideoCapable($onlyVideoCapable);
        $this->setOnlyOptionalIpAddress($onlyOptionalIpAddress);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemDeviceTypeGetAvailableListResponse14sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAllowConference($allowConference = null)
    {
        if (!$allowConference) return $this;
        $this->allowConference = new PrimitiveType($allowConference);
        $this->allowConference->setName('allowConference');
        return $this;
    }

    /**
     * 
     * @return boolean $allowConference
     */
    public function getAllowConference()
    {
        return $this->allowConference->getValue();
    }

    /**
     * 
     */
    public function setAllowMusicOnHold($allowMusicOnHold = null)
    {
        if (!$allowMusicOnHold) return $this;
        $this->allowMusicOnHold = new PrimitiveType($allowMusicOnHold);
        $this->allowMusicOnHold->setName('allowMusicOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $allowMusicOnHold
     */
    public function getAllowMusicOnHold()
    {
        return $this->allowMusicOnHold->getValue();
    }

    /**
     * 
     */
    public function setOnlyConference($onlyConference = null)
    {
        if (!$onlyConference) return $this;
        $this->onlyConference = new PrimitiveType($onlyConference);
        $this->onlyConference->setName('onlyConference');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyConference
     */
    public function getOnlyConference()
    {
        return $this->onlyConference->getValue();
    }

    /**
     * 
     */
    public function setOnlyVideoCapable($onlyVideoCapable = null)
    {
        if (!$onlyVideoCapable) return $this;
        $this->onlyVideoCapable = new PrimitiveType($onlyVideoCapable);
        $this->onlyVideoCapable->setName('onlyVideoCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyVideoCapable
     */
    public function getOnlyVideoCapable()
    {
        return $this->onlyVideoCapable->getValue();
    }

    /**
     * 
     */
    public function setOnlyOptionalIpAddress($onlyOptionalIpAddress = null)
    {
        if (!$onlyOptionalIpAddress) return $this;
        $this->onlyOptionalIpAddress = new PrimitiveType($onlyOptionalIpAddress);
        $this->onlyOptionalIpAddress->setName('onlyOptionalIpAddress');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyOptionalIpAddress
     */
    public function getOnlyOptionalIpAddress()
    {
        return $this->onlyOptionalIpAddress->getValue();
    }
}
