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
 * Directory number range. The minimum and maximum values are inclusive.
 */
class DNRange extends ComplexType implements ComplexInterface
{
    public    $name           = 'DNRange';
    protected $minPhoneNumber = null;
    protected $maxPhoneNumber = null;

    public function __construct(
         $minPhoneNumber,
         $maxPhoneNumber
    ) {
        $this->setMinPhoneNumber($minPhoneNumber);
        $this->setMaxPhoneNumber($maxPhoneNumber);
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
    public function setMinPhoneNumber($minPhoneNumber = null)
    {
        if (!$minPhoneNumber) return $this;
        $this->minPhoneNumber = new SimpleContent($minPhoneNumber);
        $this->minPhoneNumber->setName('minPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minPhoneNumber
     */
    public function getMinPhoneNumber()
    {
        return $this->minPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setMaxPhoneNumber($maxPhoneNumber = null)
    {
        if (!$maxPhoneNumber) return $this;
        $this->maxPhoneNumber = new SimpleContent($maxPhoneNumber);
        $this->maxPhoneNumber->setName('maxPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maxPhoneNumber
     */
    public function getMaxPhoneNumber()
    {
        return $this->maxPhoneNumber->getValue();
    }
}
