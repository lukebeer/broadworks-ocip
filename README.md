Broadworks_OCI-P
================

PHP Framework for interacting with the Broadworks OCI Provisioning API

-- Version 2!
- Requests are ComplexTypes with elements being an instance of a ComplexType or SimpleType
- SimpleType's such as userId can be either a string, boolean or int
- SimpleType's contain restrictions such as min/max string length or a choice from set list of possible values
- SimpleType's restrictions are validation rules dictated by the OCI-P schema
- ComplexType's have get/set methods for all elements
- Class autoloading is used
- IDE friendly, autocompletion means no more looking at schema documentation
- TCP Transport added, simple performance test results gave 150 requests/sec vs SOAP at 18 requests/sec
- Latest improvements aid rapid development of any OCI-P application



-- Version 1
- Low memory footprint, include schema on demand
- Send any OCI-P request without knowing the XML required
- Portable session objects by serialization (Useful for worker scripts (redis))
- Multiple output formats - array/XML/JSON/SimpleXML
- Job controller to manage job queues
- Ability to output commands as CSV, job files can be saved on disk and replayed by the job controler
- Basic examples provided in examples folder
- repo of scripts that uses this framework here: https://github.com/LukeBeer/ocip-scripts
