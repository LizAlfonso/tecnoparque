@section('scriptDataTable')

<script type="text/javascript">

	$(document).ready(function() 
	{
        
        $('#dataTable').dataTable(
        {
          responsive:true,   //para el +

          "aoColumnDefs":
          [
            {
              'bSortable': false, 'aTargets': [3]
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