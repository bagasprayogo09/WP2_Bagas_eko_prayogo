<?php
    class formsiswa extends CI_Controller{
        public function index(){
                $this->load->view('view-form-siswa');
    }

    public function cetak() {
        $this->form_validation->set_rules('nis', 'nis', 'required|min_length[2]', [
            'required' => 'nis Harus Diisi!',
            'min_length' => 'nis Teralalu Pendek minimal 2 karakter!'
        ]);

        $this->form_validation->set_rules('nama', 'nama ', 'required|min_length[2]', [
            'required' => "Nama  Harus Diisi!",
            'min_length' => "Nama Terlalu pendek!"
        ]);
        $this->form_validation->set_rules('kelas', 'kelas', 'required|min_length[2]', [ 
            'required' => "kelas Harus Diisi!",
            'min_length' => "kelas Terlalu pendek!"
        ]);
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir ','required|min_length[2]', [
             'required' => "tanggal lahir Harus Diisi!",
             'min_length' => "Nama Terlalu pendek!"
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'tempat_lahir ','required|min_length[2]', [
            'required' => "tempat lahir Harus Diisi!",
            'min_length' => "tempat lahir Terlalu pendek!"
        ]);
        $this->form_validation->set_rules('alamat', 'alamat','required|min_length[2]', [
            'required' => "alamat Harus Diisi!",
            'min_length' => "alamat Terlalu pendek!"
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin','required|min_length[2]', [
            'required' => "jenis_kelamin Harus Diisi!",
            'min_length' => "jenis kelam!",
        ]);        
            
            if ($this->form_validation->run () == FALSE) {
            $this->load->view('view-form-siswa');
        }
        else {
                $nama = $this->input->post('nama', TRUE);
                $nis = $this->input->post('nis', TRUE);
                $kelas =  $this->input->post('kelas', TRUE);
                $tanggal_lahir =  $this->input->post('tanggal_lahir', TRUE);
                $tempat_lahir =  $this->input->post('tempat_lahir', TRUE);
                $alamat = $this->input->post('alamat', TRUE);
                $jenis_kelamin =  $this->input->post('jenis_kelamin', TRUE);
                $agama =  $this->input->post('agama', TRUE);
            $siswa = [
                'nama'=> $nama,
                'nis' => $nis,
                'kelas'=> $kelas,
                'tanggal_lahir'=>$tanggal_lahir,
                'tempat_lahir'=>$tempat_lahir,
                'alamat'=>$alamat,
                'jenis_kelamin'=>$jenis_kelamin,
                'agama'=>$agama
            ];

            $this->load->view('view-data-siswa', $siswa);
        }
    }
}
?>