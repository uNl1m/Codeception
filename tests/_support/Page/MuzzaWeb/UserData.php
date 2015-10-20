<?php
namespace Page\MuzzaWeb;

class UserData
{
    public static $username = 'QA tester1';
    public static $email = 'b@freeletter.me';
    public static $password = '12345678';
    public static $pass_conf = '12345678';
    ///--------------registration----------------//
    public static $reg_username = 'QA tester';
    public static $reg_email;
    public static $mail = 'm';
    public static $reg_password = '12345678';

    ///-------------Social accounts-------//
    public static $tw_email = '@trinitytester';
    public static $tw_pass = '123456qwer';
    public static $fb_email = 'qa.trinitytester@gmail.com';
    public static $fb_pass = '123456qwer';
    public static $vk_email = 'qa.trinitytester@gmail.com';
    public static $vk_pass = '123456qwer';
    public static $gp_email = 'qa.trinitytester@gmail.com';
    public static $gp_pass = '123456qwer';



    //----------------Search Data--------------//
    public static $searchStation = 'idobi Radio';
    public static $genreSlug = 'alternative';
    public static $station_name = 'rock';

    //-----------------Profile Data-----------//
    public static $changeName = 'QA tester';
    public static $changePass = '123456789';


    /***********Negative data******************/


    //---------------------Registration----------------//
    public static $badUserName = 'ss';
    public static $badUserName1 = 'zxcvbnmasdfghjklqwertyuiopZXCVBNMASDFGHJKLQWERTYUIOP';
    public static $badEmail1 = 'asdadasdas';
    public static $badEmail2 = '@mail.com';
    public static $notActiveUser = 'nAu@test.ua';
    public static $badPass1 = '123';
    public static $badPass2 = '123123321132132';
    public static $badSearch = 'ouiyg8347yhpfuier';
    public static $badStation = 'Dark-Section-Radio Gothic Darkwave EBM Metal';
    public static $unknownTrackStation = 'www.krawallradio.com';
    public static $emailMessage = 'Email is required';
    public static $invalidEmailMessage = 'Email must be a valid email';
    public static $usedEmailMessage = 'The email has already been taken.';
    public static $passwordMessage = 'Password is required';
    public static $shortPasswordMessage = 'Password must be at least 8 characters';
    public static $confirmPasswordMessage = 'Password confirmation must be the same as Password';

    //----------------------Login messages----------------------//
    public static $wrongLoginMessage = 'Wrong login or password. Please, try again.';

    //----------------------Forgot password messages------------//
    public static $notActivateUserMessage = 'User is not activated. ';
    public static $passwordMessage1 = 'The password field is required.';
    public static $requestConfirmPasswordMessage ='The password confirmation field is required.';
    public static $shortConfirmPasswordMessage = 'The password confirmation must be at least 8 characters.';
    public static $matchPasswordMessage = 'The password confirmation does not match.';
    public static $invalidCode = 'Sorry, your code is not valid.';
    public static $shortPasswordMessage1 = 'The password must be at least 8 characters.';

    //----------------------Profile messages------------------//
    public static $bigImageMessage = 'Image is to large, max size 10Mb';
    public static $shortUserNameMessage = 'Username must be at least 3 characters';
    public static $longUserNameMessage = 'Username must be at most 50 characters';
    public static $oldPasswordMessage = 'Old password is required';
    public static $newPasswordMessage = 'New password is required';
    public static $matchNewPasswordMessage = 'The new password confirmation does not match.';
    public static $confirmNewPasswordMessage  = 'The new password confirmation field is required.';
    public static $wrongPasswordMessage = 'Wrong password, try again.';
    public static $shortOldPasswordMessage = 'Old password must be at least 8 characters';
    public static $shortNewPasswordMessage = 'New password must be at least 8 characters';
    public static $shortConfirmNewPasswordMessage = 'The new password confirmation must be at least 8 characters.';
    public static $badSearchMessage = 'Nothing found.';
}
