<?php

use Entity\Playlist;
use Helper\InputHelper;


  class view {
    private Playlist $playlist;

    public function __construct(Playlist $playlist){
      $this->playlist = $playlist;
    }

    public function tambah(){
      while (true) {
        echo "MENAMBAH Playlist" . PHP_EOL;
                $title = InputHelper::input("Title Playlist (x untuk batal)");
                $url = InputHelper::input("URl Playlist (x untuk batal)");

                  if ($title == "x" || $url == "x") {
                    break;
                  } else {
                    $this->playlist->add($title, $url);
                  }
                  $lagi = InputHelper::input("Masukan Lagi (y untuk lanjut)");
                  if ($lagi == "y") {
                    view::tambah();
                  }
                  break;
      }
    }

    public function show(){
      return $this->playlist->show();
    }

    public function main(){
      return $this->playlist->play();
    }
  }
