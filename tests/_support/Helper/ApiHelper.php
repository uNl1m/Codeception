<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I
use Page\MuzzaWeb\MainPage;
use Page\MuzzaWeb\UserData;
class ApiHelper extends \Codeception\Module
{
    const username = 'QA tester';
    const email = 'a@freeletter.me';
    const password = '12345678';
    const confirm_password = '12345678';
    const station_name = 'alternative';
    //------------reg----------------//
    const reg_username = 'QA tester1';
    const reg_email = 'd@freeletter.me';
    const reg_password = '12345678';
    const reg_confirm_password = '12345678';
    const genreSlug = 'electronic';
    //----------profile--------------//
    const new_username = 'QA tester3';
    const new_password = '123456789';


    protected $token;


//   public function _before($t)
//   {
//       $I = $this->getModule('REST');
//       $I->haveHttpHeader('Content-Type', 'application/json');
//       if ($this->token) {
//           $this->debugSection('Token', $this->token);
//           $I->amBearerAuthenticated($this->token);
//           return;
//       }
//       $I->sendPOST("/auth/login", [
//           'email' => UserData::email,
//           'password' => UserData::password,
//       ]);
//
//       $I->seeResponseCodeIs(200);
//       $I->seeResponseIsJson();
//
//       $tok = $I->grabDataFromResponseByJsonPath('$..token');
//       $t = serialize($tok);
//       $token = substr("$t",15,-2);
//
//       $a = file_put_contents(codecept_data_dir('token.json'),$tok);
//       $this->debugSection('New Token', $tok);
//       $I->amBearerAuthenticated($token);
//       $this->token = $token;
//   }
    function login()
    {

        $this->getModule('REST')->haveHttpHeader('Content-Type', 'application/json');
        $this->getModule('REST')->sendPOST("/auth/login", ['email' => UserData::$email, 'password' => UserData::$password]);
        $token = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..token');
        $this->debugSection('Token', $token);
        $a = file_put_contents(codecept_data_dir('token.json'), $token);
        return $token;

    }

    public function getToken()
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        return $token;
    }

    function logout()
    {
        $token = $this->getToken();
        $this->getModule('REST')->haveHttpHeader('Content-Type', 'application/json');
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendPOST('/auth/logout');
    }

    function cleanToken()
    {
        $this->token = null;
    }

    function getSlug()
    {
        $this->getModule('REST')->sendGET('/station/random/');
        $sl = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..slug');
//        $s = serialize($sl);
//        $slug = substr("$s",6,-2);
        $this->debugSection('Slug', $sl);
        $s = file_put_contents(codecept_data_dir('slug.json'), $sl);
        return $sl;

    }

    function takeSlug()
    {
        $slug = file_get_contents(codecept_data_dir('slug.json'));
        return $slug;
    }

    function getRandomStation()
    {
        $this->getModule('REST')->sendGET('/station/random/');
        $st_id = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..station_id');
        $st = $st_id[0];
        return $st;

    }

    function getStationId()
    {
        $this->getModule('REST')->sendGET('/station/random/');
        $st_id = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..id');
//        $stat_id = serialize($st_id[0]);
//        $station_id = substr("$stat_id",5,-2);

        $this->debugSection('Station ID', $st_id);
//        $st = $s = file_put_contents(codecept_data_dir('station_id.json'), $st_id);
        return $st_id;

    }

    function takeStationId()
    {
        $station_id = file_get_contents(codecept_data_dir('station_id.json'));
        return $station_id;
    }

    function getCurrentTrack($id)
    {
//        $this->getStationId();
//        $station_id = $this->takeStationId();
        $this->getModule('REST')->sendGET('/stream/track?stationId='.$id);
        $c_tr = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..currentTrack');
        $cur_tr = serialize($c_tr);
        $current_track = substr("$cur_tr", 15, -3);
        $this->debugSection('Current track', $current_track);
//        file_put_contents(codecept_data_dir('currentTrack.json'), $c_tr);
        return $current_track;

    }

    function takeCurrentTrack()
    {
        $current_track = file_get_contents(codecept_data_dir('currentTrack.json'));
        return $current_track;
    }

    function getSongUrl()
    {
        $this->getModule('REST')->sendGET('/stream/track?stationId=3');
//        $this->getStationId();
//        $station_id = $this->takeStationId();
//        $this->getModule('REST')->sendGET('/stream/track?stationId=' . $station_id);
        $c_tr = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..data.currentTrack');
        $cur_tr = serialize($c_tr);
        $current_track = substr("$cur_tr", 15, -3);
//        $this->debugSection('Current track', $current_track);
        $track = str_replace(" ", "%20", $current_track);
        $song_url = str_replace("-", "+", $track);
        $this->debugSection('Song URL', $song_url);
//        $s = file_put_contents(codecept_data_dir('song_url.json'), $song_url);
        return $song_url;
    }

