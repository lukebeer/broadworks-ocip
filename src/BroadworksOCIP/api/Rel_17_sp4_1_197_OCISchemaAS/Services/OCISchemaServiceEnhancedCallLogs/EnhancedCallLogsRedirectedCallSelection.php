<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Redirected call selection.
 *       When " redirectedCall " is set to true, all call logs with redirected call are returned. When it
 *       set to false, all call logs without redirected call are returned.
 *       The redirected call can be defined by including a subset of Service Invocation Disposition here. 
 *       If none included, any call has a ServiceInvocationDisposition  value defined in ServiceInvocationDisposition
 *       is considered as a redirected call.
 */
class EnhancedCallLogsRedirectedCallSelection extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnhancedCallLogsRedirectedCallSelection';
    protected $redirectedCall;
    protected $redirectType;

    public function __construct(
         $redirectedCall = '',
         $redirectType = null
    ) {
        $this->setRedirectedCall($redirectedCall);
        $this->setRedirectType($redirectType);
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
    public function setRedirectedCall($redirectedCall = null)
    {
        $this->redirectedCall = new SimpleContent($redirectedCall);
        $this->redirectedCall->setElementName('redirectedCall');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectedCall
     */
    public function getRedirectedCall()
    {
        return ($this->redirectedCall)
            ? $this->redirectedCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRedirectType($redirectType = null)
    {
        $this->redirectType = new SimpleContent($redirectType);
        $this->redirectType->setElementName('redirectType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $redirectType
     */
    public function getRedirectType()
    {
        return ($this->redirectType)
            ? $this->redirectType->getElementValue()
            : null;
    }
}
