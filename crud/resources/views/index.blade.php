
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Data Person</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="style.css">
<script>
$(document).ready(function() {
    $('body').tooltip({
        selector: "[data-tooltip=tooltip]",
        container: "body"
    });
});



</script>
</head>
<body>
<div class="container-xl">




    <div class="modal fade add-modal" tabindex="-1" role="dialog" aria-labelledby="AddModalDialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            
          <div class="modal-content">
          
          

            <h4 class="label-new-person">Add New Person</h4>
   
                <form action="" role="form" method="POST">

                    <div class="form-group" style="display: none;">
                        <input type="hidden" name="id" id="id" class="form-control">
                    </div>


                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="Nama" class="form-control" maxlength="20" required="">
                    </div>
                   

                    <div class="form-group">
                        <label for="input-type">Gender</label>
                        <div class="col text-center">
                            <div id="input-type" class="row">
                                <div class="col-sm-2">
                                    <input class="form-check-input" type="radio" name="Gender" value="M" id="inlineRadio1" class="sr-only" required>
                                    <label class="form-check-label" for="inlineRadio1">Laki - laki</label>
                                </div>
                                <div class="col-sm-2">
                                    <input class="form-check-input" type="radio" name="Gender" value="F" class="sr-only" id="inlineRadio2" required>
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="fullname">Kota Lahir</label>
                        <input type="text" name="KotaLahir" id="birthcity" class="form-control" maxlength="30" required="">
                    </div>

                    <div class="form-group">
                        <label for="fullname">Tanggal Lahir</label>
                        <input type="date" name="TanggalLahir" id="birthdate" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Alamat</label>
                        <input type="text" name="Alamat" id="location" class="form-control" maxlength="40" required="">
                    </div>
                    <div class="form-group">
                        <label for="fullname">Kota</label>
                        <input type="text" name="Kota" id="city" class="form-control" maxlength="30" required="">
                    </div>



                    <div class="form-group text-right">
                    <button type="button" class="btn btn-secondary" style="margin-top: 30px; margin-right: 15px"data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" style="margin-top: 30px">Add</button>
                    </div>
                    </form>
                




          </div>
        </div>
      </div>


      <div class="modal fade edit-modal" tabindex="-1" role="dialog" aria-labelledby="EditDialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-body"> </div>   
        </div>
        </div>
      </div>


      <div class="modal fade view-modal" tabindex="-1" role="dialog" aria-labelledby="ViewDialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            
          <div class="modal-content">
          <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
              <div class="modal-body-view">
              </div>   
        </div>
        </div>
      </div>



    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-12"><h2>Data <b>Persons</b></h2></div>
                    <div class="col-sm-12 buttn"><button type="button" class="btn btn-success" data-toggle="modal" data-target=".add-modal">Add New Record</button></div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>IDPerson</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>  
                    @foreach($person as $p)
                    <tr>
                        <td>{{ $p->IDPerson }}</td>
                        <td>{{ $p->Nama }}</td>
                        <td>{{ $p->Alamat }}</td>
                        <td>
                            <a href="#" class="view" title="View" data-id="{{ $p->IDPerson }}" data-tooltip="tooltip" data-toggle="modal" data-target=".view-modal"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-id="{{ $p->IDPerson }}" data-tooltip="tooltip" data-toggle="modal" data-target=".edit-modal"><i class="material-icons">&#xE254;</i></a>
                            @if($p->IsActive == 1)
                            <a href="/status/{{ $p->IDPerson }}" class="active" title="Deactive" data-tooltip="tooltip"><span class="material-icons">person</span></a>
                            @else
                            <a href="/status/{{ $p->IDPerson }}" class="inactive" title="Activate" data-tooltip="tooltip"><span class="material-icons">person_off</span></a>
                            @endif
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
    </div>  
</div> 





<script src="script.js"></script>
</body>
</html>