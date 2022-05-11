<?php

namespace App\Http\Controllers;

use App\Models\Songs;
use App\Models\User;
use App\Models\Albums;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use File;
use ZipArchive;

class IndexController extends Controller
{
    public function index(){

        $topten = DB::select('select * from songs ORDER BY downloads DESC LIMIT 10');



        $latestafro = DB::select('select * from songs where genre = ? ORDER BY id DESC LIMIT 5', ['afro']);

        $latestdancehall = DB::select('select * from songs where genre = ? ORDER BY id DESC LIMIT 5', ['dancehall']);

        $latesthiphop = DB::select('select * from songs where genre = ? ORDER BY id DESC LIMIT 5', ['hiphop']);

        $latestgospel = DB::select('select * from songs where genre = ? ORDER BY id DESC LIMIT 5', ['gospel']);

        $latestreggae = DB::select('select * from songs where genre = ? ORDER BY id DESC LIMIT 5', ['reggae']);


        $hotartists = DB::select('select * from users ORDER BY likes DESC LIMIT 6');


        return view('index', ['topten' => $topten, 'latestafro' => $latestafro, 'latestdancehall' => $latestdancehall, 'latesthiphop' => $latesthiphop, 'latestgospel' => $latestgospel, 'latestreggae' => $latestreggae, 'hotartists' => $hotartists]);
    }



    public function getSong($id){
        return view('song', ['songID' => $id]);
    }

    public function getAlbumSong($songId){
        return view('albumSong', ['songID' => $songId]);
    }

    public function getAlbum($name){
        return view('album', ['albumName' => $name]);
    }



    public function allAlbums(){
        $allAlbums = DB::select('select DISTINCT name from albums ORDER BY name');

        return view('albums', ['allAlbums' => $allAlbums]);
    }



    public function getArtist($artistId){
        return view('artist', ['artistId' => $artistId]);
    }



    public function allArtists(){
        $allArtists = DB::select('select * from users ORDER BY name');
        return view('alla', ['artists' => $allArtists]);
    }



    public function afroArtists(){
        $afroArtists = DB::select('select * from users where genre = ? ORDER BY name', ['afro']);
        return view('genre', ['genreArtists' => $afroArtists]);
    }
    public function dancehallArtists(){
        $dancehallArtists = DB::select('select * from users where genre = ? ORDER BY name', ['dancehall']);
        return view('genre', ['genreArtists' => $dancehallArtists]);
    }
    public function gospelArtists(){
        $gospelArtists = DB::select('select * from users where genre = ? ORDER BY name', ['gospel']);
        return view('genre', ['genreArtists' => $gospelArtists]);
    }
    public function hiphopArtists(){
        $hiphopArtists = DB::select('select * from users where genre = ? ORDER BY name', ['hiphop']);
        return view('genre', ['genreArtists' => $hiphopArtists]);
    }
    public function reggaeArtists(){
        $reggaeArtists = DB::select('select * from users where genre = ? ORDER BY name', ['reggae']);
        return view('genre', ['genreArtists' => $reggaeArtists]);
    }



    public function afroSongs(){
        $afroSongs = DB::select('select * from songs where genre = ? ORDER BY artist_id', ['afro']);
        return view('genresongs', ['genreSongs' => $afroSongs]);
    }
    public function dancehallSongs(){
        $dancehallSongs = DB::select('select * from songs where genre = ? ORDER BY artist_id', ['dancehall']);
        return view('genresongs', ['genreSongs' => $dancehallSongs]);
    }
    public function gospelSongs(){
        $gospelSongs = DB::select('select * from songs where genre = ? ORDER BY artist_id', ['gospel']);
        return view('genresongs', ['genreSongs' => $gospelSongs]);
    }
    public function hiphopSongs(){
        $hiphopSongs = DB::select('select * from songs where genre = ? ORDER BY artist_id', ['hiphop']);
        return view('genresongs', ['genreSongs' => $hiphopSongs]);
    }
    public function reggaeSongs(){
        $reggaeSongs = DB::select('select * from songs where genre = ? ORDER BY artist_id', ['reggae']);
        return view('genresongs', ['genreSongs' => $reggaeSongs]);
    }



