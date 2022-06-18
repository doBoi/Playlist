<?php

require_once __DIR__ . "/Entity/Playlist.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/playlistRepository.php";
require_once __DIR__ . "/Service/playlistService.php";
require_once __DIR__ . "/View/playlistView.php";


use Repository\playlistRepository;
use Service\PlaylistService;
use View\PlaylistView;


echo "Welcome to Playlist" . PHP_EOL;
$playlistRepository = new PlaylistRepository();
$playlistService = new PlaylistService($playlistRepository);
$playlistView = new PlaylistView($playlistService);


$playlistView->showPlaylist();
