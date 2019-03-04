<!-- ### $App Screen Content ### -->
<style type="text/css">
  @media (min-width: 1200px) {
    .seven-cols .col-md-1,
    .seven-cols .col-sm-1,
    .seven-cols .col-lg-1 {
      width: 14.285714285714285714285714285714%;
      *width: 14.285714285714285714285714285714%;
    }
  }
  /* 14% = 100% (full-width row) divided by 7 */
2,1,4,7,10,2,4
  img{
    max-width: 100%;
  }
</style>
<!-- <?php print_r($sertifikasi) ?> -->
<!-- <?php print_r($status) ?> -->

<div class="masonry-item col-md-12">
  <h3 class="c-grey-900">Progres Sertifikasi</h3>
  <?php $no = 1; foreach ($sertifikasi as $i => $a){ ?>
   <div class="bgc-white p-20 bd  mT-10">
      <div class="mT-30">
         <div class="row">
           <div class="col-md-12">
             <div class="layer">
                <h5 class="mB-5">
                  <?php echo "CERT-M000".$a->id_form."/".$a->sertifikasi_manajemen_diminati."/".$a->nama_organisasi; ?>
                </h5>
                
              </div>
           </div>
         </div>


        <div class="row mT-10">
          <div class="col">
            <small class="fw-600 c-grey-700">Aplikasi Sertifikasi</small>
          <span class="pull-right c-grey-600 fsz-sm"><?php if(isset($track[$a->id_form][1])) echo $track[$a->id_form][1]/2*100;   ?>%</span>
          <div class="progress mT-10">
            <div class="progress-bar bgc-green-00" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($track[$a->id_form][1])) echo $track[$a->id_form][1]/2*100;   ?>%;"> <span class="sr-only"><?php if(isset($track[$a->id_form][1])) echo $track[$a->id_form][1]/2*100;   ?>% Complete</span></div>
          </div>
          </div>

          <div class="col">
            <small class="fw-600 c-grey-700">Kajian Aplikasi</small>
          <span class="pull-right c-grey-600 fsz-sm"><?php if(isset($track[$a->id_form][2])) echo $track[$a->id_form][2]/1*100;   ?>%</span>
          <div class="progress mT-10">
            <div class="progress-bar bgc-green-00" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($track[$a->id_form][2])) echo $track[$a->id_form][2]/1*100;   ?>%;"> <span class="sr-only"><?php if(isset($track[$a->id_form][2])) echo $track[$a->id_form][2]/1*100;   ?>% Complete</span></div>
          </div>
          </div>

          <div class="col">
            <small class="fw-600 c-grey-700">Penawaran</small>
          <span class="pull-right c-grey-600 fsz-sm"><?php if(isset($track[$a->id_form][3])) echo $track[$a->id_form][3]/4*100;   ?>%</span>
          <div class="progress mT-10">
            <div class="progress-bar bgc-green-00" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($track[$a->id_form][3])) echo $track[$a->id_form][3]/4*100;   ?>%;"> <span class="sr-only"><?php if(isset($track[$a->id_form][3])) echo $track[$a->id_form][3]/4*100;   ?>% Complete</span></div>
          </div>
          </div>

          <div class="col">
            <small class="fw-600 c-grey-700">Audit Tahap 1</small>
            <span class="pull-right c-grey-600 fsz-sm"><?php if(isset($track[$a->id_form][4])) echo round($track[$a->id_form][4]/7*100,0);   ?>%</span>
            <div class="progress mT-10">
              <div class="progress-bar bgc-green-00" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($track[$a->id_form][4])) echo round($track[$a->id_form][4]/7*100,0);   ?>%;"><span class="sr-only"><?php if(isset($track[$a->id_form][4])) echo round($track[$a->id_form][4]/7*100,0);   ?>% Complete</span></div>
            </div>
          </div>

          <div class="col">
            <small class="fw-600 c-grey-700">Audit Tahap 2</small>
            <span class="pull-right c-grey-600 fsz-sm"><?php if(isset($track[$a->id_form][5])) echo $track[$a->id_form][5]/10*100;   ?>%</span>
            <div class="progress mT-10">
              <div class="progress-bar bgc-green-00" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($track[$a->id_form][5])) echo $track[$a->id_form][5]/10*100;   ?>%;"><span class="sr-only"><?php if(isset($track[$a->id_form][5])) echo $track[$a->id_form][5]/10*100;   ?>% Complete</span></div>
            </div>
          </div>

          <div class="col">
            <small class="fw-600 c-grey-700">Evaluasi</small>
            <span class="pull-right c-grey-600 fsz-sm"><?php if(isset($track[$a->id_form][6])) echo $track[$a->id_form][6]/10*100;   ?>%</span>
            <div class="progress mT-10">
              <div class="progress-bar bgc-green-00" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($track[$a->id_form][6])) echo $track[$a->id_form][6]/10*100;   ?>%;"><span class="sr-only"><?php if(isset($track[$a->id_form][6])) echo $track[$a->id_form][6]/10*100;   ?>% Complete</span></div>
            </div>
          </div>

          <div class="col">
            <small class="fw-600 c-grey-700">Sertifikat</small>
            <span class="pull-right c-grey-600 fsz-sm"><?php if(isset($track[$a->id_form][7])) echo $track[$a->id_form][7]/4*100;   ?>%</span>
            <div class="progress mT-10">
              <div class="progress-bar bgc-green-00" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?php if(isset($track[$a->id_form][7])) echo $track[$a->id_form][7]/4*100;   ?>%;"> <span class="sr-only"><?php if(isset($track[$a->id_form][7])) echo $track[$a->id_form][7]/4*100;   ?>% Complete</span></div>
            </div>
          </div>

        </div>
      </div>
   </div>
   <?php } ?>
</div>


    
    
    

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
    $("#info4").val("+62222033755");
    $("#info5").val("http://www.biofarma.co.id/");
    $("#info6").val("BUMN");
}); // trigger once if needed

</script>