<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express SR Forward Numbers with number of times to ring.
 */
class CommPilotExpressSRRedirectionWithRingList extends ComplexType implements ComplexInterface
{
    public    $name        = 'CommPilotExpressSRRedirectionWithRingList';
    protected $numberEntry = null;

    public function __construct(
         $numberEntry = null
    ) {
        $this->setNumberEntry($numberEntry);
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
    public function setNumberEntry($numberEntry = null)
    {
        if (!$numberEntry) return $this;
        $this->numberEntry = new SimpleContent($numberEntry);
        $this->numberEntry->setName('numberEntry');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberEntry
     */
    public function getNumberEntry()
    {
        return $this->numberEntry->getValue();
    }
}
