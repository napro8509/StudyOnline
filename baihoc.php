<?php include("headerAdmin.php"); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script type="text/javascript" src="assets/tinymce/tinymce/tinymce.min.js"></script>
 --><!-- <script type="text/javascript" src="assets/tinymce/tiny.js"></script>
 -->  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="site/css/style-admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="container container-contact100 pad-60" id="baiHoc">
    <div class="wrap-contact100 fade-in">
        <?php

        ?>
        <form class="contact100-form validate-form" name="frmbaiviet" method="POST" enctype="multipart/form-data">
            <div class="baihoc-header">
                <div class="baihoc-header-title"><span class="contact100-form-title"><i class="fa fa-book" aria-hidden="true"></i>Thêm bài học</span></div>
                <div class="pad-30">
                    <div>
                        <div class="form-group baihoc-chuong">
                        <label class="label-input100"><i class="fa fa-pencil" aria-hidden="true"></i>Chương</label>
                            <div class="select">
                            <?php $chuong=$_COOKIE['MaChuong'];
                                if(!$chuong)
                                {
                                    $chuong=0;
                            ?>
                            <select id='list'>
                                <option value='0'>Chương</option>
                                <option value='1'>DAO ĐỘNG CƠ HỌC</option>
                                <option value='2'>SÓNG CƠ HỌC</option>
                                <option value='3'>ĐIỆN XOAY CHIỀU</option>
                                <option value='4'>dao động và sóng điện từ</option>
                            </select>
                            <?php
                                }
                                else
                                {
                                    echo "Tên Chương vừa nhập ".$chuong;
                                } 
                                setcookie('MaChuong', '-1');
                            ?>
                            </div>
                         </div>
                    </div>

                     <div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
                        <span class="label-input100"><i class="fa fa-pencil" aria-hidden="true"></i>Tên bài học</span>
                        <input class="input100" type="text"  placeholder="Nhập tên bài học...">
                        <span class=""></span>
                    </div>
                </div>
            </div>
            <div class="baihoc-content">
                <div class="baihoc-header-title"><span class="contact100-form-title"><i class="fa fa-upload" aria-hidden="true"></i>Đăng bài học</span></div>
                <div class="pad-30">
                    <div id='path-group'></div>
                    <!-- <input type="hidden" id="path"> -->
                    <input  type="hidden" id="path" name = "linkfile">
                    <a href="#" id="select-img" title="Chon hinh anh" class="btn-style-general"><i class="fa fa-folder-open-o" aria-hidden="true"></i>Chon file</a>
                    <a href="#" id="remove-img" title="Xoa hinh anh" class="btn-style-remove"><i class="fa fa-trash-o" aria-hidden="true"></i>Xoa file</a>
                    <br/>
                    <div class="baihoc-flex">
                        <span class="label-input100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>Chọn File:</span>
                        <input type="file" name="excel" id="mySelect" onchange="myFunction()"/>
                        <!-- <input type="file" name="excel" id="mySelect"/> -->
                        <div id='link-file'></div>
                    </div>
                    <input type="submit" name="submit" class="btn-style-general" value="Thêm mới"> 
                </div>
    
            </div>
        </form>
        <a href="baihoc_add.php">
            <button class="contact100-form-btn btn-style-general"><i class="fa fa-plus" aria-hidden="true"></i>Tạo bài giảng cho chương khác </button>
        </a>
    </div>
</div>


</body>
</html>

<script>
    
