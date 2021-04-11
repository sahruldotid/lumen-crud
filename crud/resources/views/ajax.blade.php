<h4 class="label-new-person">Edit Person</h4>
<form action="/update" role="form" method="POST">

<div class="form-group" style="display: none;">
    <input type="hidden" name="IDPerson" id="id" class="form-control" value="{{ $person->IDPerson }}">
</div>


<div class="form-group">
    <label>Name</label>
    <input type="text" name="Nama" class="form-control" maxlength="20" required="" value="{{ $person->Nama }}">
</div>


<div class="form-group">
    <label for="input-type">Gender</label>
    <div class="col text-center">
        <div id="input-type" class="row">
            <div class="col-sm-2">
                <input class="form-check-input" type="radio" name="Gender" value="M" id="inlineRadio1" class="sr-only" {{ $person->Gender == 'M' ? 'checked' : ''}} required >
                <label class="form-check-label" for="inlineRadio1">Laki - laki</label>
            </div>
            <div class="col-sm-2">
                <input class="form-check-input" type="radio" name="Gender" value="F" class="sr-only" id="inlineRadio2" {{ $person->Gender == 'F' ? 'checked' : ''}} required>
                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    <label for="fullname">Kota Lahir</label>
    <input type="text" name="KotaLahir" id="birthcity" class="form-control" maxlength="30" required="" value="{{ $person->KotaLahir }}">
</div>

<div class="form-group">
    <label for="fullname">Tanggal Lahir</label>
    <input type="date" name="TanggalLahir" id="birthdate" class="form-control" required="" value="{{ $person->TanggalLahir }}">
</div>
<div class="form-group">
    <label for="fullname">Alamat</label>
    <input type="text" name="Alamat" id="location" class="form-control" maxlength="40" required="" value="{{ $person->Alamat }}">
</div>
<div class="form-group">
    <label for="fullname">Kota</label>
    <input type="text" name="Kota" id="city" class="form-control" maxlength="30" required="" value="{{ $person->Kota }}">
</div>



<div class="form-group text-right">
<button type="button" class="btn btn-secondary" style="margin-top: 30px; margin-right: 15px" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-info" style="margin-top: 30px">Update</button>
</div>
</form>