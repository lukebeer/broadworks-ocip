<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeNumberOfDigits;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\AccountAuthorizationCodeType;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupAccountAuthorizationCodesGetRequest.
 *         The tables has the following column headings:
 *         "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 */
class GroupAccountAuthorizationCodesGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAccountAuthorizationCodesGetResponse';
    protected $type;
    protected $numberOfDigits;
    protected $allowLocalAndTollFreeCalls;
    protected $mandatoryUsageUserTable;
    protected $optionalUsageUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAccountAuthorizationCodes\GroupAccountAuthorizationCodesGetResponse $response
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
        $this->type = ($type InstanceOf AccountAuthorizationCodeType)
             ? $type
             : new AccountAuthorizationCodeType($type);
        $this->type->setElementName('type');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeType $type
     */
    public function getType()
    {
        return ($this->type)
            ? $this->type->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfDigits($numberOfDigits = null)
    {
        $this->numberOfDigits = ($numberOfDigits InstanceOf AccountAuthorizationCodeNumberOfDigits)
             ? $numberOfDigits
             : new AccountAuthorizationCodeNumberOfDigits($numberOfDigits);
        $this->numberOfDigits->setElementName('numberOfDigits');
        return $this;
    }

    /**
     * 
     * @return AccountAuthorizationCodeNumberOfDigits $numberOfDigits
     */
    public function getNumberOfDigits()
    {
        return ($this->numberOfDigits)
            ? $this->numberOfDigits->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowLocalAndTollFreeCalls($allowLocalAndTollFreeCalls = null)
    {
        $this->allowLocalAndTollFreeCalls = new PrimitiveType($allowLocalAndTollFreeCalls);
        $this->allowLocalAndTollFreeCalls->setElementName('allowLocalAndTollFreeCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowLocalAndTollFreeCalls
     */
    public function getAllowLocalAndTollFreeCalls()
    {
        return ($this->allowLocalAndTollFreeCalls)
            ? $this->allowLocalAndTollFreeCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMandatoryUsageUserTable(TableType $mandatoryUsageUserTable = null)
    {
        $this->mandatoryUsageUserTable = $mandatoryUsageUserTable;
        $this->mandatoryUsageUserTable->setElementName('mandatoryUsageUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getMandatoryUsageUserTable()
    {
        return $this->mandatoryUsageUserTable;
    }

    /**
     * 
     */
    public function setOptionalUsageUserTable(TableType $optionalUsageUserTable = null)
    {
        $this->optionalUsageUserTable = $optionalUsageUserTable;
        $this->optionalUsageUserTable->setElementName('optionalUsageUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getOptionalUsageUserTable()
    {
        return $this->optionalUsageUserTable;
    }
}