//    function takeSongURL()
//    {
//        $song_URL = file_get_contents(codecept_data_dir('song_url.json'));
//        return $song_URL;
//    }

    function getStation()
    {

        $this->getModule('REST')->sendGET('/station/search/' . UserData::$station_name);
        $st = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..station_id');
        $stat = serialize($st);
        $station = substr("$stat", 14, -3);
        $this->debugSection('Station', $st);
//        $s = file_put_contents(codecept_data_dir('station.json'), $st[1]);
        return $st[0];
    }

    function takeStation()
    {
        $station = file_get_contents(codecept_data_dir('station.json'));
        return $station;
    }

    function getFavoriteStationId($id)
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendGET('/favorite/station');
        $st1 = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..shoutcast_station_id'); #[] выбор массива

        $ss_id = $st1[$id];
        $this->debugSection('FavoriteStation ID', $st1);

//         $f = file_put_contents(codecept_data_dir('Fstation.json'),$ss_id);
        return $ss_id;
    }



    function getFavoriteTrackID($id)
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendGET('/favorite/track');
        $f_tr = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..id');
        $f_tr_id = $f_tr[$id];
        $this->debugSection('FavoriteStation', $f_tr);
//        $f = file_put_contents(codecept_data_dir('favoriteTrackID.json'), $f_tr);
        return $f_tr_id;
    }

    function takeFavoriteTrackID()
    {
        $favorite_track = file_get_contents(codecept_data_dir('favoriteTrackID.json'));
        return $favorite_track;
    }

    function getItunesUrl()
    {
        $song_url = $this->getSongUrl();
        $this->getModule('REST')->sendGET('/itunes/search/' . $song_url);
        $i = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..song_url');
        $this->debugSection('Itunes URL', $i);
    }

    function getTestStationName()
    {
        $st_id = $this->getModule('REST')->grabDataFromResponseByJsonPath('$.data');
        $this->debugSection('Station Name', $st_id);
    }

    function addFavoriteStation()
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $I = $this->getModule('REST');
        $I->haveHttpHeader('Content-Type', 'application/json');
        $station = $this->getStation();
        $I->sendPOST('/favorite/station', ['station_id' => $station]);
    }

    function getStationDetailsBySlug()
    {

        $this->getModule('REST')->haveHttpHeader('Content-Type', 'application/json');
        $slug = $this->getSlug();
        $this->getModule('REST')->sendGET('/station/details', ['stationSlug' => $slug]);

    }

    function addFavoriteTrack($id)
    {

        $current_track = $this->getCurrentTrack($id);
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendPOST('/favorite/track', array('track_name' => $current_track));
    }

    function getBanner()
    {
        $this->getModule('REST')->haveHttpHeader('Content-Type', 'application/json');
        $this->getModule('REST')->sendGET('/banner?address=193.108.249.33');
    }

    function getFavoriteTracks($id)
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendGET('/favorite/track');
        $s_tr = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..track_name');
        $st = $s_tr[$id];
        $track_name = substr($st, 0, strrpos($st, ' '));
        $this->debugSection('Favorite Tracks', $s_tr);
