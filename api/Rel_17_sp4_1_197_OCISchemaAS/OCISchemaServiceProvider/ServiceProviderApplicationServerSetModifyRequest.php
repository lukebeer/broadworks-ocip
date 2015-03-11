<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the Application Server set assigned to the service provider or enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderApplicationServerSetModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                     = 'ServiceProviderApplicationServerSetModifyRequest';
    protected $serviceProviderId        = null;
    protected $applicationServerSetName = null;

    public function __construct(
         $serviceProviderId,
         $applicationServerSetName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setApplicationServerSetName($applicationServerSetName);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerSetName($applicationServerSetName = null)
    {
        if (!$applicationServerSetName) return $this;
        $this->applicationServerSetName = ($applicationServerSetName InstanceOf ApplicationServerSetName)
             ? $applicationServerSetName
             : new ApplicationServerSetName($applicationServerSetName);
        $this->applicationServerSetName->setName('applicationServerSetName');
        return $this;
    }

    /**
     * 
     * @return ApplicationServerSetName
     */
    public function getApplicationServerSetName()
    {
        return $this->applicationServerSetName->getValue();
    }
}
