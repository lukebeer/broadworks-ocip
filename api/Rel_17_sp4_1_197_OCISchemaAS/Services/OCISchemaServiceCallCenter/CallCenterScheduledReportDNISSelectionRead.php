<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Either all DNIS under the specified Call Center or 2 lists of DNIS, one for current one for past (deleted).
 */
class CallCenterScheduledReportDNISSelectionRead extends ComplexType implements ComplexInterface
{
    public    $name          = 'CallCenterScheduledReportDNISSelectionRead';
    protected $serviceUserId = null;
    protected $deleted       = null;

    public function __construct(
         $serviceUserId,
         $deleted = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setDeleted($deleted);
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
        if (!$serviceUserId) return $this;
        $this->serviceUserId = new SimpleContent($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setDeleted($deleted = null)
    {
        if (!$deleted) return $this;
        $this->deleted = new SimpleContent($deleted);
        $this->deleted->setName('deleted');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $deleted
     */
    public function getDeleted()
    {
        return $this->deleted->getValue();
    }
}