    public function hiphopAlbums(){
        $hiphopAlbums = DB::select('select DISTINCT name from albums where genre = ? ORDER BY artist_id', ['hiphop']);
        return view('genrealbums', ['genreAlbums' => $hiphopAlbums]);
    }
    public function afroAlbums(){
        $afroAlbums = DB::select('select DISTINCT name from albums where genre = ? ORDER BY artist_id', ['afro']);
        return view('genrealbums', ['genreAlbums' => $afroAlbums]);
    }
    public function dancehallAlbums(){
        $dancehallAlbums = DB::select('select DISTINCT name from albums where genre = ? ORDER BY artist_id', ['dancehall']);
        return view('genrealbums', ['genreAlbums' => $dancehallAlbums]);
    }
    public function gospelAlbums(){
        $gospelAlbums = DB::select('select DISTINCT name from albums where genre = ? ORDER BY artist_id', ['gospel']);
        return view('genrealbums', ['genreAlbums' => $gospelAlbums]);
    }
    public function reggaeAlbums(){
        $reggaeAlbums = DB::select('select DISTINCT name from albums where genre = ? ORDER BY artist_id', ['reggae']);
        return view('genrealbums', ['genreAlbums' => $reggaeAlbums]);
    }



    public function numberCat(){
        $Category = DB::select('select * from users where name LIKE ? OR name LIKE ? OR name LIKE ? OR name LIKE ? OR name LIKE ? OR name LIKE ? OR name LIKE ? OR name LIKE ? OR name LIKE ? OR name LIKE ? ORDER BY name', ['0%','1%','2%','3%','4%','5%','6%','7%','8%','9%']);
        $numbered = 'Numbers';
        return view('az', ['artistCat' => $Category, 'numbered' => $numbered]);
    }
    public function aCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['a%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function bCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['b%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function cCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['c%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function dCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['d%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function eCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['e%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function fCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['f%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function gCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['g%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function hCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['h%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function iCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['i%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function jCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['j%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function kCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['k%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function lCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['l%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function mCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['m%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function nCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['n%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function oCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['o%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function pCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['p%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function qCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['q%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function rCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['r%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function sCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['s%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function tCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['t%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function uCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['u%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function vCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['v%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function wCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['w%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function xCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['x%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function yCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['y%']);
        return view('az', ['artistCat' => $Category]);
    }
    public function zCat(){
        $Category = DB::select('select * from users where name LIKE ? ORDER BY name', ['z%']);
        return view('az', ['artistCat' => $Category]);
    }



    public function search(Request $request){
        $searchTerm = $request->searchTerm;

        $results = DB::select('select * from users where name LIKE ?', ["%$searchTerm%"]);

        $results2 = DB::select('select * from songs where title LIKE ?', ["%$searchTerm%"]);

        $results3 = DB::select('select DISTINCT name from albums where name LIKE ?', ["%$searchTerm%"]);

        return view('search',['results' => $results, 'results2' => $results2, 'results3' => $results3]);
    }




    public function downloadSong($id){

        $songX = DB::select('select * from songs where id = ?', [$id]);

        foreach ($songX as $one) {

                $songId = $one->id;

                $songFile = $one->song;

                $downloads = $one->downloads;
                    $int_cast = (int)$downloads;

                $newDn = $int_cast + 1;

                DB::update("update songs set downloads = '$newDn' where id = ?", [$songId]);

                return response()->download(public_path('songs/'.$songFile));

              }

    }

    public function downloadAlbumSong($id){

    $songX = DB::select('select * from albums where id = ?', [$id]);

    foreach ($songX as $one) {

            $songId = $one->id;

            $songFile = $one->songs;

            $downloads = $one->downloads;
                $int_cast = (int)$downloads;

            $newDn = $int_cast + 1;

            DB::update("update albums set downloads = '$newDn' where id = ?", [$songId]);

            return response()->download(public_path('albums/'.$songFile));

          }

    }

    public function downloadZip($id){

    $grabber = DB::select('select * from albums where id = ?', [$id]);

    foreach($grabber as $grab){
        $albumName = $grab->name;
        $artistid = $grab->artist_id;
        $artworkLink = $grab->artwork;
        $artwork = 'albumsartworks/'.$artworkLink;
    }

    $songs = DB::select('select * from albums where name = ?', [$albumName]);

    $artistx = DB::select('select * from users where id = ?', [$artistid]);
      foreach ($artistx as $one) {
        $artist = $one->name;
      }

    $zip = new ZipArchive();
    $filename = $artist.'-'.$albumName.'-MusicPablo.zip';

    if ($zip->open($filename, ZIPARCHIVE::CREATE) === true) {

        foreach ($songs as $one) {

            $songId = $one->id;

            $songFile = $one->songs;

            $file = 'albums/'.$songFile;

            $downloads = $one->downloads;
                $int_cast = (int)$downloads;

            $newDn = $int_cast + 1;

            DB::update("update albums set downloads = '$newDn' where id = ?", [$songId]);

            $zip->addFile($file, $songFile);

          }

          $zip->addFile($artwork, $artworkLink);

          $zip->close();

         }

          return response()->download(public_path($filename))->deleteFileAfterSend(true);;

      }

}
