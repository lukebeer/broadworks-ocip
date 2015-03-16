<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the setting that are configured for all the DNIS in a Route Point.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointModifyDNISParametersRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointModifyDNISParametersRequest';
    protected $serviceUserId;
    protected $displayDNISNumber;
    protected $displayDNISName;

    public function __construct(
         $serviceUserId = '',
         $displayDNISNumber = null,
         $displayDNISName = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setDisplayDNISNumber($displayDNISNumber);
        $this->setDisplayDNISName($displayDNISName);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setDisplayDNISNumber($displayDNISNumber = null)
    {
        $this->displayDNISNumber = new PrimitiveType($displayDNISNumber);
        $this->displayDNISNumber->setName('displayDNISNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISNumber
     */
    public function getDisplayDNISNumber()
    {
        return ($this->displayDNISNumber) ? $this->displayDNISNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        $this->displayDNISName = new PrimitiveType($displayDNISName);
        $this->displayDNISName->setName('displayDNISName');
        return $this;
    }

    /**
     * 
     * @return boolean $displayDNISName
     */
    public function getDisplayDNISName()
    {
        return ($this->displayDNISName) ? $this->displayDNISName->getValue() : null;
    }
}
