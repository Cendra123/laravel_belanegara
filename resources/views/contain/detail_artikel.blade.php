

   

    <section id="page-breadcrumb">

        <div class="vertical-center sun">

             <div class="container">

                <div class="row">

                    <div class="action">

                        <div class="col-sm-12">

                            <h1 class="title"><?php echo $detail_artikel[0]->judul_artikel;?></h1>

                            <p><?php echo $detail_artikel[0]->waktu;?> ~ <?php echo $detail_artikel[0]->username;?></p>

                        </div>                                                                                

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--/#page-breadcrumb-->



<section id="blog-details" class="padding-top">

        <div class="container">

            <div class="row">

                <div class="col-md-9 col-sm-7">

                    <div class="row">

                         <div class="col-md-12 col-sm-12">

                            <div class="single-blog blog-details two-column">

                               <!--  <div class="post-thumb">

                                    <a href="#"><img src="<?php //echo $detail_berita[0]->featured_image;?>" class="img-responsive" alt="" height="1200" width="800"></a>

                                   

                                </div> -->

                                <div  class="post-content overflow">

                                    

                                    <?php echo $detail_artikel[0]->konten_artikel;?>

                             

                                </div>



                            </div>

                        </div>

                    </div>

                 </div>

                <div class="col-md-3 col-sm-5">



                  <div class="sidebar-item categories">

                            <h3 style="color: red;">Kategori Artikel</h3>



                            <ul class="nav navbar-stacked">



                              <?php

                                foreach ($kategori_artikel as $row) {

                                    # code...

                                    $link = base_url().'index.php/artikel/list_artikel/'.$row->id_kategori_artikel;

                                    echo "<li>"."<a href='".$link."'>".$row->nama_kategori_artikel."</a>"."</li>";

                                }

                            ?>



                            </ul>



                          

                      

                        </div>



                    <div class="sidebar blog-sidebar">

                        <div class="sidebar-item  recent">


                            <h3 style="color: red;">Artikel Lainnya</h3>

                            



                            <?php

                            if($artikel_lainnya){

                                foreach ($artikel_lainnya as $row) {

                                    # code...

                                    echo "<div class='media'>";

                                    echo "<div class='media-body'>";



                                    $link = base_url('index.php/Artikel').'/detail_artikel/'.$row->id_artikel;

                                    echo "<h4><a href='".$link."'>".$row->judul_artikel."</h4>";

                                    echo "<p> posted on ".$row->waktu."</p>";



                                    echo "</div>";

                                    echo "</div>"; 

                                }
                            }



                            ?>

                               <!--   

                                <div class="media-body">

                                    <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit,</a></h4>

                                    <p>posted on  07 March 2014</p>

                                </div> -->

                            </div>

                      

                     

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--/#blog-->