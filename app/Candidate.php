<?php

namespace App;

class Candidate
{

    private $id;
    private $last_name;
    private $first_name;
    private $email;
    private $cv_file;
    private $video_file;
    private $id_q1;
    private $id_q2;
    private $id_q3;


    public function getId() {
        return $this->id;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCV()
    {
      return $this->cv_file;
    }

    public function getVideo()
    {
      return $this->video_file;
    }

    public function getQ1()
    {
      return $this->id_q1;
    }

    public function getQ2()
    {
      return $this->id_q2;
    }

    public function getQ3()
    {
      return $this->id_q3;
    }
}
