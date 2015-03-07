<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SMDIMaxConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSMDIParametersGetListRequest.
 *         Contains a list of system SMDI parameters.
 */
class SystemSMDIParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $enableSMDI      = null;
    protected $listeningPort   = null;
    protected $maxConnections  = null;


    public function setEnableSMDI(xs:boolean $enableSMDI = null)
    {
    }

    public function getEnableSMDI()
    {
        return (!$this->enableSMDI) ?: $this->enableSMDI->value();
    }

    public function setListeningPort($listeningPort = null)
    {
        $this->listeningPort = ($listeningPort InstanceOf Port1025)
             ? $listeningPort
             : new Port1025($listeningPort);
    }

    public function getListeningPort()
    {
        return (!$this->listeningPort) ?: $this->listeningPort->value();
    }

    public function setMaxConnections($maxConnections = null)
    {
        $this->maxConnections = ($maxConnections InstanceOf SMDIMaxConnections)
             ? $maxConnections
             : new SMDIMaxConnections($maxConnections);
    }

    public function getMaxConnections()
    {
        return (!$this->maxConnections) ?: $this->maxConnections->value();
    }
}
