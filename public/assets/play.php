<?php
    namespace App\Http\Controllers;

      use Illuminate\Support\Facades\DB;
      use App\Models\User;
      use Illuminate\Http\Request;
      use App\Http\Controllers\Controller;

      session_start();

      $songIDX = $_SESSION['songIDX'];
      
      $newPlays = $_SESSION['newPlays'];

      DB::update("update songs set plays = '$newPlays' where id = ?", [$songIDX]);

?>
