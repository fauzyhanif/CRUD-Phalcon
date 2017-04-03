<?php

class CrudController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$data = Phalcon::find();
    	$this->view->data=$data;
    }


    public function createAction()
    {

     	$ins = new Phalcon();

       	$ins->assign(array(
                'nim' 			=> $this->request->getPost('nim'),
                'nama' 			=> $this->request->getPost('nama'),
                'id_jurusan' 	=> $this->request->getPost('id_jurusan'),
                'alamat' 		=> $this->request->getPost('alamat')
                )
            );
        $ins->save();

        if ($ins) {
        	$_SESSION['sukses'] = "Data mahasiswa atas nama ".$$this->request->getPost('nama')." berhasil di input.";
        }
        $this->response->redirect('crud');
    }


    public function updatepageAction($id)
    {
    	$data = Phalcon::findFirstByNim($id);

   		$this->view->nim 		=$data->nim;
   		$this->view->nama 		=$data->nama;
   		$this->view->id_jurusan =$data->id_jurusan;
   		$this->view->alamat 	=$data->alamat;

   		$this->view->pick('crud/update');
    }


    public function updateAction()
   	{
   		$id = $this->request->getPost("id");
   		$data = Phalcon::findFirstByNim($id);

        $data->nim 			= $id;
   		$data->nama 		= $this->request->getPost("nama");
   		$data->id_jurusan 	= $this->request->getPost("id_jurusan");
   		$data->alamat 		= $this->request->getPost("alamat");

   		if (!$data->save()) {
   				$this->response->redirect('crud/updatepage');
    		 }
    			else
    		 {
    		 	$this->response->redirect('crud');
    		 	$_SESSION['sukses'] = "Data mahasiswa atas nama ".$$this->request->getPost('nama')." berhasil di update.";
    		 }
   	}


    public function deleteAction($id)
    {
    	$data = Phalcon::findFirst($id);
      	$data->delete();

      	if ($data->delete()) {
      		$_SESSION['sukses'] = "Data mahasiswa dengan nim ".$$this->request->getPost('nama')." berhasil di hapus.";
      		return $this->response->redirect('crud');
      	}
    }

}

