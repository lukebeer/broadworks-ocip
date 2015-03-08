<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the ServiceProviderApplicationServerSetGetRequest.
 *         The response contains the service provider or enterprise's Application Server set information.
 */
class ServiceProviderApplicationServerSetGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $applicationServerSetName = null;


    /**
     * Application Server set name.
     */
    public function setApplicationServerSetName($applicationServerSetName = null)
    {
        $this->applicationServerSetName = ($applicationServerSetName InstanceOf ApplicationServerSetName)
             ? $applicationServerSetName
             : new ApplicationServerSetName($applicationServerSetName);
    }

    /**
     * Application Server set name.
     */
    public function getApplicationServerSetName()
    {
        return (!$this->applicationServerSetName) ?: $this->applicationServerSetName->getValue();
    }
}
