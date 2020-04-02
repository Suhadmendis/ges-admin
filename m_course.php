
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
              <a class="btn btn-primary" onclick="window.open('search_m_course.php?IDF=Master', 'mywin', 'width=800, height=700');" class="btn btn-info btn-sm">Search</a>
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
                      <label for="amount" >Course Code</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="course_code" placeholder="Course Code">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Course Name</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="course_name" placeholder="Course Name">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Faculty Ref</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="faculty_ref" placeholder="Faculty Ref">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="faculty_name" placeholder="Faculty Name">
                    </div>
                  </div><br><br>
                 

                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Batch Ref</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="batch_ref" placeholder="Batch Ref">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="batch_code" placeholder="Batch Code">
                    </div>
                  </div><br><br>
                  




                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Des</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="des" placeholder="Des">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Level</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="level" placeholder="Level">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Type</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="type" placeholder="Type">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Requirement 1</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="requirement_1" placeholder="Requirement 1">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Requirement 2</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="requirement_2" placeholder="Requirement 2">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Requirement 3</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="requirement_3" placeholder="Requirement 3">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Requirement 4</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="requirement_4" placeholder="Requirement 4">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Requirement 5</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="requirement_5" placeholder="Requirement 5">
                    </div>
                  </div><br><br>
                  


                  <div class="form-group"></div>
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="amount" >Duration</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="duration" placeholder="Duration">
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
<script src="js/m_course.js"></script>
<!-- <script>getdt();</script> -->



