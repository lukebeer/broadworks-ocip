<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Extended Call Log entry describing a placed, received, or missed call.
 *         "countryCode" is the user's country code
 *         The following time elements are represented as timestamp, i.e., the number of milliseconds
 *         since January 1, 1970, 00:00:00 GMT.
 *         "startTime" represents the time when the system sends out a call invitation message (e.g. for
 *         placed calls) or receives a call invitation message (e.g. for missed/received calls). 
 *         "answerTime" represents the time when the call is answered by the terminating party. 
 *         "detachTime" represents the time when the call is successfully redirected by the system. 
 *         "releaseTime" represents the time when the call is released. This time corresponds to the 
 *         moment the call is released by the system, and not necessarily when one party hangs up, since this 
 *         does not always mean the call is released (e.g. Emergency/911 calls).
 *         The elements "GroupId", "userId","userPrimaryDn","userPrimaryExtension", "Extension17" and "isRealUser"
 *         are only returned when the enterprise or group level requests are used.
 */
class ExtendedMixedCallLogsEntry extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(    ) {
    }
}
