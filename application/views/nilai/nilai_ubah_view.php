<?php $this->load->view('header_view'); ?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Ubah Nilai</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('nilai')?>';"><= Kembali</div>
                    <div id="isi">
                        <div class="khs" style="margin-top: 10px;">
                            <?php echo form_open();?>
                            <table width="500">
                                <tr>
                                    <td width="200" height="30"> NIS</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <?php echo set_value('nis'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nama Siswa</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <?php echo set_value('nis'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Mata Pelajaran</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <?php echo set_value('nis'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Kelas</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <?php echo set_value('nis'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Semester</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <?php echo set_value('nis'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Tahun Ajaran</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <?php echo set_value('nis'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Guru</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <?php echo set_value('nis'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> UK1</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='uk1' value="<?php echo set_value('uk1'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> UK2</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='uk2' value="<?php echo set_value('uk2'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> UH1</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='uh1' value="<?php echo set_value('uh1'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> UH2</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='uh2' value="<?php echo set_value('uh2'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> UTS</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='uts' value="<?php echo set_value('uts'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> UAS</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='uas' value="<?php echo set_value('uas'); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nilai Akhir</td>
                                    <td>:</td>
                                    <td width="300" height="30"> 
                                        <input type='text' style='width: 100%;' name='nilai' value="<?php echo set_value('nilai'); ?>">
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