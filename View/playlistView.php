<?php

namespace View {

  use Helper\InputHelper;
  use Service\PlaylistService;


  class PlaylistView
  {
    private PlaylistService $playlistservice;

    public function __construct(PlaylistService $playlistservice)
    {
      $this->playlistservice = $playlistservice;
    }


    function showPlaylist(): void
    {
      while (true) {
        $this->playlistservice->showPlaylist();
        echo "MENU" . PHP_EOL;
        echo "1. Tambah Playlist" . PHP_EOL;
        echo "2. Hapus Playlist" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = InputHelper::input("Pilih");

        if ($pilihan == "1") {
          $this->addPlaylist();
        } else if ($pilihan == "2") {
          $this->removePlaylist();
        } else if ($pilihan == "x") {
          break;
        } else {
          echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
      }
    }

    function addPlaylist()
    {
      echo "MENAMBAH PLAYLIST" . PHP_EOL;

      $title = InputHelper::input("title (x untuk batal)");
      $url = InputHelper::input("url (x untuk batal)");

      if ($title == "x" | $url == "x") {
        echo "Batal menambah playlist" . PHP_EOL;
      } else {
        $this->playlistservice->addPlaylist($title, $url);
      }
    }

    function removePlaylist()
    {
      echo "MENGHAPUS PLAYLIST" . PHP_EOL;

      $pilihan = InputHelper::input("Nomor (x untuk batalkan)");

      if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
      } else {
        $this->playlistservice->removePlaylist($pilihan);
      }
    }
  }
}