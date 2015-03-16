<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Communication Barring Originating Rule
 */
class CommunicationBarringOriginatingRule15sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommunicationBarringOriginatingRule15sp2';
    protected $criteria;
    protected $action;
    protected $treatmentId;
    protected $transferNumber;

    public function __construct(
         $criteria = '',
         $action = '',
         $treatmentId = null,
         $transferNumber = null
    ) {
        $this->setCriteria($criteria);
        $this->setAction($action);
        $this->setTreatmentId($treatmentId);
        $this->setTransferNumber($transferNumber);
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
    public function setCriteria($criteria = null)
    {
        $this->criteria = new SimpleContent($criteria);
        $this->criteria->setElementName('criteria');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $criteria
     */
    public function getCriteria()
    {
        return ($this->criteria)
            ? $this->criteria->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        $this->action = new SimpleContent($action);
        $this->action->setElementName('action');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $action
     */
    public function getAction()
    {
        return ($this->action)
            ? $this->action->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = new SimpleContent($treatmentId);
        $this->treatmentId->setElementName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $treatmentId
     */
    public function getTreatmentId()
    {
        return ($this->treatmentId)
            ? $this->treatmentId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferNumber($transferNumber = null)
    {
        $this->transferNumber = new SimpleContent($transferNumber);
        $this->transferNumber->setElementName('transferNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $transferNumber
     */
    public function getTransferNumber()
    {
        return ($this->transferNumber)
            ? $this->transferNumber->getElementValue()
            : null;
    }
}
