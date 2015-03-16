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
 * Feature Access Code Entry
 */
class FeatureAccessCodeEntry extends ComplexType implements ComplexInterface
{
    public    $elementName = 'FeatureAccessCodeEntry';
    protected $featureAccessCodeName;
    protected $mainCode;
    protected $alternateCode;

    public function __construct(
         $featureAccessCodeName = '',
         $mainCode = null,
         $alternateCode = null
    ) {
        $this->setFeatureAccessCodeName($featureAccessCodeName);
        $this->setMainCode($mainCode);
        $this->setAlternateCode($alternateCode);
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
    public function setFeatureAccessCodeName($featureAccessCodeName = null)
    {
        $this->featureAccessCodeName = new SimpleContent($featureAccessCodeName);
        $this->featureAccessCodeName->setElementName('featureAccessCodeName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $featureAccessCodeName
     */
    public function getFeatureAccessCodeName()
    {
        return ($this->featureAccessCodeName)
            ? $this->featureAccessCodeName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMainCode($mainCode = null)
    {
        $this->mainCode = new SimpleContent($mainCode);
        $this->mainCode->setElementName('mainCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $mainCode
     */
    public function getMainCode()
    {
        return ($this->mainCode)
            ? $this->mainCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlternateCode($alternateCode = null)
    {
        $this->alternateCode = new SimpleContent($alternateCode);
        $this->alternateCode->setElementName('alternateCode');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $alternateCode
     */
    public function getAlternateCode()
    {
        return ($this->alternateCode)
            ? $this->alternateCode->getElementValue()
            : null;
    }
}
