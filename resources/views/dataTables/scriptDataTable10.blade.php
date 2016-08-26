@section('scriptDataTable10')

<script type="text/javascript">

	$(document).ready(function() 
	{
        
        $('#dataTable').dataTable(
        {
          "aoColumnDefs":
          [
            {
              'bSortable': false, 'aTargets': [9]
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