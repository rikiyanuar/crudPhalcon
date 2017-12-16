<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $mod_pegawai = new Pegawai();
        $this->view->data = $mod_pegawai->find();
        if ($this->session->has("notif")) {
            $this->view->notif = $this->session->get("notif");
            $this->session->remove("notif");
        }
    }

    public function procAction()
    {
        $mod_pegawai = new Pegawai();
        /* $data = array(
            'nama' => $this->request->getPost('nama'), 
            'ttl' => $this->request->getPost('ttl'), 
            'jkel' => $this->request->getPost('jkel'), 
            'alamat' => $this->request->getPost('alamat'), 
            'nohp' => $this->request->getPost('nohp'), 
            'gaji' => $this->request->getPost('gaji')
        ); */
        // $mod_pegawai->assign($data);

        if ($this->request->getPost('act') == 'crt') {
            $mod_pegawai->nama = $this->request->getPost('nama');
            $mod_pegawai->ttl = $this->request->getPost('ttl');
            $mod_pegawai->jkel = $this->request->getPost('jkel');
            $mod_pegawai->alamat = $this->request->getPost('alamat');
            $mod_pegawai->nohp = $this->request->getPost('nohp');
            $mod_pegawai->gaji = $this->request->getPost('gaji');
            if ($mod_pegawai->save()) {
                $this->session->set("notif", "Input Data BERHASIL");
            }
            $this->response->redirect("index");
        } else {
            $mod_pegawai->id = $this->request->getPost('id');
            $mod_pegawai->nama = $this->request->getPost('nama');
            $mod_pegawai->ttl = $this->request->getPost('ttl');
            $mod_pegawai->jkel = $this->request->getPost('jkel');
            $mod_pegawai->alamat = $this->request->getPost('alamat');
            $mod_pegawai->nohp = $this->request->getPost('nohp');
            $mod_pegawai->gaji = $this->request->getPost('gaji');
            if ($mod_pegawai->save()) {
                $this->session->set("notif", "Edit Data BERHASIL");
            }
            $this->response->redirect("index");
        }
    }

    public function delAction($id)
    {
        $mod_pegawai = new Pegawai();
        $data = $mod_pegawai->findFirst($id);
        // print_r(json_encode($data));
        if ($data->delete()) {
            $this->session->set("notif", "Hapus Data BERHASIL");
        }
        $this->response->redirect("index");
    }

}

