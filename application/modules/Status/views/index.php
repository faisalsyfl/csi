<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Status</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <?php 
          if ($this->session->flashdata('success')) {
              echo $this->session->flashdata('success');
          }
          if ($this->session->flashdata('error')) {
              echo $this->session->flashdata('error');
          }
        ?>
        <form>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">No Kontrak</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="XXX/XXXX/XXXX">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Organisasi</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword3" value="<?=$form['nama_organisasi']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Standar</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3">
            </div>
          </div>          

        </form>
        <table id="" class="table table-bordered text-nowrap">
          <col width="3%">
          <col width="5%">
          <col width="7%">
            <thead class="text-center">
              <tr>
                <th>No.</th>
                <th>Proses</th>
                <th>Nomor Dokumen</th>
                <th>Nama Dokumen</th>
                <th colspan="2">Download Dokumen</th>
                <th >Aksi</th>
              </tr>
            </thead>
            <?=form_open_multipart('Status/statusSave') ?>
            <tbody>
                <tr>
                  <td rowspan="2">1</td>
                  <td rowspan="2">Aplikasi Sertifikasi</td>
                  <td>F.SC-02/Rev.3</td>
                  <td>Formulir Aplikasi</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docsx1"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Kelengkapan Dokumen</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docsx2[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>                
                <tr>
                  <td>2</td>
                  <td>Kajian Sertifikasi</td>
                  <td>F.SC-03/Rev.4</td>
                  <td>Kajian Aplikasi Sertifikasi</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs2[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td rowspan="4">3</td>
                  <td rowspan="4">Penawaran dan Pembayaran</td>
                  <td></td>
                  <td>Penawaran</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs3[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-04/Rev.1</td>
                  <td>Perjanjian</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs3[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>                
                <tr>
                  <td></td>
                  <td>Invoice</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs3[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>                
                <tr>
                  <td></td>
                  <td>Kuitansi</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs3[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td rowspan="7">4</td>
                  <td rowspan="7">Audit Tahap 1</td>                  
                  <td>F.SC-05/Rev.0</td>
                  <td>Notifikasi Tim Audit Tahap 1</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs4[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-06/Rev.1</td>
                  <td>Rencana Audit Tahap 1</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs4[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-08/Rev.0</td>
                  <td>Audit Kecukupan</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs4[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-07/Rev.0</td>
                  <td>Daftar Hadir Tahap 1</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs4[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-14/Rev.3</td>
                  <td>Laporan Ketidaksesuaian</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs4[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-10/Rev.0</td>
                  <td>Laporan Audit Tahap 1</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs4[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-15/Rev.0</td>
                  <td>Verifikasi Ketidaksesuaian Tahap 1</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs4[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>                                     
                <tr>
                  <td rowspan="10">5</td>
                  <td rowspan="10">Audit Tahap 2</td>                  
                  <td>F.SC-05/Rev.0</td>
                  <td>Notifikasi Tim Audit Tahap 2</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-06/Rev.1</td>
                  <td>Rencana Audit Tahap 2</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-07/Rev.0</td>
                  <td>Daftar Hadir Tahap 2</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-12/Rev.0</td>
                  <td>Lembar Periksa Audit Tahap 2</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-14/Rev.3</td>
                  <td>Laporan Ketidaksesuaian Tahap 2</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-16/Rev.0</td>
                  <td>Laporan Audit Tahap 2</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F. Sert-03/Rev.0</td>
                  <td>Buku Harian Auditor</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F. Sert-03/Rev.0</td>
                  <td>Pemantauan Lapangan Personel Sertifikasi</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-15/Rev.0</td>
                  <td>Verifikasi Ketidaksesuaian Tahap 2</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>            
                <tr>
                  <td>F. Sert-07/Rev.0</td>
                  <td>Keterangan Bebas Konflik Kepentingan</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs5[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td rowspan="2">6</td>
                  <td rowspan="2">Evaluasi</td>
                  <td>F.SC-02/Rev.3</td>
                  <td>Notifikasi Tim Evaluasi</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs6[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>  
                <tr>
                  <td>F.SC-02/Rev.3</td>
                  <td>Laporan Evaluasi</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs6[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>  
                <tr>
                  <td rowspan="4">7</td>
                  <td rowspan="4">Sertifikat</td>
                  <td></td>
                  <td>Memo Dinas Penerbitan Sertifikat</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs7[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr> 
                <tr>
                  <td></td>
                  <td>Form Verifikasi Sertifikat/Draft Sertifikat</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs7[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>Sertifikat</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs7[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
                <tr>
                  <td>F.SC-22/Rev.0</td>
                  <td>Program Survailen</td>
                  <td><i style="color:red;">belum di unggah</i></td>
                  <td><input type="file" name="docs7[]"></td>
                  <td>
                    <button type="submit" class="btn btn-primary" >Save</button>                    
                  </td>
                </tr>
            </tbody>
          </table>
          <?=form_close(); ?>             
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