<?php
use \Helper\ApiHelper;

use \Page\MuzzaWeb\LoginPopUp;
use \Page\MuzzaWeb\MainPage;
use \Page\MuzzaWeb\UserData;


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
*/
class WebGuy extends \Codeception\Actor
{
    use _generated\WebGuyActions;

    public function loginW()
    {
        if ($this->loadSessionSnapshot('login')) return;

        $this->amOnPage(MainPage::$URL);
        $this->click(MainPage::$loginPopup);
        $this->waitForText(LoginPopUp::$createAccountLink);
        $this->see(LoginPopUp::$createAccountLink);
        $this->see(LoginPopUp::$createAccountLink);
        $this->seeElement(LoginPopUp::$emailField);
        $this->seeElement(LoginPopUp::$passwordField);
        $this->seeElement(LoginPopUp::$loginButton);
        $this->seeElement(LoginPopUp::$tw_button);
        $this->seeElement(LoginPopUp::$vk_button);
        $this->seeElement(LoginPopUp::$fb_button);
        $this->seeElement(LoginPopUp::$gp_button);
        $this->fillField(LoginPopUp::$emailField, UserData::$email);
        $this->fillField(LoginPopUp::$passwordField, UserData::$password);
        $this->click(LoginPopUp::$loginButton);
        $userName = file_get_contents(codecept_data_dir('userName.txt'));
        $this->waitForText($userName);
        $this->seeElement(LoginPopUp::$userAvatar);
        $this->see($userName, LoginPopUp::$userNameField);
        $this->saveSessionSnapshot('login');
    }
//    public function checkMainPage()
//    {
//        $I = $this;
//        $I->amOnPage(MainPage::$URL);
//        $I->seeElement(MainPage::$logo);
//        $I->seeElement(MainPage::$banners);
//        $I->seeElement(MainPage::$buy_button);
//        $I->seeElement(MainPage::$like_button);
//        $I->seeElement(MainPage::$next_button);
//        $I->seeElement(MainPage::$play_button);
//        $I->seeElement(MainPage::$prev_button);
//        $I->seeElement(MainPage::$random_button);
//        $I->seeElement(MainPage::$search_field);
//        $I->seeElement(MainPage::$share_button);
//        $I->seeElement(MainPage::$slider_next_button);
//        $I->seeElement(MainPage::$slider_prev_button);
//        $I->seeElement(MainPage::$slider_pager);
//        $I->seeElement(MainPage::$slider_pager_act);
//        $I->seeElement(MainPage::$top20_button);
//        $I->see('GENRE', MainPage::$genre_title);
//        $I->see('STATIONS',MainPage::$stations_title);
//        $I->seeElement(MainPage::$loginPopup);
//        $I->seeElement(MainPage::$registrationLink);
//        $I->seeElement(MainPage::$player_station_title);
//        $I->seeNumberOfElements('span.set-genre', 25);
//        $I->seeNumberOfElements('div.station-info', 15);
//        $I->executeJS('window.scrollTo(0,100);');
//        $I->waitForElement(MainPage::$scrollDown);
//        $I->click(MainPage::$scrollDown);
//        $I->waitForElement(MainPage::$scrollUp);
//    }
//    public function pagination()
//    {
//        $I=$this;
//        $I->executeJS('window.scrollTo(0,600);');
//        $I->wait(1);
//        $I->seeNumberOfElements('div.station-info', 30);
//        $I->waitForElement(MainPage::$scrollUp);
//    }
//    public function top20()
//    {
//        $I = $this;
//        $I->executeJS('window.scrollTo(0,0);');
//        $I->click(MainPage::$top20_button);
//        $I->wait(1);
//        $I->seeNumberOfElements('div.station-info', 20);
//    }
//    public function randomStation()
//    {
//        $I = $this;
//        $I->click(MainPage::$random_button);
//        $I->seeElement(MainPage::$stations_title);
//        $I->executeJS('window.scrollTo(0,0);');
//        $I->wait(2);
////        $I->seeElement(MainPage::$current_track_title);
//        $I->seeElement(MainPage::$equalizer);
//    }
//    public function login()
//    {
//        if ($this->loadSessionSnapshot('login')) return;
//
//        $this->amOnPage(MainPage::$URL);
//        $this->click(MainPage::$loginPopup);
//        $this->waitForText(Login::$createAccountLink);
//        $this->see(Login::$createAccountLink);
//        $this->see(Login::$createAccountLink);
//        $this->seeElement(Login::$emailField);
//        $this->seeElement(Login::$passwordField);
//        $this->seeElement(Login::$loginButton);
//        $this->fillField(Login::$emailField, WebGuy::$email);
//        $this->fillField(Login::$passwordField, WebGuy::$pass);
//        $this->click(Login::$loginButton);
//        $this->waitForText($this->username);
//        $this->seeElement(Login::$userAvatar);
//        $this->saveSessionSnapshot('login');
//    }
//    public function logout()
//    {
//        $I=$this;
//        $I->click(Login::$imgAvatar);
//        $I->click(Login::$logoutButton);
//        $I->waitForElement(MainPage::$loginPopup);
//        $I->seeElement(MainPage::$loginPopup);
//        $I->seeElement(MainPage::$registrationLink);
//    }
//    public function forgotPassword()
//    {
//        $I = $this;
//        $I->amOnPage('/');
//        $I->click(MainPage::$loginPopup);
//        $I->waitForText('Create account');
//        $I->click(ForgotPopUp::$passwordLink);
//        $I->waitForText('Forgot password');
//        $I->wait(1);
//        $I->waitForElement(ForgotPopUp::$emailField);
//        $I->seeElement(ForgotPopUp::$emailField);
//        $I->seeElement(ForgotPopUp::$resetButton);
//        $I->fillField(ForgotPopUp::$emailField,WebGuy::$email);
//        $I->click(ForgotPopUp::$resetButton);
//        $I->waitForText('Reset password link was sent on your e-mail address');
//
//    }
//    public function registration()
//    {
//
//        $I = $this;
//        $I->amOnPage ("/");
//        $I->see('Registration');
//        $I->see('Login');
//        $I->see('Genre');
//        $I->see('Stations');
//        $I->click(MainPage::$registrationLink);
//        $I->waitForText('Sign Up');
//        $I->see('Sign Up');
////        $I->seeElement(RegistrationPopUp::$reg_username);
//        $I->seeElement(RegistrationPopUp::$emailField);
//        $I->seeElement(RegistrationPopUp::$passwordField);
//        $I->seeElement(RegistrationPopUp::$confirmPasswordField);
//        $I->seeElement(RegistrationPopUp::$registrationButton);
//        $I->fillField(RegistrationPopUp::$usernameField,$this->reg_username);
//        $reg_email = file_get_contents(codecept_output_dir('userEmail.txt'));
//        $I->fillField(RegistrationPopUp::$emailField, $reg_email);
//        $I->fillField(RegistrationPopUp::$passwordField, $this->reg_password);
//        $I->fillField(RegistrationPopUp::$confirmPasswordField,$this->reg_password);
//        $I->click(RegistrationPopUp::$registrationButton);
//        $I->wait(2);
//        $I->waitForText('Activation link was sent on your e-mail address');
//    }


//    static function uniqueEmail()
//
//    {
//        if (self::$reg_email) {
//            return self::$reg_email;
//        }
//        $email = trim(file_get_contents(codecept_output_dir('userEmail.txt')));
//        $emailPrefix = substr($email,0,1);
//        $emailPrefix++;
//        $domain = substr($email,1,17);
//        $resultEmail = $emailPrefix.$domain;
//        self::$reg_email = $resultEmail;
//        file_put_contents(codecept_output_dir('userEmail.txt'), $resultEmail);
//        return $resultEmail;
//    }
    public function checkMailBoxWeb()
    {
        $I= $this;
        $I->wantTo('Check My mail Box');
        $I->amOnUrl('http://temp-mail.ru/option/change');
        $I->fillField('//*[@id="input_mail"]', $this->mail);
        $I->click('//*[@id="postbut"]');
        $I->wait(1);
        $I->click('//*[@id="click-to-refresh"]');
        $I->click('//*[@id="mails"]/tbody/tr/td[2]/a');
        $I->waitForElement('//*[@id="templateBody"]/tbody/tr/td/table/tbody/tr[2]/td/table/tbody/tr/td/div/a');
        $I->click('//*[@id="templateBody"]/tbody/tr/td/table/tbody/tr[2]/td/table/tbody/tr/td/div/a');
        $I->waitForText('Create account');
        $I->see('Create account');
        $I->see('Forgot password?');
        $I->seeElement('#email');
        $I->seeElement('#password');
        $I->seeElement('#loginButton');
    }
//    function checkTempMailActivateUser()
//    {
//        $reg_email = file_get_contents(codecept_output_dir('userEmail.txt'));
//        $email = $reg_email;
//        $mail = md5($email);
//        $this->getModule('REST')->sendGET('http://api.temp-mail.ru/request/mail/id/' . $mail . '/format/php/');
//        $html = $this->getModule('REST')->grabResponse();
//        preg_match('~<a(.*)href="([^"]+)"(.*?)>~',$html,$link);
//        $code = substr($link[0],9, -18);
//        $this->debugSection('code', $code);
//        file_put_contents(codecept_output_dir('activateWeb.json'), $code);
//        return $code;
//    }

}

