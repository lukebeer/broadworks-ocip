<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRedirectedCallSelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRedirectedCallSelection';
    public    $name           = 'EnhancedCallLogsRedirectedCallSelection';
    protected $redirectedCall = null;
    protected $redirectType   = null;

    public function __construct(
         $redirectedCall,
         $redirectType = null
    ) {
        $this->setRedirectedCall($redirectedCall);
        $this->setRedirectType($redirectType);
    }

    /**
     * @return EnhancedCallLogsRedirectedCallSelection
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
        if (!$redirectedCall) return $this;
        $this->redirectedCall = new SimpleContent($redirectedCall);
        $this->redirectedCall->setName('redirectedCall');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRedirectedCall()
    {
        return $this->redirectedCall->getValue();
    }

    /**
     * 
     */
    public function setRedirectType($redirectType = null)
    {
        if (!$redirectType) return $this;
        $this->redirectType = new SimpleContent($redirectType);
        $this->redirectType->setName('redirectType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getRedirectType()
    {
        return $this->redirectType->getValue();
    }
}
