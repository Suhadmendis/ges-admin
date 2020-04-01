
<link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
<section class="content container-fluid" id="app">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ en_name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="btn-group" style="padding: 10px;">
              <a class="btn btn-success" onclick="save_info();">Save</a>
              <a class="btn btn-primary" onclick="window.open('search_m_payment.php?IDF=Master', 'mywin', 'width=800, height=700');" class="btn btn-info btn-sm">Search</a>
              <a class="btn btn-danger" onclick="">Cancel</a>
              
              
              
            </div>


                
            <!-- form start -->
            <form role="form">
              <div class="box-body col-md-4">


               <div class="form-group" >
                  <label for="exampleInputEmail1" >Reference No</label>
                  <input type="text" class="form-control" id="REF" v-model="REF" placeholder="Reference No">
                </div>


                <div class="form-group">
                    <label for="first_name" >Player</label>
                    <input type="text" class="form-control" id="player_ref" placeholder="Player">
                  </div>


                   <div class="form-group">
                    <label for="date" >Date</label>
                    <input type="text" class="form-control datepicker" value="<?php echo date("Y/m/d");?>" id="mdate" placeholder="Date">
                  </div>
                  
                  <div class="form-group">
                    <label for="amount" >Amount</label>
                    <input type="number" class="form-control" id="amount" placeholder="Amount">
                  </div>
                  
                  
                


              </div>
              <!-- /.box-body -->

              <div class="box-footer">

              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
       
       


      </div>

</section>
<script src="js/m_course.js"></script>
<!-- <script>getdt();</script> -->



