<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div>Guru</div>
                    </div>
                    <div id="tambah" onclick="location.href='#';">+ Tambah Guru</div>
                    
                    <div id="isi">
                        <div id="list">
                            
                            <table  class="siswa" ><!-- start of the header content table -->
                                <tr>
                                    <td width="10"></td>
                                    <td width="130" align="center">nip</td>
                                    <td width="260" align="center">nama lengkap</td>
                                    <td width="90" align="center">Jumlah kelas</td>
                                    <td width="225" align="center"></td>
                                </tr>
                            </table>
                            
                            <div id="listsiswa"><!-- start of content table -->
                                <?php
                                $i = 0;
                                for($i;$i<15;$i++){
                                    if (($i%2) == 1){
                                        $row = 1;
                                    }else{
                                        $row = 0;
                                    }
                                    $class = "baris$row";?>
                                    <div class="<?php echo $class; ?>">
                                    <table>
                                        <tr>
                                            <td width="37" align="center">
                                                <input type="checkbox" name="siswa" class="checksiswa" value="nim">
                                            </td>
                                            <td width="130" align="center" >
                                                115060800111115
                                            </td>
                                            <td width="240" align="center">
                                                <a href="<?=base_url('guru/lihat')?>" class="detail">Claudio Fresta Suharno</a>
                                            </td>
                                            <td width="90" align="center">
                                               8
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                               <?php  } ?>
                                <div class="hapus">hapus guru</div>
                            </div><!-- endof content table -->
                            
                        </div>
                    </div><!-- end of isi -->
                </div>    
<?php $this->load->view('footer_view');?>