<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div id="title">Tambah Siswa</div>
                    </div>
                    
                    <div id="isi">
                        <div id="leftbio">
                            <table >
                                <tr>
                                    <td>
                                        <div id="detail">
                                            <img src="<?=base_url('asset/images/foto/claudio.png')?>"></img>
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
                            <?php //echo form_open();?>
                            <table width="500">
                                <tr>
                                    <td width="200" height="30"> Nomor Induk Siswa</td>
                                    <td>:</td>
                                   <td width="300" height="30"> <input type='text' style='width: 100%;' name='nis'></td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Tempat, Tanggal Lahir</td>
                                    <td>:</td>
                                    <td width="300" height="30"><input type='text' style='width:90px; margin-bottom: 3px; ' name='nis' > , 
                                                                <input type='text' style='width:190px; margin-bottom: 3px; ' name='nis' >
                                                                <br>
                                                                <select name="tanggal">
                                                                    <option value="">Tanggal</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                </select>
                                                                <select name="bulan">
                                                                    <option value="">-- Bulan --</option>
                                                                    <option value="1">Januari</option>
                                                                    <option value="2">Februari</option>
                                                                    <option value="3">Maret</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">Mei</option>
                                                                </select>
                                                                <select name="tahun">
                                                                    <option value="">-- Tahun --</option>
                                                                    <option value="1">1995</option>
                                                                    <option value="2">1996</option>
                                                                    <option value="3">1997</option>
                                                                    <option value="4">1998</option>
                                                                    <option value="5">1999</option>
                                                                </select>
                                    </td>
                                </tr><tr>
                                    <td width="200" height="30"> Alamat</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='alamat' ></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Telepon Rumah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='norumah'></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Handphone</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='nohp'></td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Nama Ayah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='namaayah'></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Handphone Ayah</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='nohpayah'></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nama Ibu</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='namaibu' ></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Handphone Ibu</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='nohpibu' ></td>
                                </tr>
                                <tr>
                                    <td width="200"  height="30"> Nama Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='namawali'></td>
                                </tr><tr>
                                    <td width="200" height="30"> Nomor Handphone Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='nohpwali'></td>
                                </tr><tr>
                                    <td width="200" height="30"> Alamat Wali</td>
                                    <td>:</td>
                                    <td width="300" height="30"> <input type='text' style='width: 100%;' name='alamatwali' ></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td align='right' ><input type="submit" name="ubah" value="Tambah Siswa"><input type="submit" name="ubah" value="Batalkan"></td>
                                </tr>
                                <?php //echo form_close();?>
                            </table>
                        </div>                             
                    </div>
                </div>
<?php $this->load->view('footer_view');?>