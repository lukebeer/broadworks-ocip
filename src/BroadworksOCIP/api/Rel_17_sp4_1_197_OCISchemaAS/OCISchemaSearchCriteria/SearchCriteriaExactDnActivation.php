<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Criteria for searching for a particular Dn activation state.
 */
class SearchCriteriaExactDnActivation extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactDnActivation';
    protected $activated;

    public function __construct(
         $activated = ''
    ) {
        $this->setActivated($activated);
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
    public function setActivated($activated = null)
    {
        $this->activated = new PrimitiveType($activated);
        $this->activated->setElementName('activated');
        return $this;
    }

    /**
     * 
     * @return boolean $activated
     */
    public function getActivated()
    {
        return ($this->activated)
            ? $this->activated->getElementValue()
            : null;
    }
}
