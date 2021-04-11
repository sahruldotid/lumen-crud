<h4 class="label-new-person">Detail Person</h4>
.
<div class="row">
    <div class="col">
        <div class="row">
            <div class="col-4"><label>IDPerson</label></div>
            <div class="col">: {{$person->IDPerson}}</div>
        </div>
        <div class="row">
            <div class="col-4"><label>Nama</label></div>
            <div class="col">: {{$person->Nama}}</div>
        </div>
        <div class="row">
            <div class="col-4"><label>Gender</label></div>
            <div class="col">: {{ $person->Gender == 'M' ? 'Laki - laki' : 'Perempuan'}}</div>
        </div>
        <div class="row">
            <div class="col-4"><label>Kota Lahir</label></div>
            <div class="col">: {{$person->KotaLahir}}</div>
        </div>
        <div class="row">
            <div class="col-4"><label>Tanggal Lahir</label></div>
            <div class="col">: {{$person->TanggalLahir}}</div>
        </div>
        <div class="row">
            <div class="col-4"><label>Alamat</label></div>
            <div class="col">: {{$person->Alamat}}</div>
        </div>
        <div class="row">
            <div class="col-4"><label>Kota</label></div>
            <div class="col">: {{$person->Kota}}</div>
        </div>
    </div>

        <div class="col-4 text-center">
        <div class="panel text-center">
            

        @if($person->image)
        <img id="profile" src="images/{{ $person->image }}">
        @else
        <img id="profile" src="images/default.png" >
        @endif
        </div>
        <form id="submitForm">
        <div id="personID" style="display: none;">{{$person->IDPerson}}</div>
        <button type="button" class="btn btn-primary btn-file" style="margin-top: 20px;">Change Images <input type="file" id="file" class="file"> </button>
        </form>

    </div>
</div>
<script src="script.js"></script>
