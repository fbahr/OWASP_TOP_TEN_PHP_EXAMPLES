```
2021 Software and Data Integrity Failures -- 2017 Insecure Deserialization
```

## Description

Source: https://owasp.org/Top10/A08_2021-Software_and_Data_Integrity_Failures/

Software and data integrity failures relate to code and infrastructure that does not protect against integrity violations.
An example of this is where an application relies upon plugins, libraries, or modules from untrusted sources, repositories, and content delivery networks (CDNs).
An insecure CI/CD pipeline can introduce the potential for unauthorized access, malicious code, or system compromise.
Lastly, many applications now include auto-update functionality, where updates are downloaded without sufficient integrity verification and applied to the previously trusted application.
Attackers could potentially upload their own updates to be distributed and run on all installations.
Another example is where objects or data are encoded or serialized into a structure that an attacker can see and modify is vulnerable to insecure deserialization.

## How to Prevent

* Use digital signatures or similar mechanisms to verify the software or data is from the expected source and has not been altered.
* Ensure libraries and dependencies, such as npm or Maven, are consuming trusted repositories.
  If you have a higher risk profile, consider hosting an internal known-good repository that's vetted.
* Ensure that a software supply chain security tool, such as OWASP Dependency Check or OWASP CycloneDX, is used to verify that components do not contain known vulnerabilities
* Ensure that there is a review process for code and configuration changes to minimize the chance that malicious code or configuration could be introduced into your software pipeline.
* Ensure that your CI/CD pipeline has proper segregation, configuration, and access control to ensure the integrity of the code flowing through the build and deploy processes.
* Ensure that unsigned or unencrypted serialized data is not sent to untrusted clients without some form of integrity check or digital signature to detect tampering or replay of the serialized data

## List of Mapped CWEs

- CWE-345 Insufficient Verification of Data Authenticity
- CWE-353 Missing Support for Integrity Check
- CWE-426 Untrusted Search Path
- CWE-494 Download of Code Without Integrity Check
- CWE-502 Deserialization of Untrusted Data
- CWE-565 Reliance on Cookies without Validation and Integrity Checking
- CWE-784 Reliance on Cookies without Validation and Integrity Checking in a Security Decision
- CWE-829 Inclusion of Functionality from Untrusted Control Sphere
- CWE-830 Inclusion of Web Functionality from an Untrusted Source
- CWE-915 Improperly Controlled Modification of Dynamically-Determined Object Attributes (Mass Assignment, Model Binding, ...)