$('a#select-img').click(function(event) {
    event.preventDefault();
    $('#modal-media-imge').modal('show');       
    $('#modal-media-imge').on('hide.bs.modal', function(e) {
        var imgurlsString = $('input#path').val();
        //console.log(imgurlsString);
        if(imgurlsString.includes('","'))
        {
            var imgurlsArray = JSON.parse(imgurlsString);
            console.log(imgurlsArray);
            var divPathGroup = $('#path-group');

            var ip = '<p class="baihoc-small-title">Tiêu đề</p> <input name="{name}" class="form-control dangbaihoc-input" value="" />';
            var inputTemplate = '<input class="form-control" value="{inputVal}" readonly="readonly"/>';
            var buttonTemplate = '<input type="button" class="button-click" value="Xem" id="{index}" /><br/><br/>';
            divPathGroup.empty();            
            var arr={};
            var file=0;
            imgurlsArray.forEach(function(imgurl,index) {
                var newHTML = ip.replace('{name}', 'name'.concat(file)) + inputTemplate.replace('{inputVal}', imgurl) + buttonTemplate.replace('{index}', index)
                divPathGroup.append(newHTML);
                arr[index]=imgurl;
                file = file+1;
            });
            divPathGroup.find('.button-click').click(function(event){
                var div_preview = $('#pre_view');
                div_preview.empty();
                var ID = $(event.currentTarget).attr('id');
                filedoc = arr[ID].includes(".doc");
                filedocx = arr[ID].includes(".docx");
                filepdf = arr[ID].includes(".pdf");
                var link_img=arr[ID].toLowerCase();
                filepng = link_img.includes(".png");
                filejpg = link_img.includes(".jpg");
                filegif = link_img.includes(".gif");
                if(filedoc==true||filedocx==true||filepdf==true)
                {
                    var src = "https://docs.google.com/viewer?url=" + arr[ID] + "&embedded=true";
                    div_preview.append('<iframe style="width: 100%; height: 500px;" src="' + src + '"></iframe>');
                    $('#view-imge').modal('show');
                }
                else if(filepng==true||filejpg==true||filegif==true)
                {
                    var res = arr[ID].indexOf("/uploads");
                    var linkfile = arr[ID].substr(res);
                    var link =  linkfile;
                    div_preview.append('<image src="../StudyOnline' + link + '" style="height: 100%;">');
                    $('#view-imge').modal('show');
                }
                else
                {
                    var res = arr[ID].indexOf("/uploads");
                    var linkfile = arr[ID].substr(res);
                    var link = ".." + linkfile;
                    div_preview.append('<iframe style="width: 100%; height: 500px;" src="../StudyOnline' + linkfile + '"></iframe>');
                    $('#view-imge').modal('show');
                }
            });
        }
        else
        {
            var ip = '<p class="baihoc-small-title">Tiêu đề</p> <input name="name0" class="form-control dangbaihoc-input" value="" />';
            var divPathGroup = $('#path-group');
            var inputTemplate = '<input class="form-control dangbaihoc-input" value="{inputVal}" readonly="readonly"/>';
            var buttonTemplate = '<input type="button" class="button-click btn-style-remove dangbaihoc-input" value="Xem"/>';
            divPathGroup.empty();
            divPathGroup.append(ip+(inputTemplate.replace('{inputVal}', imgurlsString))+ buttonTemplate)
            
            divPathGroup.find('.button-click').click(function(event){
                var link_file = imgurlsString;
                
                var div_preview = $('#pre_view');
                div_preview.empty();
                filedoc = link_file.includes(".doc");
                filedocx = link_file.includes(".docx");
                filepdf = link_file.includes(".pdf");
                var link_img=link_file.toLowerCase();
                filepng = link_file.includes(".png");
                filejpg = link_file.includes(".jpg");
                filegif = link_file.includes(".gif");
                if(filedoc==true||filedocx==true||filepdf==true)
                {
                    var src = "https://docs.google.com/viewer?url=.." + link_file + "&embedded=true";
                    div_preview.append('<iframe style="width: 100%; height: 500px;" src="..' + src + '"></iframe>');
                    $('#view-imge').modal('show');
                }
                else if(filepng==true||filejpg==true||filegif==true)
                {
                    var res = link_file.indexOf("/uploads");
                    var linkfile = link_file.substr(res);
                    var link =  linkfile;
                    div_preview.append('<image src="../StudyOnline' + link + '" style="height: 100%;">');
                    $('#view-imge').modal('show');
                }
                else
                {
                    var res = link_file.indexOf("/uploads");
                    var linkfile = link_file.substr(res);
                    var link =  linkfile;
                    div_preview.append('<iframe style="width: 100%; height: 500px;" src="../StudyOnline' + link + '"></iframe>');
                    $('#view-imge').modal('show');
                }
            });
        }
    });
});
$('a#remove-img').click(function(event){
    event.preventDefault();
    $('input#path').val('');
    var divPathGroup = $('#path-group');
    var inputTemplate = '<input class="form-control" value="{inputVal}" readonly="readonly"/>';
    divPathGroup.empty();
});

// $('input#excel').click(function(event){
//  //event.preventDefault();
//  //$('#modal-media-imge').modal('show');
//  document.getElementById("demo").innerHTML = "Hello World";
// });


function myFunction() {
    //console.log(document.getElementById("mySelect"));
    //console.log(document.getElementById("mySelect").value);
    var x = document.getElementById("mySelect").value;
    var comment = $('.mySelect').val();
    console.log(comment);
    // var fReader = new FileReader();
    // fReader.readAsDataURL(x.files[0]);
    // fReader.onloadend = function(event){
    //     var img = document.getElementById("mySelect");
    //     console.log(img);
    //     img.src = event.target.result;
    // }

    var divPathGroup = $('#link-file');
    var buttonTemplate = '<input type="button" class="button-click btn-style-remove" value="Xem trước"/>';
    divPathGroup.empty();
    divPathGroup.append(buttonTemplate)
    
    divPathGroup.find('.button-click').click(function(event){
        var div_preview = $('#pre_view');
        div_preview.empty();
        div_preview.append('<iframe style="width: 100%; height: 500px;" src="readexcel.php?link='+x+'"></iframe>');
        $('#view-imge').modal('show');
    });
    //document.getElementById("demo").innerHTML = "Hello World";
}

// $('#mySelect').change( function(event) {
//  console.log(this.files[0].mozFullPath);
//  var tmppath = $(this).val();
//  var divPathGroup = $('#link-file');
//  var buttonTemplate = '<input type="button" class="button-click" value="Xem trước"/>';
//  divPathGroup.empty();
//     divPathGroup.append(buttonTemplate)
    
//     divPathGroup.find('.button-click').click(function(event){
//      var div_preview = $('#pre_view');
//      div_preview.empty();
//         div_preview.append('<iframe style="width: 100%; height: 500px;" src="readexcel.php?link='+tmppath+'"></iframe>');
//         $('#view-imge').modal('show');
//     });
// });

</script>

<div class="modal fade" id="modal-media-imge">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Thu Vien</h4>
                <div class="modal-body">
                    <iframe id="iView" src="tinymce/dialog.php?field_id=path" style="border: none;width: 100%; height: 500px;"></iframe>

                </div>
                <div class="model-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button id="select_m" type="button" class="btn btn-default" style="float: right;">Chọn</button>
                </div>
            </div>
        </div>
        <script>
            $(function(){
                let select_m = $('#select_m');
                select_m.on('click', function() {
                    let btnIframe = $('#select_multi', $('#iView').contents());
                    btnIframe.click();
                })
            });
        </script>
        
    </div>
    
</div>
<div class="modal fade" id="view-imge">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <div class="modal-body">
                <div style='height: 500px; width: 100%; display:flex; justify-content: center;   align-items:center;' id='pre_view'></div>

            </div>
            </div>
        </div>
    </div>
    
</div>
