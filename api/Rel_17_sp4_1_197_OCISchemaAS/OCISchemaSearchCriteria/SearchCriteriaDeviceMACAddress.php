<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchMode;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Criteria for searching for device MAC address.
 */
class SearchCriteriaDeviceMACAddress extends ComplexType implements ComplexInterface
{
    public    $name              = 'SearchCriteriaDeviceMACAddress';
    protected $mode              = null;
    protected $value             = null;
    protected $isCaseInsensitive = null;

    public function __construct(
         $mode,
         $value,
         $isCaseInsensitive
    ) {
        $this->setMode($mode);
        $this->setValue($value);
        $this->setIsCaseInsensitive($isCaseInsensitive);
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
    public function setMode($mode = null)
    {
        if (!$mode) return $this;
        $this->mode = ($mode InstanceOf SearchMode)
             ? $mode
             : new SearchMode($mode);
        $this->mode->setName('mode');
        return $this;
    }

    /**
     * 
     * @return SearchMode $mode
     */
    public function getMode()
    {
        return $this->mode->getValue();
    }

    /**
     * 
     */
    public function setValue($value = null)
    {
        if (!$value) return $this;
        $this->value = ($value InstanceOf AccessDeviceMACAddress)
             ? $value
             : new AccessDeviceMACAddress($value);
        $this->value->setName('value');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMACAddress $value
     */
    public function getValue()
    {
        return $this->value->getValue();
    }

    /**
     * 
     */
    public function setIsCaseInsensitive($isCaseInsensitive = null)
    {
        if (!$isCaseInsensitive) return $this;
        $this->isCaseInsensitive = new PrimitiveType($isCaseInsensitive);
        $this->isCaseInsensitive->setName('isCaseInsensitive');
        return $this;
    }

    /**
     * 
     * @return boolean $isCaseInsensitive
     */
    public function getIsCaseInsensitive()
    {
        return $this->isCaseInsensitive->getValue();
    }
}
