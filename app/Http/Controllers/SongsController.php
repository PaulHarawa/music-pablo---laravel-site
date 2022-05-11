<?php

namespace App\Http\Controllers;

use App\Models\Songs;

use App\Models\Albums;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class SongsController extends Controller
{
    public function upload(Request $request)
    {

        $data = new Songs;

        $data->artist_id = Auth::user()->id;
        $data->title = $request->title;
        $data->genre = $request->genre;

          $song = $request->song;

          $songExt = $song->getClientOriginalExtension();
          $artistName = Auth::user()->name;

          $songTitle = $artistName.'-'.$request->title.'-MusicPablo.Com'.'.'.$songExt;

          $request->song->move('songs',$songTitle);

          $artwork = $request->artwork;
          $artworkExt = $artwork->getClientOriginalExtension();
          $artwork_name = $artistName.'-'.$request->title.'-MusicPablo.Com'.'.'.$artworkExt;

          $artwork->move('artworks',$artwork_name);

        $data->song = $songTitle;
        $data->artwork = $artwork_name;

        $data->plays = 0;
        $data->downloads = 0;

        $data->save();

        return redirect('/home')->with('mssg','Song Uploaded Successfully');
    }

    public function uploadAlbum(Request $request)
    {

        $artwork = $request->artwork;
          $artworkExt = $artwork->getClientOriginalExtension();
          $artworkOne = Auth::user()->name;
          $artworkTwo = $request->albumtitle;
          $artwork_name = $artworkOne.'-'.$artworkTwo.'-MusicPablo.Com'.'.'.$artworkExt;

          $artwork->move('albumsartworks',$artwork_name);

        $titleArray = $request->title;
        $songArray  = $request->song;

        $nos = count($songArray);

        $counter = 0;

        while($counter < $nos){

            $data = new Albums;

            $data->artist_id = Auth::user()->id;
            $data->name = $request->albumtitle;
            $data->genre = $request->genre;
            $data->artwork = $artwork_name;
            $data->nos = $nos;

            $singleTitle = $titleArray[$counter];
            $singleSong = $songArray[$counter];

            $songExt = $singleSong->getClientOriginalExtension();
            $artistName = Auth::user()->name;
            $songTitle = $artistName.'-'.$singleTitle.'-MusicPablo.Com'.'.'.$songExt;
            $singleSong->move('albums',$songTitle);

            $data->songs = $songTitle;
            $data->song_title = $singleTitle;

            $data->plays = 0;
            $data->downloads = 0;


            $data->save();

            $counter++;
        }

        return redirect('/home')->with('mssg2','Album Uploaded Successfully');
    }
}
