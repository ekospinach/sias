<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">PAKET</div>
                    </div>
                    <br><br>
                     <div class="tambahadmin" style='margin-top: 10px;' onclick="location.href='tambahpaket.php';">
                                            <b>TAMBAH PAKET BARU</b>
                     </div>
                  <?php for ($index = 0; $index < 20; $index++) {?>
                    <div id="isi"><!-- start of paket-->
                        <div class="khs" style="margin-top: 10px;">
                            <table width="737">
                                <tr>
                                  <td width="500" align="left"><span style="color:black"><b>PAKET A113</b></span></td>
                                  <td><span style="float: right; font-size: 10pt;"><a style="color: #ff4c4c;" href="hapusadmin.php?id=" title="hapus"><b>X<b></a></span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="khs">
                            <br>
                            <table class="tabel-khs">
                                <tr>
                                    <th>
                                        kode mapel
                                    </th><th>
                                        Mata pelajaran
                                    </th><th>
                                        sks
                                    </th><th>
                                        Kelas
                                    </th><th>
                                        Jam
                                    </th><th>
                                        Ruang
                                    </th><th>
                                        Guru
                                    </th>
                                </tr>
                                <?php 
                                    for ($i = 0;$i<=6;$i++){?>
                                        <tr>
                                    <td>
                                        IA00321
                                    </td><td>
                                        Matematika 1
                                    </td><td>
                                        3
                                    </td><td>
                                        A
                                    </td><td>
                                        07.00 - 10.00
                                    </td><td>
                                        XI IPA 3
                                    </td><td>
                                        Drs. Rosikhan Maulana Yusuf S.S
                                    </td>
                                </tr>
                                <?php }?>
                            </table>
                        </div><!-- end of paket -->
                  <?php } ?>
                        
                        
                    </div>    
                    <br>
                       
                    </div>
                </div>

            </div>            
<?php $this->load->view('footer_view');?>