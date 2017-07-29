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
        <h3 style="font-weight:bold;">會員管理 </h3><h4 style="font-weight:bold;">Members</h4>
      </div>

      <div class="well" align="center" id="add">


      <div> <h4 style="font-weight:bold;">所有會員</h4><h5 style="font-weight:bold;">All Members</h5></div>

      <div class="thumbnail" style="color:black;padding:2%; margin:2%; width:70%">
        <table>
          <tr>
          <td style="width:70%"></td>
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
        
        <table class="table table-hover" style="text-align:center" >
            <thead align="center">
            <tr>
                <td style="width:10%"></td>
                <td style="width:40%"><strong>會員編號</strong></td>
                <td style="width:40%"><strong>目前點數</strong></td>
                <td style="width:10%"></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><label><input type="checkbox" value=""></label></td> 
                <td><label>01</label></td>
                <td>10點</td>
                <td><input type="button" class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#myModal"></td>
            </tr>
            <tr>
                <td><label><input type="checkbox" value=""></label></td> 
                <td><label>02</label></td>
                <td>10點</td>
                <td><input type="button" class="btn btn-success" value="編輯 "></td>
            </tr>
            <tr>
                <td><label><input type="checkbox" value=""></label></td> 
                <td><label>03</label></td>
                <td>10點</td>
                <td><input type="button" class="btn btn-success" value="編輯 "></td>
            </tr>
            </tbody>
        </table>
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

 
</body>
</html>
