## Broadworks_OCIP\core\Session\Session

The Session object keeps track of user authentication. It's a portable object.
Portable means a Session can be serialized into ascii text and saved into a database for example. Another script,
other than the one that created the Session by logging into Broadworks can retrieve the Session from the database and use this authenticated Session for it's execution.

The purpose of portable sessions was so server side processes can be executed as the user that requested it for audit purposes rather than having the server side code running as a single, static user.