```
2021 Security Misconfiguration -- 2017 Security Misconfiguration
                               +- 2017 XML External Entities (XXE)
```

## Description

Source: https://owasp.org/Top10/A05_2021-Security_Misconfiguration/

The application might be vulnerable if the application is:
* Missing appropriate security hardening across any part of the application stack or improperly configured permissions on cloud services.
* Unnecessary features are enabled or installed (e.g., unnecessary ports, services, pages, accounts, or privileges).
* Default accounts and their passwords are still enabled and unchanged.
* Error handling reveals stack traces or other overly informative error messages to users.
* For upgraded systems, the latest security features are disabled or not configured securely.
* The security settings in the application servers, application frameworks (e.g., Struts, Spring, ASP.NET), libraries, databases, etc., are not set to secure values.
* The server does not send security headers or directives, or they are not set to secure values.
* The software is out of date or vulnerable (see A06:2021-Vulnerable and Outdated Components).

## How to Prevent

Secure installation processes should be implemented, including:
* A minimal platform without any unnecessary features, components, documentation, and samples. Remove or do not install unused features and frameworks.
* A task to review and update the configurations appropriate to all security notes, updates, and patches as part of the patch management process (see A06:2021-Vulnerable and Outdated Components).
  Review cloud storage permissions (e.g., S3 bucket permissions).
* A segmented application architecture provides effective and secure separation between components or tenants, with segmentation, containerization, or cloud security groups (ACLs).
* ...

## List of Mapped CWEs

- CWE-11 ASP.NET Misconfiguration: Creating Debug Binary
- CWE-13 ASP.NET Misconfiguration: Password in Configuration File
- CWE-15 External Control of System or Configuration Setting
- CWE-260 Password in Configuration File
- CWE-315 Cleartext Storage of Sensitive Information in a Cookie
- CWE-520 .NET Misconfiguration: Use of Impersonation
- CWE-526 Exposure of Sensitive Information Through Environmental Variables
- CWE-537 Java Runtime Error Message Containing Sensitive Information
- CWE-541 Inclusion of Sensitive Information in an Include File
- CWE-547 Use of Hard-coded, Security-relevant Constants
- CWE-611 Improper Restriction of XML External Entity Reference [FIXED]
- CWE-614 Sensitive Cookie in HTTPS Session Without 'Secure' Attribute
- CWE-756 Missing Custom Error Page
- CWE-776 Improper Restriction of Recursive Entity References in DTDs ('XML Entity Expansion') [FIXED]
- CWE-942 Permissive Cross-domain Policy with Untrusted Domains
- CWE-1004 Sensitive Cookie Without 'HttpOnly' Flag
- CWE-1174 ASP.NET Misconfiguration: Improper Model Validation