//class ForgotPopUp
//{
//
//    public static $passwordLink = '//*[@id="forgot-password"]';
//    public static $emailField = '//*[@id="email"]';
//    public static $resetButton = '//*[@id="resetPasswordButton"]';
//    public static $title = 'CHANGE PASSWORD';
//    public static $password_field = '#inputPassword';
//    public static $conf_pass_field = '#inputPasswordConfirmation';
//    public static $submit_button = '#changePasswordButton';
//}

//class Login
//{
//    public static $createAccountLink = 'Create account';
//    public static $forgotPasswordLink = 'Forgot password?';
//    public static $emailField = "#email";
//    public static $passwordField = "#password";
//    public static $loginButton = "#loginButton";
//    public static $logoutButton = "#logout";
//    public static $imgAvatar = "img.avatar";
//    public static $userAvatar = "//img[@alt='User Avatar']";
//}
//class RegistrationPopUp
//{
//    public static $usernameField = '#username';
//    public static $emailField = '#email';
//    public static $passwordField = '#password';
//    public static $confirmPasswordField = '#password_confirmation';
//    public static $registrationButton = '#registrationButton';
//}

//class MainPage
//{
//    public static $URL = '/';
//    public static $logo = "//img[@alt='Muzza.life']";
//    public static $prev_button = 'li.prev';
//    public static $play_button = 'button.jp-play';
//    public static $next_button = 'li.next';
//    public static $share_button = 'span.social-action-trigger.share';
//    public static $like_button = 'span.social-action-trigger.like';
//    public static $buy_button = 'span.social-action-trigger.buy';
//    public static $volume_control = 'div.volumeWrap';
//    public static $banners = 'div.banners-container';
//    public static $slider_prev_button = 'a.bx-prev';
//    public static $slider_next_button = 'a.bx-next';
//    public static $slider_pager = 'a.bx-pager-link.active';
//    public static $slider_pager_act = 'a.bx-pager-link';
//    public static $search_field = '#search_input';
//    public static $genre_title = 'h2.pull-left.genre-title';
//    public static $stations_title = 'h2.pull-left.stations-title';
//    public static $random_button = 'span.rand';
//    public static $top20_button = 'span.top-20';
//    public static $loginPopup = '//*[@id="popup-login"]';
//    public static $registrationLink = '#popup-registration';
//    public static $player_station_title = 'div.jp-title';
//    public static $scrollDown = 'span.move-top.down';
//    public static $scrollUp = 'span.move-top.up';
//    public static $alternativeGenre = '#tab-1';
//    public static $bluesGenre = '#tab-2';
//    public static $classicalGenre = '#tab-3';
//    public static $countryGenre = '#tab-4';
//    public static $decadesGenre = '#tab-5';
//    public static $easyListeningGenre = '#tab-6';
//    public static $electronicGenre = '#tab-7';
//    public static $folkGenre = '#tab-8';
//    public static $inspirationalGenre = '#tab-9';
//    public static $jazzGenre = '#tab-10';
//    public static $latinGenre = '#tab-11';
//    public static $metalGenre = '#tab-12';
//    public static $miscGenre = '#tab-13';
//    public static $newAgeGenre = '#tab-14';
//    public static $popGenre = '#tab-15';
//    public static $publicGenre = '#tab-16';
//    public static $rAndBGenre = '#tab-17';
//    public static $Genre = '#tab-18';
//    public static $rapGenre = '#tab-19';
//    public static $reggaeGenre = '#tab-20';
//    public static $rockGenre = '#tab-21';
//    public static $seasonalGenre = '#tab-22';
//    public static $soundtracksGenre = '#tab-23';
//    public static $talkGenre = '#tab-24';
//    public static $themesGenre = '#tab-25';
//    public static $subGenge = '#mCSB_1_container';
//    public static $current_track_title = 'span.current-track';
//    public static $equalizer = 'div.container-equalizer';
//
//
//
//
//}
