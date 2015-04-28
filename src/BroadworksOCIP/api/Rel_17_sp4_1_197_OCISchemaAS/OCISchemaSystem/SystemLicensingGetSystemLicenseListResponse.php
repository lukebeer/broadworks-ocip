<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLicenseType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemSystemLicenseGetListRequest.
 */
class SystemLicensingGetSystemLicenseListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLicensingGetSystemLicenseListResponse';
    protected $license;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemLicensingGetSystemLicenseListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLicense($license = null)
    {
        $this->license = ($license InstanceOf SystemLicenseType)
             ? $license
             : new SystemLicenseType($license);
        $this->license->setElementName('license');
        return $this;
    }

    /**
     * 
     * @return SystemLicenseType $license
     */
    public function getLicense()
    {
        return ($this->license)
            ? $this->license->getElementValue()
            : null;
    }
}
