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
 * A list of Communication Barring Call Types that replaces a previously
 *         configured list. By convention, an element of this type may be set 
 *         nill to clear the list.
 */
class ReplacementCommunicationBarringCallTypeList extends ComplexType implements ComplexInterface
{
    public    $name = 'ReplacementCommunicationBarringCallTypeList';
    protected $callType;

    public function __construct(
         $callType = null
    ) {
        $this->setCallType($callType);
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
    public function setCallType($callType = null)
    {
        $this->callType = new SimpleContent($callType);
        $this->callType->setName('callType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callType
     */
    public function getCallType()
    {
        return ($this->callType) ? $this->callType->getValue() : null;
    }
}
