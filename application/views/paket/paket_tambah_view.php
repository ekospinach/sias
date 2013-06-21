<?php $this->load->view('header_view'); ?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Tambah Paket</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('paket/lihat/')?>';"><= Kembali</div>
                    <div id="isi">
                        <div id="detail">
                            <?php echo form_open();?>
                            <table width="500">
                                <tr>
                                    <td width="200" height="30"> Kode Paket</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='kode_paket' value="<?php echo set_value('kode_paket'); ?>">
                                        <?php echo form_error('kode_paket'); ?>
                                        <?php if(isset($error))echo PHP_EOL.'<div style="color:red">'.$error.'</div>';?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Kode Syarat</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <select name="kode_syarat" style='width: 100%;' >
                                            <option value="" >-pilih kode syarat-</option>
                                            <?php 
                                            if($dpaket!==FALSE){
                                                foreach($dpaket as $row){
                                                    echo '<option value="'.$row->kode_paket.'" '.set_select('kode_syarat', $row->kode_paket).'>'.$row->kode_paket.' - '.$row->nama_mapel.'</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Semester</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='semester' value="<?php echo set_value('semester'); ?>">
                                        <?php echo form_error('semester'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Batas</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='batas' value="<?php echo set_value('batas'); ?>">
                                        <?php echo form_error('batas'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Mata Pelajaran</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <!--<input type='text' style='width: 100%;' name='id_mapel' value="<?php echo set_value('id_mapel'); ?>">-->
                                        <select name="id_mapel" style='width: 100%;' >
                                            <option value="" >-pilih mapel-</option>
                                            <?php 
                                            if($dmapel!==FALSE){
                                                foreach($dmapel as $row){
                                                    echo '<option value="'.$row->id_mapel.'" '.set_select('id_mapel', $row->id_mapel).'>'.$row->nama_mapel.'</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                        <?php echo form_error('id_mapel'); ?>
                                        <?php if(isset($error2))echo PHP_EOL.'<div style="color:red">'.$error2.'</div>';?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="tambah" value="Tambah paket"></td>
                                </tr>
                            </table>
                            <?php echo form_close();?>
                        </div>                             
                    </div>
                </div>
<?php $this->load->view('footer_view'); ?>