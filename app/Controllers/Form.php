<?php 

namespace App\Controllers;


class Form extends BaseController
{
	public function index()
	{
        helper(['form']);

        $data = [];
        $data['categories'] = [
            'Student',
            'Teacher',
            'principle'
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
            //    'email' => [
            //      'rules' => 'required|valid_email',
            //        'label' => 'Email address',
            //        'errors'=> [
            //            'required'=> 'Hey, Email address is a required field.',
            //            'valid_email'=>'Oh, man, really?? Please, add a valid email',
            //        ]
            //    ],
            //    'password' => 'required|min_length[8]',
            //    'category' => 'in_list[Student, Teacher]',
            //    'date' => [
            //        'rules'=> 'required|check_date',
            //        'label'=> 'Date',
            //        'errors'=> [
            //            'check_date' => 'You can not add a date before today'
            //        ]
            //    ]
                'theFile'=>[
                    'rules' => 'uploaded[theFile.0]|max_size[theFile, 4096]|is_image[theFile]',
                    'label' => 'The File'
                ]
            ];

            if($this->validate($rules)){

            //    $file=$this->request->getFile('theFile');
            //if($file->isValid() && !$file->hasMoved()){
            //   $file->move('./uploads/images', 'testName.' . $file->getExtension());
            //}

            $files = $this->request->getFiles();
            foreach ($files['theFile'] as $file){
                if ($file->isValid() && !$file->hasMoved()){
                    echo $file->getName(). ' - Real name<br>';
                    $file->move('./uploads/images/multiple');
                    echo $file->getName(). ' - New name<br> <hr>';
                }
            }

            exit();

                return redirect()->to('/form/success');
                //Then do database insertion
                //Login user
            }else{
                $data['validation'] = $this->validator;
            }
            
        }

		return view('form', $data);
    }
    
    function success(){
        return 'Hey, you have passed the validation. Congrats!';
    }
}
