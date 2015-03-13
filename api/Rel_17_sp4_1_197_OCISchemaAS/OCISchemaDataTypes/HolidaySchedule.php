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
 * Holiday Schedule.
 */
class HolidaySchedule extends ComplexType implements ComplexInterface
{
    public    $name = 'HolidaySchedule';
    protected $type = null;
    protected $name = null;

    public function __construct(
         $type,
         $name
    ) {
        $this->setType($type);
        $this->setName($name);
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
    public function setType($type = null)
    {
        if (!$type) return $this;
        $this->type = new SimpleContent($type);
        $this->type->setName('type');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $type
     */
    public function getType()
    {
        return $this->type->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }
}
