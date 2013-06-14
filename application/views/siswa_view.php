<?php $this->load->view('header_view');?>
                <script type="text/javascript">
//                    $(document).ready(function() {
//                        $("input[name='checkAll']").click(function() {
//                            var checked = $("input[name='checkAll']").attr("checked");
//                            alert(checked);
//                            //$("input[name='pilih[]']").attr("selected",checked);
//                            $("#pilih[]").attr("checked",checked);
//                        });
//                    });
    function checkedAll () {
        var inputs = document.getElementsByName('pilih[]');
        var check = document.getElementById('checkAll').checked;
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].type === 'checkbox') {
                inputs[i].checked = check;
                //alert(check);
            }
        }
    }
                </script>
                <div id="isipanel">
                    <div id="isititle">
                        <div>Siswa</div>
                        <!--<div class="hapus">hapus siswa</div>-->
                    </div>
                    <div id="tambah" onclick="location.href='<?=base_url('siswa/tambah')?>';">+ Tambah Siswa</div>
                    <div id="isi">
                        <div id="list">
                            <?php
                            $i = 0;
                            if(isset($result)){
                            ?>
                            <table  class="siswa">
                                <tr>
                                    <td width="10"><input type="checkbox" id="checkAll" onclick="checkedAll()">
                                    <td width="130" align="center">nis</td>
                                    <td width="260" align="center">nama lengkap</td>
                                    <td width="90" align="center">Detail</td>
                                    <td width="225" align="center">Jalur</td>
                                </tr>
                            </table>
                            <div id="listsiswa">
                            <?php
                                foreach($result as $baris){
                                    if (($i%2) == 1){
                                        $row = 1;
                                    }else{
                                        $row = 0;
                                    }
                                    $class = "baris$row";
                            ?>
                                <div class="<?php echo $class; ?>">
                                    <table>
                                        <tr>
                                            <td width="37" align="center">
                                                <input type="checkbox" name="pilih[]" id="pilih[]" class="checksiswa" value="<?=$baris->id?>">
                                            </td>
                                            <td width="130" align="center" >
                                                <?=$baris->nis?>
                                            </td>
                                            <td width="240" align="center">
                                                <a href="<?=base_url('siswa/lihat/'.$baris->nis)?>" class="detail"><?=$baris->nama?></a>
                                            </td>
                                            <td width="60"><a href="#">KRS</a></td>
                                            <td width="80"><a href="#">KHS</a></td>                                                
                                            <td width="100" align="center">
                                                <?=$baris->jalur?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <?php  
                                    $i++;
                                    }
                                ?>
                                
                            </div>
                            <?php
                            } else {
                                echo 'No result found';
                            }
                            ?>
                        </div>
                    </div>
                </div>    
<?php $this->load->view('footer_view');?>