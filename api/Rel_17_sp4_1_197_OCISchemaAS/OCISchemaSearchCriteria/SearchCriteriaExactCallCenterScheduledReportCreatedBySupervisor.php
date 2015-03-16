<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for call center scheduled report created by a
 *         supervisor or administrator.
 */
class SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor';
    protected $createdBySupervisor;

    public function __construct(
         $createdBySupervisor = ''
    ) {
        $this->setCreatedBySupervisor($createdBySupervisor);
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
    public function setCreatedBySupervisor($createdBySupervisor = null)
    {
        $this->createdBySupervisor = new PrimitiveType($createdBySupervisor);
        $this->createdBySupervisor->setElementName('createdBySupervisor');
        return $this;
    }

    /**
     * 
     * @return boolean $createdBySupervisor
     */
    public function getCreatedBySupervisor()
    {
        return ($this->createdBySupervisor)
            ? $this->createdBySupervisor->getElementValue()
            : null;
    }
}
