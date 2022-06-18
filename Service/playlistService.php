<?php

namespace Service {

  use Entity\Playlist;
  use Repository\playlistRepository;

  class PlaylistService
  {
    private playlistRepository $playlistrepository;

    public function __construct(playlistRepository $playlistrepository)
    {
      $this->playlistrepository = $playlistrepository;
    }

    function showPlaylist(): void
    {
      // var_dump($this->playlistrepository->findAll());

      echo "Playlist" . PHP_EOL;
      $playlist = $this->playlistrepository->findAll();
      if ($playlist) {
        foreach ($playlist as $number => $value) {
          echo "$number. " . $value->getTitle() . " - " . $value->getUrl() . PHP_EOL;
        }
      } else {
        echo "Tidak Ada Playlist" . PHP_EOL;
      }
    }

    function addPlaylist(string $title, string $url): void
    {
      // var_dump($playlist);

      $playlist = new Playlist($title, $url);
      $this->playlistrepository->save($playlist);
      echo "++++++++++++++++++++++++++" . PHP_EOL;
      echo "+SUKSES MENAMBAH PLAYLIST+" . PHP_EOL;
      echo "++++++++++++++++++++++++++" . PHP_EOL;
    }


    function removePlaylist(int $number): void
    {
      if ($this->playlistrepository->remove($number)) {
        echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
      } else {
        echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
      }
    }
  }
}