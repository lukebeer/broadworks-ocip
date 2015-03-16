<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAlternateNumbers; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Alternate Number Entry.
 */
class AlternateNumberEntry17 extends ComplexType implements ComplexInterface
{
    public    $name = 'AlternateNumberEntry17';
    protected $phoneNumber;
    protected $extension;
    protected $ringPattern;

    public function __construct(
         $phoneNumber = null,
         $extension = null,
         $ringPattern = null
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setExtension($extension);
        $this->setRingPattern($ringPattern);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setExtension($extension = null)
    {
        $this->extension = new SimpleContent($extension);
        $this->extension->setName('extension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $extension
     */
    public function getExtension()
    {
        return ($this->extension) ? $this->extension->getValue() : null;
    }

    /**
     * 
     */
    public function setRingPattern($ringPattern = null)
    {
        $this->ringPattern = new SimpleContent($ringPattern);
        $this->ringPattern->setName('ringPattern');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ringPattern
     */
    public function getRingPattern()
    {
        return ($this->ringPattern) ? $this->ringPattern->getValue() : null;
    }
}
