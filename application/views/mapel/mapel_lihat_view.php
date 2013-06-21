<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Mata Pelajaran</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('mapel')?>';"><= Kembali</div>
                    <div id="isi" style="margin-top: -39px;">
                        <br><br>
                        <div class="khs" style="margin-top: 10px;">
                            <?=form_open(base_url('mapel/ubah'))?>
                          <table width="737">
                                <tr>
                                  <td>Mata Pelajaran</td>
                                  <td>:</td>
                                  <td><?=$result->nama_mapel?></td>
                                <input type="hidden" name="nama_mapel" value="<?=$result->nama_mapel?>">
                                <input type="hidden" name="id_mapel" value="<?=$result->id_mapel?>">
                                </tr>
                                <tr>
                                  <td width="100px">SKS</td>
                                  <td width='1px'>:</td>
                                  <td><?=$result->sks?></td>
                                <input type="hidden" name="sks" value="<?=$result->sks?>">
                                </tr>
                                <tr>
                                  <td width="100px">SKM</td>
                                  <td width='1px'>:</td>
                                  <td><?=$result->skm?></td>
                                <input type="hidden" name="skm" value="<?=$result->skm?>">
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