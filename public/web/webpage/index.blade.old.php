<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Laravel Ajax CRUD Example</title>

    <!-- Load Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-narrow">
    <h2>Prueba de ToDo Apepe</h2>

<form id="frmTasks" name="frmTasks" class="form-horizontal" novalidate="">
    <div class="form-group error">
      <label for="inputTask" class="col-sm-3 control-label">Tipo de Evento</label>
      <div class="col-sm-9">
        <input type="text" class="form-control has-error" id="task" name="task" placeholder="Task" value="">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-3 control-label">Description</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-3 control-label">Numero</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="numero" name="numero" placeholder="Description" value="">
      </div>
    </div>
</form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes</button>
                            <input type="hidden" id="task_id" name="task_id" value="0">
                        </div>
               
    </div>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript">
       $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        });
    </script>

<script type="text/javascript">
      
</script>
</body>
</html>