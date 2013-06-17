<?php $this->load->view('header_view'); ?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Tambah Mapel</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('mapel/lihat/')?>';"><= Kembali</div>
                    <div id="isi">
                        <div id="detail">
                            <?php echo form_open();?>
                            <table width="500">
                                <tr>
                                    <td width="200" height="30"> Mata Pelajaran</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='nama_mapel' value="<?php echo set_value('nama_mapel'); ?>">
                                        <?php echo form_error('nama_mapel'); ?>
                                        <?php if(isset($error))echo PHP_EOL.'<div style="color:red">'.$error.'</div>';?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> SKS</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='sks' value="<?php echo set_value('sks'); ?>">
                                        <?php echo form_error('sks'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> SKM</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='skm' value="<?php echo set_value('skm'); ?>">
                                        <?php echo form_error('skm'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="tambah" value="Tambah Mapel"></td>
                                </tr>
                                <?php echo form_close();?>
                            </table>
                        </div>                             
                    </div>
                </div>
<?php $this->load->view('footer_view'); ?>