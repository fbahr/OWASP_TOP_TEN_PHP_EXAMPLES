```
2021 Identification and Authentication Failures -- 2017 Broken Authentication
```

## Description

Source: https://owasp.org/Top10/A07_2021-Identification_and_Authentication_Failures/

Confirmation of the user's identity, authentication, and session management is critical to protect against authentication-related attacks.
There may be authentication weaknesses if the application:
* Permits automated attacks such as credential stuffing, where the attacker has a list of valid usernames and passwords.
* Permits brute force or other automated attacks.
* Permits default, weak, or well-known passwords, such as "Password1" or "admin/admin".
* Uses weak or ineffective credential recovery and forgot-password processes, such as "knowledge-based answers," which cannot be made safe.
* Uses plain text, encrypted, or weakly hashed passwords data stores (see A02:2021-Cryptographic Failures).
* Has missing or ineffective multi-factor authentication.
* Exposes session identifier in the URL.
* Reuse session identifier after successful login.
* Does not correctly invalidate Session IDs. User sessions or authentication tokens (mainly single sign-on (SSO) tokens) aren't properly invalidated during logout or a period of inactivity.

## How to Prevent

* Where possible, implement multi-factor authentication to prevent automated credential stuffing, brute force, and stolen credential reuse attacks.
* Do not ship or deploy with any default credentials, particularly for admin users.
* Implement weak password checks, such as testing new or changed passwords against the top 10,000 worst passwords list.
* Align password length, complexity, and rotation policies with National Institute of Standards and Technology (NIST) 800-63b's guidelines in section 5.1.1 for Memorized Secrets
  or other modern, evidence-based password policies.
* Ensure registration, credential recovery, and API pathways are hardened against account enumeration attacks by using the same messages for all outcomes.
* Limit or increasingly delay failed login attempts, but be careful not to create a denial of service scenario.
  Log all failures and alert administrators when credential stuffing, brute force, or other attacks are detected.
* Use a server-side, secure, built-in session manager that generates a new random session ID with high entropy after login.
  Session identifier should not be in the URL, be securely stored, and invalidated after logout, idle, and absolute timeouts.

## List of Mapped CWEs

- CWE-255 Credentials Management Errors
- CWE-259 Use of Hard-coded Password
- CWE-287 Improper Authentication
- CWE-288 Authentication Bypass Using an Alternate Path or Channel
- CWE-290 Authentication Bypass by Spoofing
- CWE-294 Authentication Bypass by Capture-replay
- CWE-295 Improper Certificate Validation
- CWE-297 Improper Validation of Certificate with Host Mismatch
- CWE-300 Channel Accessible by Non-Endpoint
- CWE-302 Authentication Bypass by Assumed-Immutable Data
- CWE-304 Missing Critical Step in Authentication
- CWE-306 Missing Authentication for Critical Function
- CWE-307 Improper Restriction of Excessive Authentication Attempts
- CWE-346 Origin Validation Error
- CWE-384 Session Fixation
- CWE-521 Weak Password Requirements
- CWE-613 Insufficient Session Expiration
- CWE-620 Unverified Password Change
- CWE-640 Weak Password Recovery Mechanism for Forgotten Password
- CWE-798 Use of Hard-coded Credentials
- CWE-940 Improper Verification of Source of a Communication Channel
- CWE-1216 Lockout Mechanism Errors
