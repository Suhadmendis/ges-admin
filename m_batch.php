
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
              <a class="btn btn-primary" onclick="window.open('search_m_batch.php?IDF=Master', 'mywin', 'width=800, height=700');" class="btn btn-info btn-sm">Search</a>
              <a class="btn btn-danger" onclick="">Cancel</a>
              
              
              
            </div>


                
            <!-- form start -->
            <form role="form">
              <div class="box-body col-md-12">




                    <div class="form-group"></div>
                  <div class="form-group" >
                    <div class="col-sm-2">
                    <label for="exampleInputEmail1" >Reference No</label>
                    </div>
                      <div class="col-sm-2">
                    <input type="text" class="form-control" id="REF" v-model="REF" placeholder="Reference No">
                      </div>
                  </div><br><br>


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="batch_code" >Batch Code</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="batch_code" placeholder="Batch Code">
                    </div>
                  </div><br><br>
                  



                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="batch_name" >Batch Name</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="batch_name" placeholder="Batch Name">
                    </div>
                  </div><br><br>
                  



                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="course_ref" >Course</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="course_ref" placeholder="Course Ref">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="course_code" placeholder="Course Code">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="course_name" placeholder="Course Name">
                    </div>
                  </div><br><br>
                  



                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="des" >Description</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="des" placeholder="Description">
                    </div>
                  </div><br><br>
                  



                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="start_date" >Start Date</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="start_date" placeholder="Start Date">
                    </div>
                  </div><br><br>
                  



                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="day" >Day</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="day" placeholder="Day">
                    </div>
                  </div><br><br>
                  



                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="s_time" >Start Time</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="s_time" placeholder="Start Time">
                    </div>
                  </div><br><br>
                  



                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="e_time" >End Time</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="e_time" placeholder="End Time">
                    </div>
                  </div><br><br>
                  



                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Amount</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="amount" placeholder="Amount">
                    </div>
                  </div><br><br>
                  






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
<script src="js/m_batch.js"></script>
<!-- <script>getdt();</script> -->



