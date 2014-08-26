UserMgmt is a User Management Plugin for cakephp 2.x
Plugin version 1.6 (Stable) Last updated on 06-Dec-2012

Hey wanna Demo ??? http://usermgmt.ektasoftwares.com

Wanna more featues?? http://umpremium.ektasoftwares.com

Main Features-

please look on http://usermgmt.ektasoftwares.com


It's based on jedt/SparkPlug plugin

INSTALLATION
------------

1. Download the latest version or use git to keep the plugin up to date
	https://github.com/chetanvarshney/User-Management-Plugin-for-Cakephp-2.x
	go to yourapp/app/Plugin
	extract here
	name it Usermgmt

2. Schema import (use your favorite sql tool to import the schema)

	yourapp/app/Plugin/Usermgmt/Config/Schema/usermgmt-1.6.sql

3. Configure your AppController class

        Your yourapp/app/Controller/AppController.php should look like this:

<?php
	class AppController extends Controller 
	{
		var $helpers = array('Form', 'Html', 'Session', 'Js', 'Usermgmt.UserAuth');
		public $components = array('Session','RequestHandler', 'Usermgmt.UserAuth');
		function beforeFilter(){
			$this->userAuth();
		}
		private function userAuth(){
			$this->UserAuth->beforeFilter($this);
		}
	}
?>

4. Enable Plugin in your bootstrap.php

        yourapp/app/Config/bootstrap.php should include this line

        // load Usermgmt plugin and apply plugin routes. Keep all the other plugins you are using here
        CakePlugin::loadAll(array(
            'Usermgmt' => array('routes' => true, 'bootstrap' => true),
        ));

5. Add plugin css in your layout file
    for example yourapp/app/View/Layouts/default.ctp
    echo $this->Html->css('/usermgmt/css/umstyle');

6. Adjust plugin configuration

    Change /app/Plugin/Usermgmt/Config/bootstrap.php (parameters are explained there) to suit your needs.
    Recaptcha support added you should get recatcha keys from google and enter them in /app/Plugin/Usermgmt/Config/bootstrap.php file.
    Please follow the article steps 1 to 7 for recaptcha keys http://www.chetanvarshney.com/programming/php/recaptcha-keys-for-user-management-plugin

7. Default user name password 
username- admin
password- 123456

ALL DONE !

Please note you can use some common functions in any View and Controller file. These functions are defined in UserAuthHelper.php and UserAuthComponent.php

How to upgrade from old version to 1.6
1. Run queries from yourapp/app/Plugin/Usermgmt/Config/Schema/sql_changes_1.6.txt
2. If you haven't changed old version files then you can replace 1.6 version. See above INSTALLATION guide.
3. If you have your own changes in existing plugin. Then you should diff both versions with any Diff Softwares for ex Kdiff (http://kdiff3.sourceforge.net/)
Please take a backup of your existing files before overwriting.
4. I suggest you please do not overwrite new plugin to existing plugin instead of this you should make your changes in new plugin.