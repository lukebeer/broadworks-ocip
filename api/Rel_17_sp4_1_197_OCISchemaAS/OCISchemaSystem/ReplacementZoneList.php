<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains an ordered list of zones to use to replace the current list of zones in an Office Zone.
 */
class ReplacementZoneList extends ComplexType implements ComplexInterface
{
    public    $name     = 'ReplacementZoneList';
    protected $zoneName = null;

    public function __construct(
         $zoneName = null
    ) {
        $this->setZoneName($zoneName);
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
    public function setZoneName($zoneName = null)
    {
        if (!$zoneName) return $this;
        $this->zoneName = new SimpleContent($zoneName);
        $this->zoneName->setName('zoneName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $zoneName
     */
    public function getZoneName()
    {
        return $this->zoneName->getValue();
    }
}
