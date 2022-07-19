<?php

namespace Model;

use Core\BaseModel;

class Record extends BaseModel
{
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $subject;
    private $message;
    private $topic_id;
    private $seen;
    private $reply;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getTopicId()
    {
        return $this->topic_id;
    }

    public function getSeen()
    {
        return (bool)$this->seen;
    }



    protected $table = 'registration';

    public function load($id)
    {
        $data = $this->db->fetch_row('SELECT * FROM records WHERE id = ?', $id);

        if($data) {
            $this->id = $data['id'];
            $this->name = $data['name'];
            $this->surname = $data['surname'];
            $this->email = $data['email'];
            $this->phone = $data['phone'];
            $this->subject = $data['age'];
            $this->message = $data['gender_id'];
            $this->topic_id = $data['club_id'];


            return $this;
        }

        return false;
    }

}
