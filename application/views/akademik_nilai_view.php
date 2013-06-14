<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Nilai</div>
                    </div>
                    
                    <div id="isi"><br><br>
                        <div class="khs" style="margin-top: 10px;">
                           FILTER BY
                        </div><div class="khs" style="background-color: #FCFCFC; font-size: 8pt;">
                            <table>
                                <tr>
                                    <td>
                                        <select>
                                            <option>--Pilih Mapel--</option>
                                            <option>Matematika 1</option>
                                            <option>Fisika 1</option>
                                            <option>Biologi 1</option>
                                            <option>PKN 1</option>
                                        </select>
                                    </td><td>
                                        <select>
                                            <option>--Pilih Guru--</option>
                                            <option>Paijo</option>
                                            <option>Painem</option>
                                            <option>Ulala</option>
                                            <option>Bledar</option>
                                        </select>
                                    </td><td>
                                        <select>
                                            <option>--Pilih Kelas--</option>
                                            <option>X-A</option>
                                            <option>X-B</option>
                                            <option>X-C</option>
                                            <option>X-D</option>
                                        </select>
                                    </td><td>
                                        <select>
                                            <option>--Pilih Tahun Ajaran--</option>
                                            <option>2010/12</option>
                                            <option>2012/13</option>
                                        </select>
                                    </td><td>
                                        <select>
                                            <option>--Pilih Semester--</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                    </td><td>
                                        <input type="submit" name="filter" value="Go">
                                    </td>
                                </tr>
                            </table><br><table class="tabel-khs">
                                <tr>
                                    <th>Mata Pelajaran</th>
                                    <th>Guru</th>
                                    <th>Kelas</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Semester</th>
                                </tr><tr>
                                    <td>Matematika 1</td>
                                    <td>Claudio Fresta S</td>
                                    <td>XI IPA 1</td>
                                    <td>2013/2014</td>
                                    <td>3</td>
                                </tr>
                            </table>
                        </div>
                        <div class="khs" style="margin-top: 10px;">
                            RESULT
                            <input type="submit" name="ubah" value="Cetak Data" style="float:right;">
                            <input type="submit" name="ubah" value="Tambah Nilai" onclick="location.href='tambahnilai.php?mapel=';" style="float:right;">
                        </div><div class="khs" style="background-color: #FCFCFC;">
                               <!--<span style="color:gray;">NO RESULT</span>-->
                                <table class="tabel-khs">
                                    <tr>
                                        <th>NIS</th>
                                        <th>NAMA</th>
                                        <th>UK 1</th>
                                        <th>UK 2</th>
                                        <th>UH 1</th>
                                        <th>UH 2</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                        <th>NILAI AKHIR</th>
                                        <th colspan="2">ACTION</th>
                                    </tr><?php for ($i=0 ;$i<40 ;$i++ ){?>
                                    <tr>
                                        <td>115060800111115</td>
                                        <td>Rosikhan Maulana Yusuf</td>
                                        <td>90</td>
                                        <td>90</td>
                                        <td>90</td>
                                        <td>90</td>
                                        <td>90</td>
                                        <td>90</td>
                                        <td>90</td>
                                        <td><a class="blue" style="text-decoration: underline;" href="ubahnilai.php?id=&mapel=">Ubah</a></td>
                                        <td><a class="blue" style="text-decoration: underline;" href="hapusnilai.php?id=&mapel=">Hapus</a></td>
                                    </tr><?php }?>
                                </table>
                        </div>
                        
                        
                            
                    </div>
                        
                    </div>
<?php $this->load->view('footer_view');?>