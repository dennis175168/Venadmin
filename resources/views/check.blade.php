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
     
      <div class="btn-group btn-group-justified" style="width:50%" >
        <a href="#" class="btn btn-primary b1">未審核商家</a>
        <a href="#" class="btn btn-primary b2">待驗證商家</a>
      </div>&nbsp;
      
                
          
      

      <div class="con1">
          <div> <h4 style="font-weight:bold;">未審核商家</h4><h5 style="font-weight:bold;"></h5></div>
          <div class="thumbnail" style="color:black;padding:2%; margin:2%">
          
            <table>
                <tr>
                <td style="width:78%"></td>
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
                    <th style="width:30%">商家名稱</th>
                    <th style="width:30%">信箱</th>
                    <th style="width:10%"></th>
                    <th style="width:10%"></th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                @for ($i=0 ;$i<=$count-1;$i++)
                <tr>
                    <td></td> 
                    <td>{{ $tsh[$i]->tsh_name}}</td>
                    <td>{{ $tsh[$i]->tsh_mail}}</td>
                    <td>
                      <input type="button" class="btn btn-success" value="查看 " data-toggle="modal" data-target="#shop{{ $tsh[$i]->tsh_id}}"><br><br>
                    </td>
                    <td>
                      <form action="checking_delete" method="get">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" value="{{ $tsh[$i]->tsh_id}}" name="tsh_id">
                        <input type="submit" class="btn btn-danger" value="刪除並拒絕申請">
                      </form>
                      
                    </td>
                    <td></td>
                </tr>
                @endfor 
                </tbody>
            </table>
            
          </div>  
      </div>

      <div class="con2" style="display:none">
      <div> <h4 style="font-weight:bold;">待驗證商家</h4><h5 style="font-weight:bold;"></h5></div>
          <div class="thumbnail" style="color:black;padding:2%; margin:2%">
          <table>
                <tr>
                <td style="width:78%"></td>
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
                  <th style="width:26%">商家名稱</th>
                  <th style="width:26%">信箱</th>
                  <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                @for ($i=0 ;$i<=$tsh_count_T-1;$i++)
                <tr>
                <td></td> 
                <td>{{ $tsh_T[$i]->tsh_name}}</td>
                <td>{{ $tsh_T[$i]->tsh_mail}}</td>
                <td></td>
                </tr>
                @endfor 
                
                </tbody>
            </table>
          </div>  
      </div>
      </div>
</div>





<!-- 小框 -->
@for ($i=0 ;$i<=$count-1;$i++)
 <div class="modal fade" id="shop{{ $tsh[$i]->tsh_id}}" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{ $tsh[$i]->tsh_name}}</h4>
        </div>
        <div class="modal-body" >
          <p>商家類別</p>
            <label for="comment">{{ $tsh[$i]->tsh_type}}</label>
          <p>商家信箱</p>
            <label>{{ $tsh[$i]->tsh_mail}}</label>
          <p>商家電話</p>
            <label>{{ $tsh[$i]->tsh_phone}}</label>
          <p>商家地址</p>
            <label>{{ $tsh[$i]->tsh_address}}</label>
          <p>商家介紹敘述</p>
            <label>{{ $tsh[$i]->tsh_info}}</label>
          <p>商家圖片</p>
            <label>{{ $tsh[$i]->tsh_pic}}</label>
          <p>商家管理者</p>
            <label>{{ $tsh[$i]->tsh_admin}}</label>
          <p>商家管理者連絡電話</p>
            <label>{{ $tsh[$i]->tsh_admin_phone}}</label>
        </div>
        <div class="modal-footer">
          <form action="checking" method="get">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" value="{{ $tsh[$i]->tsh_id}}" name="tsh_id">
            <input type="submit" class="btn btn-primary" value="通過審核">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </form>
          
        </div>
      </div>
      
    </div>
  </div>
@endfor 

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
