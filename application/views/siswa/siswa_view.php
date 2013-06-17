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
                        <div>Siswa</div>
                    </div>
                    <div id="isi">
                        <div id="tambah" onclick="location.href='<?=base_url('siswa/tambah')?>';">+ Tambah Siswa</div>
                        <?=form_open('','onsubmit="return confirm(\'Are you sure?\')"').PHP_EOL?>
                            <input type="submit" value="- Hapus Siswa" name="hapus" id="hapus" class="hapus">
                            <div id="list"><?php echo PHP_EOL;
                                $i = 0;
                                if(isset($result)){
                                ?>
                                <table class="siswa">
                                    <tr>
                                        <td width="5%" align="center"><input type="checkbox" id="checkAll" onclick="checkedAll()">
                                        <td width="25%" align="center">nis</td>
                                        <td width="40%" align="center">nama lengkap</td>
                                        <td width="15%" align="center">Detail</td>
                                        <td width="15%" align="center">Jalur</td>
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
                                            <input type="checkbox" onchange="hapusdiv()" name="pilih[]" id="pilih[]" class="checksiswa" value="<?=$baris->id?>">
                                        </td>
                                        <td width="25%" align="center"><?=$baris->nis?></td>
                                        <td width="40%" align="center">
                                            <a href="<?=base_url('siswa/lihat/'.$baris->nis)?>" class="detail"><?=$baris->nama?></a>
                                        </td>
                                        <td width="8%" align="center"><a href="#">KRS</a></td>
                                        <td width="7%" align="center"><a href="#">KHS</a></td>                                                
                                        <td width="15%" align="center"><?=$baris->jalur?></td>
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