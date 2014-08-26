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
App::uses('UserMgmtAppController', 'Usermgmt.Controller');

class UsersController extends UserMgmtAppController {

    /**
     * This controller uses following models
     *
     * @var array
     */
    public $uses = array('Usermgmt.User', 'Usermgmt.UserGroup', 'Usermgmt.LoginToken');
    public $helpers = array("Util", "Common");

    /**
     * Called before the controller action.  You can use this method to configure and customize components
     * or perform logic that needs to happen before each controller action.
     *
     * @return void
     */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->User->userAuth = $this->UserAuth;
    }

    /**
     * Used to display all users by Admin
     *
     * @access public
     * @return array
     */
    public function index() {
        $this->User->unbindModel(array('hasMany' => array('LoginToken')));
        $users = $this->User->find('all', array('order' => 'User.id desc'));
        $this->set('users', $users);
    }

    /**
     * Used to display detail of user by Admin
     *
     * @access public
     * @param integer $userId user id of user
     * @return array
     */
    public function viewUser($userId = null) {
        if (!empty($userId)) {
            $user = $this->User->read(null, $userId);
            $this->set('user', $user);
        } else {
            $this->redirect('/allUsers');
        }
    }

    /**
     * Used to display detail of user by user
     *
     * @access public
     * @return array
     */
    public function myprofile() {
        $userId = $this->UserAuth->getUserId();
        $old_avatar = $this->UserAuth->getUserAvatar();

        if ($this->request->is('post') || $this->request->is('put')) {

            $localDir = '/img/avatar/';
            $upload_dir = dirname($_SERVER['SCRIPT_FILENAME']) . $localDir;
            $error = 0;
            $data = $this->request->data;
            $now = time();
            $sizes = getimagesize($data['User']['avatar']['tmp_name']);
            $extensions['jpeg'] = '.jpg';
            $extensions['.jpg'] = '.jpg';
            $extensions['.gif'] = '.gif';
            $extensions['.png'] = '.png';
            $dat['avatar']['name'] = $data['User']['avatar']['name'];
            if ($dat['avatar']['name'] != ''):
                $dat['avatar']['size'] = $data['User']['avatar']['size'];
                $dat['avatar']['width'] = $sizes[0];
                $dat['avatar']['height'] = $sizes[1];
                $dat['avatar']['type'] = substr(strrchr($data['User']['avatar']['name'], '.'), 1);
                $dat['avatar']['ext'] = substr($data['User']['avatar']['name'], -4);
                $dat['avatar']['avatar'] = $now . $dat['avatar']['ext'];
                $dat['avatar']['tmp_name'] = $data['User']['avatar']['tmp_name'];
                $dat['avatar']['upload_dir'] = $upload_dir;
                $dat['avatar']['full_url'] = $upload_dir . $now . $dat['avatar']['ext'];
                $dat['avatar']['resized'] = $upload_dir . $now . "_100" . $dat['avatar']['ext'];
                $dat['User']['avatar'] = $dat['avatar']['avatar'];
                if (!isset($extensions[$dat['avatar']['ext']])) {
                    $err = "file yang diupload adalah type .jpg, .gif, atau .png!";
                    $error = 1;
                    $this->Session->setFlash(__($err));
                } elseif ($dat['avatar']['size'] > 300 * 1024) {
                    $err = "ukuran file terlalu besar. maksimal adalah 300Kb!";
                    $error = 1;
                    $this->Session->setFlash(__($err));
                } elseif ($dat['avatar']['width'] != 750 && $dat['avatar']['width'] != 300) {
                    $err = 'ukuran foto adalah lebar 750px dan tinggi 300px. silakan ubah ukurannya dengan menggunakan program PAINT';
                    $error = 1;
                    $this->Session->setFlash(__($err));
                }
                move_uploaded_file($dat['avatar']['tmp_name'], $dat['avatar']['full_url']);
                $this->Util->Resize($dat['avatar']['full_url'], $dat['avatar']['resized'], $dat['avatar']['ext'], 100);
                $dat['User']['id'] = $userId;
                @unlink($localDir . $old_avatar);
                @unlink($localDir . str_replace('.', '_100.', $old_avatar));
            endif;

            if ($result = $this->User->save($dat)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'myprofile'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $user = $this->User->read(null, $userId);
            $this->set('user', $user);
        }
    }

    public function save_capture() {
        $userId = $this->UserAuth->getUserId();
        $d = $this->User->read(null, $userId);
        $old_avatar = $d['User']['avatar'];

        if ($this->request->is('post') || $this->request->is('put')) {

            $localDir = '/img/avatar/';
            $upload_dir = dirname($_SERVER['SCRIPT_FILENAME']) . $localDir;
            $error = 0;
            $data = $this->request->data;
            $now = time();
            $dat['avatar']['ext'] = '.png';
            $dat['avatar']['avatar'] = $now . $dat['avatar']['ext'];
            $dat['avatar']['upload_dir'] = $upload_dir;
            $dat['avatar']['full_url'] = $upload_dir . $now . $dat['avatar']['ext'];
            $dat['avatar']['resized'] = $upload_dir . $now . "_100" . $dat['avatar']['ext'];
            $dat['User']['avatar'] = $dat['avatar']['avatar'];
            #get data and save as png
            $data = str_replace("data:image/png;base64,", "", $this->request->data['raw']);
            $data = base64_decode($data);
            file_put_contents($upload_dir . $now . $dat['avatar']['ext'], $data);
            $this->Util->Resize($dat['avatar']['full_url'], $dat['avatar']['resized'], $dat['avatar']['ext'], 100);
            $dat['User']['id'] = $userId;
            @unlink($upload_dir . $old_avatar);
            @unlink($upload_dir . str_replace('.', '_100.', $old_avatar));
            if ($this->User->save($dat)) {
                echo 'ok';
                exit();
            } else {
                echo 'error';
                exit();
            }
        }
    }

    /**
     * Used to logged in the site
     *
     * @access public
     * @return void
     */
    public function login() {
        $this->layout = 'default';
        if ($this->request->isPost()) {
            $this->User->set($this->data);
            if ($this->User->LoginValidate()) {
                $email = $this->data['User']['email'];
                $password = $this->data['User']['password'];
                $user = $this->User->findByUsername($email);
                if (empty($user)) {
                    $user = $this->User->findByEmail($email);
                    if (empty($user)) {
                        $this->Util->setFlash(__('Incorrect Email/Username or Password'), 'error');
                        return;
                    }
                }
// check for inactive account
                if ($user['User']['id'] != 1 and $user['User']['active'] == 0) {
                    $this->Util->setFlash(__('Sorry your account is not active, please contact to Administrator'), 'info');
                    return;
                }
// check for verified account
                if ($user['User']['id'] != 1 and $user['User']['email_verified'] == 0) {
                    $this->Util->setFlash(__('Your registration has not been confirmed please verify your email or contact to Administrator'));
                    return;
                }
                if (empty($user['User']['salt'])) {
                    $hashed = md5($password);
                } else {
                    $hashed = $this->UserAuth->makePassword($password, $user['User']['salt']);
                }
                if ($user['User']['password'] === $hashed) {
                    if (empty($user['User']['salt'])) {
                        $salt = $this->UserAuth->makeSalt();
                        $user['User']['salt'] = $salt;
                        $user['User']['password'] = $this->UserAuth->makePassword($password, $salt);
                        $this->User->save($user, false);
                    }
                    $this->UserAuth->login($user);
                    $remember = (!empty($this->data['User']['remember']));
                    if ($remember) {
                        $this->UserAuth->persist('2 weeks');
                    }
                    $OriginAfterLogin = $this->Session->read('Usermgmt.OriginAfterLogin');
                    $this->Session->delete('Usermgmt.OriginAfterLogin');
                    $redirect = (!empty($OriginAfterLogin)) ? $OriginAfterLogin : LOGIN_REDIRECT_URL;
                    $this->redirect($redirect);
                } else {
                    $this->Util->setFlash(__('Incorrect Email/Username or Password'), 'error');
                    return;
                }
            }
        }
        $this->set('js', array('demo/signin', 'jquery.cycle.all'));
        $this->set('css', array('pages/signin'));
    }

    /**
     * Used to logged out from the site
     *
     * @access public
     * @return void
     */
    public function logout() {
        $this->UserAuth->logout();
        $this->Util->setFlash(__('You are successfully signed out'));
        $this->redirect(LOGOUT_REDIRECT_URL);
    }

    /**
     * Used to register on the site
     *
     * @access public
     * @return void
     */
    public function register() {
        $userId = $this->UserAuth->getUserId();
        if ($userId) {
            $this->redirect("/dashboard");
        }
        if (SITE_REGISTRATION) {
            $userGroups = $this->UserGroup->getGroupsForRegistration();
            $this->set('userGroups', $userGroups);
            if ($this->request->isPost()) {
                if (USE_RECAPTCHA && !$this->RequestHandler->isAjax()) {
                    $this->request->data['User']['captcha'] = (isset($this->request->data['recaptcha_response_field'])) ? $this->request->data['recaptcha_response_field'] : "";
                }
                $this->User->set($this->data);
                if ($this->User->RegisterValidate()) {
                    if (!isset($this->data['User']['user_group_id'])) {
                        $this->request->data['User']['user_group_id'] = DEFAULT_GROUP_ID;
                    } elseif (!$this->UserGroup->isAllowedForRegistration($this->data['User']['user_group_id'])) {
                        $this->Util->setFlash(__('Please select correct register as'));
                        return;
                    }
                    $this->request->data['User']['active'] = 1;
                    if (!EMAIL_VERIFICATION) {
                        $this->request->data['User']['email_verified'] = 1;
                    }
                    $ip = '';
                    if (isset($_SERVER['REMOTE_ADDR'])) {
                        $ip = $_SERVER['REMOTE_ADDR'];
                    }
                    $this->request->data['User']['ip_address'] = $ip;
                    $salt = $this->UserAuth->makeSalt();
                    $this->request->data['User']['salt'] = $salt;
                    $this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
                    $this->User->save($this->request->data, false);
                    $userId = $this->User->getLastInsertID();
                    $user = $this->User->findById($userId);
                    if (SEND_REGISTRATION_MAIL && !EMAIL_VERIFICATION) {
                        $this->User->sendRegistrationMail($user);
                    }
                    if (EMAIL_VERIFICATION) {
                        $this->User->sendVerificationMail($user);
                    }
                    if (isset($this->request->data['User']['email_verified']) && $this->request->data['User']['email_verified']) {
                        $this->UserAuth->login($user);
                        $this->redirect('/');
                    } else {
                        $this->Util->setFlash(__('Please check your mail and confirm your registration'));
                        $this->redirect('/register');
                    }
                }
            }
        } else {
            $this->Util->setFlash(__('Sorry new registration is currently disabled, please try again later'));
            $this->redirect('/login');
        }
        $this->set('js', array('demo/signin'));
        $this->set('css', array('pages/signin'));
    }

    /**
     * Used to change the password by user
     *
     * @access public
     * @return void
     */
    public function changePassword() {
        $userId = $this->UserAuth->getUserId();
        if ($this->request->isPost()) {
            $this->User->set($this->data);
            if ($this->User->RegisterValidate()) {
                $user = array();
                $user['User']['id'] = $userId;
                $salt = $this->UserAuth->makeSalt();
                $user['User']['salt'] = $salt;
                $user['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
                $this->User->save($user, false);
                $this->LoginToken->deleteAll(array('LoginToken.user_id' => $userId), false);
                $this->Util->setFlash(__('Password changed successfully'));
                $this->redirect('/dashboard');
            }
        }
    }

    /**
     * Used to change the user password by Admin
     *
     * @access public
     * @param integer $userId user id of user
     * @return void
     */
    public function changeUserPassword($userId = null) {
        if (!empty($userId)) {
            //$name = $this->User->getNameById($userId);
            $name = $this->request->query['name'];
            $this->set('name', $name);
            if ($this->request->isPost()) {
                $this->User->set($this->data);
                if ($this->User->RegisterValidate()) {
                    $user = array();
                    $user['User']['id'] = $userId;
                    $salt = $this->UserAuth->makeSalt();
                    $user['User']['salt'] = $salt;
                    $user['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
                    $this->User->save($user, false);
                    $this->LoginToken->deleteAll(array('LoginToken.user_id' => $userId), false);
                    $this->Util->setFlash(__('Password for %s changed successfully', $name));
                    $this->redirect('/allUsers');
                }
            }
        } else {
            $this->redirect('/allUsers');
        }
    }

    /**
     * Used to add user on the site by Admin
     *
     * @access public
     * @return void
     */
    public function addUser() {
        $userGroups = $this->UserGroup->getGroups();
        $this->set('userGroups', $userGroups);
        if ($this->request->isPost()) {
            $this->User->set($this->data);
            if ($this->User->RegisterValidate()) {
                $this->request->data['User']['email_verified'] = 1;
                $this->request->data['User']['active'] = 1;
                $salt = $this->UserAuth->makeSalt();
                $this->request->data['User']['salt'] = $salt;
                $this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
                $this->User->save($this->request->data, false);
                $this->Util->setFlash(__('The user is successfully added'));
                $this->redirect('/allUser');
            }
        }
    }

    /**
     * Used to edit user on the site by Admin
     *
     * @access public
     * @param integer $userId user id of user
     * @return void
     */
    public function editUser($userId = null) {
        if (!empty($userId)) {
            $userGroups = $this->UserGroup->getGroups();
            $this->set('userGroups', $userGroups);
            if ($this->request->isPut()) {
                $this->User->set($this->data);
                if ($this->User->RegisterValidate()) {
                    $this->User->save($this->request->data, false);
                    $this->Util->setFlash(__('The user is successfully updated'));
                    $this->redirect('/allUsers');
                }
            } else {
                $user = $this->User->read(null, $userId);
                $this->request->data = null;
                if (!empty($user)) {
                    $user['User']['password'] = '';
                    $this->request->data = $user;
                }
            }
        } else {
            $this->redirect('/allUsers');
        }
    }

    public function update_profile($userId = null) {
        $userId = $this->UserAuth->getUserId();
        if (!empty($userId)) {
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->User->set($this->data);
                if ($this->User->RegisterValidate()) {
                    $this->User->save($this->request->data, false);
                    $this->Util->setFlash(__('Profile is successfully updated'));
                    $this->redirect('/myprofile');
                }
            } else {
                $user = $this->User->read(null, $userId);
                $this->request->data = null;
                if (!empty($user)) {
                    $user['User']['password'] = '';
                    $this->request->data = $user;
                }
            }
        } else {
            $this->redirect('/myprofile');
        }
    }

    /**
     * Used to delete the user by Admin
     *
     * @access public
     * @param integer $userId user id of user
     * @return void
     */
    public function deleteUser($userId = null) {
        if (!empty($userId)) {
            if ($this->request->isPost()) {
                if ($this->User->delete($userId, false)) {
                    $this->LoginToken->deleteAll(array('LoginToken.user_id' => $userId), false);
                    $this->Util->setFlash(__('User is successfully deleted'));
                }
            }
            $this->redirect('/allUsers');
        } else {
            $this->redirect('/allUsers');
        }
    }

    /**
     * Used to show dashboard of the user
     *
     * @access public
     * @return array
     */
    public function dashboard() {
        $userId = $this->UserAuth->getUserId();
        $user = $this->User->findById($userId);
        $this->set('user', $user);
    }

    /**
     * Used to activate or deactivate user by Admin
     *
     * @access public
     * @param integer $userId user id of user
     * @param integer $active active or inactive
     * @return void
     */
    public function makeActiveInactive($userId = null, $active = 0) {
        if (!empty($userId)) {
            $user = array();
            $user['User']['id'] = $userId;
            $user['User']['active'] = ($active) ? 1 : 0;
            $this->User->save($user, false);
            if ($active) {
                $this->Util->setFlash(__('User is successfully activated'));
            } else {
                $this->Util->setFlash(__('User is successfully deactivated'));
            }
        }
        $this->redirect('/allUsers');
    }

    /**
     * Used to verify email of user by Admin
     *
     * @access public
     * @param integer $userId user id of user
     * @return void
     */
    public function verifyEmail($userId = null) {
        if (!empty($userId)) {
            $user = array();
            $user['User']['id'] = $userId;
            $user['User']['email_verified'] = 1;
            $this->User->save($user, false);
            $this->Util->setFlash(__('User email is successfully verified'));
        }
        $this->redirect('/allUsers');
    }

    /**
     * Used to show access denied page if user want to view the page without permission
     *
     * @access public
     * @return void
     */
    public function accessDenied() {

    }

    /**
     * Used to verify user's email address
     *
     * @access public
     * @return void
     */
    public function userVerification() {
        if (isset($_GET['ident']) && isset($_GET['activate'])) {
            $userId = $_GET['ident'];
            $activateKey = $_GET['activate'];
            $user = $this->User->read(null, $userId);
            if (!empty($user)) {
                if (!$user['User']['email_verified']) {
                    $password = $user['User']['password'];
                    $theKey = $this->User->getActivationKey($password);
                    if ($activateKey == $theKey) {
                        $user['User']['email_verified'] = 1;
                        $this->User->save($user, false);
                        if (SEND_REGISTRATION_MAIL && EMAIL_VERIFICATION) {
                            $this->User->sendRegistrationMail($user);
                        }
                        $this->Util->setFlash(__('Thank you, your account is activated now'));
                    }
                } else {
                    $this->Util->setFlash(__('Thank you, your account is already activated'));
                }
            } else {
                $this->Util->setFlash(__('Sorry something went wrong, please click on the link again'));
            }
        } else {
            $this->Util->setFlash(__('Sorry something went wrong, please click on the link again'));
        }
        $this->redirect('/login');
    }

    /**
     * Used to send forgot password email to user
     *
     * @access public
     * @return void
     */
    public function forgotPassword() {
        if ($this->request->isPost()) {
            $this->User->set($this->data);
            if ($this->User->LoginValidate()) {
                $email = $this->data['User']['email'];
                $user = $this->User->findByUsername($email);
                if (empty($user)) {
                    $user = $this->User->findByEmail($email);
                    if (empty($user)) {
                        $this->Util->setFlash(__('Incorrect Email/Username'));
                        return;
                    }
                }
// check for inactive account
                if ($user['User']['id'] != 1 and $user['User']['email_verified'] == 0) {
                    $this->Util->setFlash(__('Your registration has not been confirmed yet please verify your email before reset password'));
                    return;
                }
                $this->User->forgotPassword($user);
                $this->Util->setFlash(__('Please check your mail for reset your password'));
                $this->redirect('/login');
            }
        }
    }

    /**
     *  Used to reset password when user comes on the by clicking the password reset link from their email.
     *
     * @access public
     * @return void
     */
    public function activatePassword() {
        if ($this->request->isPost()) {
            if (!empty($this->data['User']['ident']) && !empty($this->data['User']['activate'])) {
                $this->set('ident', $this->data['User']['ident']);
                $this->set('activate', $this->data['User']['activate']);
                $this->User->set($this->data);
                if ($this->User->RegisterValidate()) {
                    $userId = $this->data['User']['ident'];
                    $activateKey = $this->data['User']['activate'];
                    $user = $this->User->read(null, $userId);
                    if (!empty($user)) {
                        $password = $user['User']['password'];
                        $thekey = $this->User->getActivationKey($password);
                        if ($thekey == $activateKey) {
                            $user['User']['password'] = $this->data['User']['password'];
                            $salt = $this->UserAuth->makeSalt();
                            $user['User']['salt'] = $salt;
                            $user['User']['password'] = $this->UserAuth->makePassword($user['User']['password'], $salt);
                            $this->User->save($user, false);
                            $this->Util->setFlash(__('Your password has been reset successfully'));
                            $this->redirect('/login');
                        } else {
                            $this->Util->setFlash(__('Something went wrong, please send password reset link again'));
                        }
                    } else {
                        $this->Util->setFlash(__('Something went wrong, please click again on the link in email'));
                    }
                }
            } else {
                $this->Util->setFlash(__('Something went wrong, please click again on the link in email'));
            }
        } else {
            if (isset($_GET['ident']) && isset($_GET['activate'])) {
                $this->set('ident', $_GET['ident']);
                $this->set('activate', $_GET['activate']);
            }
        }
    }

    /**
     * Used to send email verification mail to user
     *
     * @access public
     * @return void
     */
    public function emailVerification() {
        if ($this->request->isPost()) {
            $this->User->set($this->data);
            if ($this->User->LoginValidate()) {
                $email = $this->data['User']['email'];
                $user = $this->User->findByUsername($email);
                if (empty($user)) {
                    $user = $this->User->findByEmail($email);
                    if (empty($user)) {
                        $this->Util->setFlash(__('Incorrect Email/Username'));
                        return;
                    }
                }
                if ($user['User']['email_verified'] == 0) {
                    $this->User->sendVerificationMail($user);
                    $this->Util->setFlash(__('Please check your mail to verify your email'));
                } else {
                    $this->Util->setFlash(__('Your email is already verified'));
                }
                $this->redirect('/login');
            }
        }
    }

}
