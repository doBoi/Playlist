<?php
class Playlist
{
  public static $queue = [];

  public function add($title, $url)
  {
    $number = sizeof(Playlist::$queue) + 1;
    $list = [
      'title' => $title,
      'url' => $url
    ];
    Playlist::$queue[$number] = $list;
    echo "Anda Menambahkan Playlist " .  $list['title'] . PHP_EOL;
  }
  static function show()
  {
    $queues = Playlist::$queue;
    echo "Data Playlist" . PHP_EOL;
    if ($queues) {
      foreach ($queues as $no => $value) {
        echo "$no. " .  $value['title'] . PHP_EOL;
      };
    } else {
      echo "Tidak Data Playlist" . PHP_EOL;
    }
  }

  static function play()
  {
    $queues = Playlist::$queue;
    echo "Data Playlist" . PHP_EOL;
    foreach ($queues as $no => $value) {
      echo "$no. " .  $value['title'] . PHP_EOL;
    };
    Playlist::$queue = [];
    echo "Playlist Sudah Kosong" . PHP_EOL;
  }
}
