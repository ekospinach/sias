<?php $this->load->view('header_view'); ?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Tambah Ruang</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('ruang/lihat/')?>';"><= Kembali</div>
                    <div id="isi">
                        <div class="khs" style="margin-top: 10px;">
                            <?php echo form_open();?>
                            <table width="500">
                                <tr>
                                    <td width="200" height="30"> Nama Ruangan</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='nama_ruang' value="<?php echo set_value('nama_ruang'); ?>">
                                        <?php echo form_error('nama_ruang'); ?>
                                        <?php if(isset($error))echo PHP_EOL.'<div style="color:red">'.$error.'</div>';?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Jam Mulai</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <select name="jam_mulai">
                                        <option value="06:30:00" <?php echo set_select('jam_mulai', '06:30:00', TRUE); ?> >06:30:00</option>
                                        <option value="07:45:00" <?php echo set_select('jam_mulai', '07:45:00'); ?> >07:45:00</option>
                                        <option value="09:00:00" <?php echo set_select('jam_mulai', '09:00:00'); ?> >09:00:00</option>
                                        <option value="09:30:00" <?php echo set_select('jam_mulai', '09:30:00'); ?> >09:30:00</option>
                                        <option value="11:45:00" <?php echo set_select('jam_mulai', '11:45:00'); ?> >11:45:00</option>
                                        <option value="13:00:00" <?php echo set_select('jam_mulai', '13:00:00'); ?> >13:00:00</option>
                                        <option value="13:30:00" <?php echo set_select('jam_mulai', '13:30:00'); ?> >13:30:00</option>
                                        <option value="14:45:00" <?php echo set_select('jam_mulai', '14:45:00'); ?> >14:45:00</option>
                                        <option value="16:00:00" <?php echo set_select('jam_mulai', '16:00:00'); ?> >16:00:00</option>
                                        </select> 
                                        <?php echo form_error('jam_mulai'); ?>
                                        <?php if(isset($error2))echo PHP_EOL.'<div style="color:red">'.$error2.'</div>';?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Jam Selesai</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <select name="jam_selesai">
                                        <option value="07:45:00" <?php echo set_select('jam_selesai', '07:45:00', TRUE); ?> >07:45:00</option>
                                        <option value="09:00:00" <?php echo set_select('jam_selesai', '09:00:00'); ?> >09:00:00</option>
                                        <option value="09:30:00" <?php echo set_select('jam_selesai', '09:30:00'); ?> >09:30:00</option>
                                        <option value="11:45:00" <?php echo set_select('jam_selesai', '11:45:00'); ?> >11:45:00</option>
                                        <option value="13:00:00" <?php echo set_select('jam_selesai', '13:00:00'); ?> >13:00:00</option>
                                        <option value="13:30:00" <?php echo set_select('jam_selesai', '13:30:00'); ?> >13:30:00</option>
                                        <option value="14:45:00" <?php echo set_select('jam_selesai', '14:45:00'); ?> >14:45:00</option>
                                        <option value="16:00:00" <?php echo set_select('jam_selesai', '16:00:00'); ?> >16:00:00</option>
                                        <option value="16:30:00" <?php echo set_select('jam_selesai', '16:30:00'); ?> >16:30:00</option>
                                        </select> 
                                        <?php echo form_error('jam_selesai'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Hari</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <select name="hari">
                                        <option value="Senin" <?php echo set_select('hari', 'Senin', TRUE); ?> >Senin</option>
                                        <option value="Selasa" <?php echo set_select('hari', 'Selasa'); ?> >Selasa</option>
                                        <option value="Rabu" <?php echo set_select('hari', 'Rabu'); ?> >Rabu</option>
                                        <option value="Kamis" <?php echo set_select('hari', 'Kamis'); ?> >Kamis</option>
                                        <option value="Jumat" <?php echo set_select('hari', 'Jumat'); ?> >Jumat</option>
                                        <option value="Sabtu" <?php echo set_select('hari', 'Sabtu'); ?> >Sabtu</option>
                                        </select> 
                                        <?php echo form_error('hari'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="tambah" value="Tambah Ruangan"></td>
                                </tr>
                                <?php echo form_close();?>
                            </table>
                        </div>                             
                    </div>
                </div>
<?php $this->load->view('footer_view'); ?>