//        file_put_contents(codecept_data_dir('trackName.json'),$st);
        return $st;
    }

    function getFavoriteStations($id)
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendGET('/favorite/station');
        $st2 = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..name'); #[] выбор массива
        $ss = $st2[$id];
        $station_name = substr($ss, 0, strrpos($ss, ' '));
        $this->debugSection('Favorite Station Name', $st2);
//        file_put_contents(codecept_data_dir('stationName.json'),$ss);
        return $ss;

    }

    function getMainAndSecondGenres()
    {
        $this->getModule('REST')->haveHttpHeader('Content-Type', 'application/json');
        $this->getModule('REST')->sendGET('/genre/');
        $genres = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..name');
        file_put_contents(codecept_data_dir('genres.json'),$genres);

        $genre = $genres[6];
//        $this->debugSection('Genres', $g);
        $this->debugSection('Genre', $genre);
        return $genre;


    }

    function showProfile()
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendGET('/user/profile');
    }

    function registration()
    {
        $reg_email = file_get_contents(codecept_data_dir('userEmail.txt'));
        $this->getModule('REST')->haveHttpHeader('Content-Type', 'application/json');
        $this->getModule('REST')->sendPOST('/auth/registration', array('username' => UserData::$reg_username,
                                                                        'email' => $reg_email,
                                                                        'password' => UserData::$reg_password,
                                                                        'password_confirmation' => UserData::$reg_password));
        $this->getModule('REST')->seeResponseIsJson();
    }

    function searchFavoriteStationByName($id)
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $search_station = $this->getFavoriteStations($id);
        $this->getModule('REST')->sendGET('/favorite/station/' . $search_station);
    }

    function searchFavoriteTrackByName($id)
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $search_track = $this->getFavoriteTracks($id);
        $this->getModule('REST')->sendGET('/favorite/track/' . $search_track);
    }

    function getStationByGenreSlug()
    {
        $this->getModule('REST')->sendGET('/station/' . UserData::$genreSlug);
    }

    function getStationByName()
    {
        $this->getModule('REST')->sendGET('/station/search/' . UserData::$station_name);
    }

    function resendActivateCode()
    {
        $reg_email = file_get_contents(codecept_data_dir('userEmail.txt'));
        $this->getModule('REST')->sendPUT('/auth/activate', array('email' => $reg_email));
    }

    function resetPassword()
    {
        $this->getModule('REST')->sendPUT('/auth/reset-password', array('email' => UserData::$email));
    }

    function removeFavoriteStation($id)
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $shoutcast_station_id = $this->getFavoriteStationId($id);
//        $shoutcast_station_id = file_get_contents(codecept_data_dir('Fstation.json'));
        $this->getModule('REST')->sendDELETE('/favorite/station', ["station_id" => "$shoutcast_station_id"]);
    }

    function removeFavoriteTrack($id)
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $favorite_track = $this->getFavoriteTrackID($id);
        $this->debugSection('Remove Favorite Track', $favorite_track);
        $this->getModule('REST')->sendDELETE('/favorite/track', ["id" => "$favorite_track"]);
    }

    function updateProfile()
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $avatar = file_get_contents(codecept_data_dir('image.jpg'));
        $base64 = base64_encode($avatar);
        $userName = file_get_contents(codecept_data_dir('userName.txt'));
        $this->getModule('REST')->sendPUT('/user/profile', ['username' => $userName,'avatar' => $base64]);
    }

    function changePassword()
    {
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendPUT('/user/password', ['old_password' => UserData::$password,
                                                            'new_password' => UserData::$changePass,
                                                            'new_password_confirm' => UserData::$changePass]);
        $token = file_get_contents(codecept_data_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendPUT('/user/password', ['old_password' => UserData::$changePass,
                                                            'new_password' => UserData::$password,
                                                            'new_password_confirm' => UserData::$password]);
    }

    function checkTempMailForgotPassword()
    {
//        $this ->resetPassword();

        $email = 'b@freeletter.me';
        $mail = md5($email);
        $this->getModule('REST')->sendGET('http://api.temp-mail.ru/request/mail/id/' . $mail . '/format/php/');
        $html = $this->getModule('REST')->grabResponse();
        preg_match('~<a(.*)href="([^"]+)"(.*?)>~',$html,$link);
        $code = substr($link[0],47, -18);
        $this->debugSection('code', $code);
        $codeWeb = substr($link[0],9, -18);
        $this->debugSection('Web Link', $codeWeb);
        file_put_contents(codecept_data_dir('link.json'), $code);
        file_put_contents(codecept_data_dir('linkWeb.json'),$codeWeb);

        return $code;
    }
    function checkTempMailActivateUser()
    {
//        $email = ApiHelper::reg_email;
        $email = file_get_contents(codecept_data_dir('userEmail.txt'));
        $mail = md5($email);
        $this->getModule('REST')->sendGET('http://api.temp-mail.ru/request/mail/id/' . $mail . '/format/php/');
        $html = $this->getModule('REST')->grabResponse();
        preg_match('~<a(.*)href="([^"]+)"(.*?)>~',$html,$link);
        $code = substr($link[0],9, -18);
        $this->debugSection('code', $code);
//        $codeWeb = substr($link[0],9,-5);
//        $this->debugSection('code', $codeWeb);
        file_put_contents(codecept_data_dir('activate.json'), $code);
//        file_put_contents(codecept_data_dir('activateWeb.json'), $codeWeb);
        return $code;

    }
    function removeLastEmail()
    {
//        $email = ApiHelper::reg_email;
        $email = file_get_contents(codecept_data_dir('userEmail.txt'));
        $mail = md5($email);
        $this->getModule('REST')->sendGET('http://api.temp-mail.ru/request/mail/id/' . $mail . '/format/json/');
        $del_letterID = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..mail_id');
        $del = $del_letterID[0];
        $this->debugSection('Id', $del);
        $this->getModule('REST')->sendGET('http://api.temp-mail.ru/request/delete/id/'.$del.'/');

    }
    function removeLastEmail1()
    {
        $email = UserData::$email;
//        $email = file_get_contents(codecept_data_dir('userEmail.txt'));
        $mail = md5($email);
        $this->getModule('REST')->sendGET('http://api.temp-mail.ru/request/mail/id/' . $mail . '/format/json/');
        $del_letterID = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..mail_id');
        $del = $del_letterID[0];
        $this->debugSection('Id', $del);
        $this->getModule('REST')->sendGET('http://api.temp-mail.ru/request/delete/id/'.$del.'/');
    }
    function resetPasswordConfirmAction()
    {

        $code = $this ->checkTempMailForgotPassword();
        $this->getModule('REST')->sendGET('/auth/reset-password/'.$code);
        $reminderCode = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..reminderCode');
        $this->debugSection('Reminder code', $reminderCode);
        $reminderCode = file_put_contents(codecept_data_dir('reminderCode.json'),$reminderCode);
        $userId = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..userId');
        $this->debugSection('User ID', $userId);
        $userId = file_put_contents(codecept_data_dir('userId.json'),$userId);

    }
    function resetPasswordConfirm()
    {
        $reminderCode = file_get_contents(codecept_data_dir('reminderCode.json'));
        $userId = file_get_contents(codecept_data_dir('userId.json'));
        $this->getModule('REST')->sendPUT('/auth/reset-password/confirm', ['reminderCode'=>"$reminderCode",
            'userId'=>"$userId",
            'password'=>UserData::$password,
            'password_confirmation'=>UserData::$password]);
    }
    function activateUser()
    {
        $activateUrl = file_get_contents(codecept_data_dir('activate.json'));
        $this->getModule('REST')->sendGET($activateUrl);
    }
    function getTopStations($id)
    {
        $this->getModule('REST')->sendGET('/station/top');
        $top20 = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..name');
        $topN = $top20[$id];
        $this->debugSection('TOP1', $topN);
        return $topN;
    }


}

