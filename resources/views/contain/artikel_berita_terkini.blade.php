 <section id="berita_terkini_dan_artikel" >



    <div class="container"> 



     <div id="testimonial-container">

        <div class="row">

            <div class="col-md-6">

                <h2 class="page-header" style="color: red;">Berita</h2>

                <div class="testimonial">


                   @if($berita_terkini)


                   @foreach ($berita_terkini as $row) 


                   <div class='media'>

                    <div class='pull-left'>

                        <a href='#'> <img class='img-responsive' height='150' width='150' src='{{$row->featured_image}}'></a>

                    </div>



                    <div class='media-body'>

                        <a href=''><blockquote>{{$row->judul}}</blockquote></a>

                        <h3><a href='#'>-{{$row->username}}</a></h3>

                    </div>

                </div>

                @endforeach

                @endif


            </div>

            @if($berita_terkini)

            <button type="button" class="btn btn-danger center-block" id="tombol_berita_selengkapnya_site">Selengkapnya...</button>

            @endif

        </div>



        <div class="col-md-6" style="margin-bottom: 40px;">

            <h2 class="page-header">Artikel</h2>



            @if($artikel_terkini)

            @foreach ($artikel_terkini as $row) 

            
            <blockquote>

                <p><a style='color:#808080;' href='".$link."'>{{$row->judul_artikel}}</a></p>

                <footer><cite title='Source Title'>{{$row->username}}</cite></footer>

            </blockquote>

            @endforeach

            @endif
            @if($artikel_terkini)

            <button type="button" class="btn btn-default center-block" id="tombol_artikel_selengkapnya_site">Selengkapnya...</button>

            @endif

            
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



            var link = 'echo url("/artikel");'



            window.location.href=link;

        });



        $('#tombol_berita_selengkapnya_site').click(function (e) {

            // body...

            e.preventDefault();



            var link = 'echo url("/berita");'



            window.location.href=link;

        });

    });

</script>