
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
              <a class="btn btn-primary" onclick="window.open('search_m_lecturer.php?IDF=Master', 'mywin', 'width=800, height=700');" class="btn btn-info btn-sm">Search</a>
              <a class="btn btn-danger" onclick="">Cancel</a>
              
              
              
            </div>


                
            <!-- form start -->
            <form role="form">
              <div class="box-body col-md-12">


                  <div class="form-group"></div>
                <div class="form-group">
                  <div class="col-sm-2">
                    <label for="exampleInputEmail1" >Reference No</label>
                    </div>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="REF" v-model="REF" placeholder="Reference No">
                    </div>
                    <div class="col-sm-2">                    
                    <div class="checkbox">
                    <label>
                      <input id="active" checked="" type="checkbox"> Active
                    </label>
                    </div>
                    </div>
                    
                  </div><br><br>

                    <div class="form-group"></div>
                    <div class="form-group">
                    <div class="col-sm-2">
                        <label for="day" >Lecturer Name</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="lecturer_name" placeholder="Lecturer Name">
                    </div>
                    </div><br><br>
          


                    <div class="form-group"></div>
                    <div class="form-group">
                    <div class="col-sm-2">
                        <label for="day" >Description</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="des" placeholder="Description">
                    </div>
                    </div><br><br>
          


                    <div class="form-group"></div>
                    <div class="form-group">
                    <div class="col-sm-2">
                        <label for="day" >Address 1</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="address_1" placeholder="Address 1">
                    </div>
                    </div><br><br>
          


                    <div class="form-group"></div>
                    <div class="form-group">
                    <div class="col-sm-2">
                        <label for="day" >Address 2</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="address_2" placeholder="Address 2">
                    </div>
                    </div><br><br>
          


                    <div class="form-group"></div>
                    <div class="form-group">
                    <div class="col-sm-2">
                        <label for="day" >Tel 1</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="tel_1" placeholder="Tel 1">
                    </div>
                    </div><br><br>
          


                    <div class="form-group"></div>
                    <div class="form-group">
                    <div class="col-sm-2">
                        <label for="day" >Tel 2</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="tel_2" placeholder="Tel 2">
                    </div>
                    </div><br><br>
          


                    <div class="form-group"></div>
                    <div class="form-group">
                    <div class="col-sm-2">
                        <label for="day" >Email</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="text" class="form-control" id="email" placeholder="Email">
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
<script src="js/m_lecturer.js"></script>
<!-- <script>getdt();</script> -->



