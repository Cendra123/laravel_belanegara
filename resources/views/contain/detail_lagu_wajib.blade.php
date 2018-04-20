<style type="text/css">
  p{
    font-size: 22px;
  }
  
blockquote {
  background: #f9f9f9;
  border-left: 10px solid #ccc;
  margin: 1.5em 10px;
  padding: 0.5em 10px;
  quotes: "\201C""\201D""\2018""\2019";
}
blockquote:before {
  color: #ccc;
  content: open-quote;
  font-size: 4em;
  line-height: 0.1em;
  margin-right: 0.25em;
  vertical-align: -0.4em;
}
blockquote p {
  display: inline;

}
blockquote:after {
  color: #ccc;
  content: close-quote;
  font-size: 4em;
  line-height: 0.1em;
  margin-right: 0.25em;
  vertical-align: -0.4em;
}
</style>



    <div class="container">
<div class="row">
<div class="col-sm-6">
  <div id="poem">
  
    <h1><?php echo $detail_lagu_wajib[0]->judul_lagu_wajib;?></h1>
    
    <h2>Oleh <?php echo $detail_lagu_wajib[0]->nama_pengarang_lagu;?></h2>

                <div class="post-thumb" style="margin-bottom: 15px;">
                    <audio src="<?php echo $detail_lagu_wajib[0]->url_lagu; ?>" preload="auto"></audio>
                </div>
    
  
  <div class="container">
  <!-- <?php //echo $lirik;?> -->
  <?php  echo $detail_lagu_wajib[0]->lirik?>
    
  </div>
  
  </div>

   
</div> 
<div class="col-sm-6">

 <img alt="Brand" src="<?php echo $detail_lagu_wajib[0]->url_foto ;?>" width="100" heigth="100" class="img-responsive center-block">

 <blockquote>
     <?php echo $detail_lagu_wajib[0]->riwayat_singkat;?>
 </blockquote>

<!-- <blockquote>
 <p style="font-size: 22px;"> <?php //echo $pengarang;?> adalah pengarang lagu <?php echo $karya;?>. </p>
</blockquote>

<blockquote>
 <p style="font-size: 22px;"><?php //echo $pengarang;?> lahir di <?php echo $riwayat;?></p>
</blockquote> -->

</div>

</div>
 
  

</div>

<script>
      audiojs.events.ready(function() {
        var as = audiojs.createAll();
      });
    </script>

    