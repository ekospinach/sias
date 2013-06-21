<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Data Guru</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('guru')?>';"><= Kembali</div>
                    <div id="isi" style="margin-top: -39px;">
                        <br><br>
                        <div class="khs" style="margin-top: 10px;">
                            <?=form_open(base_url('guru/ubah'))?>
                          <table width="737">
                                <tr>
                                  <td>NIP</td>
                                  <td>:</td>
                                  <td><?=$result->nip?></td>
                                <input type="hidden" name="nip" value="<?=$result->nip?>">
                                </tr>
                                <tr>
                                  <td width="100px">Nama</td>
                                  <td width='1px'>:</td>
                                  <td><?=$result->nama_guru?></td>
                                <input type="hidden" name="nama_guru" value="<?=$result->nama_guru?>">
                                </tr>
                                <tr>
                                  <td>Jumlah Kelas</td>
                                  <td>:</td>
                                  <td><?=$result->jumlah_jadwal?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="ubah" value="Ubah Data"></td>
                                </tr>
                            </table>
                            <?=form_close()?>
                        </div>
                            <?php 
                                if(isset($result2)){
                            ?>
                        <div class="khs">
                            <div class="khs"  style="text-align: center; ">
                                <b>JADWAL MENGAJAR</b>
                            </div>
                            <br>
                            <table class="tabel-khs">
                                <tr>
                                    <th>
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
                                    foreach($result2 as $row){?>
                                <tr>
                                    <td>
                                        <?=$row->kelas?>
                                    </td><td>
                                        <?=$row->hari?>
                                    </td><td>
                                        <?=$row->jam_mulai.' - '.$row->jam_selesai?>
                                    </td><td>
                                        <?=$row->nama_mapel?>
                                    </td><td>
                                        <?=$row->sks?>
                                    </td><td>
                                        <?=$row->nama_ruang?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>                               
                         </div>
                                <?php 
                                }
                            ?>
                    </div>
<?php $this->load->view('footer_view');?>