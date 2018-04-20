 <section id="berita_terkini_dan_artikel" >

    

<div class="container"> 



 <div id="testimonial-container">

                <div class="row">

                    <div class="col-md-6">

                        <h2 class="page-header" style="color: red;">Berita</h2>

                        <div class="testimonial">



                        <?php



                        if($berita_terkini){



                        foreach ($berita_terkini as $row) {

                            # code...

                            $link = base_url().'index.php/'.'Detail_Berita/detail_berita/'.$row->id_berita;

                            echo "<div class='media'>";

                                echo "<div class='pull-left'>";

                                echo "<a href='#'> <img class='img-responsive' height='150' width='150' src='".$row->featured_image."'></a>";

                                echo "</div>";



                                echo "<div class='media-body'>";

                                echo "<a href='".$link."'>"."<blockquote>".$row->judul."</blockquote></a>";

                                echo "<h3><a href='#'>-".$row->username."</a></h3>";

                                echo "</div>";



                            echo "</div>";

                        }

                    }

                            

                        ?>

                                

                        </div>



                        <?php



                        if($berita_terkini){

                            echo ' <button type="button" class="btn btn-danger center-block" id="tombol_berita_selengkapnya_site">Selengkapnya...</button>';

                        }



                        ?>



                       

                    </div>



                    <div class="col-md-6" style="margin-bottom: 40px;">

                        <h2 class="page-header">Artikel</h2>



                        <?php



                        if($artikel_terkini){

                            foreach ($artikel_terkini as $row) {

                                # code...

                                $link = base_url().'index.php/Artikel/detail_artikel/'.$row->id_artikel;

                                echo "<blockquote>";

                                echo "<p>"."<a style='color:#808080;' href='".$link."'>".$row->judul_artikel."</a>"."</p>";

                                //echo "<p>".$row->judul_artikel."</p>";

                                echo "<footer>"."Penulis: "."<cite title='Source Title'>".$row->username."</cite>"."</footer>";

                                echo "</blockquote>";

                            }

                        }

                        ?>



                        <?php

                            if($artikel_terkini){

                                echo '<button type="button" class="btn btn-default center-block" id="tombol_artikel_selengkapnya_site">Selengkapnya...</button>';

                            }

                        ?>

                      

                    </div>

                    

                </div>

            </div><!--/#testimonial-container-->



</div>

 </section>



<script type="text/javascript">

    $(document).ready(function () {

        // body...

        $('#tombol_artikel_selengkapnya_site').click(function (e) {

            // body...

            e.preventDefault();



            var link = "<?php echo base_url();?>index.php/artikel"



            window.location.href=link;

        });



        $('#tombol_berita_selengkapnya_site').click(function (e) {

            // body...

            e.preventDefault();



            var link = "<?php echo base_url();?>index.php/berita"



            window.location.href=link;

        });

    });

</script>