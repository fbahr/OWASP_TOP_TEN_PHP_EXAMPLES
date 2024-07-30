```
2021 Vulnerable and Outdated Components -- 2017 Using Components with Known Vulnerabilities
```

## Description

Source: https://owasp.org/Top10/A06_2021-Vulnerable_and_Outdated_Components/

You are likely vulnerable if:
* you do not know the versions of all components you use; this includes components you directly use as well as nested dependencies.
* the software is vulnerable, unsupported, or out of date. This includes the OS, web/application server, database management system (DBMS),
  applications, APIs and all components, runtime environments, and libraries.
* you do not scan for vulnerabilities regularly and subscribe to security bulletins related to the components you use.
* you do not fix or upgrade the underlying platform, frameworks, and dependencies in a risk-based, timely fashion.
  This commonly happens in environments when patching is a monthly or quarterly task under change control,
  leaving organizations open to days or months of unnecessary exposure to fixed vulnerabilities.
* software developers do not test the compatibility of updated, upgraded, or patched libraries.
* you do not secure the components’ configurations (see A05:2021-Security Misconfiguration).

## How to Prevent

There should be a patch management process in place to:
* Remove unused dependencies, unnecessary features, components, files, and documentation.
* Continuously inventory the versions of both client-side and server-side components (e.g., frameworks, libraries) and their dependencies using tools like OWASP Dependency Check etc.
  Continuously monitor sources like Common Vulnerability and Exposures (CVE) and National Vulnerability Database (NVD) for vulnerabilities in the components.
  Use software composition analysis tools to automate the process. Subscribe to email alerts for security vulnerabilities related to components you use.
* Only obtain components from official sources over secure links. Prefer signed packages to reduce the chance of including a modified, malicious component (See A08:2021-Software and Data Integrity Failures).
* Monitor for libraries and components that are unmaintained or do not create security patches for older versions.
  If patching is not possible, consider deploying a virtual patch to monitor, detect, or protect against the discovered issue.

## List of Mapped CWEs

- CWE-1104 Use of Unmaintained Third Party Components
