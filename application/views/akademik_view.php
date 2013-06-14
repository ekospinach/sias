<?php $this->load->view('header_view');?>
                <div id="isipanel"> <!-- start of main panel -->
                    <div id="isititle">
                        <div>Akademik</div>
                    </div>
                    
                    <div id="isi">
                        <div id="grid" onclick="location.href='<?=base_url('akademik/mapel')?>';">
                            <br><br><br><br><br><br><br>
                            <div>Mata Pelajaran</div>
                        </div>
                        <div id="grid" onclick="location.href='<?=base_url('akademik/kelas')?>';">
                            <br><br><br><br><br><br><br>
                            <div>Kelas</div>
                        </div>
                        <div id="grid" onclick="location.href='<?=base_url('akademik/paket')?>';">
                            <br><br><br><br><br><br><br>
                            <div>Paket</div>
                        </div>
                        <div id="grid" onclick="location.href='<?=base_url('akademik/nilai')?>';">
                            <br><br><br><br><br><br><br>
                            <div>Nilai</div>
                        </div>
                    </div>
                </div>    
<?php $this->load->view('footer_view');?>