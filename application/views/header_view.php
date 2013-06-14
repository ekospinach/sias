<?= doctype() ?>

<html>
    <head>
        <title>SIAS DASHBOARD<?= isset($title) ? ' - ' . $title : '' ?></title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('asset/style.css') ?>">
        <!--<link rel="stylesheet" type="text/css" href="<?//= base_url('asset/jquery-ui.css') ?>">-->
        <script type='text/javascript' src="<?= base_url('asset/js/sias.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('asset/js/jquery_min.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('asset/js/jquery-ui_min.js') ?>"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $("#loading").fadeOut("slow");
            });
        </script>
    </head>
    <body onload="display_ct();display_cd();">
        <div id="loading"><div id="escapingBallG"><div class="escapingBallG1"></div><div class="escapingBallG2"></div></div></div>
        <div id="header">
            <div id="logo"><img src="<?= base_url('asset/images/header.png') ?>"></div>
            <div id="user">
                <div id="detailuser">
                    ROSIKHAN
                    <div id="logout">
                        <a href="#">KELUAR</a>
                    </div>
                </div>
                <img  src="<?= base_url('asset/images/ava.png') ?>">
            </div>
        </div>
        <div id="nav">
            <div id="mininav">
                <table class="mininav">
                    <tr>
                        <td width=60%>
                            <div id="sitemap">
                                <a href="<?= base_url('siswa') ?>">ADMIN</a><?php
                                if (isset($title)) {
                                    echo " > ";
                                    if (isset($title2)) {
                                        echo '<a href="' . base_url($title) . '">' . strtoupper($title) . '</a> > ';
                                        if (isset($title3)) {
                                            echo '<a href="' . base_url($title2) . '">' . strtoupper($title2) . '</a> > ' . strtoupper($title3);
                                        } else {
                                            echo strtoupper($title2);
                                        }
                                    } else {
                                        echo strtoupper($title);
                                    }
                                }
                                ?>

                            </div>
                        </td>
                        <td width=30%>
                            <?=form_open('','id="cari"')?>
                            <div id="searchbar">
                                <span>
                                    <img class="imsearch" onclick="document.getElementById('cari').submit();" src="<?= base_url('asset/images/searchicon.png') ?>">
                                </span>
                                <input type="text" placeholder="cari" name="cari">
                            </div>
                            <?=form_close()?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="wrapper">
            <div id="main">
                <div id="panel">
                    <div id="paneltitle">
                        panel
                    </div>
                    <div id="menupanel">
                        <div id="listitem<?= isset($navbar) ? ($navbar != 'siswa' ? '-inactive' : '') : '-inactive' ?>" onclick="location.href = '<?= base_url('siswa') ?>';">
                            SISWA
                        </div>
                        <?= isset($navbar) ? ($navbar == 'siswa' ? '<img class="cur" src="' . base_url('asset/images/cur.png') . '">
                        ' : '') : '' ?><div id="listitem<?= isset($navbar) ? ($navbar != 'akademik' ? '-inactive' : '') : '-inactive' ?>" onclick="location.href = '<?= base_url('akademik') ?>';">
                            AKADEMIK
                        </div>
                        <?= isset($navbar) ? ($navbar == 'akademik' ? '<img class="cur" src="' . base_url('asset/images/cur.png') . '">
                        ' : '') : '' ?><div id="listitem<?= isset($navbar) ? ($navbar != 'guru' ? '-inactive' : '') : '-inactive' ?>" onclick="location.href = '<?= base_url('guru') ?>';">
                            GURU
                        </div>
                        <?= isset($navbar) ? ($navbar == 'guru' ? '<img class="cur" src="' . base_url('asset/images/cur.png') . '">
                        ' : '') : '' ?><div id="listitem<?= isset($navbar) ? ($navbar != 'pengaturan' ? '-inactive' : '') : '-inactive' ?>" onclick="location.href = '<?= base_url('pengaturan') ?>';">
                            PENGATURAN
                        </div>
                    <?= isset($navbar) ? ($navbar == 'pengaturan' ? '    <img class="cur" src="' . base_url('asset/images/cur.png') . '">
                    ' : '') : '' ?></div>
                    <br>
                    <div id="paneltitle">
                        Hari ini
                    </div>
                    <div id="menupanel">
                        <div class="khs" style="text-align: center;" >
                            <span id='ct' style="font-size: 25pt;"></span><br>
                            <span id='cd' style=" font-family: 'Segoe'; font-size: 10pt; color:#4c76ff "></span>
                        </div>
                    </div>
                </div>
