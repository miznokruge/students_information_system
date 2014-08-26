<?php
/*
  This file is part of UserMgmt.

  Author: Chetan Varshney (http://ektasoftwares.com)

  UserMgmt is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  UserMgmt is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 */

function UsermgmtInIt(&$controller) {
    /*
      setting default time zone for your site
     */
    date_default_timezone_set("Asia/Jakarta");


    App::import('Helper', 'Html');
    $html = new HtmlHelper(new View(null));

    /*
      setting site url
      do not edit it
      if you want to edit then for example
      define("SITE_URL", "http://example.com/");
     */
    if (!defined("SITE_URL")) {
        define("SITE_URL", $html->url('/', true));
    }

    if (!defined("LOGIN_URL")) {
        define("LOGIN_URL", $html->url('/login/', true));
    }


    /*
      set true if new registrations are allowed
     */
    if (!defined("SITE_REGISTRATION")) {
        define("SITE_REGISTRATION", true);
    }

    /*
      set true if you want send registration mail to user
     */
    if (!defined("SEND_REGISTRATION_MAIL")) {
        define("SEND_REGISTRATION_MAIL", true);
    }

    /*
      set true if you want verify user's email id, site will send email confirmation link to user's email id
      sett false you do not want verify user's email id, in this case user becomes active after registration with out email verification
     */
    if (!defined("EMAIL_VERIFICATION")) {
        define("EMAIL_VERIFICATION", true);
    }


    /*
      set email address for sending emails
     */
    if (!defined("EMAIL_FROM_ADDRESS")) {
        define("EMAIL_FROM_ADDRESS", 'cs@superquiz.com');
    }

    /*
      set site name for sending emails
     */
    if (!defined("EMAIL_FROM_NAME")) {
        define("EMAIL_FROM_NAME", 'SuperQuiz Team');
    }

    /*
      set login redirect url, it means when user gets logged in then site will redirect to this url.
     */
    if (!defined("LOGIN_REDIRECT_URL")) {
        define("LOGIN_REDIRECT_URL", '/dashboard');
    }

    /*
      set logout redirect url, it means when user gets logged out then site will redirect to this url.
     */
    if (!defined("LOGOUT_REDIRECT_URL")) {
        define("LOGOUT_REDIRECT_URL", '/login');
    }

    /*
      set true if you want to enable permissions on your site
     */
    if (!defined("PERMISSIONS")) {
        define("PERMISSIONS", true);
    }

    /*
      set true if you want to check permissions for admin also
     */
    if (!defined("ADMIN_PERMISSIONS")) {
        define("ADMIN_PERMISSIONS", false);
    }

    /*
      set default group id here for registration
     */
    if (!defined("DEFAULT_GROUP_ID")) {
        define("DEFAULT_GROUP_ID", 2);
    }

    /*
      set Admin group id here
     */
    if (!defined("ADMIN_GROUP_ID")) {
        define("ADMIN_GROUP_ID", 1);
    }

    /*
      set Guest group id here
     */
    if (!defined("GUEST_GROUP_ID")) {
        define("GUEST_GROUP_ID", 3);
    }
    /*
      set true if you want captcha support on register form
     */
    if (!defined("USE_RECAPTCHA")) {
        define("USE_RECAPTCHA", false);
    }
    /*
      set Admin group id here
     */
    if (!defined("PRIVATE_KEY_FROM_RECAPTCHA")) {
        define("PRIVATE_KEY_FROM_RECAPTCHA", '');
    }
    /*
      set Admin group id here
     */
    if (!defined("PUBLIC_KEY_FROM_RECAPTCHA")) {
        define("PUBLIC_KEY_FROM_RECAPTCHA", '');
    }
    /*
      set login cookie name
     */
    if (!defined("LOGIN_COOKIE_NAME")) {
        define("LOGIN_COOKIE_NAME", 'UsermgmtCookie');
    }
    Cache::config('UserMgmt', array(
        'engine' => 'File',
        'duration' => '+3 months',
        'path' => CACHE,
        'prefix' => 'UserMgmt_'
    ));
}
