<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Communication Barring Originating Rule
 */
class CommunicationBarringOriginatingRule extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommunicationBarringOriginatingRule';
    protected $criteria;
    protected $action;
    protected $treatmentId;
    protected $transferNumber;
    protected $callTimeoutSeconds;

    public function __construct(
         $criteria = '',
         $action = '',
         $treatmentId = null,
         $transferNumber = null,
         $callTimeoutSeconds = null
    ) {
        $this->setCriteria($criteria);
        $this->setAction($action);
        $this->setTreatmentId($treatmentId);
        $this->setTransferNumber($transferNumber);
        $this->setCallTimeoutSeconds($callTimeoutSeconds);
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

    /**
     * 
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds = null)
    {
        $this->callTimeoutSeconds = new SimpleContent($callTimeoutSeconds);
        $this->callTimeoutSeconds->setElementName('callTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callTimeoutSeconds
     */
    public function getCallTimeoutSeconds()
    {
        return ($this->callTimeoutSeconds)
            ? $this->callTimeoutSeconds->getElementValue()
            : null;
    }
}
