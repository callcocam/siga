<?php

/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return ['social-auth'=>
        [
        "base_url" => "http://callcocam.com.br/calback",
        "session_name" => "hybridauth",
        "providers" => [
            // openid providers
            "OpenID" => [
                "enabled" => false
            ],
            "Yahoo" => [
                "enabled" => true,
                "keys" => ["key" => "", "secret" => ""],
            ],
            "AOL" => [
                "enabled" => false
            ],
            "Google" => [
                "enabled" => true,
                "keys" => ["id" => "660751909219-mm6hao5stb3u7uig9o2rqbuil2td05t6.apps.googleusercontent.com","secret" => "UqJnYbK7TrDgsmZ8PjedAwDV"],
                "redirect_uri" => "http://callcocam.com.br/calback/?hauth.done=Google",
                "access_type" => "online"
            ],
            "Facebook" => [
                "enabled" => true,
                "keys" => ["id" => "162032950871423", "secret" => "aeb4bdd43a23aeca0165eea79fbf8316"],
                "trustForwarded" => false
            ],
            "Twitter" => [
                "enabled" => true,
                "keys" => ["key" => "GHimc2ithK9WzikD6tue3ansb", "secret" => "Qf7By6mzXZAnsKaYbfvafUxi8Gv3uWXyPo82eQ1ogzGIRPEeA8"],
                "includeEmail" => true,
                "scope" => "email, user_about_me, user_birthday, user_hometown" // optional
            ],
            // windows live
            "Live" => [
                "enabled" => false,
                "keys" => ["id" => "", "secret" => ""]
            ],
            "LinkedIn" => [
                "enabled" => true,
                "keys" => ["key" => "78g1jqbt58isqq", "secret" => "HEf0wBZfghnfWyWn"]
            ],
            "Foursquare" => [
                "enabled" => true,
                "keys" => ["id" => "", "secret" => ""]
            ],
            "Instagram" => [
                "enabled" => true,
                "keys" => ["id" => "74593f432c614804bad5ed859c623bfa", "secret" => "0991e58e40d54a29ae4623044e5d90e2"]
            ],
            "GitHub" => [
                "enabled" => true,
                "keys" => ["id" => "fa594378b1fb2181428d", "secret" => "0f34f92450c00ec5c7f6551dc78821e45eb3fa39"]
            ],
        ],
        // If you want to enable logging, set 'debug_mode' to true.
        // You can also set it to
        // - "error" To log only error messages. Useful in production
        // - "info" To log info and error messages (ignore debug messages)
        "debug_mode" => false,
        // Path to file writable by the web server. Required if 'debug_mode' is not false
        "debug_file" => ""

    ]
];
