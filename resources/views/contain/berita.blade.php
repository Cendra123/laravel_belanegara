



<section id="page-breadcrumb">

  <div class="vertical-center sun">

   <div class="container">

    <div class="row">

      <div class="action">

        <div class="col-sm-12">

          <h1 class="title">Berita</h1>

        </div>

      </div>

    </div>

  </div>

</div>

</section>

<!--/#action-->



<section id="team" style="margin: 0;padding: 0px 0px 85px 0px;">

  <div class="container">

   <!-- <h2 class="page-header" style="color: red; text-align: center;">Web Services</h2> -->







   <div id="testimonial-container">





    <div class="row">

      <div class="col-md-8">

        <h2 class="page-header" style="color: red;">Berita</h2>

        <div class="testimonial">



          <input class="form-control" id="date" style="width: 60%; margin-bottom: 15px;" name="date" placeholder="Input Tanggal Pencarian Berita" type="text"/>


          @if($list_berita)



          @foreach ($list_berita as $row) 

          $link = base_url().'index.php/Detail_Berita/detail_berita/'.$row->id_berita;


          <div class='media'>

            <div class='pull-left'>

              <a href='#'> <img class='img-responsive' height='150' width='150' src='".$row->featured_image."'></a>

            </div>



            <div class='media-body'>

              <a href='".$link."'>"."<blockquote>".$row->judul."</blockquote></a>

              <h3><a href='#'>-".$row->username."</a></h3>

            </div>



          </div>

          @endforeach

          @endif


        </div>


        <!-- <button class="btn btn-danger center-block">Selengkapnya...</button> -->

      </div>


    </div>

  </div><!--/#testimonial-container-->



  <div class="blog-pagination">



    @if(isset($links))
    $links 
    @endif 

  </div>

  <!-- </div> -->


</div>

</section>

<!--/#team-->



<script type="text/javascript">



  $(document).ready(function(){

      var date_input=$('input[name="date"]'); //our date input has the name "date"

      //var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body

      var options={

        format: 'yyyy-mm-dd',

        //container: container,

        todayHighlight: true,

        autoclose: true,

      };

      date_input.datepicker(options).on('hide',function (e) {

          // body...

          //console.log(e);

          window.location.href = "<?php echo base_url('index.php/berita/list_berita/'); ?>"+date_input.val();

         // alert(date_input.val());

       });

    })

  </script>

</script>



