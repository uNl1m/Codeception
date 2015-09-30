<?php
use \Helper\ApiHelper;

//use \Page\MuzzaWeb\LoginPopUp as Login ;


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

    protected $username = 'QA tester1';
    static $email = 'b@freeletter.me';
    public static $pass = '12345678';
    protected $pass_conf = '12345678';
    ///--------------registration----------------//
    protected $reg_username = 'QA tester';
    static $reg_email;
    protected $mail = 'm';
    protected $reg_password = '12345678';

    public function checkMainPage()
    {
        $I = $this;
        $I->amOnPage(MainPage::$URL);
        $I->seeElement(MainPage::$logo);
        $I->seeElement(MainPage::$banners);
        $I->seeElement(MainPage::$buy_button);
        $I->seeElement(MainPage::$like_button);
        $I->seeElement(MainPage::$next_button);
        $I->seeElement(MainPage::$play_button);
        $I->seeElement(MainPage::$prev_button);
        $I->seeElement(MainPage::$random_button);
        $I->seeElement(MainPage::$search_field);
        $I->seeElement(MainPage::$share_button);
        $I->seeElement(MainPage::$slider_next_button);
        $I->seeElement(MainPage::$slider_prev_button);
        $I->seeElement(MainPage::$slider_pager);
        $I->seeElement(MainPage::$slider_pager_act);
        $I->seeElement(MainPage::$top20_button);
        $I->see('GENRE', MainPage::$genre_title);
        $I->see('STATIONS',MainPage::$stations_title);
        $I->seeElement(MainPage::$loginPopup);
        $I->seeElement(MainPage::$registrationlink);
        $I->seeElement(MainPage::$player_station_title);


    }
    public function login()
    {
        if ($this->loadSessionSnapshot('login')) return;

        $this->amOnPage(Login::$URL);
        $this->click(MainPage::$loginPopup);
        $this->waitForText(Login::$createAccountLink);
        $this->see(Login::$createAccountLink);
        $this->see(Login::$createAccountLink);
        $this->seeElement(Login::$emailField);
        $this->seeElement(Login::$passwordField);
        $this->seeElement(Login::$loginButton);
        $this->fillField(Login::$emailField, WebGuy::$email);
        $this->fillField(Login::$passwordField, WebGuy::$pass);
        $this->click(Login::$loginButton);
        $this->waitForText($this->username);
        $this->wait(3);
        $this->saveSessionSnapshot('login');
    }
    public function forgotPassword()
    {
        $I = $this;
        $I->amOnPage('/');
        $I->click(MainPage::$loginPopup);
        $I->waitForText('Create account');
        $I->click(ForgotPopUp::$passwordLink);
        $I->waitForText('Forgot password');
        $I->wait(1);
        $I->waitForElement(ForgotPopUp::$emailField);
        $I->seeElement(ForgotPopUp::$emailField);
        $I->seeElement(ForgotPopUp::$resetButton);
        $I->fillField(ForgotPopUp::$emailField,WebGuy::$email);
        $I->click(ForgotPopUp::$resetButton);
        $I->waitForText('Reset password link was sent on your e-mail address');

    }
    public function registration()
    {

        $I = $this;
        $I->amOnPage ("/");
        $I->see('Registration');
        $I->see('Login');
        $I->see('Genre');
        $I->see('Stations');
        $I->click(MainPage::$registrationlink);
        $I->waitForText('Sign Up');
        $I->see('Sign Up');
//        $I->seeElement(RegistrationPopUp::$reg_username);
        $I->seeElement(RegistrationPopUp::$emailField);
        $I->seeElement(RegistrationPopUp::$passwordField);
        $I->seeElement(RegistrationPopUp::$confirmPasswordField);
        $I->seeElement(RegistrationPopUp::$registrationButton);
        $I->fillField(RegistrationPopUp::$usernameField,$this->reg_username);
        $reg_email = file_get_contents(codecept_output_dir('userEmail.txt'));
        $I->fillField(RegistrationPopUp::$emailField, $reg_email);
        $I->fillField(RegistrationPopUp::$passwordField, $this->reg_password);
        $I->fillField(RegistrationPopUp::$confirmPasswordField,$this->reg_password);
        $I->click(RegistrationPopUp::$registrationButton);
        $I->wait(2);
        $I->waitForText('Activation link was sent on your e-mail address');
    }


    static function uniqueEmail()

    {
        if (self::$reg_email) {
            return self::$reg_email;
        }
        $email = trim(file_get_contents(codecept_output_dir('userEmail.txt')));
        $emailPrefix = substr($email,0,1);
        $emailPrefix++;
        $domain = substr($email,1,17);
        $resultEmail = $emailPrefix.$domain;
        self::$reg_email = $resultEmail;
        file_put_contents(codecept_output_dir('userEmail.txt'), $resultEmail);
        return $resultEmail;
    }
    public function checkMailBox()
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
        $I->seeElement('$password');
        $I->seeElement('#loginButton');
    }
    function checkTempMailActivateUser()
    {
        $reg_email = file_get_contents(codecept_output_dir('userEmail.txt'));
        $email = $reg_email;
        $mail = md5($email);
        $this->getModule('REST')->sendGET('http://api.temp-mail.ru/request/mail/id/' . $mail . '/format/php/');
        $html = $this->getModule('REST')->grabResponse();
        preg_match('~<a(.*)href="([^"]+)"(.*?)>~',$html,$link);
        $code = substr($link[0],9, -18);
        $this->debugSection('code', $code);
        file_put_contents(codecept_output_dir('activateWeb.json'), $code);
        return $code;
    }

}

