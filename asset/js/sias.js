function display_c() {
    var refresh = 1000; // Refresh rate in milli seconds
    mytime = setTimeout('display_ct()', refresh);
}

function display_ct() {
    //var strcount;
    var x = new Date();
    var x1 = x.getHours( ) + " : " + x.getMinutes() + " : " + x.getSeconds();
    document.getElementById('ct').innerHTML = x1;
    tt = display_c();
}

Date.prototype.getDayName = function() {
    var d = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    return d[this.getDay()];
};

function display_cd() {
    //var strcount;
    var x = new Date();
    var bulan = new Array(13);
    bulan[1] = 'Januari';
    bulan[2] = 'Februari';
    bulan[3] = 'Maret';
    bulan[4] = 'April';
    bulan[5] = 'Mei';
    bulan[6] = 'Juni';
    bulan[7] = 'Juli';
    bulan[8] = 'Agustus';
    bulan[9] = 'September';
    bulan[10] = 'Oktober';
    bulan[11] = 'November';
    bulan[12] = 'Desember';
    var x1 = x.getDayName() + ", <b>" + x.getDate() + "</b> <b> " + bulan[x.getMonth()] + "</b> " + x.getFullYear();
    document.getElementById('cd').innerHTML = x1;
    tt = display_c();
}
