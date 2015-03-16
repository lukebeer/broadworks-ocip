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
 * Communication Barring Profile defined as part of the Network Class
 *         Of Service. There can be only one primary profile within a Network
 *         Class Of Service.
 */
class NetworkClassOfServiceCommunicationBarringProfile extends ComplexType implements ComplexInterface
{
    public    $elementName = 'NetworkClassOfServiceCommunicationBarringProfile';
    protected $name;
    protected $isPrimary;

    public function __construct(
         $name = '',
         $isPrimary = ''
    ) {
        $this->setName($name);
        $this->setIsPrimary($isPrimary);
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
    public function setName($name = null)
    {
        $this->name = new SimpleContent($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsPrimary($isPrimary = null)
    {
        $this->isPrimary = new SimpleContent($isPrimary);
        $this->isPrimary->setElementName('isPrimary');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isPrimary
     */
    public function getIsPrimary()
    {
        return ($this->isPrimary)
            ? $this->isPrimary->getElementValue()
            : null;
    }
}
