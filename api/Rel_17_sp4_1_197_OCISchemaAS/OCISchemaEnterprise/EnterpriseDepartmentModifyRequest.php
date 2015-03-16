<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseDepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a department of an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseDepartmentModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseDepartmentModifyRequest';
    protected $enterpriseId;
    protected $departmentName;
    protected $newDepartmentName;
    protected $newParentDepartmentKey;

    public function __construct(
         $enterpriseId = '',
         $departmentName = '',
         $newDepartmentName = null,
         $newParentDepartmentKey = null
    ) {
        $this->setEnterpriseId($enterpriseId);
        $this->setDepartmentName($departmentName);
        $this->setNewDepartmentName($newDepartmentName);
        $this->setNewParentDepartmentKey($newParentDepartmentKey);
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

    /**
     * 
     */
    public function setNewDepartmentName($newDepartmentName = null)
    {
        $this->newDepartmentName = ($newDepartmentName InstanceOf DepartmentName)
             ? $newDepartmentName
             : new DepartmentName($newDepartmentName);
        $this->newDepartmentName->setElementName('newDepartmentName');
        return $this;
    }

    /**
     * 
     * @return DepartmentName $newDepartmentName
     */
    public function getNewDepartmentName()
    {
        return ($this->newDepartmentName)
            ? $this->newDepartmentName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewParentDepartmentKey(EnterpriseDepartmentKey $newParentDepartmentKey = null)
    {
        $this->newParentDepartmentKey = ($newParentDepartmentKey InstanceOf EnterpriseDepartmentKey)
             ? $newParentDepartmentKey
             : new EnterpriseDepartmentKey($newParentDepartmentKey);
        $this->newParentDepartmentKey->setElementName('newParentDepartmentKey');
        return $this;
    }

    /**
     * 
     * @return EnterpriseDepartmentKey $newParentDepartmentKey
     */
    public function getNewParentDepartmentKey()
    {
        return $this->newParentDepartmentKey;
    }
}
