<?php $this->load->view('header_view');?>
                <div id="isipanel" style="float: right;"> <!-- start of main panel -->
                    <div id="isititle">
                        <div>pengaturan</div>
                    </div>
                    <div id="isi"><br><br>
                        <div class="khs" style="margin-top: 10px;">
                            AKADEMIK SISWA
                        </div><div class="khs" style="background-color: #FCFCFC;">
                            <table>
                                <tr>
                                    <td width="670">
                                        <font size="3">Pengambilan Paket</font>
                                    </td><td>
                                        <?=form_open()?>
                                        <div class="onoffswitch"> 
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" value="true" <?=($result->value=='true')?"checked='true'":""?>>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <div class="onoffswitch-inner"></div>
                                                    <div class="onoffswitch-switch"></div>
                                                </label>
                                            </div>
                                        </div> 
                                        <input type="submit" name='submit' value="save">
                                        <?=form_close()?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size: 9pt; color: grey;">
                                       Pembukaan paket adalah salah satu fitur pembukaan pegambilan paket bagi siswa pada tiap semester berakhir/ dimulainya semester baru. Enable fungsi ini dengan switch untuk membuka waktu pemilihan paket bagi siswa.
                                    </td>
                                </tr>
                            </table>
                        </div>
<!--                        <div class="khs" style="margin-top: 10px;">
                            ADMINISTRATOR
                        </div>
                        <div class="khs" style="background-color: #FCFCFC;">
                            <table>
                                <tr>
                                    <td style="font-size: 9pt; color: grey;" width="670">
                                        <div class="khs" style="width: 700px;">
                                            ROSIKHAN
                                            <span style="float: right; font-size: 10pt;"><a style="color: #ff4c4c;" href="hapusadmin.php?id=" title="hapus">X</a></span>
                                        </div><div class="khs" style="width: 700px;">
                                            CLAUDIO FRESTA 
                                            <span style="float: right; font-size: 10pt;"><a style="color: #ff4c4c;" href="hapusadmin.php?id=" title="hapus">X</a></span>
                                        </div><div class="khs" style="width: 700px;">
                                            EARLAN BRILIANTO
                                            <span style="float: right; font-size: 10pt;"><a style="color: #ff4c4c;" href="hapusadmin.php?id=" title="hapus">X</a></span>
                                        </div><br>
                                        <div class="tambahadmin" onclick="location.href='tambahadmin.php';">
                                            <b>TAMBAH ADMIN BARU</b>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>-->
                    </div>
                </div>    
<?php $this->load->view('footer_view');?>