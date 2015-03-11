<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CommunicationBarringOriginatingRule15sp2;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Communication Barring Originating Rule
 */
class CommunicationBarringOriginatingRule15sp2 extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CommunicationBarringOriginatingRule15sp2';
    public    $name           = 'CommunicationBarringOriginatingRule15sp2';
    protected $criteria       = null;
    protected $action         = null;
    protected $treatmentId    = null;
    protected $transferNumber = null;

    public function __construct(
         $criteria,
         $action,
         $treatmentId = null,
         $transferNumber = null
    ) {
        $this->setCriteria($criteria);
        $this->setAction($action);
        $this->setTreatmentId($treatmentId);
        $this->setTransferNumber($transferNumber);
    }

    /**
     * @return CommunicationBarringOriginatingRule15sp2
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
        if (!$criteria) return $this;
        $this->criteria = new SimpleContent($criteria);
        $this->criteria->setName('criteria');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getCriteria()
    {
        return $this->criteria->getValue();
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        if (!$action) return $this;
        $this->action = new SimpleContent($action);
        $this->action->setName('action');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAction()
    {
        return $this->action->getValue();
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        if (!$treatmentId) return $this;
        $this->treatmentId = new SimpleContent($treatmentId);
        $this->treatmentId->setName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTreatmentId()
    {
        return $this->treatmentId->getValue();
    }

    /**
     * 
     */
    public function setTransferNumber($transferNumber = null)
    {
        if (!$transferNumber) return $this;
        $this->transferNumber = new SimpleContent($transferNumber);
        $this->transferNumber->setName('transferNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getTransferNumber()
    {
        return $this->transferNumber->getValue();
    }
}
