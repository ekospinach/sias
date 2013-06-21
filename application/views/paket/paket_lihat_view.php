<?php $this->load->view('header_view');?>
                <script type="text/javascript">
                    function hapusdiv(){
                        var inputs = document.getElementsByName('pilih[]');
                        var hapusen = document.getElementById('hapus');
                        var tambaen = document.getElementById('tambah');
                        var whut = false;
                        for (var i = 0; i < inputs.length; i++) {
                            if (inputs[i].type === 'checkbox') {
                                whut=whut||inputs[i].checked;
                            }
                        }
                        if(whut){
                            hapusen.setAttribute('style','display:block;');
                            tambaen.setAttribute('style','display:none;');
                        }else{
                            hapusen.setAttribute('style','display:none;');
                            tambaen.setAttribute('style','display:block;');
                        }
                    }
                    function checkedAll () {
                        var inputs = document.getElementsByName('pilih[]');
                        var check = document.getElementById('checkAll').checked;
                        for (var i = 0; i < inputs.length; i++) {
                            if (inputs[i].type === 'checkbox') {
                                inputs[i].checked = check;
                            }
                        }
                        hapusdiv();
                    }
                </script>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Data Paket</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('paket')?>';"><= Kembali</div>
                    <div id="isi" style="margin-top: -39px;">
                        <br><br>
                        <div class="khs" style="margin-top: 10px;">
                            <?=form_open(base_url('paket/ubah'))?>
                          <table width="737">
                                <tr>
                                  <td>Kode Paket</td>
                                  <td>:</td>
                                  <td><?=$result->kode_paket?></td>
                                <input type="hidden" name="kode_paket" value="<?=$result->kode_paket?>">
                                </tr>
                                <tr>
                                  <td>Kode Syarat</td>
                                  <td>:</td>
                                  <td><?=$result->kode_syarat?></td>
                                <input type="hidden" name="kode_syarat" value="<?=$result->kode_syarat?>">
                                </tr>
                                <tr>
                                  <td width="100px">Mata Pelajaran</td>
                                  <td width='1px'>:</td>
                                  <td><?=$result->nama_mapel?></td>
                                <input type="hidden" name="nama_mapel" value="<?=$result->nama_mapel?>">
                                </tr>
                                <tr>
                                  <td>SKS</td>
                                  <td>:</td>
                                  <td><?=$result->sks?></td>
                                </tr>
                                <tr>
                                  <td>SKM</td>
                                  <td>:</td>
                                  <td><?=$result->skm?></td>
                                </tr>
                                <tr>
                                  <td>Jumlah Kelas</td>
                                  <td>:</td>
                                  <td><?=$result->jumlah_kelas?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <!--<td align='right' ><input type="submit" name="ubah" value="Ubah Data"></td>-->
                                </tr>
                            </table>
                            <?=form_close()?>
                        </div>
                            <?php 
                                if(isset($result2)){
                            ?>
                        <div class="khs">
                            <div class="khs"  style="text-align: center; ">
                                <b>Daftar Kelas</b>
                            </div>
                            <?=form_open('','onsubmit="return confirm(\'Are you sure?\')"')?>
                            <input type="submit" value="- Hapus Paket" name="hapus" ><?=isset($error)?$error:''?>
                            <table class="tabel-khs">
                                <tr>
                                    <th align="center"><input type="checkbox" id="checkAll" onclick="checkedAll()"></th>
                                    <th>
                                        Kelas
                                    </th><th>
                                        Ruangan
                                    </th><th>
                                        Hari
                                    </th><th>
                                        Jam
                                    </th><th>
                                        NIP
                                    </th><th>
                                        Guru
                                    </th>
                                </tr>
                                <?php 
                                    foreach($result2 as $row){?>
                                <tr >
                                    <td align="center">
                                        <input type="checkbox" onchange="hapusdiv()" name="pilih[]" id="pilih[]" class="checksiswa" value="<?=$row->id_paket?>">
                                    </td>
                                    <td>
                                        <?=$row->kelas?>
                                    </td><td>
                                        <?=$row->nama_ruang?>
                                    </td><td>
                                        <?=$row->hari?>
                                    </td><td>
                                        <?=$row->jam_mulai.' - '.$row->jam_selesai?>
                                    </td><td>
                                        <?=$row->nip?>
                                    </td><td>
                                        <?=$row->nama_guru?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>     
                                <?=form_close()?>
                         </div>
                                <?php 
                                }
                            ?>
                    </div>
                </div>
<?php $this->load->view('footer_view');?>