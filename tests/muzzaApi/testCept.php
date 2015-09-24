<?php

<<<<<<< HEAD
// for ($station_id = 20; $station_id < 22120; $station_id++) {
=======
for ($station_id = 1984 ; $station_id < 22120; $station_id++) {
>>>>>>> 658d14f5edc361cc7ae8f435268b30a2094876eb
    $I = new ApiGuy($scenario);
    $I->wantTo('Test current track');
//$station_id = file_get_contents(codecept_output_dir('st_id.json'));
//$station_id ++;
//$a = file_put_contents(codecept_output_dir('st_id.json'),$station_id);
    $station_id = 1905;
    $I->sendGET('/stream/track?stationId=' . $station_id);
//$station = $I->getTestStationName();
    $current_track = $I->getCurrentTrack();
<<<<<<< HEAD
    // $I->canSeeResponseCodeIs(500);
    // $I->canSeeResponseCodeIs(400);
    $song_url = $I->getSongUrl();
    $song_url = $I->takeSongURL();
    $I->sendGET('/itunes/search/' . $song_url);
    $I->getItunesURL();
    $I->seeResponseCodeIs(200);
    // $I->canSeeResponseCodeIs(500);
    // $I->canSeeResponseCodeIs(400);
//    $I->seeResponseCodeIs(200);
// }
=======

    // $I->canSeeResponseCodeIs(404);
    $I->canSeeResponseCodeIs(500);

    $song_url = $I->getSongUrl();
    $song_url = $I->takeSongURL();
    $I->sendGET('/itunes/search/' . $song_url);
    $I->canSeeResponseCodeIs(400);
    $I->canSeeResponseCodeIs(500);
    // $I->canSeeResponseCodeIs(404);
    // $I->getItunesURL();
    // $I->canSeeResponseCodeIs(400);
    // $I->canSeeResponseCodeIs(500);
    // $I->canSeeResponseCodeIs(404);

//    $I->seeResponseCodeIs(200);
}


>>>>>>> 658d14f5edc361cc7ae8f435268b30a2094876eb
