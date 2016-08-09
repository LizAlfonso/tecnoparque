@section('scriptDataTable11')

<script type="text/javascript">

	$(document).ready(function() 
	{
        
        $('#dataTable').dataTable(
        {
          "aoColumnDefs":
          [
            {
              'bSortable': false, 'aTargets': [10]
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