class ForgotPopUp
{

    public static $passwordLink = '//*[@id="forgot-password"]';
    public static $emailField = '//*[@id="email"]';
    public static $resetButton = '//*[@id="resetPasswordButton"]';
    public static $title = 'CHANGE PASSWORD';
    public static $password_field = '#inputPassword';
    public static $conf_pass_field = '#inputPasswordConfirmation';
    public static $submit_button = '#changePasswordButton';
}
//
class Login
{
    public static $URL = '/';
    public static $createAccountLink = 'Create account';
    public static $forgotPasswordLink = 'Forgot password?';
    public static $emailField = "#email";
    public static $passwordField = "#password";
    public static $loginButton = "#loginButton";
    public static $logoutButton = "#logout";
    public static $imgAvatar = "img.avatar";
}
class RegistrationPopUp
{
    public static $URL = '/';
    public static $usernameField = '#username';
    public static $emailField = '#email';
    public static $passwordField = '#password';
    public static $confirmPasswordField = '#password_confirmation';
    public static $registrationButton = '#registrationButton';
}

class MainPage
{
    public static $URL = '/';
    public static $logo = 'html/body/div[2]/header/div/a/img';
    public static $prev_button = 'li.prev';
    public static $play_button = 'button.jp-play';
    public static $next_button = 'li.next';
    public static $share_button = 'span.social-action-trigger.share';
    public static $like_button = 'span.social-action-trigger.like';
    public static $buy_button = 'span.social-action-trigger.buy';
    public static $volume_control = 'div.volumeWrap';
    public static $banners = 'div.banners-container';
    public static $slider_prev_button = 'a.bx-prev';
    public static $slider_next_button = 'a.bx-next';
    public static $slider_pager = 'a.bx-pager-link.active';
    public static $slider_pager_act = 'a.bx-pager-link';
    public static $search_field = '#search_input';
    public static $genre_title = 'h2.pull-left.genre-title';
    public static $stations_title = 'h2.pull-left.stations-title';
    public static $random_button = '.rand';
    public static $top20_button = '#search_container div.top-stations span';
    public static $loginPopup = '//*[@id="popup-login"]';
    public static $registrationlink = '#popup-registration';
    public static $player_station_title = 'div.jp-title';




}