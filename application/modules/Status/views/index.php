<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Employee List</h4>
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
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
                <tr>
                  <td>1</td>
                  <td>Kajian Aplikasi</td>
                  <td><input type="file" name="docs[]"></td>
                  <td><input type="checkbox" name="status"></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Pembayaran</td>
                  <td><input type="file" name="docs[]" style="form-control"></td>
                  <td><input type="checkbox" name="status" style="form-control"></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Kajian Aplikasi</td>
                  <td><input type="file" name="docs[]" style="form-control"></td>
                  <td><input type="checkbox" name="status" style="form-control"></td>
                </tr>                                
                <tr>
                  <td>3</td>
                  <td>Kajian Aplikasi</td>
                  <td><input type="file" name="docs[]" style="form-control"></td>
                  <td><input type="checkbox" name="status" style="form-control"></td>
                </tr>                                
                <tr>
                  <td>3</td>
                  <td>Kajian Aplikasi</td>
                  <td><input type="file" name="docs[]" style="form-control"></td>
                  <td><input type="checkbox" name="status" style="form-control"></td>
                </tr>                                
                <tr>
                  <td>3</td>
                  <td>Kajian Aplikasi</td>
                  <td><input type="file" name="docs[]" style="form-control"></td>
                  <td><input type="checkbox" name="status" style="form-control"></td>
                </tr>                                
                <tr>
                  <td>3</td>
                  <td>Kajian Aplikasi</td>
                  <td><input type="file" name="docs[]" style="form-control"></td>
                  <td><input type="checkbox" name="status" style="form-control"></td>
                </tr>                                
            </tbody>
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
  }
</script>