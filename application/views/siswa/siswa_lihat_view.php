<?php $this->load->view('header_view');?>
                <div id="isipanel">
                    <div id="isititle">
                        <div id="title">Biodata</div>
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('siswa')?>';"><= Kembali</div>
                    <div id="isi">
                        <div id="leftbio">
                            <table >
                                <tr>
                                    <td>
                                        <div id="detail">
                                            <img width="194px" height="259px" src="<?php
                                            if(!empty($result->foto)){
                                                echo base_url('asset/images/foto/'.$result->foto);
                                            }else{
                                                echo base_url('asset/images/foto/claudio.png');
                                            }
                                            ?>"></img>
                                        </div>
                                     </td>
                                </tr>
                            </table>
                        </div>
                        <div id="detail">
                            <?php echo form_open(base_url('siswa/ubah'));?>
                            <table width="500">
                                <input type="hidden" name="nis" value="<?=$result->nis?>">
                                <tr>
                                    <td width="200" height="30"> Nomor Induk Siswa</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nis?></td>
                                </tr>
                                <input type="hidden" name="nama" value="<?=$result->nama?>">
                                <tr>
                                    <td width="200" height="30"> Nama Siswa</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nama?></td>
                                </tr>
                                <input type="hidden" name="tempat" value="<?=$result->tempat?>">
                                <input type="hidden" name="tanggal" value="<?=$result->tanggal?>">
                                <tr>
                                    <td width="200"  height="30"> Tempat, Tanggal Lahir</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->tempat?>, <?=$result->tanggal?></td>
                                </tr>
                                <input type="hidden" name="alamat" value="<?=$result->alamat?>">
                                <tr>
                                    <td width="200" height="30"> Alamat</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->alamat?></td>
                                </tr>
                                <input type="hidden" name="agama" value="<?=$result->agama?>">
                                <tr>
                                    <td width="200" height="30"> Agama</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->agama?></td>
                                </tr>
                                <input type="hidden" name="jenis_kelamin" value="<?=$result->jenis_kelamin?>">
                                <tr>
                                    <td width="200" height="30"> Jenis Kelamin</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->jenis_kelamin?></td>
                                </tr>
                                <input type="hidden" name="goldar" value="<?=$result->goldar?>">
                                <tr>
                                    <td width="200" height="30"> Golongan Darah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->goldar?></td>
                                </tr>
                                <input type="hidden" name="no_hp" value="<?=$result->no_hp?>">
                                <tr>
                                    <td width="200" height="30"> Nomor Handphone</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->no_hp?></td>
                                </tr>
                                <input type="hidden" name="nama_ayah" value="<?=$result->nama_ayah?>">
                                <tr>
                                    <td width="200"  height="30"> Nama Ayah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nama_ayah?></td>
                                </tr>
                                <input type="hidden" name="hp_ayah" value="<?=$result->hp_ayah?>">
                                <tr>
                                    <td width="200" height="30"> Nomor Handphone Ayah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->hp_ayah?></td>
                                </tr>
                                <input type="hidden" name="nama_ibu" value="<?=$result->nama_ibu?>">
                                <tr>
                                    <td width="200" height="30"> Nama Ibu</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nama_ibu?></td>
                                </tr>
                                <input type="hidden" name="hp_ibu" value="<?=$result->hp_ibu?>">
                                <tr>
                                    <td width="200" height="30"> Nomor Handphone Ibu</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->hp_ibu?></td>
                                </tr>
                                <input type="hidden" name="nama_wali" value="<?=$result->nama_wali?>">
                                <tr>
                                    <td width="200"  height="30"> Nama Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nama_wali?></td>
                                </tr>
                                <input type="hidden" name="hp_wali" value="<?=$result->hp_wali?>">
                                <tr>
                                    <td width="200" height="30"> Nomor Handphone Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->hp_wali?></td>
                                </tr>
                                <input type="hidden" name="alamat_ortu" value="<?=$result->alamat_ortu?>">
                                <tr>
                                    <td width="200" height="30"> Alamat Orang Tua</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->alamat_ortu?></td>
                                </tr>
                                <input type="hidden" name="alamat_wali" value="<?=$result->alamat_wali?>">
                                <tr>
                                    <td width="200" height="30"> Alamat Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->alamat_wali?></td>
                                </tr>
                                <input type="hidden" name="jalur" value="<?=$result->jalur?>">
                                <input type="hidden" name="foto" value="<?=$result->foto?>">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="ubah" value="Ubah Data" onclick="location.href='<?=base_url('siswa/ubah')?>';"></td>
                                </tr>
                            </table>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
<?php $this->load->view('footer_view');?>