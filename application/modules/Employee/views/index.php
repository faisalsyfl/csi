<div class="container-fluid">
  <!--<h4 class="c-grey-900 mT-10 mB-30">Data Pegawai</h4>-->
  <div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <h4 class="c-grey-900 mB-20">Bootstrap Data Table</h4>
        <button class="btn btn-primary pull-right">Tambah Pegawai Baru</button><br><br>
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
            <tbody>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('dataTable').DataTable({
      buttons : ['coppy', 'excel', 'pdf'],
      dom : 'Bflrtp'
    })
  });
</script>