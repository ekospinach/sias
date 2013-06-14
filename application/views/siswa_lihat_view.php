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
                                            //if(file_exists(base_url('asset/images/foto/'.$result->foto))){
                                                echo base_url('asset/images/foto/'.$result->foto);
                                            //}else{
                                            //    echo base_url('asset/images/foto/claudio.png');
                                            //}
                                            ?>"></img>
                                        </div>
                                     </td>
                                </tr>
                                <tr>
                                     <td style="padding-right: 5px;">
                                        <input style=" width:100%; float:right; padding-right: 5px;" type="file">
                                     </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input style=" width:100%; float:right; padding-right: 5px;" type="submit" name="uploadfoto" value="Unggah Foto">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="detail">
                            <table width="500">
                                <tr>
                                    <td width="200" height="30"> Nomor Induk Siswa</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nis?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nama Siswa</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nama?></td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Tempat, Tanggal Lahir</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->tempat?>, <?=$result->tanggal?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Alamat</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->alamat?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Jenis Kelamin</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->jenis_kelamin?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Golongan Darah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->goldar?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nomor Handphone</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->no_hp?></td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Nama Ayah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nama_ayah?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nomor Handphone Ayah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->hp_ayah?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nama Ibu</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nama_ibu?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nomor Handphone Ibu</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->hp_ibu?></td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Nama Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->nama_wali?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Nomor Handphone Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->hp_wali?></td>
                                </tr>
                                <tr>
                                    <td width="200" height="30"> Alamat Orang Tua / Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <?=$result->alamat_ortu?></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="ubah" value="Ubah Data" onclick="location.href='<?=base_url('siswa/ubah')?>';"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
<?php $this->load->view('footer_view');?>