```
2021 Broken Acess Control -- 2013 Insecure Direct Object References
                          +- 2013 Missing Function Level Access Control
```

## Description

Source: https://owasp.org/Top10/A01_2021-Broken_Access_Control/

Access control enforces policy such that users cannot act outside of their intended permissions.
Failures typically lead to unauthorized information disclosure, modification, or destruction of all data or performing a business function outside the user's limits.
Common access control vulnerabilities include:

* Violation of the principle of least privilege or deny by default, where access should only be granted for particular capabilities, roles, or users, but is available to anyone.
* Bypassing access control checks by modifying the URL (parameter tampering or force browsing), internal application state, or the HTML page, or by using an attack tool modifying API requests.
* Permitting viewing or editing someone else's account, by providing its unique identifier (insecure direct object references)
* Accessing API with missing access controls for POST, PUT and DELETE.
* Elevation of privilege. Acting as a user without being logged in or acting as an admin when logged in as a user.
* Metadata manipulation, such as replaying or tampering with a JSON Web Token (JWT) access control token, or a cookie or hidden field manipulated to elevate privileges or abusing JWT invalidation.
* CORS misconfiguration allows API access from unauthorized/untrusted origins.
* Force browsing to authenticated pages as an unauthenticated user or to privileged pages as a standard user.

## How to Prevent

Access control is only effective in trusted server-side code or server-less API, where the attacker cannot modify the access control check or metadata.

* Except for public resources, deny by default.
* Implement access control mechanisms once and re-use them throughout the application, including minimizing Cross-Origin Resource Sharing (CORS) usage.
* Model access controls should enforce record ownership rather than accepting that the user can create, read, update, or delete any record.
* Unique application business limit requirements should be enforced by domain models.
* Disable web server directory listing and ensure file metadata (e.g., .git) and backup files are not present within web roots.
* Log access control failures, alert admins when appropriate (e.g., repeated failures).
* Rate limit API and controller access to minimize the harm from automated attack tooling.
* Stateful session identifiers should be invalidated on the server after logout.
  Stateless JWT tokens should rather be short-lived so that the window of opportunity for an attacker is minimized.
  For longer lived JWTs it's highly recommended to follow the OAuth standards to revoke access.

## List of Mapped CWEs

- CWE-22 Improper Limitation of a Pathname to a Restricted Directory ('Path Traversal')
- CWE-23 Relative Path Traversal
- CWE-35 Path Traversal: '.../...//'
- CWE-59 Improper Link Resolution Before File Access ('Link Following')
- CWE-200 Exposure of Sensitive Information to an Unauthorized Actor
- CWE-201 Exposure of Sensitive Information Through Sent Data
- CWE-219 Storage of File with Sensitive Data Under Web Root
- CWE-264 Permissions, Privileges, and Access Controls (should no longer be used)
- CWE-275 Permission Issues
- CWE-276 Incorrect Default Permissions
- CWE-284 Improper Access Control
- CWE-285 Improper Authorization
- CWE-352 Cross-Site Request Forgery (CSRF)
- CWE-359 Exposure of Private Personal Information to an Unauthorized Actor
- CWE-377 Insecure Temporary File
- CWE-402 Transmission of Private Resources into a New Sphere ('Resource Leak')
- CWE-425 Direct Request ('Forced Browsing')
- CWE-441 Unintended Proxy or Intermediary ('Confused Deputy')
- CWE-497 Exposure of Sensitive System Information to an Unauthorized Control Sphere
- CWE-538 Insertion of Sensitive Information into Externally-Accessible File or Directory
- CWE-540 Inclusion of Sensitive Information in Source Code
- CWE-548 Exposure of Information Through Directory Listing
- CWE-552 Files or Directories Accessible to External Parties
- CWE-566 Authorization Bypass Through User-Controlled SQL Primary Key
- CWE-601 URL Redirection to Untrusted Site ('Open Redirect')
- CWE-639 Authorization Bypass Through User-Controlled Key
- CWE-651 Exposure of WSDL File Containing Sensitive Information
- CWE-668 Exposure of Resource to Wrong Sphere
- CWE-706 Use of Incorrectly-Resolved Name or Reference
- CWE-862 Missing Authorization
- CWE-863 Incorrect Authorization
- CWE-913 Improper Control of Dynamically-Managed Code Resources
- CWE-922 Insecure Storage of Sensitive Information
- CWE-1275 Sensitive Cookie with Improper SameSite Attribute
