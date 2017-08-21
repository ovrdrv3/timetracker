<? include('functions.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Time tracker</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <style>
        *:disabled {
            background-color: #CCCCCC !important;
            border: none !important;
        }

        .btn-col{
            width: 38px;
        }
    </style>

  </head>
  <body>

    <div class="container-fluid">

    <header class="row">
        <div class="col-xs-6">
            <a data-mode="restore" id="btn-mode" href="#">Enter <span id="lbl-mode">Restore</span> Mode</a>
        </div>
        <div class="col-xs-6 text-right">
            Total Time: <span id="tally"></span>
        </div>
    </header>

    <div class="row">
        <form id="form-new">
            <div class="col-xs-10">
                <input id="name" name="name" placeholder="Enter new task here..." class="form-control">
            </div>
            <div class="col-xs-2">
                <button class="btn btn-block btn-success" type="submit"><?= i('play')?></button>
            </div>
        </form>
    </div>

    <hr>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Time</th>
                    <th colspan="2">Controls</th>
                </tr>
            </thead>
            <tbody id="log">

            </tbody>
        </table>
    </div>


    </div>
    <!-- Font Awesome-->
    <script src="https://use.fontawesome.com/c135505091.js"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- App Scripts -->
    <script src="atom.tracker.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
