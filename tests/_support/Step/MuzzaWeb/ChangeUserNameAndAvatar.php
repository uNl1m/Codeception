<?php
namespace Step\MuzzaWeb;

use Page\MuzzaWeb\ProfilePopUp;

class ChangeUserNameAndAvatar extends \WebGuy
{

    public function changeUserNameAndAvatar()
    {
        $I = $this;
        $I->attachFile(ProfilePopUp::$avatar, "image.jpg");
//        $I->wait(2);
        $I->click(ProfilePopUp::$cropButton);
        $changeName = file_get_contents(codecept_output_dir('userName.txt'));
        $I->fillField(ProfilePopUp::$userNameField, $changeName);
        $I->wait(1);
        $I->click(ProfilePopUp::$confirmButton);
        $I->waitForText($changeName, 1,'span.username');
    }

}