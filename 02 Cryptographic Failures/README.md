```
2021 Cryptographic Failures -- 2017 Sensitive Data Exposure
```

## Description

Source: https://owasp.org/Top10/A02_2021-Cryptographic_Failures/

The first thing is to determine the protection needs of data in transit and at rest.
For example, passwords, credit card numbers, health records, personal information, and business secrets require extra protection,
mainly if that data falls under privacy laws, e.g., EU's General Data Protection Regulation (GDPR), or regulations, e.g.,
financial data protection such as PCI Data Security Standard (PCI DSS).
For all such data:

* Is any data transmitted in clear text? This concerns protocols such as HTTP, SMTP, FTP also using TLS upgrades like STARTTLS.
  External internet traffic is hazardous. Verify all internal traffic, e.g., between load balancers, web servers, or back-end systems.
* Are any old or weak cryptographic algorithms or protocols used either by default or in older code?
* Are default crypto keys in use, weak crypto keys generated or re-used, or is proper key management or rotation missing?
  Are crypto keys checked into source code repositories?
* Is encryption not enforced, e.g., are any HTTP headers (browser) security directives or headers missing?
* Is the received server certificate and the trust chain properly validated?
* Are initialization vectors ignored, reused, or not generated sufficiently secure for the cryptographic mode of operation?
  Is an insecure mode of operation such as ECB in use? Is encryption used when authenticated encryption is more appropriate?
* Are passwords being used as cryptographic keys in absence of a password base key derivation function?
* Is randomness used for cryptographic purposes that was not designed to meet cryptographic requirements?
  Even if the correct function is chosen, does it need to be seeded by the developer, and if not, has the developer over-written
  the strong seeding functionality built into it with a seed that lacks sufficient entropy/unpredictability?
* Are deprecated hash functions such as MD5 or SHA1 in use, or are non-cryptographic hash functions used when cryptographic hash functions are needed?
* Are deprecated cryptographic padding methods such as PKCS number 1 v1.5 in use?
* Are cryptographic error messages or side channel information exploitable, for example in the form of padding oracle attacks?

## How to Prevent

Do the following, at a minimum, and consult the references:
* Classify data processed, stored, or transmitted by an application. Identify which data is sensitive according to privacy laws, regulatory requirements, or business needs.
* Don't store sensitive data unnecessarily. Discard it as soon as possible or use PCI DSS compliant tokenization or even truncation. Data that is not retained cannot be stolen.
* Make sure to encrypt all sensitive data at rest.
* Ensure up-to-date and strong standard algorithms, protocols, and keys are in place; use proper key management.
* Encrypt all data in transit with secure protocols such as TLS with forward secrecy (FS) ciphers, cipher prioritization by the server, and secure parameters.
  Enforce encryption using directives like HTTP Strict Transport Security (HSTS).
* Disable caching for response that contain sensitive data.
* Apply required security controls as per the data classification.
* Do not use legacy protocols such as FTP and SMTP for transporting sensitive data.
* Store passwords using strong adaptive and salted hashing functions with a work factor (delay factor), such as Argon2, scrypt, bcrypt or PBKDF2.
* Initialization vectors must be chosen appropriate for the mode of operation. For many modes, this means using a CSPRNG (cryptographically secure pseudo random number generator).
  For modes that require a nonce, then the initialization vector (IV) does not need a CSPRNG. In all cases, the IV should never be used twice for a fixed key.
* Always use authenticated encryption instead of just encryption.
* Keys should be generated cryptographically randomly and stored in memory as byte arrays.
  If a password is used, then it must be converted to a key via an appropriate password base key derivation function.
* Ensure that cryptographic randomness is used where appropriate, and that it has not been seeded in a predictable way or with low entropy.
  Most modern APIs do not require the developer to seed the CSPRNG to get security.
* Avoid deprecated cryptographic functions and padding schemes, such as MD5, SHA1, PKCS number 1 v1.5 .
* Verify independently the effectiveness of configuration and settings.

## List of Mapped CWEs

- CWE-261 Weak Encoding for Password
- CWE-296 Improper Following of a Certificate's Chain of Trust
- CWE-310 Cryptographic Issues
- CWE-319 Cleartext Transmission of Sensitive Information
- CWE-321 Use of Hard-coded Cryptographic Key
- CWE-322 Key Exchange without Entity Authentication
- CWE-323 Reusing a Nonce, Key Pair in Encryption
- CWE-324 Use of a Key Past its Expiration Date
- CWE-325 Missing Required Cryptographic Step
- CWE-326 Inadequate Encryption Strength
- CWE-327 Use of a Broken or Risky Cryptographic Algorithm
- CWE-328 Reversible One-Way Hash
- CWE-329 Not Using a Random IV with CBC Mode
- CWE-330 Use of Insufficiently Random Values
- CWE-331 Insufficient Entropy
- CWE-335 Incorrect Usage of Seeds in Pseudo-Random Number Generator(PRNG)
- CWE-336 Same Seed in Pseudo-Random Number Generator (PRNG)
- CWE-337 Predictable Seed in Pseudo-Random Number Generator (PRNG)
- CWE-338 Use of Cryptographically Weak Pseudo-Random Number Generator(PRNG)
- CWE-340 Generation of Predictable Numbers or Identifiers
- CWE-347 Improper Verification of Cryptographic Signature
- CWE-523 Unprotected Transport of Credentials
- CWE-757 Selection of Less-Secure Algorithm During Negotiation('Algorithm Downgrade')
- CWE-759 Use of a One-Way Hash without a Salt
- CWE-760 Use of a One-Way Hash with a Predictable Salt
- CWE-780 Use of RSA Algorithm without OAEP
- CWE-818 Insufficient Transport Layer Protection
- CWE-916 Use of Password Hash With Insufficient Computational Effort
