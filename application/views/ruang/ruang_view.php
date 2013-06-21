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
                <div id="isipanel">
                    <div id="isititle">
                        <div>Ruang</div>
                    </div>
                    <div id="isi">
                        <div id="tambah" onclick="location.href='<?=base_url('ruang/tambah')?>';">+ Tambah Ruang</div>
                        <?=form_open('','onsubmit="return confirm(\'Are you sure?\')"').PHP_EOL?>
                            <input type="submit" value="- Hapus Ruang" name="hapus" id="hapus" class="hapus">
                            <div id="list"><?php echo PHP_EOL;
                                $i = 0;
                                if(isset($result)){
                                ?>
                                <table class="siswa">
                                    <tr>
                                        <td width="5%" align="center"><input type="checkbox" id="checkAll" onclick="checkedAll()">
                                        <td width="45%" align="center">Nama Ruang</td>
                                        <td width="35%" align="center">jam</td>
                                        <td width="15%" align="center">hari</td>
                                    </tr>
                                </table>
                            </div>
                            <div id="listsiswa">
                                <table class="baris"><?php
                                foreach($result as $baris){
                                    if (($i%2) == 1){
                                        $row = 'background-color: #cdd6f5;';
                                    }else{
                                        $row = 'background-color: #b1c3fe;';
                                    }
                                    echo PHP_EOL;
                                ?>
                                    <tr style="<?=$row?>">
                                        <td width="5%" align="center" height="30px">
                                            <input type="checkbox" onchange="hapusdiv()" name="pilih[]" id="pilih[]" class="checksiswa" value="<?=$baris->id_ruang?>">
                                        </td>
                                        <td width="45%" align="center">
                                            <a href="<?=base_url('ruang/lihat/'.$baris->id_ruang)?>" class="detail"><?=$baris->nama_ruang?></a>
                                        </td>
                                        <td width="35%" align="center"><?=$baris->jam_mulai.' - '.$baris->jam_selesai?></td>
                                        <td width="15%" align="center"><?=$baris->hari?></td>
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