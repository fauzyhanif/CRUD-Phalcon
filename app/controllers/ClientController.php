<?php

class ClientController extends \Phalcon\Mvc\Controller
{

    var $url = 'http://localhost/belajar/ApiMahasiswa-master/index.php/mahasiswa';
    public function indexAction()
    {
    	require_once __DIR__.'/../library/rest_client.php';
    	$c = new RestCurlClient();
    	$res = $c->get($this->url);
    	$data = json_decode($res);
    	// print_r($data);
    	// die();
    	$this->view->data = $data;
    }

    public function postAction($id)
    {

    	$user = Phalcon::findFirst($id);
    	$data =  (array) $user;

    	$hsl = [];
		foreach ( $data as $k=>$v )
		{
		 $hsl['nim'] = $data['nim'];
		 $hsl['nama']= $data['nama'];
		 $hsl['id_jurusan']= $data['id_jurusan'];
		 $hsl['alamat']= $data['alamat'];
		}
                                                                  
		$data_string = json_encode($hsl); 

    	
    	require_once __DIR__.'/../library/rest_client.php';
    	$c = new RestCurlClient();
		$yes = $c->post($this->url, $hsl);
		if ($yes) {
			return $this->response->redirect('client');
		}else{
			return $this->response->redirect('crud');
		}
    } 


  //   public function deleteAction($id)
  //   {
  //   	$data_string = json_encode(array('nim' => $id));
  //   	$ch = curl_init($this->url); 
  //   	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
		// curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $id);                                                                  
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		//     'Content-Type: application/json',                                                                                
		//     'Content-Length: ' . strlen($id))                                                                       
		// );                                                                                                                   
		 
		// $result = curl_exec($ch);
		// return $result;
  //   }



}

