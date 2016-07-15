@section('scriptDataTable8')

<script type="text/javascript">

	$(document).ready(function() 
	{
        
        $('#dataTable').dataTable(
        {
          responsive:true,   //para el +

          "aoColumnDefs":
          [
            {
              'bSortable': false, 'aTargets': [7]
            }

          ],
          
          "oLanguage":
          {
            "sUrl": "../resources/lang/Espanhol.json"
          }

        });   
    });

  </script>

@stop