<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a department from an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseDepartmentDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseDepartmentDeleteRequest';
    protected $enterpriseId;
    protected $departmentName;

    public function __construct(
         $enterpriseId = '',
         $departmentName = ''
    ) {
        $this->setEnterpriseId($enterpriseId);
        $this->setDepartmentName($departmentName);
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
    public function setEnterpriseId($enterpriseId = null)
    {
        $this->enterpriseId = ($enterpriseId InstanceOf ServiceProviderId)
             ? $enterpriseId
             : new ServiceProviderId($enterpriseId);
        $this->enterpriseId->setElementName('enterpriseId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $enterpriseId
     */
    public function getEnterpriseId()
    {
        return ($this->enterpriseId)
            ? $this->enterpriseId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartmentName($departmentName = null)
    {
        $this->departmentName = ($departmentName InstanceOf DepartmentName)
             ? $departmentName
             : new DepartmentName($departmentName);
        $this->departmentName->setElementName('departmentName');
        return $this;
    }

    /**
     * 
     * @return DepartmentName $departmentName
     */
    public function getDepartmentName()
    {
        return ($this->departmentName)
            ? $this->departmentName->getElementValue()
            : null;
    }
}
