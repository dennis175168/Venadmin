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
        <h3 style="font-weight:bold;">商家資訊控管 </h3><h4 style="font-weight:bold;">Control Information</h4>
      </div>
</div>

<div class="col-sm-9">
      <div class="well" align="center" id="add">
        <h4 style="font-weight:bold;">所有商家 </h4><h5 style="font-weight:bold;">All Stores</h5>

        <div class="thumbnail" style="color:black;padding:2%; margin:2%">
          <table>
                <tr>
                <td style="width:80%"></td>
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

          <table class="table table-striped">
                <thead>
                <tr>
                    <th style="width:10%"></th>
                    <th style="width:80%"></th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td> 
                    <td>Nike</td>
                    <td><button class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                <tr>
                    <td></td> 
                    <td>威尼斯</td>
                    <td><button class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                <tr>
                    <td></td> 
                    <td>夏慕尼</td>
                    <td><button class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span></button></td>
                </tr>
                </tbody>
          </table>
        </div>
      </div>
</div>


<!-- 小框 -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
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
