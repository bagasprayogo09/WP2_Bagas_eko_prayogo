<html>

<head> 
    <title>Form Input data siswa</title> 
</head> 

<body> 
    <center>
        <?php //echo validation_errors(); ?>
        <form action="<?= base_url('formsiswa/cetak'); ?>" 
method="post">

        <table>
            <tr>
                <th colspan="3"> Form Input Data Siswa </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <th>:</th>
                <td>
                <input type="text" name="nis" placeholder="Input NIS">
                        <?= form_error('nis', '<small style="color:red">', '</small>'); ?>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                <input type="text" name="nama" placeholder="Input Nama Siswa">
                        <?= form_error('nama', '<small style="color:red">', '</small>'); ?>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>
                <input type="text" name="kelas" placeholder="Input Kelas">
                        <?= form_error('kelas', '<small style="color:red">', '</small>'); ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                <input type="text" name="tanggal_lahir" placeholder="Input Tanggal Lahir">
                        <?= form_error('tanggal_lahir', '<small style="color:red">', '</small>'); ?>
                </td>
            </tr>
            <tr>
            </tr>
            <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                <input type="text" name="tempat_lahir" placeholder="Input Tempat Lahir">
                        <?= form_error('tempat_lahir', '<small style="color:red">', '</small>'); ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>s
                <td>
                <input type="text"name="alamat" placeholder="Input Alamat"></input>
                        <?= form_error('alamat', '<small style="color:red">', '</small>'); ?>
                </td>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>
                
                <label><input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan</label>
                <?= form_error('jenis_kelamin', '<small style="color:red">', '</small>'); ?>
                </td>
            </tr>
            <tr>
            <th>Agama</th> 
                    <td>:</td> 
                    <td> 
                        <select name="agama" id="agama"> 
                            <option value="">Pilih Agama</option> 
                            <option value="islam">islam</option> s
                            <option value="kristen">kristen</option> 
                            <option value="katolik">katolik</option>
                            <option value="budha">budha</option>
                            <option value="hindu">hindu</option>
                            <option value="protestan">protestan</option>
                            <option value="konghucu">konghucu</option>
                        </select> 
                    </td> 
            </tr>
            <tr> 
                    <td colspan="3" align="center"> 
                        <input type="submit" value="Submit"> 
                    </td> 
                </tr> 
            </table>
        </form>
    </center> 
</body> 

</html> 
            
            