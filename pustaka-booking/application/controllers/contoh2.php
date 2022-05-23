<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contoh2 extends CI_Controller {

    public function index(){
        echo"<h1>Contoh Class</h1>";
    }

    //Hanya Menggunakan Controller
    public function biodata(){
        echo "<h1>Perkenalkan Nama Saya Bagas eko prayogo</h1>";
        echo "<br>";
        echo "<h1> Saya Dari Kelas 19.3A.07</h1>";
    }

    //Menggunakan Controlroller Dan View
    public function biodata2(){
        
        $this->load->view('view_biodata');
    }

    //MEnggunakan Controller Dan Model
    public function biodata3(){
        $this->load->model('model_biodata'); //Pemanggilan Model
        $bio = $this->model_biodata->biodata();//Pemanggilan Function Di Model_Biodata

        echo "<h1>Perkenalkan Nama Saya</h1>";
        echo "<br>";
        echo "" . $bio;

    }


    //MEnggunakan Controller,Model, Dan View
    public function biodata4(){
        $this->load->model('model_biodata'); //Pemanggilan Model
        $bio = $this->model_biodata->biodata();//Pemanggilan Function Di Model_Biodata

        $data['title'] = "form biodata";

        $this->load->view('view_biodata', $data);//Pemanggilan View

    }
}