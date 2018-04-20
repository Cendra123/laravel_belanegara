<section id="page-breadcrumb">

        <div class="vertical-center sun">

             <div class="container">

                <div class="row">

                    <div class="action">

                        <div class="col-sm-12">

                            <h1 class="title" style="text-align: left;">Lagu Wajib</h1>

                            <!-- <p>Blog with right sidebar</p> -->

                        </div>

                    </div>

                </div>

            </div>

        </div>

   </section>

    <!--/#action-->



    <div class="container">



    <div class="row">

    <div class="table-responsive">          

  <table class="table table-hover" id="list_lagu_wajib">

    <thead>

      <tr>

        <!-- <th>#</th> -->

        <th>Judul Lagu</th>

        <th>Pengarang</th>

        <th disable-sorting nosort>Nada Dasar</th>

        <th disable-sorting nosort>Ketukan</th>

        <!-- <th>Country</th> -->

      </tr>

    </thead>

    <tbody>

        <?php



        foreach ($list_lagu_wajib as $row) {

            # code...

            $link = base_url()."index.php/Lagu_Wajib/detail_lagu_wajib/".$row->id_lagu_wajib;



            echo "<tr>";

            //echo "<td>".$row->judul_lagu_wajib."</td>";

            echo "<td>"."<a href='".$link."'>".$row->judul_lagu_wajib."</a>"."</td>";

            echo "<td>".$row->nama_pengarang_lagu."</td>";

            echo "<td>".$row->nada_dasar."</td>";

            echo "<td>".$row->ketukan."</td>";

            echo "</tr>";

        }



        ?>

    </tbody>

  </table>

  </div>

    </div>



    </div>



    <script type="text/javascript">

    $(document).ready(function () {

        // body...

        // $('#list_lagu_wajib').dataTable({

        //      aaSorting: [[1, 'desc']],

        // bPaginate: true,

        // bFilter: true,

        // bInfo: false,

        // bSortable: true,

        // bRetrieve: true,

        // aoColumnDefs: [

        //     { "aTargets": [ 0 ], "bSortable": true },

        //     { "aTargets": [ 1 ], "bSortable": true },

        //     { "aTargets": [ 2 ], "bSortable": true },

        //     { "aTargets": [ 3 ], "bSortable": false }

        // ]

            

        

        // });

        $('#list_lagu_wajib').dataTable( {

  'aoColumnDefs': [{

        'bSortable': false,

        'aTargets': ['nosort']

    }]

} );

    });

    </script>