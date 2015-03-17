## Broadworks_OCIP\core\Logging\ErrorControl

The ErrorControl is a singleton - only one instance of the object can exist throughout the lifetime of the application.
All error messaging ends up here, without it being a singleton, remembering what class puts errors where would be a pain in the ass.