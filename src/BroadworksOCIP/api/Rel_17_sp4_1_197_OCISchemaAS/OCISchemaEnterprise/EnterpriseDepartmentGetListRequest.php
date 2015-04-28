<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request a list of departments in an enterprise. You may request only the
 *         list of departments defined at the enterprise-level, or you may request
 *         the list of all departments in the enterprise including all the departments
 *         defined within the groups inside the enterprise.
 *         The response is either EnterpriseDepartmentGetListResponse or ErrorResponse.
 */
class EnterpriseDepartmentGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseDepartmentGetListResponse';
    public    $elementName = 'EnterpriseDepartmentGetListRequest';
    protected $enterpriseId;
    protected $includeGroupDepartments;

    public function __construct(
         $enterpriseId = '',
         $includeGroupDepartments = ''
    ) {
        $this->setEnterpriseId($enterpriseId);
        $this->setIncludeGroupDepartments($includeGroupDepartments);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseDepartmentGetListResponse $response
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
    public function setIncludeGroupDepartments($includeGroupDepartments = null)
    {
        $this->includeGroupDepartments = new PrimitiveType($includeGroupDepartments);
        $this->includeGroupDepartments->setElementName('includeGroupDepartments');
        return $this;
    }

    /**
     * 
     * @return boolean $includeGroupDepartments
     */
    public function getIncludeGroupDepartments()
    {
        return ($this->includeGroupDepartments)
            ? $this->includeGroupDepartments->getElementValue()
            : null;
    }
}
