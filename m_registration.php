
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
              <a class="btn btn-primary" onclick="window.open('search_m_registration.php?IDF=Master', 'mywin', 'width=800, height=700');" class="btn btn-info btn-sm">Search</a>
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
                    <label for="first_name" >First name</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First name">
                  </div>
                  
                  <div class="form-group">
                    <label for="last_name" >Last Name</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="guardian_name" >Guardian Name</label>
                    <input type="text" class="form-control" id="guardian_name" placeholder="Guardian Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="guardian_tel" >Guardian Tel</label>
                    <input type="text" class="form-control" id="guardian_tel" placeholder="Guardian Tel">
                  </div>
                  
                  <div class="form-group">
                    <label for="address_1" >Address 1</label>
                    <input type="text" class="form-control" id="address_1" placeholder="Address 1">
                  </div>
                  
                  <div class="form-group">
                    <label for="address_2" >Address 2</label>
                    <input type="text" class="form-control" id="address_2" placeholder="Address 2">
                  </div>
                  
                  <div class="form-group">
                    <label for="tel_1" >Tel 1</label>
                    <input type="text" class="form-control" id="tel_1" placeholder="Tel 1">
                  </div>
                  
                  <div class="form-group">
                    <label for="tel_2" >Tel 2</label>
                    <input type="text" class="form-control" id="tel_2" placeholder="Tel 2">
                  </div>
                  
                  <div class="form-group">
                    <label for="sex" >Sex</label>
                    <input type="text" class="form-control" id="sex" placeholder="sex">
                  </div>
                  
                  <div class="form-group">
                    <label for="dob" >DOB</label>
                    <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control datepicker" id="dob" placeholder="DOB">
                </div>
                    
                  </div>
                  
                  <div class="form-group">
                    <label for="email" >Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email">
                  </div>
                  
                  <div class="form-group">
                    <label for="remark" >Remark</label>
                    <input type="text" class="form-control" id="remark" placeholder="Remark">
                  </div>
                  
                  <div class="form-group">
                    <label for="joineddate" >Joined Date</label>
                    <input type="text" class="form-control datepicker" value="<?php echo date("Y/m/d");?>" id="joineddate" placeholder="Joined Date">
                  </div>
                
                  <div class="checkbox">
                  <label>
                    <input id="active" checked="" type="checkbox"> Active
                  </label>
                  </div>

                  <div class="checkbox">
                  <label>
                    <input id="black_list" type="checkbox"> Black List
                  </label>
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
<script src="js/m_registration.js"></script>




