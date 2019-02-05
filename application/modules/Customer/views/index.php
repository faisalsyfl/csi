<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Customer List</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <!--<h4 class="c-grey-900 mB-20">Data Pegawai</h4>-->
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default">Add New Customer</button><br><br>
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
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>    
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1; foreach ($customer as $i => $a){ ?>
                <tr>
                  <td><?php echo $no.'.'; ?></td>
                  <td><?php echo $a->consumentName; ?></td>
                  <td><?php echo $a->consumentAddress;?></td>
                  <td><?php echo $a->consumentEmail;?></td>
                  <td><?php echo $a->consumentPhone;?></td>
                  <td><?php echo $a->consumentWebsite;?></td>
                  <td align="center">
                    <button type="button" class="btn cur-p btn-info btn-sm" data-toggle="modal" data-target="#modal-edit" title="Edit" onclick="edit('<?php echo $a->consumentId;?>')">
                      <i class="c-deep-blue-500 ti-pencil-alt"></i>
                    </button>
                    <a href="<?php echo base_url(). 'Customer/deleteCustomer/'. $a->consumentId; ?>" onclick="return confirm('You are sure to delete this data?')">
                      <button type="button" class="btn cur-p btn-danger btn-sm" title="Hapus">
                        <i class="c-deep-blue-500 ti-trash"></i>
                      </button>
                    </a>
                  </td>
                </tr>
              <?php $no++; } ?>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

<!--Modal Add Customer-->
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
              <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Customer/addCustomer">
            <div class="modal-body">
              <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="addName" name="addName" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="addAddress" name="addAddress" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Regional</label>
                <input type="text" class="form-control" id="addRegional" name="addRegional" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAddress">Email</label>
                  <input type="email" class="form-control" id="addEmail" name="addEmail" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress">Phone Number</label>
                  <input type="text" class="form-control" id="addPhone" name="addPhone" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAddress">Fax.</label>
                  <input type="text" class="form-control" id="addFax" name="addFax" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress">Website</label>
                  <input type="text" class="form-control" id="addWebsite" name="addWebsite" required>
                </div>
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
<!--End Modal Add Customer-->

<!--Modal Edit Customer-->
<div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
              <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Customer/editCustomer">
          <div class="modal-body">
              <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="text" class="form-control" id="editName" name="editName" required>
                <input type="hidden" class="form-control" id="editConsumentId" name="editConsumentId" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="editAddress" name="editAddress" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Regional</label>
                <input type="text" class="form-control" id="editRegional" name="editRegional" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAddress">Email</label>
                  <input type="email" class="form-control" id="editEmail" name="editEmail" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress">Phone Number</label>
                  <input type="text" class="form-control" id="editPhone" name="editPhone" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAddress">Fax.</label>
                  <input type="text" class="form-control" id="editFax" name="addFax" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress">Website</label>
                  <input type="text" class="form-control" id="editWebsite" name="editWebsite" required>
                </div>
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
<!--End Modal Edit Customer-->

<script type="text/javascript">
  function edit(id){
    $.ajax({
      type: 'GET', 
      url: '<?php echo base_url(); ?>Customer/detailCustomer/'+id, 
      dataType:'json',
      success: function (data) {
        console.log(data)
        document.getElementById('editConsumentId').value = data[0].consumentId;
        document.getElementById('editName').value = data[0].consumentName;
        document.getElementById('editAddress').value = data[0].consumentAddress;
        document.getElementById('editRegional').value = data[0].consumentRegional;
        document.getElementById('editEmail').value = data[0].consumentEmail;
        document.getElementById('editPhone').value = data[0].consumentPhone;
        document.getElementById('editFax').value = data[0].consumentFax;
        document.getElementById('editWebsite').value = data[0].consumentWebsite;
      },
      error: function(error){
        console.log(error)
      }
    });
  }
</script>