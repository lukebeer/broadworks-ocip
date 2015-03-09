<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLicenseType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLicensingGetSystemLicenseListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSystemLicenseGetListRequest.
 */
class SystemLicensingGetSystemLicenseListResponse extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $license = null;

    /**
     * @return SystemLicensingGetSystemLicenseListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * System License type.
     */
    public function setLicense($license = null)
    {
        $this->license = ($license InstanceOf SystemLicenseType)
             ? $license
             : new SystemLicenseType($license);
    }

    /**
     * System License type.
     */
    public function getLicense()
    {
        return (!$this->license) ?: $this->license->getValue();
    }
}
