<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div>Mata Pelajaran</div>
                        <input type="button" style="margin-left: 640px; margin-top: -23px; position:absolute;" value="Hapus Mapel" onclick="location.href='hapusmapel.php';">
                        <input type="button" style="margin-left: 530px; margin-top: -23px; position:absolute;" value="Tambah Mapel" onclick="location.href='tambahmapel.php';">
                    </div>
                    
                    <div id="isi">
                        <div id="list">
                            
                            <table  class="siswa" style="max-width: 730px; min-width: 730px;"><!-- start of the header content table -->
                                <tr>
                                    <td width="10"></td>
                                    <td width="110" align="center">Kode Mapel</td>
                                    <td width="110" align="center">Kode Guru</td>
                                    <td width="200" align="center">Nama Mapel</td>
                                    <td width="130" align="center">Nama Guru</td>
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
                                    <table style="max-width: 730px; min-width: 730px; text-overflow: hidden;">
                                        <tr>
                                            <td width="10" align="center">
                                                <input type="checkbox" name="siswa" class="checksiswa" value="nim">
                                            </td>
                                            <td width="110" align="center" >
                                                IA113
                                            </td>
                                            <td width="110" align="center">
                                                12309491299
                                            </td>
                                            <td width="200" align="center">
                                                <a href="detailmapel.php?nis=<?php echo $i?>" class="detail">Pendidikan dan kewarganegaraan</a>
                                            </td>
                                            <td width="130" align="center">
                                                <a href="detailguru.php?nis=<?php echo $i?>" class="detail">Claudio Fresta Suharno</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                               <?php  } ?>
                                <div class="hapus">hapus siswa</div>
                            </div><!-- endof content table -->
                            
                        </div>
                    </div>
                </div>    
<?php $this->load->view('footer_view');?>