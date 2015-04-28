<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of SIP aliases that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementSIPAliasList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementSIPAliasList';
    protected $sipAlias;

    public function __construct(
         $sipAlias = null
    ) {
        $this->setSipAlias($sipAlias);
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
    public function setSipAlias($sipAlias = null)
    {
        $this->sipAlias = new SimpleContent($sipAlias);
        $this->sipAlias->setElementName('sipAlias');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $sipAlias
     */
    public function getSipAlias()
    {
        return ($this->sipAlias)
            ? $this->sipAlias->getElementValue()
            : null;
    }
}
