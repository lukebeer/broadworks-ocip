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
 * Get a list of enterprise level departments in an enterprise that could be the parent of the
 *         specified department. The department itself and all its decendents are not eligible to be
 *         the parent department.
 *         The response is either EnterpriseDepartmentGetAvailableParentListResponse or ErrorResponse.
 */
class EnterpriseDepartmentGetAvailableParentListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseDepartmentGetAvailableParentListResponse';
    public    $elementName = 'EnterpriseDepartmentGetAvailableParentListRequest';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseDepartmentGetAvailableParentListResponse $response
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
