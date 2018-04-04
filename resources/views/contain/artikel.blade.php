

    <section id="page-breadcrumb">

        <div class="vertical-center sun">

             <div class="container">

                <div class="row">

                    <div class="action">

                        <div class="col-sm-12">

                            <h1 class="title">Artikel</h1>

                            <!-- <p>Blog with right sidebar</p> -->

                        </div>

                    </div>

                </div>

            </div>

        </div>

   </section>

    <!--/#action-->



    <section id="blog" class="padding-top">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-5">

                    <div class="sidebar blog-sidebar">



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



                    </div>

                </div>

                <div class="col-md-9 col-sm-7">

                    <div class="row">



                    <?php



                    if($list_artikel){

                        foreach ($list_artikel as $row) {

                            # code...

                            $link = base_url().'index.php/artikel/detail_artikel/'.$row->id_artikel;

                            $str = strip_tags($row->konten_artikel);



                            //first parameter is $str

                            //second parameter is the desired width

                            //source : https://stackoverflow.com/questions/12130966/how-do-i-remove-p-tag-and-its-content-from-html-using-php



                            $abstract_text = strtok(wordwrap($str, 200, "...\n"), "\n");



                            echo '<div class="col-md-12 col-sm-12">

                            <div class="single-blog two-column">

                                <div class="post-thumb">

                                    <a href="blogdetails.html"><img src="images/blog/7.jpg" class="img-responsive" alt=""></a>

                                    <div class="post-overlay">

                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>

                                    </div>

                                </div>

                                <div class="post-content overflow">

                                    <h2 class="post-title bold"><a href="'.$link.'">'.$row->judul_artikel.'</a></h2>

                                    <h3 class="post-author"><a href="#"> by '.$row->username.'</a></h3>'.'

                                    <p>'.$abstract_text.'</p>'.'

                                    <a href="'.$link.'"'.'class="read-more">View More</a>

                                    <div class="post-bottom overflow">

                                        <ul class="nav navbar-nav post-nav">

                                            <li><a href="#"><i class="fa fa-tag"></i>'.$row->nama_kategori_artikel.'</a></li>



                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>';

                        }

                       }

                    ?>





                    </div>



                    <!-- <h2 class="page-header" style="color: red;text-align: center;">Halaman</h2> -->

                    <div class="blog-pagination">

                       <?php echo $links;?>

                    </div>

                 </div>

            </div>

        </div>

    </section>

    <!--/#blog-->
