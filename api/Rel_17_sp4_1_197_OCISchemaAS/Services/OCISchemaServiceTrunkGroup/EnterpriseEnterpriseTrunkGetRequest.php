<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get an enterprise trunk
 *         The response is either an EnterpriseEnterpriseTrunkGetResponse or an ErrorResponse.
 */
class EnterpriseEnterpriseTrunkGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetResponse';
    public    $name                = __CLASS__;
    protected $serviceProviderId   = null;
    protected $enterpriseTrunkName = null;

    public function __construct(
         $serviceProviderId,
         $enterpriseTrunkName
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEnterpriseTrunkName($enterpriseTrunkName);
    }

    /**
     * @return EnterpriseEnterpriseTrunkGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Enterprise Trunk name.
     *         Uniquely identifies an Enterprise Trunk in an enterprise or group.
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName = null)
    {
        $this->enterpriseTrunkName = ($enterpriseTrunkName InstanceOf EnterpriseTrunkName)
             ? $enterpriseTrunkName
             : new EnterpriseTrunkName($enterpriseTrunkName);
    }

    /**
     * Enterprise Trunk name.
     *         Uniquely identifies an Enterprise Trunk in an enterprise or group.
     */
    public function getEnterpriseTrunkName()
    {
        return (!$this->enterpriseTrunkName) ?: $this->enterpriseTrunkName->getValue();
    }
}
