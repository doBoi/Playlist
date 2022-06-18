<?php

namespace Entity {

  class Playlist
  {
    private string $title;
    private string $url;


    public function __construct($title = "", $url = "")
    {
      $this->title = $title;
      $this->url = $url;
    }


    public function getUrl(): string
    {
      return $this->url;
    }


    public function setUrl(string $url): self
    {
      $this->url = $url;

      return $this;
    }


    public function getTitle(): string
    {
      return $this->title;
    }


    public function setTitle(string $title): self
    {
      $this->title = $title;

      return $this;
    }
  }
}