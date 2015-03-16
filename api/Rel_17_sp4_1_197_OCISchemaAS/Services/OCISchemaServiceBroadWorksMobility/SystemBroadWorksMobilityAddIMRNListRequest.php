<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Adds BroadWorks Mobility IMRN numbers to the system. It is possible to add either: 
 *         a single number, a list of numbers, or a range of numbers, or any combination thereof.
 *         The response is either a SuccessResponse or ErrorResponse.
 */
class SystemBroadWorksMobilityAddIMRNListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemBroadWorksMobilityAddIMRNListRequest';
    protected $imrnNumber;
    protected $numberRange;

    public function __construct(
         $imrnNumber = null,
         DNRange $numberRange = null
    ) {
        $this->setImrnNumber($imrnNumber);
        $this->setNumberRange($numberRange);
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
    public function setImrnNumber($imrnNumber = null)
    {
        $this->imrnNumber = ($imrnNumber InstanceOf DN)
             ? $imrnNumber
             : new DN($imrnNumber);
        $this->imrnNumber->setName('imrnNumber');
        return $this;
    }

    /**
     * 
     * @return DN $imrnNumber
     */
    public function getImrnNumber()
    {
        return ($this->imrnNumber) ? $this->imrnNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberRange(DNRange $numberRange = null)
    {
        $this->numberRange = ($numberRange InstanceOf DNRange)
             ? $numberRange
             : new DNRange($numberRange);
        $this->numberRange->setName('numberRange');
        return $this;
    }

    /**
     * 
     * @return DNRange $numberRange
     */
    public function getNumberRange()
    {
        return $this->numberRange;
    }
}
