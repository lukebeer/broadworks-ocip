<?php
abstract class OCIDataTypes {
    const OCI_NAME   = 'Name';
    const OCI_PARAMS = 'Params';
    const XSI_NIL    = 'xsi:nil';
}

abstract class OCISearchModes {
    const STARTS_WITH = 'Starts With';
    const CONTAINS    = 'Contains';
    const EQUAL       = 'Equal To';
}

abstract class OCIResponseOutput {
    const STD        = 0;
    const XML        = 1;
    const JSON       = 2;
    const SIMPLEXML  = 3;
}