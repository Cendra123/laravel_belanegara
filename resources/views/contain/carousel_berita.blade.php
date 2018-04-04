<style type="text/css">
    @media (min-width: 300px) and (max-width: 992px) {
    #container_carousel_berita {

       margin-bottom: 400px;

    }





}

</style>

    <section id="carouse_berita">

        <div class="container" id="container_carousel_berita">







 <div id="slidey" style="display:none;">

                    <ul>



                    <?php

                        foreach ($headline as $row){



                        echo '<li><img  src="'.$row->featured_image.'" ></a>



                        <p  class="title"><a style="color:#FFFFFF" href="'.base_url('index.php/Detail_Berita').'/detail_berita/'.$row->id.'">'.$row->judul.'</a></p>



                        </li>';



                    }

                    ?>





                    </ul>

                </div>

        </div>

<script type="text/javascript">

        $("#slidey").slidey({

            interval: 3000,

            listCount: 5,

            showList: true

        });

        $(".slidey-list-description").dotdotdot();

    </script>

</section>
