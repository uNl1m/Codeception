<?php
namespace Page\MuzzaWeb;

class FavoritePage
{
    // include url of current page
    public static $URL = '/user/favorite';
    public static $favoriteStationsTitle = '#search_fav_container div h2';
    public static $tracksTitle = '#search_track_container h2';
    public static $stationsList = '//*[@id="favorite_container"]';
    public static $tracksList = '#favorite_tracks_container';
    public static $removeTrack = 'span.favorite.remove-from-fav.remove-from-fav-track';
    public static $removeFirstTrack = '//*[@id="favorite_tracks_container"]/div/div[1]/li/div/div/span';
    public static $removeSecondTrack = '//*[@id="favorite_tracks_container"]/div/div[2]/li/div/div/span';
    public static $removeStation = 'span.favorite.remove-from-fav';
    public static $removeFirstStation = '//*[@id="favorite_container"]/ul/li[1]/div/div/span[3]';
    public static $removeSecondStation = '//*[@id="favorite_container"]/ul/li[2]/div/div/span[3]';
    public static $playStation = '//*[@id="favorite_container"]/ul/li[1]/div/a';
    public static $playAnotherStation = '//*[@id="favorite_container"]/ul/li[2]/div/a';


}
