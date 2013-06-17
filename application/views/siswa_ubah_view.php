<?php $this->load->view('header_view'); ?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Tambah Siswa</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('siswa')?>';"><= Kembali</div>
                    <div id="isi">
                        <div id="leftbio">
                            <table >
                                <tr>
                                    <td>
                                        <div id="detail">
                                            <img width="194px" height="259px" src="<?php
                                            if(!empty($foto)){
                                                echo base_url('asset/images/foto/'.$foto);
                                            }else{
                                                echo base_url('asset/images/foto/claudio.png');
                                            }
                                            ?>"></img>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-right: 5px;">
                                        <input style=" width:100%; float:right; padding-right: 5px;" type="file">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style=" width:100%; float:right; padding-right: 5px;" type="submit" name="uploadfoto" value="Unggah Foto">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="detail">
                            <?php echo form_open();?>
                            <table width="500">
                                <input type="hidden" name="nis" value="<?php echo set_value('nis'); ?>">
                                <tr>
                                    <td width="200" height="30"> Nama Siswa</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='nama' value="<?php echo set_value('nama'); ?>">
                                        <?php echo form_error('nama'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Tempat,<br>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td width="300" height="30">
                                        <input type='text' style='width:200px; margin-bottom: 3px; ' name='tempat' value="<?php echo set_value('tempat'); ?>"> , 
                                        <input type='text' style='width:71px; margin-bottom: 3px; ' id="datepicker" name="tanggal" value="<?php echo set_value('tanggal'); ?>">
                                        <script type="text/javascript">  
                                        $(window).load(function() {
                                            $('#datepicker').datepicker({  
                                              changeMonth: true,  
                                              changeYear: true,
                                              yearRange: 'c-15:c-10',
                                              dateFormat: 'yy-mm-dd'
                                            });  
                                        });  
                                        </script>  
                                    </td>
                                </tr><tr>
                                    <td width="200" height="30"> Alamat</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='alamat' value="<?php echo set_value('alamat'); ?>"></td>
                                </tr><tr>
                                    <td width="200" height="30"> Agama</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='agama' value="<?php echo set_value('agama'); ?>"></td>
                                </tr><tr>
                                    <td width="200" height="30"> Jenis Kelamin</td>
                                    <td>:</td><?php echo set_radio('myradio', '2'); ?>
                                    <td width="300" height="30"> 
                                    <?=form_radio('jenis_kelamin', 'L',set_radio('jenis_kelamin', 'L')).'Laki-laki';?>
                                    <?=form_radio('jenis_kelamin', 'P',set_radio('jenis_kelamin', 'P')).'Perempuan';?>
                                </tr><tr>
                                    <td width="200" height="30"> Golongan Darah</td>
                                    <td>:</td>
                                    <td width="300" height="30">
                                    <?php
                                    $options = array(
                                        '' => '--Gol. Darah--',
                                        'A' => 'A',
                                        'B' => 'B',
                                        'AB'=> 'AB',
                                        'O' => 'O'
                                    );
                                    $selected = array(set_value('goldar'));
                                    echo form_dropdown('goldar', $options, $selected );
                                    ?>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Handphone</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='no_hp' value="<?php echo set_value('no_hp'); ?>">
                                        <?php echo form_error('no_hp'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Nama Ayah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='nama_ayah' value="<?php echo set_value('nama_ayah'); ?>"></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Handphone Ayah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='hp_ayah' value="<?php echo set_value('hp_ayah'); ?>"></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nama Ibu</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='nama_ibu' value="<?php echo set_value('nama_ibu'); ?>"></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Handphone Ibu</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='hp_ibu' value="<?php echo set_value('hp_ibu'); ?>"></td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Nama Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='nama_wali' value="<?php echo set_value('nama_wali'); ?>"></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Handphone Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='hp_wali' value="<?php echo set_value('hp_wali'); ?>"></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Alamat Orangtua</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='alamat_ortu' value="<?php echo set_value('alamat_ortu'); ?>"></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Alamat Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='alamat_wali' value="<?php echo set_value('alamat_wali'); ?>"></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Jalur Masuk</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='jalur' value="<?php echo set_value('jalur'); ?>"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="ubahfix" value="Ubah data"></td>
                                </tr>
                                <?php echo form_close();?>
                            </table>
                        </div>                             
                    </div>
                </div>
<?php $this->load->view('footer_view'); ?>