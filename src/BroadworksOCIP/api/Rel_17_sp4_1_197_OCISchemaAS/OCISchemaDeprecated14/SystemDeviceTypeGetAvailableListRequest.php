<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Requests a list of non-obsolete Identity/device profile types defined in the system. It is possible
 *         to get either all conference device types or all non-conferernce types. This command is similar
 *         to the SystemSIPDeviceTypeGetListRequest and SystemMGCPDeviceTypeGetListRequest
 *         but gets both SIP and MGCP types.
 *         The response is either SystemDeviceTypeGetlAvailableListResponse or ErrorResponse.
 */
class SystemDeviceTypeGetAvailableListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemDeviceTypeGetAvailableListResponse';
    public    $elementName = 'SystemDeviceTypeGetAvailableListRequest';
    protected $allowConference;
    protected $allowMusicOnHold;
    protected $onlyConference;
    protected $onlyVideoCapable;
    protected $onlyOptionalIpAddress;

    public function __construct(
         $allowConference = '',
         $allowMusicOnHold = '',
         $onlyConference = '',
         $onlyVideoCapable = '',
         $onlyOptionalIpAddress = ''
    ) {
        $this->setAllowConference($allowConference);
        $this->setAllowMusicOnHold($allowMusicOnHold);
        $this->setOnlyConference($onlyConference);
        $this->setOnlyVideoCapable($onlyVideoCapable);
        $this->setOnlyOptionalIpAddress($onlyOptionalIpAddress);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemDeviceTypeGetAvailableListResponse $response
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
        $this->allowConference = new PrimitiveType($allowConference);
        $this->allowConference->setElementName('allowConference');
        return $this;
    }

    /**
     * 
     * @return boolean $allowConference
     */
    public function getAllowConference()
    {
        return ($this->allowConference)
            ? $this->allowConference->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowMusicOnHold($allowMusicOnHold = null)
    {
        $this->allowMusicOnHold = new PrimitiveType($allowMusicOnHold);
        $this->allowMusicOnHold->setElementName('allowMusicOnHold');
        return $this;
    }

    /**
     * 
     * @return boolean $allowMusicOnHold
     */
    public function getAllowMusicOnHold()
    {
        return ($this->allowMusicOnHold)
            ? $this->allowMusicOnHold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOnlyConference($onlyConference = null)
    {
        $this->onlyConference = new PrimitiveType($onlyConference);
        $this->onlyConference->setElementName('onlyConference');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyConference
     */
    public function getOnlyConference()
    {
        return ($this->onlyConference)
            ? $this->onlyConference->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOnlyVideoCapable($onlyVideoCapable = null)
    {
        $this->onlyVideoCapable = new PrimitiveType($onlyVideoCapable);
        $this->onlyVideoCapable->setElementName('onlyVideoCapable');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyVideoCapable
     */
    public function getOnlyVideoCapable()
    {
        return ($this->onlyVideoCapable)
            ? $this->onlyVideoCapable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOnlyOptionalIpAddress($onlyOptionalIpAddress = null)
    {
        $this->onlyOptionalIpAddress = new PrimitiveType($onlyOptionalIpAddress);
        $this->onlyOptionalIpAddress->setElementName('onlyOptionalIpAddress');
        return $this;
    }

    /**
     * 
     * @return boolean $onlyOptionalIpAddress
     */
    public function getOnlyOptionalIpAddress()
    {
        return ($this->onlyOptionalIpAddress)
            ? $this->onlyOptionalIpAddress->getElementValue()
            : null;
    }
}
