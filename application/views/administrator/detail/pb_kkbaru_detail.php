<?php
// var_dump($pb_kkbaru->fcktp);
// exit;
foreach($pb_kkbaru as $lampiran) :?>
<!-- <img src="./Layanan/image/kk_baru/ . '$lampiran['fcktp']'" alt="inigambar" width="100px"> -->
<img src="<?php echo base_url('./image/kk_baru/' . $lampiran->fcktp);?>">

<?php endforeach;?>