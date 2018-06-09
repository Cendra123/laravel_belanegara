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
            @foreach ($headline as $row)
            <li><img  src="{{ $row->featured_image }}" ></a>
                <p  class="title"><a style="color:#FFFFFF" href="{{ route('detailBerita', [$row->id]) }}">{{$row->judul}}</a></p>
            </li>;
            @endforeach
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