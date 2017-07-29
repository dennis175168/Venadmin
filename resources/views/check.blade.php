<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css" />
  <style>

  </style>
</head>
<body>

@include('layout.header')



<div class="col-sm-9">
      <div class="well" align="center" id="add">
        <h3 style="font-weight:bold;">商家申請審核</h3><h4 style="font-weight:bold;">Check Stores</h4>
      </div>

      

      <div class="well" align="center" id="add">
      <table>
        <tr>
          <td style="width:70%"></td>
          <td>
                <div class="btn-group btn-group-justified" >
                <a href="#" class="btn btn-primary b1">未審核商家</a>
                <a href="#" class="btn btn-primary b2">待驗證商家</a>
                </div>&nbsp;
          </td>
          <!-- <td>
            <div class="input-group" style="margin-top: 20px; margin-bottom:  20px">
              <input type="text" class="form-control" placeholder="Search ">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </td> -->
        </tr>
      </table>
      

      <div class="con1">
          <div> <h4 style="font-weight:bold;">未審核商家</h4><h5 style="font-weight:bold;"></h5></div>
          <div class="thumbnail" style="color:black;padding:2%; margin:2%">
            <table>
                <tr>
                <td style="width:78%"></td>
                <td><input type="button" class="btn btn-danger" value="刪除">&nbsp;</td>
                <td>
                    <div class="input-group" style="margin-top: 20px; margin-bottom:  20px">
                    <input type="text" class="form-control" placeholder="Search ">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    </div>
                </td>
                </tr>
            </table>
            
            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width:10%"></th>
                    <th style="width:26%">編號</th>
                    <th style="width:26%">商家名稱</th>
                    <th style="width:26%">信箱</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td> 
                    <td><label><input type="checkbox" value=""> 01</label></td>
                    <td>Nike</td>
                    <td>john@example.com</td>
                    <td><input type="button" class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#myModal"></td>
                </tr>
                <tr>
                    <td></td> 
                    <td><label><input type="checkbox" value=""> 02</label></td>
                    <td>威尼斯</td>
                    <td>john@example.com</td>
                    <td><input type="button" class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#myModal"></td>
                </tr>
                <tr>
                    <td></td> 
                    <td><label><input type="checkbox" value=""> 03</label></td>
                    <td>Dooley</td>
                    <td>john@example.com</td>
                    <td><input type="button" class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#myModal"></td>
                </tr>
                </tbody>
            </table>
          </div>  
      </div>

      <div class="con2" style="display:none">
          <div> <h4 style="font-weight:bold;">待驗證商家</h4><h5 style="font-weight:bold;"></h5></div>
          <div class="thumbnail" style="color:black;padding:2%; margin:2%">
            
            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width:33%">編號</th>
                    <th style="width:33%">商家名稱</th>
                    <th style="width:33%">信箱</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>01</td>
                    <td>Nuke</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>john@example.com</td>
                </tr>
                </tbody>
            </table>
          </div>  
      </div>
      </div>
</div>





<!-- 小框 -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<script>
  $(".b1").click(function(){
        //alert("Text: " + $("#test").text());
        $('.con2').css('display','none');
        $('.con1').css('display','block');
    });
  $(".b2").click(function(){
        //alert("Text: " + $("#test").text());
        $('.con1').css('display','none');
        $('.con2').css('display','block');
    });
</script>
 
</body>
</html>
