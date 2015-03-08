<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a call center reporting server.
 * 
 *         name - A unique name given to the CCR inside the AS.
 *                CCR are associated to the Call Center through that name.
 *         url - The Reporting Server URL used by the BroadWorks Call Center
 *               client to connect to the CCR.
 *         netAddress - The address used by the CCR to connect to the CAP-S-CallCenter port on the AS.
 *                      Only connections from configured CCR are accepted.
 *         description - An optional description text.
 * 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterReportingServerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $name        = null;
    protected $url         = null;
    protected $netAddress  = null;
    protected $description = null;

    public function __construct(
         $name,
         $url,
         $netAddress,
         $description = null
    ) {
        $this->setName($name);
        $this->setUrl($url);
        $this->setNetAddress($netAddress);
        $this->setDescription($description);
    }

    /**
     * Call Center Reporting Server Name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallCenterReportingServerName)
             ? $name
             : new CallCenterReportingServerName($name);
    }

    /**
     * Call Center Reporting Server Name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * URL.
     */
    public function setUrl($url = null)
    {
        $this->url = ($url InstanceOf URL)
             ? $url
             : new URL($url);
    }

    /**
     * URL.
     */
    public function getUrl()
    {
        return (!$this->url) ?: $this->url->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * Call Center Reporting Server Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterReportingServerDescription)
             ? $description
             : new CallCenterReportingServerDescription($description);
    }

    /**
     * Call Center Reporting Server Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
