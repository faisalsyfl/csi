<!-- ### $App Screen Content ### -->

<div class="row">
  <div class="col-md-10">
    <h3 class="c-grey-900 offset-md-1">Formulir Aplikasi Sertifikasi</h3>
    <h6 class="mT-10 mB-30 offset-md-1"><?php echo "CERT-M000".$form[0]['id_form']."/".$form[0]['sertifikasi_manajemen_diminati']."/".$form[0]['nama_organisasi']; ?></h6>
  </div>

  <div class="col-md-1 text-right">
    <a href="<?php echo base_url(). 'ApplicationForm/list'?>" >
      <button type="button" class="btn cur-p btn-primary" title="Hapus">
      Kembali
      </button>
    </a>
  </div>
</div>
<!-- <?php echo '<pre>' ?>
<?php print_r($form) ?>
<?php echo '</pre>' ?>
 -->
<?php echo form_open_multipart("ApplicationForm/addForm") ?>
   <div class="row gap-20 masonry pos-r">
      
      <div class="masonry-sizer col-md-10"></div>
      
      <div class="masonry-item col-md-10 offset-md-1">
         <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">A. SERTIFIKASI MANAJEMEN YANG DIINGINKAN</h6>
            <div class="mT-10">
               <div class="form-group">
                  <div class="form-check">
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="input_sertifikasi_manajemen" id="" value="Manajemen mutu ISO 9001"  checked disabled>
                        <?=$form[0]['sertifikasi_manajemen_diminati'] ?>
                     </label>
                  </div>
               </div>
               <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </div>
         </div>
      </div>

      <div class="masonry-item col-md-10 offset-md-1">
         <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">B. STATUS APLIKASI SERTIFIKASI</h6>
            <div class="mT-10">
               <div class="form-group">
                  <div class="form-check">
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="input_status_aplikasi" id="gridRadios1" value="Sertifikasi awal"  checked disabled>
                        <?=$form[0]['status_aplikasi_sertifikasi'] ?>
                     </label>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="masonry-item col-md-10 offset-md-1">
         <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">C. ORGANISASI YANG DIAUDIT</h6>
            <div class="mT-30">
               <div class="form-group">
                  <label for="exampleInputEmail1" style="font-size: 16px">Nama Organisasi</label>
                  <input class="form-control mT-10" id="example1" name="input_nama_organisasi" value="<?=$form[0]['nama_organisasi']?>" disabled>
               </div>
               <div class="form-group">
                  <input name="input_tlp_fax" type="text" id="info4" class="form-control" placeholder="Telp" value="<?=$form[0]['tlp_fax']?>" readonly>
               </div>
               <div class="form-group">
                  <input name="input_website" type="text" id="info5" class="form-control" placeholder="Website" value="<?=$form[0]['website']?>" readonly>
               </div>
               <div class="form-group">
                  <input name="input_jenis_organisasi" type="text" id="info6" class="form-control" placeholder="Jenis Organisasi" value="<?=$form[0]['jenis_organisasi']?>" readonly>
               </div>

               <hr class="mT-30">
               <label class="mt-20" style="font-size: 16px">Jumlah personil efektif</label>
               <label style="font-size: 12px"> Mohon sebutkan jumlah personil efektif organisasi yang terlibat dalam lingkup sertifikasi yang akan diajukan. Personil efektif adalah personil manajemen, administrasi, operasional (termasuk seluruh pekerja shift), pekerja paruh waktu dan pekerja tidak permanen, jika ada (misalnya,kontraktor, dll) </label>
               
               <div class="form-row mT-20">
                  <div class="col-md-3">
                     <label>Manajamen</label>
                     <input required="required" type="text" data-toggle="tooltip" data-placement="bottom" title="Jumlah Karyawan yang terkait dalam sertifikasi" name="input_jml_manajemen" id="txt1"  onkeyup="sum();" class="form-control" value="<?=$form[0]['jml_manajemen'].' orang'?>" disabled>
                  </div>
                  <div class="col-md-3">
                     <label>Administrasi</label>
                     <input required="required" type="text" data-toggle="tooltip" data-placement="bottom" title="Jumlah Karyawan pada bagian Administrasi" name="input_jml_admin" id="txt2"  onkeyup="sum();" class="form-control" value="<?=$form[0]['jml_admin'].' orang'?>" disabled>
                  </div>
                  <div class="col-md-3">
                     <label>Part-time</label>
                     <input required="required" type="text" data-toggle="tooltip" data-placement="bottom" title="Jumlah Karyawan Pekerja lepas yang terkait sertifikasi" name="input_jml_parttime" id="txt3"  onkeyup="sum();" class="form-control" value="<?=$form[0]['jml_parttime'].' orang'?>" disabled>
                  </div>
                  <div class="col-md-3">
                     <label>Non-permanen</label>
                     <input required="required" type="text" data-tog disabledgle="tooltip" data-placement="bottom" title="Jumlah Karyawan Tidak tetap (Outsourcing/Pegawai kontrak)" name="input_jml_nonpermanen" id="txt4"  onkeyup="sum();" class="form-control" value="<?=$form[0]['jml_nonpermanen'].' orang'?>" disabled>
                  </div>
               </div>

               <label class="mT-20">Operasional</label>
               <div class="form-row">
                  <div class="col-md-4">
                     <input required="required" type="phone" name="input_jml_opl_shift1" id="txt5"  onkeyup="sum();" class="form-control" value="<?=$form[0]['jml_opl_shift1'].' orang'?>" disabled>
                     <small id="emailHelp" class="form-text text-muted" >Shift 1</small>
                  </div>
                  <div class="col-md-4">
                     <input required="required" type="text" name="input_jml_opl_shift2" id="txt6"  onkeyup="sum();" class="form-control" value="<?=$form[0]['jml_opl_shift2'].' orang'?>" disabled>
                     <small id="emailHelp" class="form-text text-muted" >Shift 2</small>
                  </div>
                  <div class="col-md-4">
                     <input required="required" type="text" name="input_jml_opl_shift3" id="txt7"  onkeyup="sum();" class="form-control" value="<?=$form[0]['jml_opl_shift3'].' orang'?>" disabled>
                     <small id="emailHelp" class="form-text text-muted" >Shift 3</small>
                  </div>
               </div>

               <label class="mT-20">Silahkan Pilih :</label>
               <div class="form-check">
                  <label class="form-check-label">
                     <input class="form-check-input" type="radio" name="input_pekerjaan_shift" id="gridRadios3" value="Setiap shift melakukan pekerjaan yang sama" required="" checked disabled>
                     <?=$form[0]['pekerjaan_shift']?>
                  </label>
               </div>

               <label class="mT-20">Total Personil :</label>
               <div class="form-row">
                  <div class="col-md-4">
                     <input required="required" type="text" name="input_jml_personil" id="txt7"  onkeyup="sum();" class="form-control" placeholder="Jumlah orang" value="<?=$form[0]['jml_personil'].' orang'?>" disabled>
                  </div>
               </div>

               <hr class="mT-30">
               <label class="mt-10" style="font-size: 16px">Alamat Kantor Pusat dan Lokasi Kegiatan <br></label>
               <p style="font-size: 14px">
                  1) <b>Lokasi kegiatan utama</b> adalah lokasi pusat kegiatan Organisasi. Lokasi kegiatan utama bisa sama atau berbeda dengan lokasi kantor pusat Organisasi. <br><br>
                  2) <b>Lokasi kegiatan lain</b> adalah lokasi kegiatan selain lokasi utama yang terpisah secara geografis. Contohnya kantor cabang, pabrik perakitan yang terpisah dari pabrik utama, wilayah kerja terpisah dari kantor utama, dan lain-lain. <br><br>
                  3) <b>Lokasi non permanen</b> adalah lokasi kegiatan bersifat sementara yang pada masa mendatang tidak akan menjadi lokasi kegiatan Organisasi lagi. Contohnya lokasi proyek konstruksi dan lain-lain.
               </p>
               
               <label class="mT-20">Alamat Kantor Pusat</label>
               <input class="form-control" type="text" name="input_alamat_kantor_pusat" value="<?=$form[0]['alamat_kantor_pusat']?>" disabled>
                 <!-- <option></option> -->
               <!-- </select> -->

               <label class="mT-30">Lokasi Kegiatan Utama</label>
               <input class="form-control" type="text" name="input_l_kegiatan_utama" value="<?=$form[0]['l_kegiatan_utama']?>" disabled>
               <!-- <select name="l_kegiatan_utama[]" class="form-control" > -->
                  <!-- <option></option>
               </select> -->

               <label>Kegiatan/proses/area kerja yang dilakukan </label>
               <input required="required" type="text" class="form-control" name="input_p_kegiatan_utama"  value="<?=$form[0]['p_kegiatan_utama']?>" disabled>

               <label class="mT-20">Organisasi menginginkan sertifikasi multilokasi ?</label>
               <div class="form-row">
                <div class="col-md-3">
                  <div class="form-group">
                  <div class="form-check">
                     <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="input_multilokasi" id="gridRadios1" value="<?=$form[0]['multilokasi']?>" checked disabled>
                        Ya
                     </label>
                  </div>
               </div>
                </div>
                 
               </div>
               
            </div>
         </div>
      </div>


      <div class="masonry-item col-md-10 offset-md-1">
         <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">D. RUANG LINGKUP SERTIFIKASI YANG DIAJUKAN</h6>
            <div class="mT-30">
               <div class="form-group">
                      <input required="required" type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Kegiatan/proses pada organisasi yang ingin mendapatkan sertifikasi" name="input_ruanglingkup_sertifikasi" value="<?=$form[0]['ruanglingkup_sertifikasi']?>" disabled>
                      <small id="emailHelp" class="form-text text-muted">
                      (Kegiatan/proses pada organisasi yang ingin mendapatkan sertifikasi)
                    </small>
               </div>
            </div>
         </div>
      </div>


      <div class="masonry-item col-md-10 offset-md-1">
        <div class="bgc-white p-20 bd">
          <h6 class="c-grey-900">E. INFORMASI TAMBAHAN</h6>
          <div class="form-group">
            <label>1. Apakah organisasi yang akan disertifikasi merupakan bagian dari organisasi lain/grup?</label>
            <div class="form-row">
              <div class="col-md-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="input_info_tambahan1" id="gridRadios3" value="Ya" checked disabled>
                    <?=$form[0]['info_tambahan1']?>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>2. Apakah ada proses yang dikerjakan pihak kedua/ketiga (proses dikerjakan di luar organisasi/outsource/subkontrak)?</label>
            <div class="form-row">
              <div class="col-md-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="input_info_tambahan2" id="gridRadios3" checked disabled>
                    <?=$form[0]['info_tambahan2']?>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>3. Apakah ada kegiatan merancang atau desain?</label>
            <div class="form-row">
              <div class="col-md-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="input_info_tambahan3" id="gridRadios3" value="Ya" checked disabled>
                    <?=$form[0]['info_tambahan3']?>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>4. Apakah set up sistem manajemen menggunakan konsultan?</label>
            <div class="form-row">
              <div class="col-md-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="input_info_tambahan4" id="gridRadios3" value="Ya" checked disabled>
                    <?=$form[0]['info_tambahan4']?>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label>5. Apakah sistem atau proses kegiatan organisasi menggunakan aplikasi/sistem secara elektronik?</label>
           <div class="form-row">
              <div class="col-md-3">
                <div class="form-check">
                  <label class="form-check-label"> 
                    <input class="form-check-input" type="radio" name="input_info_tambahan5" id="gridRadios3" value="Ya" checked disabled>
                    <?=$form[0]['info_tambahan5']?>
                  </label>
                </div>
              </div>
            </div>
          </div> 

          <div class="form-group">
            <label>6. Apakah organisasi pernah mendapatkan sertifikasi terkait produk/jasa/sistem manajemen yang lain?</label>
           <div class="form-row">
              <div class="col-md-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="input_info_tambahan6" id="gridRadios3" value="Ya" checked disabled>
                    <?=$form[0]['info_tambahan6']?>
                  </label>
                </div>
              </div>
            </div>
          </div>

          <label>7. Mohon tuliskan peraturan perundangan atau peraturan lainnya yang terkait dengan lingkup yang akan disertifikasi.</label>
          <div class="form-group">
            <input required="required" type="text" class="form-control" name="input_info_tambahan7" value="<?=$form[0]['info_tambahan7']?>" disabled>
          </div>

          <label>8. Sudah berapa lama sistem yang ingin disertifikasi ini telah berjalan?</label>
          <div class="form-group">
            <input required="required" type="text" class="form-control" name="input_info_tambahan8" value="<?=$form[0]['info_tambahan8']?>" disabled>
          </div>
        </div>
      </div>

      <div class="masonry-item col-md-10 offset-md-1">
         <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">F. DOKUMEN PERSYARATAN</h6>
            <div class="mT-20">
               <div class="form-group">
                  <label for="exampleFormControlFile1"><b>1. Akte notaris atau legalitas pemohon/organisasi</b></label><br>
                  <span class="icon-holder">
                    <i class="c-black-500 fa fa-download"></i>
                  </span>
                  <a href="<?php echo base_url('uploads/formDocs/'.$form[0]['file_dokumen_persyaratan1']); ?>" target="_blank"><?php echo $form[0]['file_dokumen_persyaratan1']; ?></a>
                </div>
            </div>
            <div class="mT-20">
               <div class="form-group">
                  <label><b>2. Struktur Organisasi</b></label><br>
                  <span class="icon-holder">
                    <i class="c-black-500 fa fa-download"></i>
                  </span>
                  <a href="<?php echo base_url('uploads/formDocs/'.$form[0]['file_dokumen_persyaratan2']); ?>" target="_blank"><?php echo $form[0]['file_dokumen_persyaratan2']; ?></a>
                </div>
            </div>
            <div class="mT-20">
               <div class="form-group">
                  <label for="exampleFormControlFile1"><b>3. Interaksi proses/business process organisasi</b></label><br>
                  <span class="icon-holder">
                    <i class="c-black-500 fa fa-download"></i>
                  </span>
                  <a href="<?php echo base_url('uploads/formDocs/'.$form[0]['file_dokumen_persyaratan3']); ?>" target="_blank"><?php echo $form[0]['file_dokumen_persyaratan3']; ?></a>
                </div>
            </div>
            <div class="mT-20">
               <div class="form-group">
                  <label for="exampleFormControlFile1"><b>4. Layout area pabrik/organisasi</b></label><br>
                  <span class="icon-holder">
                    <i class="c-black-500 fa fa-download"></i>
                  </span>
                  <a href="<?php echo base_url('uploads/formDocs/'.$form[0]['file_dokumen_persyaratan4']); ?>" target="_blank"><?php echo $form[0]['file_dokumen_persyaratan4']; ?></a>
                </div>
            </div>
            <div class="mT-20">
               <div class="form-group">
                  <label for="exampleFormControlFile1"><b>5. Rekaman internal audit dan tinjauan manajemen terakhir</b></label><br>
                  <span class="icon-holder">
                    <i class="c-black-500 fa fa-download"></i>
                  </span>
                  <a href="<?php echo base_url('uploads/formDocs/'.$form[0]['file_dokumen_persyaratan5']); ?>" target="_blank"><?php echo $form[0]['file_dokumen_persyaratan5']; ?></a>
                </div>
            </div>
         </div>
      </div>

      <!-- <div class="form-group">
        <label>4. Apakah set up sistem manajemen menggunakan konsultan?</label>
        <div class="form-row">
          <div class="col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="input_info_tambahan4" id="gridRadios3" value="Ya">
                Ya
              </label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="input_info_tambahan4" id="gridRadios3" value="Tidak">
                Tidak
              </label>
            </div>
          </div>
        </div>
      </div> -->


      <div class="masonry-item col-md-10 offset-md-1">
         <div class="bgc-white p-20 bd text-center">
            <div class="mT-30">
               <div class="form-group">
                  <a href="<?php echo base_url(). 'ApplicationForm/list'?>" >
                      <button type="button" class="btn cur-p btn-primary" title="Hapus">
                        Kembali
                      </button>
                    </a>
                </div>
            </div>
         </div>
      </div>


   </div>
</form>

<script>
//Add Input Fields
$(document).ready(function() {
    var max_fields = 10; //Maximum allowed input fields 
    var wrapper    = $(".wrapper"); //Input fields wrapper
    var add_button = $(".add_fields"); //Add button class or ID
    var x = 1; //Initial input field is set to 1
   
   //When user click on add input button
   $(add_button).click(function(e){
        e.preventDefault();
      //Check maximum allowed input fields
        if(x < max_fields){ 
            x++; //input field increment
          //add input field
            $(wrapper).append('<div><input type="text" name="input_array_name[]" placeholder="Input Text Here" /> <a href="javascript:void(0);" class="remove_field">Remove</a></div>');
        }
    });
   
    //when user click on remove button
    $(wrapper).on("click",".remove_field", function(e){ 
        e.preventDefault();
      $(this).parent('div').remove(); //remove inout field
      x--; //inout field decrement
    })
});

$("#example1").change(function() {
    $("#info4").val($(this).find('option:selected').data('info4'));
    $("#info5").val($(this).find('option:selected').data('info5'));
    $("#info6").val($(this).find('option:selected').data('info6'));
}); // trigger once if needed

</script>