<div class="container styleModal">    
    <!-- Modal đăng nhập -->
    <div class="modal fade" id="dangnhap" role="dialog">
      <div class="modal-dialog">        
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class ="color-white">Get Started</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#signIn" role="tab">Đăng ký</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#logIn" role="tab">Đăng Nhập</a>
                      </li>
                  </ul><!-- Tab panes -->
                  <div class="tab-content">
                      <div class="tab-pane active" id="signIn" role="tabpanel">
                          <div class="container"> 
                              <div class="row"> 
                                <div class="col-12 col-sm-12 col-md-12 well well-sm col-md-offset-4">              
                                    <form action="http://hocwebgiare.com" method="post" class="form" role="form"> 
                                          <div class="row"> 
                                                <div class="col-6 col-md-6"> 
                                                      <input class="form-control" name="firstname" placeholder="Họ" required="" autofocus="" type="text"> 
                                                </div> 
                                                <div class="col-6 col-md-6"> 
                                                      <input class="form-control" name="lastname" placeholder="Tên" required="" type="text"> 
                                                 </div> 
                                          </div> 
                                          <input class="form-control" name="youremail" placeholder="Email" type="email"> 
                                          <input class="form-control" name="password" placeholder="Mật khẩu" type="password"> 
                                          <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password">
                                           <label for=""> Ngày sinh</label> 
                                          <div class="row"> 
                                                <div class="col-4 col-md-4"> 
                                                      <select class="form-control">              
                                                              <option value="Day">Ngày</option>           
                                                      </select> 
                                                </div> 
                                                <div class="col-4 col-md-4"> 
                                                      <select class="form-control">              
                                                              <option value="Month">Tháng</option>            
                                                      </select> 
                                                </div> 
                                                <div class="col-4 col-md-4"> 
                                                      <select class="form-control">             
                                                             <option value="Year">Năm</option>           
                                                       </select> 
                                                </div> 
                                          </div> 
<!--                                           <label class="radio-inline">          
                                                <input name="sex" id="inlineCheckbox1" value="male" type="radio">Nam 
                                          </label> 
                                          <label class="radio-inline">          
                                                <input name="sex" id="inlineCheckbox2" value="female" type="radio">Nữ 
                                          </label>  -->
                                          <br> 
                                          <br> 
                                          <button class="btn btn-background-blue-gradian modal-btn-radius" type="submit"> Đăng ký</button> 
                                    </form> 
                                </div> 
                              </div>
                          </div>
                      </div>
                      <div class="tab-pane" id="logIn" role="tabpanel">
                        <div class="container">   
                          <form action="/action_page.php">
                              <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                              </div>
                              <div class="form-group">
                                  <label for="pwd">Password:</label>
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                              </div>
                              <div class="form-group form-check">
                                  <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                  </label>
                              </div>
                              <button type="submit" class="btn btn-background-blue-gradian modal-btn-radius">Submit</button>
                          </form>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-background-blue-gradian modal-btn-radius" data-dismiss="modal">Close</button>
              </div>
          </div>        
      </div>
    </div>    
</div>