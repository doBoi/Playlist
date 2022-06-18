<?php

namespace Repository {

  use Entity\Playlist;

  class playlistRepository
  {
    public array $playlist = array();

    function save(Playlist $playlist)
    {
      $number = sizeof($this->playlist) + 1;
      $this->playlist[$number] = $playlist;
      return $this->playlist;
    }

    function remove($number): bool
    {
      if ($number > sizeof($this->playlist)) {
        return false;
      }

      for ($i = $number; $i < sizeof($this->playlist); $i++) {
        $this->playlist[$i] = $this->playlist[$i + 1];
      }

      unset($this->playlist[sizeof($this->playlist)]);

      return true;
    }

    function findAll(): array
    {
      return $this->playlist;
    }
  }
}