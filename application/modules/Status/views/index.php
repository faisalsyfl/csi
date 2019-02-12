<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Status</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <!--<h4 class="c-grey-900 mB-20">Data Pegawai</h4>-->
        <?php //var_dump($employee[0]-employeeId);?>
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default">Add New Employee</button><br><br>
        <?php 
          if ($this->session->flashdata('success')) {
              echo $this->session->flashdata('success');
          }
          if ($this->session->flashdata('error')) {
              echo $this->session->flashdata('error');
          }
        ?>
        <table id="" class="table table-bordered table-responsive text-nowrap">
            <thead class="text-center">
              <tr>
                <th colspan="4"></th>
                <th colspan="2">APLIKASI SERTIFIKASI</th>
                <th colspan="1">KAJIAN APLIKASI</th>
                <th colspan="4">PENAWARAN & PEMBAYARAN</th>
                <th colspan="7">AUDIT TAHAP 1</th>
                <th colspan="10">AUDIT TAHAP 2</th>
                <th colspan="2">Evaluasi</th>
                <th colspan="5">Sertifikat</th>
                <th colspan="1">Action</th>
              </tr>
              
              
            </thead>

            <!-- <tfoot class="text-center">
              <tr>
                <th colspan="1">No</th>
                <th colspan="2">APLIKASI SERTIFIKASI</th>
                <th colspan="1">KAJIAN APLIKASI</th>
                <th colspan="4">PENAWARAN & PEMBAYARAN</th>
                <th colspan="7">AUDIT TAHAP 1</th>
                <th colspan="10">AUDIT TAHAP 2</th>
                <th colspan="2">Evaluasi</th>
                <th colspan="5">Sertifikat</th>
              </tr>
              
              
            </tfoot> -->

            <tbody>
              <?php $no = 1; foreach ($status as $i => $a){ ?>
              <tr class="text-center">
                <th colspan="4"></th>
                <th>F.SC-02/Rev.3<br>Formulir Aplikasi</th>
                <th>- <br>Kelengkapan Dokumen</th>
                <th>F.SC-03/Rev.4<br>Kajian Aplikasi Sertifikasi</th>

                <th>-<br>Penawaran</th>
                <th>F.SC-04/Rev.1<br>Perjanjian Sertifikasi</th>
                <th>-<br>Invoice</th>
                <th>-<br>Kuitansi</th>

                <th>F.SC-05/Rev.0<br>Notifikasi Tim Audit Tahap 1</th>
                <th>F.SC-06/Rev.1<br>Rencana Audit Tahap 1</th>
                <th>F.SC-07/Rev.0<br>Daftar Hadir Tahap 1</th>
                <th>F.SC-08/Rev.0<br>Audit Kecukupan</th>
                <th>F.SC-14/Rev.0<br>Laporan Ketidaksesuaian (LKS) Tahap 1</th>
                <th>F.SC-10/Rev.1<br>Laporan Audit Tahap 1</th>
                <th>F.SC-15/Rev.0<br>Verifikasi Ketidaksesuaian Tahap 1</th>

                <th>F.SC-05/Rev.0<br>Notifikasi Tim Audit Tahap 2</th>
                <th>F.SC-11/Rev.1<br>Rencana Audit Tahap 2</th>
                <th>F.SC-07/Rev.0<br>Daftar Hadir Tahap 2 (Opening & Closing)</th>
                <th>F.SC-12/Rev.0<br>Lembar Periksa Audit Tahap 2</th>
                <th>F.SC-14/Rev.0<br>Laporan Ketidaksesuaian (LKS) Tahap 2</th>
                <th>F.SC-16/Rev.2<br>Laporan Audit Tahap </th>
                <th>F 4.1.2.3, Rev.4<br>Buku Harian Auditor</th>
                <th>F. Sert-03/Rev.0<br>Pemantauan Lapangan Personel Sertifikasi</th>
                <th>F.SC-15/Rev.0<br>Verifikasi Ketidaksesuaian Tahap 2</th>
                <th>F. Sert-07/Rev.0<br>Keterangan Bebas Konflik Kepentingan Tahap</th>

                <th>F.SC-17/Rev.0<br>Notifikasi Tim Evaluasi</th>
                <th>F.SC-18/Rev.2<br>Laporan Evaluasi</th>

                <th>-<br>Form Verifikasi Sertifikat</th>
                <th>-<br>Memo Dinas Penerbitan Sertifikat</th>
                <th>-<br>Form Verifikasi Sertifikat/Draft</th>
                <th>-<br>Sertifikat</th>
                <th>F.SC-22/Rev.0<br>Program Survailen</th>
              </tr>

              <form method="POST" action="<?php echo base_url();?>Status/updateStatus">
              <tr class="text-center">
                <th colspan="4"><?php echo "CERT-M000".$a->formId ?></th>
                <!-- Aplikasi Sertifikasi -->
                <?php $aplikasiSertifikasi = explode(",",$a->aplikasiSertifikasi);?>
                <td><input type="checkbox" name="inputAplikasiSertifikasi1" <?php if($aplikasiSertifikasi[0] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAplikasiSertifikasi2" <?php if($aplikasiSertifikasi[1] == 1){echo "checked";} ?>></td>
                <!-- Kajian Aplikasi -->
                <?php $kajianAplikasi = explode(",",$a->kajianAplikasi);?>
                <td><input type="checkbox" name="inputKajianAplikasi" <?php if($kajianAplikasi[0] == 1){echo "checked";} ?>></td>
                <!-- Penawaran -->
                <?php $penawaran = explode(",",$a->penawaran);?>
                <td><input type="checkbox" name="inputPenawaran[]" <?php if($penawaran[0] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputPenawaran[]" <?php if($penawaran[1] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputPenawaran[]" <?php if($penawaran[2] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputPenawaran[]" <?php if($penawaran[3] == 1){echo "checked";} ?>></td>
                <!-- Audit Tahap 1 -->
                <?php $auditTahap1 = explode(",",$a->auditTahap1);?>
                <td><input type="checkbox" name="inputAuditTahap1[]" <?php if($auditTahap1[0] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap1[]" <?php if($auditTahap1[1] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap1[]" <?php if($auditTahap1[2] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap1[]" <?php if($auditTahap1[3] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap1[]" <?php if($auditTahap1[4] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap1[]" <?php if($auditTahap1[5] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap1[]" <?php if($auditTahap1[6] == 1){echo "checked";} ?>></td>
                <!-- Audit Tahap 2 -->
                <?php $auditTahap2 = explode(",",$a->auditTahap2);?>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[0] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[1] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[2] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[3] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[4] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[5] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[6] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[7] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[8] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputAuditTahap2[]" <?php if($auditTahap2[9] == 1){echo "checked";} ?>></td>
                <!-- Evaluasi -->
                <?php $evaluasi = explode(",",$a->evaluasi);?>
                <td><input type="checkbox" name="inputEvaluasi[]" <?php if($evaluasi[0] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputEvaluasi[]" <?php if($evaluasi[1] == 1){echo "checked";} ?>></td>
                <!-- Sertifikasi -->
                <?php $sertifikat = explode(",",$a->sertifikat);?>
                <td><input type="checkbox" name="inputSertifikat[]" <?php if($sertifikat[0] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputSertifikat[]" <?php if($sertifikat[1] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputSertifikat[]" <?php if($sertifikat[2] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputSertifikat[]" <?php if($sertifikat[3] == 1){echo "checked";} ?>></td>
                <td><input type="checkbox" name="inputSertifikat[]" <?php if($sertifikat[4] == 1){echo "checked";} ?>></td>
                <td rowspan="2" class="align-middle">
                  <input type="hidden" class="form-control" name="editStatusId" required="">
                  <!-- <a href="<?php echo base_url(). 'Status/updateStatus/'. $a->statusId; ?>" onclick="return confirm('Are you sure want to save this data?')"> -->
                      <button type="submit" class="btn btn-primary btn-md" title="Hapus">
                        Simpan Perubahan
                      </button>
                <!-- </a> -->
                </td>               
              </tr>

              <tr class="text-center">                  
                  <td>No Kontak</td>
                  <td>Nama</td>
                  <td>User</td>
                  <td>Status</td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="file" name="docs[]"></td>
              </tr>
              </form>

              <tr class="text-center">
                  <td colspan="4"></td>
                  <!-- <td><input type="text" name="docs[]"></td>
                  <td><input type="text" name="docs[]"></td>
                  <td><input type="text" name="docs[]"></td>
                  <td><input type="text" name="docs[]"></td> -->
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td>#Status Upload</td>
                  <td></td>
              </tr>

              <tr class="text-center">                  
                  <td colspan="4"></td>
                  <td colspan="31"></td>
              </tr>

              <?php $no++; } ?>
            </tbody>
            <!-- <tbody>
                <tr>
                  <td rowspan="2">1</td>
                  <td rowspan="2">Aplikasi Sertifikasi</td>
                  <td>F.SC-02/Rev.3</td>
                  <td>FORMULIR APLIKASI</td>
                  <td><input type="checkbox" name="status"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td>#Status Upload</td>
                </tr>
                <tr>
                  <td>-</td>
                  <td>KELENGKAPAN DOKUMEN</td>
                  <td><input type="checkbox" name="status"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td>#Status Upload</td>
                </tr>


                <tr>
                  <td>2</td>
                  <td>Kajian Aplikasi</td>
                  <td>F.SC-03/Rev.4</td>
                  <td>KAJIAN APLIKASI SERTIFIKASI</td>
                  <td><input type="checkbox" name="status"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td>#Status Upload</td>
                </tr>

                <tr>
                  <td rowspan="4">3</td>
                  <td rowspan="4">Penawaran & Pembayaran</td>
                  <td>-</td>
                  <td>PENAWARAN</td>
                  <td><input type="checkbox" name="status"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td>#Status Upload</td>
                </tr>
                <tr>
                  <td>-</td>
                  <td>KELENGKAPAN DOKUMEN</td>
                  <td><input type="checkbox" name="status"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td>#Status Upload</td>
                </tr>
                <tr>
                  <td>-</td>
                  <td>KELENGKAPAN DOKUMEN</td>
                  <td><input type="checkbox" name="status"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td>#Status Upload</td>
                </tr>
                <tr>
                  <td>-</td>
                  <td>KELENGKAPAN DOKUMEN</td>
                  <td><input type="checkbox" name="status"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td>#Status Upload</td>
                </tr>
                <tr>
                  <td>-</td>
                  <td>KELENGKAPAN DOKUMEN</td>
                  <td><input type="checkbox" name="status"></td>
                  <td><input type="file" name="docs[]"></td>
                  <td>#Status Upload</td>
                </tr>

            </tbody> -->
          </table>
      </div>
    </div>
  </div>
</div>

<!--Modal Add Employee-->
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
              <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Employee/addEmployee">
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name</label>
                  <input type="text" class="form-control" id="addFirstName" name="addFirstName" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name</label>
                  <input type="text" class="form-control" id="addLastName" name="addLastName" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Username</label>
                  <input type="text" class="form-control" id="addUsername" name="addUsername" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="addPassword" name="addPassword" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">NIP</label>
                <input type="text" class="form-control" id="addNIP" name="addNIP" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="email" class="form-control" id="addEmail" name="addEmail" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Phone Number</label>
                <input type="text" class="form-control" id="addPhone" name="addPhone" required>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
      </div>
  </div>
</div>
<!--End Modal Add Employee-->

<!--Modal Edit Employee-->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Employee</h5>
              <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Employee/editEmployee">
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">First Name</label>
                  <input type="text" class="form-control" id="editFirstName" name="editFirstName" required="">
                  <input type="hidden" class="form-control" id="editEmployeeId" name="editEmployeeId" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Last Name</label>
                  <input type="text" class="form-control" id="editLastName" name="editLastName" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Username</label>
                  <input type="text" class="form-control" id="editUsername" name="editUsername" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="editPassword" name="editPassword" placheholder="Enter New Password">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">NIP</label>
                <input type="text" class="form-control" id="editNIP" name="editNIP" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Email</label>
                <input type="email" class="form-control" id="editEmail" name="editEmail" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Phone Number</label>
                <input type="text" class="form-control" id="editPhone" name="editPhone" required>
              </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
      </div>
  </div>
</div>
<!--End Modal Edit Employee-->

<script type="text/javascript">
  function edit(id){
    $.ajax({
      type: 'GET', 
      url: '<?php echo base_url(); ?>Employee/detailEmployee/'+id, 
      dataType:'json',
      success: function (data) {
        document.getElementById('editEmployeeId').value = data[0].employeeId;
        document.getElementById('editFirstName').value = data[0].employeeFirstName;
        document.getElementById('editLastName').value = data[0].employeeLastName;
        document.getElementById('editUsername').value = data[0].employeeUsername;
        document.getElementById('editNIP').value = data[0].employeeNIP;
        document.getElementById('editEmail').value = data[0].employeeEmail;
        document.getElementById('editPhone').value = data[0].employeePhone;
      },
      error: function(error){
        console.log(error)
      }
    });

  $(document).ready(function(){
    $('.table-responsive').doubleScroll();
  });
  }

  $('#checkboxForm').on('change', function(){
   this.value = this.checked ? 1 : 0;
   // alert(this.value);
  }).change();
</script>