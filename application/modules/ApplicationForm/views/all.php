<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Daftar Sertifikasi</h4>
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <!--<h4 class="c-grey-900 mB-20">Data Pegawai</h4>-->
        <?php //var_dump($employee[0]-employeeId);?>
        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-default">Add Document</button><br><br>
        <?php 
          if ($this->session->flashdata('success')) {
              echo $this->session->flashdata('success');
          }
          if ($this->session->flashdata('error')) {
              echo $this->session->flashdata('error');
          }
        ?>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0">
            <thead>
              <tr>
                <th>No Sertifikasi</th>
                <th>Jenis</th>
                <th>Auditi</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($form as $ss){ ?>
                <!-- <?php print_r($ss); ?> -->
              <tr>
                <td><?="CERT-M000".$ss->id_form; ?></td>
                <td><?=$ss->sertifikasi_manajemen_diminati;?></td>
                <td><?=$ss->nama_organisasi;?></td>
                <td><?=$ss->status_aplikasi_sertifikasi;?></td>
                <td>
                  <a href="<?=base_url(); ?>Status/index/<?=$ss->id_form; ?>">
                    <button type="button" class="btn cur-p btn-success btn-sm" title="Status">
                      Status
                      <i class="fa fa-tasks"></i>
                    </button> 
                  </a>
                  <a href="" onclick="return confirm('You are sure to delete this data?')">
                    <button type="button" class="btn cur-p btn-danger btn-sm" title="Hapus">
                      Proses
                      <i class="fa fa-arrow-right"></i>
                    </button>
                  </a>                                   
                </td>
              </tr> 
              <?php } ?>
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
              <h5 class="modal-title" id="exampleModalLabel">Add Document</h5>
              <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Document/addDocument">
            <div class="modal-body">
              <div class="form-group">
                <p class="help-block"><i>The file formats received are: image, pdf, docx, doc, excel, csv with a maximum file size of 2 MegaBytes (MB).</i></p>
                <br>
                <input type="file" id="document" name="addFileupload">  
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">File Name</label>
                <input type="Text" class="form-control" id="addFilename" name="addFilename" placeholder="Enter File Name">
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
              <h5 class="modal-title" id="exampleModalLabel">Update Document</h5>
              <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>Document/editDocument">
            <div class="modal-body">
              <div class="form-group">
                <p class="help-block"><i>The file formats received are: image, pdf, docx, doc, excel, csv with a maximum file size of 2 MegaBytes (MB).</i></p>
                <br>
                <div id="edit-file"></div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">File Name</label>
                <input type="Text" class="form-control" id="editFilename" name="editFilename" placeholder="Enter File Name">
                <input type="hidden" class="form-control" id="editDocumentId" name="editDocumentId" placeholder="Enter File Name">
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

</script>