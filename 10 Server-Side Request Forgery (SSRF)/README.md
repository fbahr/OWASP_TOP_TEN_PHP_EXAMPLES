## Description

Source: https://owasp.org/Top10/A06_2021-Vulnerable_and_Outdated_Components/

SSRF flaws occur whenever a web application is fetching a remote resource without validating the user-supplied URL.
It allows an attacker to coerce the application to send a crafted request to an unexpected destination,
even when protected by a firewall, VPN, or another type of network access control list (ACL).

As modern web applications provide end-users with convenient features, fetching a URL becomes a common scenario.
As a result, the incidence of SSRF is increasing. Also, the severity of SSRF is becoming higher due to cloud services and the complexity of architectures.

## How to Prevent

Developers can prevent SSRF by implementing some or all the following defense in depth controls:

From Network layer
* Segment remote resource access functionality in separate networks to reduce the impact of SSRF.
* Enforce “deny by default” firewall policies or network access control rules to block all but essential intranet traffic.

From Application layer:
* Sanitize and validate all client-supplied input data.
* Enforce the URL schema, port, and destination with a positive allow list.
  (Do not mitigate SSRF via the use of a deny list or regular expression. Attackers have payload lists, tools, and skills to bypass deny lists.)
* Do not send raw responses to clients.
* Disable HTTP redirections.
* Be aware of the URL consistency to avoid attacks such as DNS rebinding and “time of check, time of use” (TOCTOU) race conditions.

## List of Mapped CWEs

- CWE-918 Server-Side Request Forgery (SSRF)