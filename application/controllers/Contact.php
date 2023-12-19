<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends Public_Controller {

    private $table = 'halaman';
    private $pk = 'id_halaman';
    public $lang = '';

    public function index($slug = '')
    {
        $data = array(  'title'     => 'Get Connected',

                        'isi'       => 'homepage/connected/index');
        $this->load->view('homepage/_layout/wrapper', $data);
    }

    public function tambah(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        // $name = 'muji';
        // $email = 'muji@gmail.com';
        // $subject = 'mahasiswa';
        // $message = 'kelas b';

        $data = array( 'name'    => $name,
                       'email'   => $email, 
                       'subject' => $subject,
                       'message' => $message);
        
        $this -> load -> model('crud');

        $this -> crud -> i('contact', $data);

        redirect(base_url());

    }

    public function bikin_pass()
    {
        $pass = do_hash('lqwertyuio');

        var_dump($pass);
    }


    
}