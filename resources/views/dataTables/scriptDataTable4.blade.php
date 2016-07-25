@section('scriptDataTable4')

<script type="text/javascript">

	$(document).ready(function() 
	{
        
        $('#dataTable').dataTable(
        {
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