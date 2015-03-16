<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of service packs that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementServicePackNameList extends ComplexType implements ComplexInterface
{
    public    $name = 'ReplacementServicePackNameList';
    protected $servicePackName;

    public function __construct(
         $servicePackName = null
    ) {
        $this->setServicePackName($servicePackName);
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
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = new SimpleContent($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName) ? $this->servicePackName->getValue() : null;
    }
}
