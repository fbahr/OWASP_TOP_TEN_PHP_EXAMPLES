## Description

Source: https://owasp.org/Top10/A04_2021-Insecure_Design/

Insecure design is a broad category representing different weaknesses, expressed as “missing or ineffective control design.”
An insecure design cannot be fixed by a perfect implementation as by definition, needed security controls were never created
to defend against specific attacks.

## How to Prevent

* Establish and use a secure development lifecycle.
* Establish and use a library of secure design patterns or paved road ready to use components.
* Use threat modeling for critical authentication, access control, business logic, and key flows.
* Integrate plausibility checks at each tier of your application (from frontend to backend).
* Segregate tier layers on the system and network layers depending on the exposure and protection needs.
* Segregate tenants robustly by design throughout all tiers.
* Limit resource consumption by user or service.
* ...

## List of Mapped CWEs

- CWE-73 External Control of File Name or Path
- CWE-183 Permissive List of Allowed Inputs
- CWE-209 Generation of Error Message Containing Sensitive Information
- CWE-213 Exposure of Sensitive Information Due to Incompatible Policies
- CWE-235 Improper Handling of Extra Parameters
- CWE-256 Unprotected Storage of Credentials
- CWE-257 Storing Passwords in a Recoverable Format
- CWE-266 Incorrect Privilege Assignment
- CWE-269 Improper Privilege Management
- CWE-280 Improper Handling of Insufficient Permissions or Privileges
- CWE-311 Missing Encryption of Sensitive Data
- CWE-312 Cleartext Storage of Sensitive Information
- CWE-313 Cleartext Storage in a File or on Disk
- CWE-316 Cleartext Storage of Sensitive Information in Memory
- CWE-419 Unprotected Primary Channel
- CWE-430 Deployment of Wrong Handler
- ✓ CWE-434 Unrestricted Upload of File with Dangerous Type
- CWE-444 Inconsistent Interpretation of HTTP Requests ('HTTP Request Smuggling')
- CWE-451 User Interface (UI) Misrepresentation of Critical Information
- CWE-472 External Control of Assumed-Immutable Web Parameter
- CWE-501 Trust Boundary Violation
- ✓ CWE-522 Insufficiently Protected Credentials
- CWE-525 Use of Web Browser Cache Containing Sensitive Information
- CWE-539 Use of Persistent Cookies Containing Sensitive Information
- CWE-579 J2EE Bad Practices: Non-serializable Object Stored in Session
- CWE-598 Use of GET Request Method With Sensitive Query Strings
- CWE-602 Client-Side Enforcement of Server-Side Security
- CWE-642 External Control of Critical State Data
- CWE-646 Reliance on File Name or Extension of Externally-Supplied File
- CWE-650 Trusting HTTP Permission Methods on the Server Side
- CWE-653 Insufficient Compartmentalization
- CWE-656 Reliance on Security Through Obscurity
- CWE-657 Violation of Secure Design Principles
- CWE-799 Improper Control of Interaction Frequency
- CWE-807 Reliance on Untrusted Inputs in a Security Decision
- CWE-840 Business Logic Errors
- CWE-841 Improper Enforcement of Behavioral Workflow
- CWE-927 Use of Implicit Intent for Sensitive Communication
- CWE-1021 Improper Restriction of Rendered UI Layers or Frames
- CWE-1173 Improper Use of Validation Framework
