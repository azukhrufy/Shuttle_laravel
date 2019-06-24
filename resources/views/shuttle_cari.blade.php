@extends('home')

@section('konten')
<form action="/Shuttle/cari" method="GET">
 <!-- <input type="hidden" name="_token" value="1CLciKzkdkmCsaLteo7nY8NrozsKzJR348o8b0no"> -->
  <section class="my-2">
    <div class="container " id="reservasi-lintas">
      
      <!-- <img class="loadKeberangkatan ml-2 d-none" src="https://mylintas.co.id/css/baraya_/images/load/loading.gif" width="15px" ></p> -->
      <div class="card">
		  <div class="card-header">
		    Pesan Tiket Online !
		  </div>
      <div class="row">
      <br>
        <div class="col-12 col-lg-4">
            <div class="row px-2 mb-2">
              <div class="col-12">
                <p class="text-grey"><strong>Keberangkatan</strong></p>
                <select  name="keberangkatan" id="skeberangkatan_index" required="">
                  <option data-placeholder="true"></option>
                                          
                    <optgroup label="INDRAMAYU">

                        <option value="Hotel Garuda (Indramayu)">
                            Indramayu
                        </option>
                    </optgroup>      
                    <optgroup label="BANDUNG">

                        <option value="Pasteur (Bandung)">
                            Pasteur (Bandung)
                        </option>
                    </optgroup>
                    <optgroup label="JAKARTA">

                        <option value="Gambir (Jakarta)">
                            Gambir (Jakarta)
                        </option>
                    </optgroup>                             
                </select> 
              </div>
              <div class="col-12 pt-2">
                  <p class="text-grey"><strong>Tujuan</strong></p>
                <select  id="stujuan_index" name="tujuan"   required="">
                    <option data-placeholder="true"></option>
                    <optgroup label="INDRAMAYU">
                        <option value="Hotel Garuda (Indramayu)">
                            Hotel Garuda (Indramayu)
                        </option>
                    </optgroup>      
                    <optgroup label="BANDUNG">

                        <option value="Pasteur (Bandung)">
                            Pasteur (Bandung)
                        </option>
                    </optgroup> 
                    <optgroup label="JAKARTA">

                        <option value="Gambir (Jakarta)">
                            Gambir (Jakarta)
                        </option>
                    </optgroup> 
                </select>
              </div>
            </div>
            
        </div>

        <div class="col-12 col-lg-4 ">
            <div class="row px-2">
              <div class="col-12">
                <p class="text-grey"><strong>Tanggal</strong></p>
                  <input type="text" id="tanggalberangkat" name="tgl_keberangkatan" class="form-control" placeholder="Tanggal Berangkat" required="">
              </div>
              <div class="col-12 pt-2">
              <p class="text-grey"><strong>Jam</strong></p>
                  <select  name="jam" id="jam" required="">
                    <option selected="" value="06.00" >06.00</option>
                    <option value="08.00">08.00</option>
                    <option value="13.00">13.00</option>
                  </select>
              </div>
            </div>
        </div>

        <div class="col-12 col-lg-4 ">
            <div class="row px-2"  >
              <div class="col-12">
               &nbsp
               <p>&nbsp</p>
              </div>
              <div class="col-12 ">
                   <!-- <input type="hidden" name="kotaAsal" id="kotaAsal" value="#" >
                    <input type="hidden" name="tujuanAsal" id="tujuanAsal" value="#">
                    <input type="hidden" name="kotaTujuan" id="kotaTujuan" value="#">
                    <input type="hidden" name="isTravel" id="isTravel" value="#">
                    <input type="hidden" name="tujuanBerangkat" id="tujuanBerangkat" value="#"> -->
                  <button type="submit"  name="submit" onclick="return check()" class="btn btn-success btn-md btn-block btn-submit">Cari Tiket</button>
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  </form>

  <br><br>
<table border="1" style="margin: auto;">
		<tr>
			<td>Shuttle</td>
			<td>Keberangkatan</td>
			<td>Tujuan</td>
			<td>Harga</td>
			<td>Jam</td>
			<td>Tanggal Keberangkatan</td>
			<td>Mobil</td>
			<td></td>
		</tr>
  		@foreach($jadwal_keberangkatan as $j)
		<tr>
			<td>{{ $j->nama_shuttle }}</td>
			<td>{{ $j->keberangkatan }}</td>
			<td>{{ $j->tujuan }}</td>
			<td>{{ $j->harga }}</td>
			<td>{{ $j-> jam}}</td>
			<td>{{ $j->tgl_keberangkatan }}</td>
			<td>{{ $j->kd_mobil }}</td>
			<td><a href="/Shuttle/pesan/{{ $j->id_jadwal_keberangkatan }}" class="btn btn-success btn-md btn-block btn-submit" value="Edit" style="margin: auto;">Pilih Kursi</a></td>
		</tr>
		@endforeach


@endsection