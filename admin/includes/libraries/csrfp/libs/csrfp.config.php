<?php
/**
 * Configuration file for CSRF Protector z
 */

return array(
   "CSRFP_TOKEN" => "46191d3c5f585745ddfcb3af2dacd63b13a06559566903d4e3",
   "logDirectory" => "../log",
   "failedAuthAction" => array(
      "GET" => 0,
      "POST" => 0),
   "errorRedirectionPage" => "",
   "customErrorMessage" => "",
   "jsPath" => "../js/csrfprotector.js",
   "jsUrl" => "https://noscio.eu/x2Ident/test/admin/includes/libraries/csrfp/js/csrfprotector.js",
   "tokenLength" => 50,
   "disabledJavascriptMessage" => "This site attempts to protect users against <a href=\"https://www.owasp.org/index.php/Cross-Site_Request_Forgery_%28CSRF%29\">
   Cross-Site Request Forgeries </a> attacks. In order to do so, you must have JavaScript enabled in your web browser otherwise this site will fail to work correctly for you.
    See details of your web browser for how to enable JavaScript.",
    "verifyGetFor" => array("*page=items&type=duo_check*")
);
