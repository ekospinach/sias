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
                        <div>Nilai Siswa</div>
                    </div>
                    <div id="isi">
                        <!--<div id="tambah" onclick="location.href='<?=base_url('nilai/tambah')?>';">+ Tambah KHS</div>-->
                        <?=form_open('','onsubmit="return confirm(\'Are you sure?\')"').PHP_EOL?>
                            <input type="submit" value="- Hapus KHS" name="hapus" id="hapus" class="hapus">
                            <div id="list">
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
                                </table>
                            </div>
                            <div id="listsiswa">
                                <?php echo PHP_EOL;
                                $i = 0;
                                if(isset($result)){
                                ?>
                                <table class="baris">
                                    <tr>
                                        <th align="center"><input type="checkbox" id="checkAll" onclick="checkedAll()"></th>
                                        <th align="center">nis</th>
                                        <th align="center">nama lengkap</th>
                                        <th align="center">Mapel</th>
                                        <th align="center">Kelas</th>
                                        <th align="center">Tahun</th>
                                        <th align="center">Semester</th>
                                        <th align="center">Guru</th>
                                    </tr>
                                <?php
                                foreach($result as $baris){
                                    if (($i%2) == 1){
                                        $row = 'background-color: #cdd6f5;';
                                    }else{
                                        $row = 'background-color: #b1c3fe;';
                                    }
                                    echo PHP_EOL;
                                ?>
                                    <tr style="<?=$row?>">
                                        <td align="center" height="30px">
                                            <input type="checkbox" onchange="hapusdiv()" name="pilih[]" id="pilih[]" class="checksiswa" value="<?=$baris->id_khs?>">
                                        </td>
                                        <td align="center"><?=$baris->nis?></td>
                                        <td align="center">
                                            <a href="<?=base_url('siswa/lihat/'.$baris->nis)?>" class="detail"><?=$baris->nama?></a>
                                        </td>
                                        <td align="center">
                                            <a href="<?=base_url('nilai/ubah/'.$baris->id_khs)?>" class="detail"><?=$baris->nama_mapel?></a>
                                        </td>
                                        <td align="center"><?=$baris->kelas?></td>                                                
                                        <td align="center"><?=$baris->tahun?></td>
                                        <td align="center"><?=$baris->semester?></td>
                                        <td align="center"><?=$baris->nama_guru?></td>
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