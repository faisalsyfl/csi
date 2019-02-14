<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Organization List</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <!--<h4 class="c-grey-900 mB-20">Data Pegawai</h4>-->
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default">Add New Organization</button><br><br>
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
                <th>No Telepon</th>
                <th>Website</th>
                <th>Jenis Organisasi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>No Telepon</th>
                <th>Website</th>
                <th>Jenis Organisasi</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1; foreach ($organization as $i => $a){ ?>
                <tr>
                  <td><?php echo $no.'.'; ?></td>
                  <td><?php echo $a->organizationName; ?></td>
                  <td><?php echo $a->organizationPhone;?></td>
                  <td><?php echo $a->organizationWebsite;?></td>
                  <td><?php echo $a->organizationType;?></td>
                  <td align="center">
                    <button type="button" class="btn cur-p btn-info btn-sm" data-toggle="modal" data-target="#modal-edit" title="Edit" onclick="edit('<?php echo $a->organizationId;?>')">
                      <i class="c-deep-blue-500 ti-pencil-alt"></i>
                    </button>
                    <a href="<?php echo base_url(). 'Organization/deleteOrganization/'. $a->organizationId; ?>" onclick="return confirm('You are sure to delete this data?')">
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
              <h5 class="modal-title" id="exampleModalLabel">Add Organizaion</h5>
              <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Organization/addOrganization">
            <div class="modal-body">
              <div class="form-group">
                <label for="inputAddress">Nama Organisasi</label>
                <input type="text" class="form-control" id="addName" name="addName" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">No Telepon</label>
                <input type="text" class="form-control" id="addPhone" name="addPhone" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Website</label>
                <input type="text" class="form-control" id="addWebsite" name="addWebsite" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Jenis Organisasi</label>
                <input type="text" class="form-control" id="addWebsite" name="addType" required>
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
              <h5 class="modal-title" id="exampleModalLabel">Update Organisasi</h5>
              <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Organization/editOrganization">
          <div class="modal-body">
              <div class="form-group">
                <label for="inputAddress">Name</label>
                <input type="hidden" class="form-control" id="editOrganizationId" name="editOrganizationId" required>
                <input type="text" class="form-control" id="editName" name="editName" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Phone Number</label>
                <input type="text" class="form-control" id="editPhone" name="editPhone" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Website</label>
                <input type="text" class="form-control" id="editWebsite" name="editWebsite" required>
              </div>
              <div class="form-group">
                <label for="inputAddress">Jenis Organisasi</label>
                <input type="text" class="form-control" id="editType" name="editType" required>
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
    console.log(id);
    $.ajax({
      type: 'GET', 
      url: '<?php echo base_url(); ?>Organization/detailOrganization/'+id, 
      dataType:'json',
      success: function (data) {
        console.log(data)
        document.getElementById('editOrganizationId').value = data[0].organizationId;
        document.getElementById('editName').value = data[0].organizationName;
        document.getElementById('editPhone').value = data[0].organizationPhone;
        document.getElementById('editWebsite').value = data[0].organizationWebsite;
        document.getElementById('editType').value = data[0].organizationType;
      },
      error: function(error){
        console.log(error)
      }
    });
  }
</script>