$(document).ready(function() {
   

    var table = $('#serverSideTable').DataTable( {
        // DataTable individual search function
        "processing": true,
        "serverSide": true,
        "deferRender": true,
        "paging": true,
        "searching": true,
        "dom": '<"top"iflp<"clear">>',
        search: {
             return: true
         },
        "ajax": "./php/serverProcessingBox.php",

        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;

                    $( 'input', this.footer() ).on( 'keyup change clear', function (ev) {
                        if (ev.keyCode == 13) { //only on enter keypress (code 13)
                             that
                                .search( this.value )
                                .draw();
                            }
                        });

            });
        }

       
    });
        
       // Setup - add a text input to each footer cell
         $('#serverSideTable tfoot th').each( function () {
            var title = $(this).text();
                $(this).html( 
                    '<input style="background: rgba(221, 221, 221, 0.6); border-radius:5px; size=20px;" type="text" placeholder=" Buscar '+title+'" />' );

         });
        //append tfoot to thead
        $('#serverSideTable tfoot tr').appendTo('#serverSideTable thead');

        //disable sorting on click box search
        $('input', this.column(colIdx).header()).on('click', function(e) {
          e.stopPropagation();
         }); 
    
        
});


/*
Create your own search:

    <input id="txtSearch" placeholder="General search" class="form-control" />

        $(document).ready(function() {
            $('#example').DataTable();

            $('#example_filter').hide(); // Hide default search datatables where example is the ID of table

            $('#txtSearch').on('keyup', function() {
                $('#example')
                    .DataTable()
                    .search($('#txtSearch').val(), false, true)
                    .draw();
            });
        });
*/
