

   

    <section id="page-breadcrumb">

        <div class="vertical-center sun">

             <div class="container">

                <div class="row">

                    <div class="action">

                        <div class="col-sm-12">

                            <h1 class="title">{{ $detail_berita[0]->judul }}</h1>

                            <p> {{ $detail_berita[0]->waktu }} ~ {{ $detail_berita[0]->username }}</p>

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

                                <div class="post-thumb">

                                    <a href="#"><img src="{{ $detail_berita[0]->featured_image }}" class="img-responsive" alt="" height="1200" width="800"></a>

                                    <!-- <div class="post-overlay">

                                        <span class="uppercase"><a href="#">14 <br><small>Feb</small></a></span>

                                    </div> -->

                                </div>

                                <div  class="post-content overflow">

                                    

                                    {{ $detail_berita[0]->konten_berita }}

                                </div>



                            </div>

                        </div>

                    </div>

                 </div>

                <div class="col-md-3 col-sm-5">

                    <div class="sidebar blog-sidebar">

                        <div class="sidebar-item  recent">

                            <h3 style="color: red;">Berita Lainnya</h3>

                            



                                @foreach ($berita_lainnya as $row) 

                                    # code...

                                    <div class='media'>

                                    <div class='media-body'>;

                                    <h4><a href='{{ route($row->id) }}'>{{ $row->judul }}</h4>;

                                    <p> posted on {{ $row->waktu }} </p>;

                                    </div>;

                                    </div>; 

                                @endforeach

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