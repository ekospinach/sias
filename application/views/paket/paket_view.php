<?php $this->load->view('header_view');?>
                <script type="text/javascript">
                    /*function hapusdiv(){
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
                    }*/
                </script>
                <div id="isipanel">
                    <div id="isititle">
                        <div>Paket</div>
                    </div>
                    <div id="isi">
                        <div id="tambah" onclick="location.href='<?=base_url('paket/tambah')?>';">+ Tambah Paket</div>
                        <?=form_open('','onsubmit="return confirm(\'Are you sure?\')"').PHP_EOL?>
                        <!--<input type="submit" value="- Hapus Paket" name="hapus" id="hapus" class="hapus">-->
                            <div id="listsiswa">
                                <table class="baris">
                                    <tr>
<!--                                        <th align="center" height="30px"><input type="checkbox" id="checkAll" onclick="checkedAll()"></th>-->
                                        <th height="30px" align="center">Kode Paket</th>
                                        <th align="center">Kode Syarat</th>
                                        <th align="center">Mata Pelajaran</th>
                                        <th align="center">SKS</th>
                                        <th align="center">SKM</th>
                                        <th align="center">Jumlah Kelas</th>
                                    </tr><?php echo PHP_EOL;
                            $i = 0;
                            if(isset($result)){
                                foreach($result as $baris){
                                    if (($i%2) == 1){
                                        $row = 'background-color: #cdd6f5;';
                                    }else{
                                        $row = 'background-color: #b1c3fe;';
                                    }
                                    echo PHP_EOL;
                                ?>
                                    <tr style="<?=$row?>">
<!--                                        <td align="center" height="30px">
                                            <input type="checkbox" onchange="hapusdiv()" name="pilih[]" id="pilih[]" class="checksiswa" value="<?=$baris->kode_paket?>">
                                        </td>-->
                                        <td height="30px" align="center" onclick="location.href='<?=base_url('paket/lihat/'.$baris->kode_paket);?>';">
                                            <?=$baris->kode_paket?>
                                        </td>
                                        <td align="center" onclick="location.href='<?=base_url('paket/lihat/'.$baris->kode_syarat);?>';">
                                            <?=$baris->kode_syarat?>
                                        </td>
                                        <td align="center">
                                            <?=$baris->nama_mapel?>
                                        </td>
                                        <td align="center">
                                            <?=$baris->sks?>
                                        </td>
                                        <td align="center">
                                            <?=$baris->skm?>
                                        </td>
                                        <td align="center"><?=$baris->jumlah_kelas?></td>
                                    </tr><?php  
                                    $i++;
                                }
                                echo PHP_EOL;
                                ?>
                                </table><?php
                                } else {
                                    echo 'No result found';
                                }
                                echo PHP_EOL;
                                ?>
                            </div>
                        <?=form_close().PHP_EOL?>
                    </div>   
                </div>
<?php $this->load->view('footer_view');?>