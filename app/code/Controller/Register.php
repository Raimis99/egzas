<?php

namespace Controller;

use Core\BaseController;
use Helper\Url;
use Helper\Validator;
use Model\Record;
use Model\Registration;

class Contact extends BaseController
{
    public function submit()
    {
        $name = $this->request->post('name');
        $surname = $this->request->post('surname');
        $email = $this->request->post('email');
        $phone = $this->request->post('phone');
        $age = $this->request->post('age');
        $gender_id = $this->request->post('gender_id');
        $club_id = $this->request->post('club_id');


        $errors = [];

        // validation
        if (!Validator::checkAllFilled([$name, $surname, $email,$phone,$age,$gender_id,$club_id])) {
            $errors[] = 'Empty fields left';
        }
        if(!Validator::checkEmail($email)) {
            $errors[] = 'Wrong email';
        }
        if(!(new Club())->load($club_id)) {
            $errors[] = 'Wrong club id';
        }

        if ($errors) {
            $this->render('parts/errors', compact('errors'));
        } else {
            $registration = new club();

            $registration->create([
                'name' => $name,
                'surname' => $surname,
                'email' => $email,
                'phone' => $phone,
                'age' => $age,
                'gender' => $gender_id,
                'club_id' => $club_id,
            ]);

            Url::redirect('success');
        }
    }
}
