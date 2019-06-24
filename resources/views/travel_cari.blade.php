@extends('home')

@section('konten')
<form action="/Shuttle/cari" method="GET">
  <input type="hidden" name="_token" value="1CLciKzkdkmCsaLteo7nY8NrozsKzJR348o8b0no">
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
                <p class="text-grey"><strong>Tujuan Keberangkatan</strong></p>
                <select  name="keberangkatan" id="skeberangkatan_index" required="">
                  <!-- <option data-placeholder="true"></option> -->
                                          
                    <optgroup label="INDRAMAYU">

                        <option value="Indramayu">
                            Indramayu
                        </option>
                    </optgroup>      
                    <optgroup label="BANDUNG">

                        <option value="Bandung">
                            Bandung
                        </option>
                    </optgroup>                                   
                </select> 
              </div>
              <div class="col-12 pt-2">
                  
                <select  id="stujuan_index" name="tujuan"   required="">
                    <!-- <option data-placeholder="true"></option> -->
                    <optgroup label="INDRAMAYU">

                        <option value="Indramayu">
                            Indramayu
                        </option>
                    </optgroup>      
                    <optgroup label="BANDUNG">

                        <option value="Bandung">
                            Bandung
                        </option>
                    </optgroup> 
                      
                </select>
              </div>
            </div>
            
        </div>

        <div class="col-12 col-lg-4 ">
            <div class="row px-2">
              <div class="col-12">
                <p class="text-grey"><strong>Tanggal dan Penumpang</strong></p>
                  <input type="text" id="tanggalberangkat" name="tanggal_pergi" class="form-control" placeholder="Tanggal Berangkat" required="">
              </div>
              <div class="col-12 pt-2">
                  <select  name="jm_penumpang" id="penumpang" required="">
                    <option selected="" value="1" >1 Penumpang</option>
                    <option value="2">2 Penumpang</option>
                    <option value="3">3 Penumpang</option>
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
                   <input type="hidden" name="kotaAsal" id="kotaAsal" value="#" >
                    <input type="hidden" name="tujuanAsal" id="tujuanAsal" value="#">
                    <input type="hidden" name="kotaTujuan" id="kotaTujuan" value="#">
                    <input type="hidden" name="isTravel" id="isTravel" value="#">
                    <input type="hidden" name="tujuanBerangkat" id="tujuanBerangkat" value="#">
                  <button type="submit"  name="submit" onclick="return check()" class="btn btn-success btn-md btn-block btn-submit">Cari Tiket</button>
              </div>
            </div>
        </div>
      </div>
      </div>
    </div>
  </section>
  </form>

@endsection