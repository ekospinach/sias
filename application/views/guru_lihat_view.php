<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Claudio Fresta Suharno</div>
                    </div>
                    
                    <div id="isi">
                        <br><br>
                        <div class="khs" style="margin-top: 10px;">
                          <table width="737">
                                <tr>
                                  <td width="680">NIP : 019257932929</span></td>
                                </tr><tr>
                                  <td width="500">Jumlah Kelas : <?php echo '8';?> </td>
                                </tr>
                            </table>
                        </div>
                        <div class="khs"><div class="khs"  style="text-align: center; ">
                                    <b>JADWAL MENGAJAR</b>
                            </div>
                            <br>
                            <table class="tabel-khs">
                                <tr>
                                    <th>
                                        
                                    </th><th>
                                        Kelas
                                    </th><th>
                                        Hari
                                    </th><th>
                                        Jam
                                    </th><th>
                                        Mata Pelajaran
                                    </th><th>
                                        sks
                                    </th><th>
                                        Ruang
                                    </th>
                                </tr>
                                <?php 
                                    for ($i = 0;$i<=3;$i++){?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="kelas[]" value="<?php echo $i?>">
                                    </td><td>
                                        XII IPA A
                                    </td><td>
                                        Senin
                                    </td><td>
                                         <?php echo $i+10; echo':00';?> - <?php echo $i+11; echo':00';?>
                                    </td><td>
                                        Matematika 1
                                    </td><td>
                                        3
                                    </td><td>
                                        XI IPA 3
                                    </td>
                                </tr>
                                <?php }?>
                                <?php 
                                    for ($i = 0;$i<=3;$i++){?>
                               <tr>
                                    <td>
                                        <input type="checkbox" name="kelas[]" value="<?php echo $i+3?>">
                                    </td><td>
                                        XI IPS C
                                    </td><td>
                                        Selasa
                                    </td><td>
                                        <?php echo $i+10; echo':00';?> - <?php echo $i+11; echo':00';?>
                                    </td><td>
                                        Pendidikan dan Kewarganegaraan
                                    </td><td>
                                        3
                                    </td><td>
                                        XI IPS 2
                                    </td>
                                </tr>
                                <?php }?>
                            </table>                               
                         </div>
                    </div>
<?php $this->load->view('footer_view');?>