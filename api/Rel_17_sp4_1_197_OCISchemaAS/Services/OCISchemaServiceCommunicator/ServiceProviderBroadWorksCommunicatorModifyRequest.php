<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicator; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the Configuration URL. The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderBroadWorksCommunicatorModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId=null,
             $configurationServerURL=null
    ) {
        $this->serviceProviderId      = new ServiceProviderId($serviceProviderId);
        $this->configurationServerURL = new URL($configurationServerURL);
        $this->args                   = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setConfigurationServerURL($configurationServerURL)
    {
        $configurationServerURL and $this->configurationServerURL = new URL($configurationServerURL);
    }

    public function getConfigurationServerURL()
    {
        return (!$this->configurationServerURL) ?: $this->configurationServerURL->value();
    }
}
