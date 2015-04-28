<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Extension range. The minimum and maximum values are inclusive.
 */
class ExtensionRange extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ExtensionRange';
    protected $minExtension;
    protected $maxExtension;

    public function __construct(
         $minExtension = '',
         $maxExtension = ''
    ) {
        $this->setMinExtension($minExtension);
        $this->setMaxExtension($maxExtension);
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
    public function setMinExtension($minExtension = null)
    {
        $this->minExtension = new SimpleContent($minExtension);
        $this->minExtension->setElementName('minExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minExtension
     */
    public function getMinExtension()
    {
        return ($this->minExtension)
            ? $this->minExtension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxExtension($maxExtension = null)
    {
        $this->maxExtension = new SimpleContent($maxExtension);
        $this->maxExtension->setElementName('maxExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maxExtension
     */
    public function getMaxExtension()
    {
        return ($this->maxExtension)
            ? $this->maxExtension->getElementValue()
            : null;
    }
}
