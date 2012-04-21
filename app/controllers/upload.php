<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

   public function __construct()
   {
      parent::__construct();

      $this->load->helper('form');
   }

   public function index()
   {
      $this->load->view('upload_files');
   }

   public function add()
   {	
      // Папка в корне проекта, обязательно установите прова на чтение и запись
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']	= '10000';

      // Менять название файла, выглядить как md5-хэш
      $config['encrypt_name']	= TRUE;

      $this->load->library('upload', $config);

      foreach ($_FILES as $key => $value)
      {
         if (!$this->upload->do_upload($key))
         {
         // Если во время загрузки были ошибки, 
         // их можно увидеть через метод $this->upload->display_errors();
         print_r ($this->upload->display_errors());
         }
         else 
         {
            // Информация о загруженом файле можно увидеть через метод $this->upload->data();
            print_r ($this->upload->data());
         }
      }
   }
}

/* End of file post.php */
/* Location: ./application/controllers/upload.php */