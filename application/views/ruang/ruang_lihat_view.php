<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Ruangan</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('ruang')?>';"><= Kembali</div>
                    <div id="isi" style="margin-top: -39px;">
                        <br><br>
                        <div class="khs" style="margin-top: 10px;">
                            <?=form_open(base_url('ruang/ubah'))?>
                          <table width="737">
                                <tr>
                                  <td>Nama Ruang</td>
                                  <td>:</td>
                                  <td><?=$result->nama_ruang?></td>
                                <input type="hidden" name="nama_ruang" value="<?=$result->nama_ruang?>">
                                <input type="hidden" name="id_ruang" value="<?=$result->id_ruang?>">
                                </tr>
                                <tr>
                                  <td width="100px">Jam Mulai</td>
                                  <td width='1px'>:</td>
                                  <td><?=$result->jam_mulai?></td>
                                <input type="hidden" name="jam_mulai" value="<?=$result->jam_mulai?>">
                                </tr>
                                <tr>
                                  <td width="100px">Jam Selesai</td>
                                  <td width='1px'>:</td>
                                  <td><?=$result->jam_selesai?></td>
                                <input type="hidden" name="jam_selesai" value="<?=$result->jam_selesai?>">
                                </tr>
                                <tr>
                                  <td width="100px">Hari</td>
                                  <td width='1px'>:</td>
                                  <td><?=$result->hari?></td>
                                <input type="hidden" name="hari" value="<?=$result->hari?>">
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="ubah" value="Ubah Data"></td>
                                </tr>
                            </table>
                            <?=form_close()?>
                        </div>
                    </div>
<?php $this->load->view('footer_view');?>