<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Trang chủ | Education</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <style>
      p {
  color: black;
  margin-top: 10px;
  margin-left: 100px;
} 
font {
  margin-left: 70px;
  margin-bottom:50px;
  font-size: 20px;
  
}
  </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="images/logo-small.png" height="70px" width="100px">
                <p style="color: white;">Trí tuệ nhân tạo</p>
            </div>

            <ul class="list-unstyled components">
                
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Điểm </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="http://localhost:88/BAI_TAP_NHOM-MAIN/guess/diemBTL.php">Điểm BTL</a>
                        </li>
                        <li>
                            <a href="http://localhost:88/BAI_TAP_NHOM-MAIN/guess/diemBTVN.php">Điểm BTVN</a>
                        </li>
                    </ul>
                </li>
        
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Bài tập lớn </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="http://localhost:88/BAI_TAP_NHOM-MAIN/guess/DSachBTL.php"">Danh sách BTL</a>
                        </li>
                        <li>
                            <a href="http://localhost:88/BAI_TAP_NHOM-MAIN/guess/yeucau.php">Yêu câu chung</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="btvn.php">Bài Tập Về Nhà</a>
                </li>
                <li>
                    <a href="http://localhost:88/BAI_TAP_NHOM-MAIN/guess/QLySV.php#">Quản lý sinh viên</a>
                </li>
               
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>                   
                    </button>
                    
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" >
                    <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 30px"></i>
                    <span>Tên người dùng</span> 
                <span class="caret" style="padding-left: 30px"></span></button>
                    <ul class="dropdown-menu" style="padding-left: 20px">
                      <li><a href="#">Thông tin tài khoản</a></li>
                      <li><a href="#">Đổi mật khẩu</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Thoát</a></li>
                    </ul>
              </div>
                    
                </div>
            </nav>
            <font color="blue">YÊU CẦU CHUNG:</font>
              <p>-Yêu cầu SV làm đầy đủ btvn cũng như btl của mình.</p>
              <p>-Không có nhóm nào trùng đề tài.</p>
              <p>-Khuyến nghị các nhóm thiết kế và xây dựng website theo mô hình MVC hoặc sửdụng một framework
          có sẵn của PHP.</p>
              <p>-Yêu cầu các nhóm đảm bảo các vấn đề security được học trên lớp trong sản phẩm của nhóm.</p>
              <p>-Các mô tả về các đề tài sau đây chỉ là gợi ý ở mức cơ bản, sinh viên có thể trao đổi thêm với giáo viên
          về việc phát triển thêm cho hoàn thiện hệ thống</p>
              <p>-Có thể đề xuất thêm/sửa các chức năng cho phù hợp với website.</p>
</body>
</html>
