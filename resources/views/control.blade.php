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
                <td style=""><a href="control"><input type="button" class="btn btn-default" value="All"></a></td>
                <td>
                    <div class="input-group" style="margin-top: 20px; margin-bottom:  20px">
                    
                    <span class="input-group-btn">
                        <form action="control_search" method="get">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          
                          <input type="text" class="form-control" placeholder="Search" name="search">
                          <input type="submit" class="btn btn-default" value="Go">
                          
                        </form>
                        
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
                @for ($i=0 ;$i<=$sh_count-1;$i++)
                <tr>
                    <td></td> 
                    <td>{{ $sh[$i]->sh_name}}</td>
                    <td><button class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#myModal{{ $sh[$i]->sh_id}}"><span class="glyphicon glyphicon-pencil"></span></button></td>
                    <td>
                      <form action="control_delete" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" value="{{ $sh[$i]->sh_id}}" name="sh_id">
                        <input type="submit" class="btn btn-danger" value="刪除">
                      </form>
                      
                    </td>
                </tr>
                @endfor
                </tbody>
          </table>
        </div>
      </div>
</div>


<!-- 小框 -->
@for ($i=0 ;$i<=$sh_count-1;$i++)
 <div class="modal fade" id="myModal{{ $sh[$i]->sh_id}}" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{ $sh[$i]->sh_name}}</h4>
        </div>
        <div class="modal-body" align="center">
          
          <div class="form-group">
            <div class="form-group">
              <label for="usr">商家名稱:</label><br>
              <h4>{{ $sh[$i]->sh_name}}</h4>
              <hr>
            </div>
            <div class="form-group">
              <label for="usr">商家信箱:</label><br>
              <h4>{{ $sh[$i]->sh_mail}}</h4>
              <hr>
            </div>
              <label for="usr">商家類別</label><br>
              <h4>
              <?php 
                if($sh[$i]->sh_type == 'reject'){
                  ?><p style="color: red">此欄位由商圈系統清空,正等待商家重新編輯</p><?php
                }else{
                  echo $sh[$i]->sh_type;
                }
              ?></h4>
              <form action="control_update" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{ $sh[$i]->sh_id}}" name="sh_id">
                <input type="hidden" value="sh_type" name="column">
                <input type="submit" class="btn btn-danger" value="清空" style="width:60%">
              </form>
              <hr>
            </div>
            <div class="form-group">
              <label for="usr">商家電話:</label><br>
              <h4><?php 
                if($sh[$i]->sh_phone == 'reject'){
                  ?><p style="color: red">此欄位由商圈系統清空,正等待商家重新編輯</p><?php
                }else{
                  echo $sh[$i]->sh_phone;
                }
              ?></h4>
              <form action="control_update" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{ $sh[$i]->sh_id}}" name="sh_id">
                <input type="hidden" value="sh_phone" name="column">
                <input type="submit" class="btn btn-danger" value="清空" style="width:60%">
              </form>
              <hr>
            </div>
            <div class="form-group">
              <label for="usr">商家地址:</label><br>
              <h4><?php 
                if($sh[$i]->sh_address == 'reject'){
                  ?><p style="color: red">此欄位由商圈系統清空,正等待商家重新編輯</p><?php
                }else{
                  echo $sh[$i]->sh_address;
                }
              ?></h4>
              <form action="control_update" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{ $sh[$i]->sh_id}}" name="sh_id">
                <input type="hidden" value="sh_address" name="column">
                <input type="submit" class="btn btn-danger" value="清空" style="width:60%">
              </form>
              <hr>
            </div>
            <div class="form-group">
              <label for="usr">商家介紹:</label><br>
              <h4><?php 
                if($sh[$i]->sh_info == 'reject'){
                  ?><p style="color: red">此欄位由商圈系統清空,正等待商家重新編輯</p><?php
                }else{
                  echo $sh[$i]->sh_info;
                }
              ?></h4>
              <form action="control_update" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{ $sh[$i]->sh_id}}" name="sh_id">
                <input type="hidden" value="sh_info" name="column">
                <input type="submit" class="btn btn-danger" value="清空" style="width:60%">
              </form>
              <hr>
            </div>
            <div class="form-group">
              <label for="usr">商家負責人:</label><br>
              <h4><?php 
                if($sh[$i]->sh_admin == 'reject'){
                  ?><p style="color: red">此欄位由商圈系統清空,正等待商家重新編輯</p><?php
                }else{
                  echo $sh[$i]->sh_admin;
                }
              ?></h4>
              <form action="control_update" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{ $sh[$i]->sh_id}}" name="sh_id">
                <input type="hidden" value="sh_admin" name="column">
                <input type="submit" class="btn btn-danger" value="清空" style="width:60%">
              </form>
              <hr>
            </div>
            <div class="form-group">
              <label for="usr">商家負責人電話:</label><br>
              <h4><?php 
                if($sh[$i]->sh_admin_phone == 'reject'){
                  ?><p style="color: red">此欄位由商圈系統清空,正等待商家重新編輯</p><?php
                }else{
                  echo $sh[$i]->sh_admin_phone;
                }
              ?></h4>
              <form action="control_update" method="get">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{ $sh[$i]->sh_id}}" name="sh_id">
                <input type="hidden" value="sh_admin_phone" name="column">
                <input type="submit" class="btn btn-danger" value="清空" style="width:60%">
              </form>
              <hr>
            </div>
            <br>
            <div class="col-sm-4"><label>商家圖一</label>
            <div class="thumbnail" >
              <img width="100%" src="http://127.0.0.1:3000/uploads/{{ $sh[$i]->sh_pic1}}">
              <div class="caption">
                <input type="submit" class="btn btn-danger" value="刪除" style="float:right; width:100%"><br><br>
              </div>
            </div>
          </div>
          <div class="col-sm-4"><label>商家圖二</label><br>
            <div class="thumbnail" >
              <img width="100%" src="http://127.0.0.1:3000/uploads/{{ $sh[$i]->sh_pic2}}">
              <div class="caption">
                <input type="submit" class="btn btn-danger" value="刪除" style="float:right; width:100%"><br><br>
              </div>
            </div>
          </div>
          <div class="col-sm-4"><label>商家圖三</label><br>
            <div class="thumbnail" >
              <img width="100%" src="http://127.0.0.1:3000/uploads/{{ $sh[$i]->sh_pic3}}">
              <div class="caption">
                <input type="submit" class="btn btn-danger" value="刪除" style="float:right; width:100%"><br><br>
              </div>
            </div>
          </div>
          <div class="form-group">
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <hr>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
@endfor

 
</body>
</html>
