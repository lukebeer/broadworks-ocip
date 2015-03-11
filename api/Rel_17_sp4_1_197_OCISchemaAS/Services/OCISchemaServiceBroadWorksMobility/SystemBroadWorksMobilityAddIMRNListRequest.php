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
    public    $name        = 'SystemBroadWorksMobilityAddIMRNListRequest';
    protected $imrnNumber  = null;
    protected $numberRange = null;

    public function __construct(
         $imrnNumber = null,
         DNRange $numberRange = null
    ) {
        $this->setImrnNumber($imrnNumber);
        $this->setNumberRange($numberRange);
    }

    /**
     * @return 
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
        if (!$imrnNumber) return $this;
        $this->imrnNumber = ($imrnNumber InstanceOf DN)
             ? $imrnNumber
             : new DN($imrnNumber);
        $this->imrnNumber->setName('imrnNumber');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getImrnNumber()
    {
        return $this->imrnNumber->getValue();
    }

    /**
     * 
     */
    public function setNumberRange(DNRange $numberRange = null)
    {
        if (!$numberRange) return $this;
        $this->numberRange = $numberRange;
        $this->numberRange->setName('numberRange');
        return $this;
    }

    /**
     * 
     * @return DNRange
     */
    public function getNumberRange()
    {
        return $this->numberRange;
    }
}
