<?php
namespace Helper;
// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Auth extends \Codeception\Module
{
    const username = 'QA tester';
    const email = 'a@freeletter.me';
    const password = '12345678';
    const confirm_password = '12345678';
    const station_name = 'alternative';

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
//           'email' => Auth::email,
//           'password' => Auth::password,
//       ]);
//
//       $I->seeResponseCodeIs(200);
//       $I->seeResponseIsJson();
//
//       $tok = $I->grabDataFromResponseByJsonPath('$..token');
//       $t = serialize($tok);
//       $token = substr("$t",15,-2);
//
//       $a = file_put_contents(codecept_output_dir('token.json'),$tok);
//       $this->debugSection('New Token', $tok);
//       $I->amBearerAuthenticated($token);
//       $this->token = $token;
//   }
    function login()
    {

        $this->getModule('REST')->haveHttpHeader('Content-Type', 'application/json');
        $this->getModule('REST')->sendPOST("/auth/login", ['email' => Auth::email,'password' => Auth::password]);
        $token = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..token');
        $this->debugSection('Token', $token);
        $a = file_put_contents(codecept_output_dir('token.json'),$token);
        return $token;

    }
    public function getToken()
    {
        $token = file_get_contents(codecept_output_dir('token.json'));
        return $token;
    }
    function cleanToken()
    {
        $this->token = null;
    }

    function getSlug()
    {
        $this->getModule('REST')->sendGET('/station/random/');
        $sl = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..slug');
 //       $s = serialize($sl);
//        $slug = substr("$s",6,-2);
        $this->debugSection('Slug', $sl);
        $s = file_put_contents(codecept_output_dir('slug.json'),$sl);
        return $sl;

    }
    function takeSlug()
    {
        $slug = file_get_contents(codecept_output_dir('slug.json'));
        return $slug;
    }

    function getStationId()
    {
        $this->getModule('REST')->sendGET('/station/random/');
        $st_id = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..id');
        $stat_id = serialize($st_id[0]);
        $station_id = substr("$stat_id",5,-2);
        $this->debugSection('Station ID', $st_id);
        $st = $s = file_put_contents(codecept_output_dir('station_id.json'),$st_id);
        return $station_id;

    }
    function takeStationId()
    {
        $station_id = file_get_contents(codecept_output_dir('station_id.json'));
        return $station_id;
    }
    function getCurrentTrack()
    {
//        $this->getModule('REST')->sendGET('/stream/track?stationId=3');
        $c_tr = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..currentTrack');
        $cur_tr = serialize($c_tr);
        $current_track = substr("$cur_tr",15,-3);
        $this->debugSection('Current track', $c_tr);
        $c = file_put_contents(codecept_output_dir('currentTrack.json'),$c_tr);
        return $current_track;

    }
    function takeCurrentTrack()
    {
        $current_track = file_get_contents(codecept_output_dir('currentTrack.json'));
        return $current_track;
    }
    function getSongUrl()
    {
//        $this->getModule('REST')->sendGET('/stream/track?stationId=3');
        $c_tr = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..data.currentTrack');
        $cur_tr = serialize($c_tr);
        $current_track = substr("$cur_tr",15,-3);
//        $this->debugSection('Current track', $current_track);
        $track = str_replace(" ","%20",$current_track);
        $song_url = str_replace("-","+",$track);
        $this->debugSection('Song URL', $song_url);
        $s = file_put_contents(codecept_output_dir('song_url.json'),$song_url);
        return $song_url;
    }
    function takeSongURL()
    {
        $song_URL = file_get_contents(codecept_output_dir('song_url.json'));
        return $song_URL;
    }

    function getStation()
    {

        $st = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..station_id');
        $stat = serialize($st);
        $station = substr("$stat",14,-3);
        $this->debugSection('Station', $st);
        $s = file_put_contents(codecept_output_dir('station.json'),$st[1]);
    }
    function takeStation()
    {
        $station = file_get_contents(codecept_output_dir('station.json'));
        return $station;
    }

    function getFavoriteStation()
    {
        $token = file_get_contents(codecept_output_dir('token.json'));
        $this->getModule('REST')->amBearerAuthenticated($token);
        $this->getModule('REST')->sendGET('/favorite/station');
        $st1 = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..shoutcast_station_id'); #[] выбор массива
        // $stat1 = serialize($st1);
        // $favorite_station = substr("$stat1",14,-3);
        // $st2 = $this->getModule('REST')->grabResponse();
        // $s = json_decode($st2)[1]->id;
        $ss_id=$st1[0];
        $this->debugSection('FavoriteStation', $ss_id);
        return $ss_id;
        // $f = file_put_contents(codecept_output_dir('Fstation.json'),$st1[0]);
    }
    function takeFavoriteStation()
    {
        $favorite_station = file_get_contents(codecept_output_dir('Fstation.json'));
        return $favorite_station;
    }

    function getStationName()
    {
        $st2 = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..name'); #[] выбор массива
        $stat2 = serialize($st2);
        $search_station = substr($stat2,14, strpos($stat2, ' '));
        $this->debugSection('Favorite Station Name', $st2);
        $n = file_put_contents(codecept_output_dir('stationName.json'),$st2);
    }
    function takeStationName()
    {
        $search_station = file_get_contents(codecept_output_dir('stationName.json'));
        return $search_station;
    }

    function getFavoriteTrackID()
    {
        $f_tr = $this->getModule('REST')->grabDataFromResponseByJsonPath('$..id');
        $fav_tr = serialize($f_tr);
        $favorite_track = substr("$fav_tr",14,-3);
        $this->debugSection('FavoriteStation', $f_tr);
        $f = file_put_contents(codecept_output_dir('favoriteTrackID.json'),$f_tr);
    }
    function takeFavoriteTrackID()
    {
        $favorite_track = file_get_contents(codecept_output_dir('stationName.json'));
        return $favorite_track;
    }

    function getItunesUrl()
    {
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
        $I = $this->getModule('REST');
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPOST('/favorite/station', array('station_id' => $station));
    }


}



