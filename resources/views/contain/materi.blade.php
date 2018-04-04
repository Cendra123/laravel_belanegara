<style>
.pdfobject-container { height: 500px;}
.pdfobject { border: 1px solid #666; }

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}

#pdf_materi {
  display: none;
  text-align: center;
}

</style>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Materi</h1>
                            <!-- <p>Blog with right sidebar</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

        <section id="materi"  style="margin-bottom: 20px;">


        <div class="container">

        <div class="col-md-6 pre-scrollable">

        <div id="file_materi"></div>
        </div>

        <div class="col-md-6">
        <div id="loader" style="display: none;"></div>
        <div id="pdf_materi" class="center-block animate-bottom"></div>
        </div>

        </div>
    </section>

    <script type="text/javascript">

    var meeng = [];

       function clone(obj){
    if(obj == null || typeof(obj) != 'object')
        return obj;

    var temp = new obj.constructor();
    for(var key in obj)
        temp[key] = clone(obj[key]);

    return temp;
}

    function rawurlencode (str) {
  //       discuss at: http://locutus.io/php/rawurlencode/
  //      original by: Brett Zamir (http://brett-zamir.me)
  //         input by: travc
  //         input by: Brett Zamir (http://brett-zamir.me)
  //         input by: Michael Grier
  //         input by: Ratheous
  //      bugfixed by: Kevin van Zonneveld (http://kvz.io)
  //      bugfixed by: Brett Zamir (http://brett-zamir.me)
  //      bugfixed by: Joris
  // reimplemented by: Brett Zamir (http://brett-zamir.me)
  // reimplemented by: Brett Zamir (http://brett-zamir.me)
  //           note 1: This reflects PHP 5.3/6.0+ behavior
  //           note 1: Please be aware that this function expects \
  //           note 1: to encode into UTF-8 encoded strings, as found on
  //           note 1: pages served as UTF-8
  //        example 1: rawurlencode('Kevin van Zonneveld!')
  //        returns 1: 'Kevin%20van%20Zonneveld%21'
  //        example 2: rawurlencode('http://kvz.io/')
  //        returns 2: 'http%3A%2F%2Fkvz.io%2F'
  //        example 3: rawurlencode('http://www.google.nl/search?q=Locutus&ie=utf-8')
  //        returns 3: 'http%3A%2F%2Fwww.google.nl%2Fsearch%3Fq%3DLocutus%26ie%3Dutf-8'
  str = (str + '')
  // Tilde should be allowed unescaped in future versions of PHP (as reflected below),
  // but if you want to reflect current
  // PHP behavior, you would need to add ".replace(/~/g, '%7E');" to the following.
  return encodeURIComponent(str)
    .replace(/!/g, '%21')
    .replace(/'/g, '%27')
    .replace(/\(/g, '%28')
    .replace(/\)/g, '%29')
    .replace(/\*/g, '%2A')
}

    function tampil_pdf(raw_url) {
        // body...
                           $.ajax({
    url : 'http://www.belanegaraku.id/admin_belanegara/index.php/MyDir/get_directory_upload',
    type: "GET",

    success: function(data, textStatus, jqXHR)
    {
        //data - response from server
       // console.log(data);

        var hasil = $.parseJSON(data);

        console.log(hasil);

        var final_url = hasil.directory_upload;



        for(var i=0;i<raw_url.length;i++){

            //alert(raw_url[i].length);

            var arr = raw_url[i];

            arr.reverse();

            for(var j=0;j<arr.length;j++){
               // alert(arr[j]);

                var str = rawurlencode(arr[j]);

                final_url+=str;
                if(j < arr.length-1){
                    final_url+="/";
                }
            }


        }

        $('#loader').hide();

        $('#pdf_materi').show();



        PDFObject.embed(final_url, "#pdf_materi");

        console.log(final_url);

     },
    error: function (jqXHR, textStatus, errorThrown)
    {

    }
});
    }



       function cari(data,yg_dicari,obj_arr) {

        // body...



        //obj_arr.push(data.text);

        if(data.text==yg_dicari){
            //console.log(data.text);
            obj_arr.unshift(data.text);

            //console.log(obj_arr);
            meeng.unshift(obj_arr);

            return true;

            //obj_arr = [];
        }
        else{

            //obj_arr.push(data.text);

           // alert(data.text);


            if(data.children!=null){
                //alert(data.text+" punya anak "+data.children.length);


                //alert(data.text);

                if(data.children.length==0){

                    obj_arr.unshift(data.text);

                    //meeng.unshift(obj_arr);

                    return false;

                    //obj_arr = [];
                }

                else{


                      obj_arr.unshift(data.text);

                for(var i=0;i<data.children.length;i++){
                    //obj_arr = [];




                    var d = clone(obj_arr);

                    cari(data.children[i],yg_dicari,d);




                }
            }
        }



            else{


                obj_arr.unshift(data.text);

                //meeng.unshift(obj_arr);
                return false;
            }


        }
    };


        $('#file_materi').jstree({
        'core' : {
            'data' : {
                "url" : "http://www.belanegaraku.id/admin_belanegara/index.php/MyDir/z",
                "dataType" : "json" // needed only if you do not supply JSON headers
            }
        }
    }).on('changed.jstree',function (e,data) {
        // body...
        $("#loader").show();

        meeng = [];

        var teks = data.instance.get_selected(true)[0].text;

        //alert(teks);




        //alert(final_url);

        //console.log(final_url);

        var url2 = "http://www.belanegaraku.id/admin_belanegara/index.php/MyDir/z";

                         $.ajax({
    url : url2,
    type: "GET",

    success: function(data, textStatus, jqXHR)
    {
        //data - response from server
       // console.log(data);

        var hasil = $.parseJSON(data);

        console.log(hasil);


        var is_found;

        for(var i=0;i<hasil.length;i++){
            //alert(hasil[i].text);
            var obj_arr = [];



            is_found = cari(hasil[i],teks,obj_arr);

            // if(is_found==true){
            //     break;
            // }
            //meeng.unshift(obj_arr);
        }

        console.log(meeng);

        tampil_pdf(meeng);



     },
    error: function (jqXHR, textStatus, errorThrown)
    {

    }
});


    });




    </script>
