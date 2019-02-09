<div class="container-fluid">
  <h4 class="c-grey-900 mT-10 mB-30">Document List</h4>
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
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>File Name</th>
                <th>File</th>
                <th>Employee</th>
                <th>Action</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>File Name</th>
                <th>File</th>
                <th>Employee</th>
                <th>Action</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1; foreach ($document as $i => $a){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $a->documentFilename; ?></td>
                  <td><a href="<?php echo base_url('uploads/documents/'.$a->documentFileUpload); ?>" target="_blank"><?php echo $a->documentFileUpload; ?></a></td>
                  <td><?php echo $a->employeeFirstName.' '.$a->employeeLastName;?></td>
                  <td align="center">
                    <button type="button" class="btn cur-p btn-info btn-sm" data-toggle="modal" data-target="#modal-edit" title="Edit" onclick="edit('<?php echo $a->documentId;?>')">
                      <i class="c-deep-blue-500 ti-pencil-alt"></i>
                    </button>
                    <a href="<?php echo base_url(). 'Document/deleteDocument/'. $a->documentId; ?>" onclick="return confirm('You are sure to delete this data?')">
                      <button type="button" class="btn cur-p btn-danger btn-sm" title="Hapus">
                        <i class="c-deep-blue-500 ti-trash"></i>
                      </button>
                    </a>
                    <a href="<?php echo base_url('uploads/documents/'.$a->documentFileUpload); ?>" download>
                      <button type="button" class="btn cur-p btn-success btn-sm" title="Download">
                        <i class="c-deep-blue-500 ti-download"></i>
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
  function edit(id){
    var temp =''
    $.ajax({
      type: 'GET', 
      url: '<?php echo base_url(); ?>Document/detailDocument/'+id, 
      dataType:'json',
      success: function (data) {
        console.log(data)
        document.getElementById('editDocumentId').value = data[0].documentId;
        //document.getElementById('editFileupload').value = data[0].documentFileUpload;
        document.getElementById('editFilename').value = data[0].documentFilename;
        temp += '<input type="file" id="editFileupload" name="editFileupload">'
        temp += '<input type="hidden" id="old-file" name="old-file" value="'+data[0].documentFileUpload+'"><br>'
        $('#edit-file').html(temp);
      },
      error: function(error){
        console.log(error)
      }
    });
  }
</script>