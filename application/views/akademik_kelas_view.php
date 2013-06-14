<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">KELAS</div>
                    </div>
                    <br><br>
                     <div class="tambahadmin" style='margin-top: 10px;' onclick="location.href='tambahkelas.php';">
                                            <b>TAMBAH KELAS BARU</b>
                     </div>
                    <div id="isi"><!-- start of paket-->
                        <br>
                        <div class="khs">
                            <input type='button' name='hapuskelas' value='Hapus Kelas' style='float: right;'>
                            <br><br>
                            <table class="tabel-khs">
                                <tr>
                                   <th>
                                       
                                    </th><th>
                                        Mata pelajaran
                                    </th><th>
                                        sks
                                    </th><th>
                                        Kelas
                                    </th><th>
                                        Jam
                                    </th><th>
                                        Hari
                                    </th><th>
                                        Ruang
                                    </th>
                                </tr>
                                <?php 
                                    for ($i = 0;$i<=6;$i++){?>
                                
                                  <tr>
                                      <td><input type='checkbox' name='hapus[]'></td>
                                   <td>
                                        Matematika 1
                                    </td><td>
                                        3
                                    </td><td>
                                        A
                                    </td><td>
                                        07.00 - 10.00
                                    </td><td>
                                        Minggu
                                    </td><td>
                                        XI IPA 3
                                    </td>
                                </tr>
                                <?php }?>
                            </table>
                        </div><!-- end of paket -->                       
                        
                    </div>    
                    <br>
                       
                    </div>
<?php $this->load->view('footer_view');?>