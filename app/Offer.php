<?php

namespace App;

class Offer
{

    private $id;
    private $title;
    private $content;
    private $date_publication;
    private $region;
    private $intern_level;
    private $intern_date;
    private $intern_duration;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function getDate_publication()
    {
        return $this->date_publication;
    }

    public function setDate_publication($date_publication)
    {
        $this->date_publication = $date_publication;
        return $this;
    }

    public function getRegion()
    {
      return $this->region;
    }
    public function setRegion($region)
    {
      $this->region = $region;
      return $this;
    }

    public function getIntern_level()
    {
      return $this->intern_level;
    }
    public function setIntern_level($level)
    {
      $this->intern_level = $level;
      return $this;
    }
    public function getIntern_duration()
    {
      return $this->intern_duration;
    }
    public function setIntern_duration($duration)
    {
      $this->intern_duration = $duration;
      return $this;
    }
    public function getIntern_date()
    {
      return $this->intern_date;
    }
    public function setIntern_date($date)
    {
      $this->intern_date = $date;
      return $this;
    }

    public function getUrl()
    {
      return 'index.php?p=home&id='. $this->getId();
    }
}
