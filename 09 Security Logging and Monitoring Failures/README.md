```
2021 Security Logging and Monitoring Failures -- 2017 Insufficient Logging & Monitoring
```

## Description

Source: https://owasp.org/Top10/A09_2021-Security_Logging_and_Monitoring_Failures/

This category is to help detect, escalate, and respond to active breaches. Without logging and monitoring, breaches cannot be detected.
Insufficient logging, detection, monitoring, and active response occurs any time:
* Auditable events, such as logins, failed logins, and high-value transactions, are not logged.
* Warnings and errors generate no, inadequate, or unclear log messages.
* Logs of applications and APIs are not monitored for suspicious activity.
* Logs are only stored locally.
* Appropriate alerting thresholds and response escalation processes are not in place or effective.
* Penetration testing and scans by dynamic application security testing (DAST) tools (such as OWASP ZAP) do not trigger alerts.
* The application cannot detect, escalate, or alert for active attacks in real-time or near real-time.

You are vulnerable to information leakage by making logging and alerting events visible to a user or an attacker (see A01:2021-Broken Access Control).

## How to Prevent

Developers should implement some or all the following controls, depending on the risk of the application:
* Ensure all login, access control, and server-side input validation failures can be logged with sufficient user context to identify suspicious or
  malicious accounts and held for enough time to allow delayed forensic analysis.
* Ensure that logs are generated in a format that log management solutions can easily consume.
* Ensure log data is encoded correctly to prevent injections or attacks on the logging or monitoring systems.
* Ensure high-value transactions have an audit trail with integrity controls to prevent tampering or deletion, such as append-only database tables or similar.
* ...

There are commercial and open-source application protection frameworks such as the OWASP ModSecurity Core Rule Set, and open-source log correlation software,
such as the Elasticsearch, Logstash, Kibana (ELK) stack, that feature custom dashboards and alerting.

## List of Mapped CWEs

- ✓ CWE-117 Improper Output Neutralization for Logs
- CWE-223 Omission of Security-relevant Information
- CWE-532 Insertion of Sensitive Information into Log File
- CWE-778 Insufficient Logging
