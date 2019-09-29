
<?php include("headerMore.php"); ?>
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style.css">
<link rel="stylesheet" type="text/css" href="site/css/templatemo-style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400"> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

<div class="container">
    <h2 align="center" class ="pad-30">ĐỊNH HƯỚNG BẢN THÂN</h2>
    <div style="width: 100%; margin:0 auto">
        <script>
            $(document).ready(function(){
                var form_data = "";
                $('#sothich').multiselect({
                    nonSelectedText:'Sở thích',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth:'500px',
                });

                $('#diachi').multiselect({
                    nonSelectedText: 'Địa điểm',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth:'500px',
                });

                $('#quatrinh').multiselect({
                    nonSelectedText: 'Tổ hợp môn ',
                    enableFiltering: true,
                    enableCaseInsensitiveFiltering: true,
                    buttonWidth:'500px',
                    });
                
                $('#framework_form').on('submit', function(event){
                    //event.preventDefault();
                    var form_data = $(this).serialize();
                    //alert(form_data);
                    document.getElementById("ds").value=form_data;                   
                });

                // remove class btn

            });

        </script>
            <?php 

        if($_SERVER['REQUEST_METHOD']=='POST')
        {
            $a=$_POST['ds'];
            //echo $a;
        }
        ?>
        <form method="POST" id="framework_form" enctype="multipart/form-data">
            <div class="row btn-sothich">
                <label class ="col-3 style-title-ds" style="font-size:15px;">Sở Thích</label>

                <select class = "col-9" id="sothich" name="sothich" multiple >
                    <option  style="font-size:15px;" value="1">Công nghệ thông tin</option>
                    <option  style="font-size:15px;" value="2">Y</option>
                    <option  style="font-size:15px;" value="3">Sư phạm</option>
                </select>
            </div>
            <div class= "row btn-diadiem">
                <label class ="col-3 style-title-ds" style="font-size:15px;">Địa điểm</label> 
                <select class ="col-9" id="diachi" name="diachi" multiple class="mdb-select md-form">
                        <option value="1">TP Hồ Chí Minh</option>
                        <option value="1">Hà Nội</option>               
                </select>  
            </div>
            <div class ="row btn-tohop">     
                    <label class ="col-3 style-title-ds" style="font-size:15px;">Tổ hợp môn</label>
                <select class ="col-9" id="quatrinh" name="quatrinh" multiple class="mdb-select md-form">
                    <option value="1">A</option>
                    <option value="1">A</option>
                </select>
            </div>
            <div class= "row">
                <div class="form-group" align="right">
                    <input type="hidden" id="ds" name="ds" value="">
                    <input class="btn btn-background-blue-bold" name="submit" value="Chọn"/> <!--type="submit"--> 
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="tm-section" id="tm-section-5" style="display: none;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h3 class="blue-text">Danh sách trường tham khảo</h3>
        
                <table class="table table-striped tm-full-width-large-table">
                    <thead>
                        <tr>
                            <!-- <th>Title</th> -->
                            <th>Tên Trường</th>
                            <th>Khoa</th>
                            <th>Địa chỉ</th>
                            <th>Tổ hợp môn</th>
                            <th>Điểm Chuẩn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!-- <td>Row 1</td> -->
                            <td>Đại học công nghệ thông tin</td>
                            <td>Công nghệ phần mềm</td>
                            <td>TP Hồ Chí Minh</td>
                            <td>A00, A01</td>
                            <td>25.3</td>
                        </tr>
                        <tr>
                            <!-- <td>Row 2</td> -->
                            <td>Đại học bách khoa tp HCM</td>
                            <td>Công nghệ thông tin</td>
                            <td>TP Hồ Chí Minh</td>
                            <td>A00, A01</td>
                            <td>25.3</td>
                        </tr>
                        <tr>
                            <!-- <td>Row 3</td> -->
                            <td>Đại Học Khoa Học Tự Nhiên</td>
                            <td>Khoa học máy tính</td>
                            <td>TP Hồ Chí Minh</td>
                            <td>A00, A01</td>
                            <td>24.6</td>
                        </tr>
                        <tr>
                            <!-- <td>Row 4</td> -->
                            <td>Đại Học Khoa Học Tự Nhiên</td>
                            <td>Toán học</td>
                            <td>TP Hồ Chí Minh</td>
                            <td>A00, A01</td>
                            <td>16.1</td>
                        </tr>
                        <tr>
                            <!-- <td>Row 5</td> -->
                            <td>TRƯỜNG ĐẠI HỌC SƯ PHẠM</td>
                            <td>Sư phạm Tin học</td>
                            <td>Đà Nẵng</td>
                            <td>A00, A01</td>
                            <td>19,40</td>
                        </tr>
                    </tbody>        
                </table>
            </div>
        </div> <!-- tm-section -->        
    </div>
</div>
<div class="container">
    <div class="row">
        
    </div>
</div>
<script type="text/javascript">
    $('.btn-background-blue-bold').click(function(){
        $('.tm-section').show();
    })
</script>