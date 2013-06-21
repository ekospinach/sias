<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Tambah Kelas</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('paket')?>';"><= Kembali</div>
                    <?=form_open()?>
                    <div id="isi" style="margin-top: -39px;">
                        <br><br>
                        <div class="khs" style="margin-top: 10px;">
                          <table width="737">
                                <tr>
                                  <td>Kode Paket</td>
                                  <td>:</td>
                                  <td><?=set_value('kode_paket');?></td>
                                <input type="hidden" name="kode_paket" value="<?=set_value('kode_paket');?>">
                                </tr>
                                <tr>
                                  <td>Kode Syarat</td>
                                  <td>:</td>
                                  <td><?=set_value('kode_syarat');?></td>
                                <input type="hidden" name="kode_syarat" value="<?=set_value('kode_syarat');?>">
                                </tr>
                                <tr>
                                  <td width="100px">Semester</td>
                                  <td width='1px'>:</td>
                                  <td><?=set_value('semester');?></td>
                                </tr>
                                <input type="hidden" name="semester" value="<?=set_value('semester');?>">
                                <input type="hidden" name="batas" value="<?=set_value('batas');?>">
                                <input type="hidden" name="id_mapel" value="<?=set_value('id_mapel');?>">
                            </table>
                        </div>
                        <div class="khs">
                            <div class="khs"  style="text-align: center; ">
                                <b>Masukkan Data Kelas</b>
                            </div>
                            <table width="500">
                                <tr>
                                    <td width="200" height="30"> Kelas</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='kelas' value="<?php echo set_value('kelas'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Ruang</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <select name="id_ruang" style='width: 100%;' >
                                            <option value="" >-pilih Ruang-</option>
                                            <?php 
                                            if($druang!==FALSE){
                                                foreach($druang as $row){
                                                    echo '<option value="'.$row->id_ruang.'" '.set_select('id_ruang', $row->id_ruang).'>'.$row->nama_ruang.' : '.$row->jam_mulai.' - '.$row->jam_selesai.'</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Guru</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <select name="id_guru" style='width: 100%;' >
                                            <option value="" >-pilih guru-</option>
                                            <?php 
                                            if($dguru!==FALSE){
                                                foreach($dguru as $row){
                                                    echo '<option value="'.$row->id_guru.'" '.set_select('id_guru', $row->id_guru).'>'.$row->nama_guru.'</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="tambahin" value="Tambah paket"></td>
                                </tr>
                            </table>
                         </div>
                    </div>
                    <?=form_close()?>
                </div>
<?php $this->load->view('footer_view');?>