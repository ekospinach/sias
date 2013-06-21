<?php $this->load->view('header_view'); ?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Ubah Guru</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('guru/lihat/'.set_value('nip'))?>';"><= Kembali</div>
                    <div id="isi">
                        <div class="khs" style="margin-top: 10px;">
                            <?php echo form_open();?>
                            <table width="500">
                                <tr>
                                    <td width="200" height="30"> NIP</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='nip' value="<?php echo set_value('nip'); ?>">
                                        <?php echo form_error('nip'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nama Guru</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='nama_guru' value="<?php echo set_value('nama_guru'); ?>">
                                        <?php echo form_error('nama_guru'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="tambah" value="Tambah Guru"></td>
                                </tr>
                                <?php echo form_close();?>
                            </table>
                        </div>                             
                    </div>
                </div>
<?php $this->load->view('footer_view'); ?>