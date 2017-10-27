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
        <h3 style="font-weight:bold;">Beacon 設置 </h3>
        <!-- <h4 style="font-weight:bold;">Announcement</h4> -->
      </div>
</div>

<div class="col-sm-9">
      <div class="well" align="center" id="add">
      
            <div class="btn-group btn-group-justified" style="width:60%; height:40px" >
            <a href="#" class="btn btn-primary bc_insert">新增裝置</a>
            <a href="#" class="btn btn-primary bc_edit">編輯裝置</a>
            </div><br>
              
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



        

        <div class="bc_insert_div" >
          <h4 style="font-weight:bold;">新增裝置</h4><h4 style="font-weight:bold;"></h4>

          <div class="thumbnail" style="color:black;padding:2%; margin:2%">

          <!-- -->
          

            <div class="form-group">
              <table width="100%">
              <form method="post" action="beacon_insert">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <tr >
                  <td width="50%" style="padding:10px">
                    <label for="sel1">選擇店家:</label>
                    <select class="form-control" name="insert_sh_id">
                    @for($j=0; $j<=$sh_bc_info_count-1; $j++)
                        <option value="{{$sh_bc_info[$j]->sh_id}}">{{$sh_bc_info[$j]->sh_name}}</option>
                    @endfor
                    </select>
                  </td>
                  
                  <td width="50%" style="padding:10px">
                    <label>選擇裝置區域:</label>
                    <select class="form-control" id="sel1" name="insert_minor">
                        <option value="1">西區</option>
                        <option value="2">東區</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <td style="padding:10px">
                    <label>自行設定發射器編號:</label>
                    <input type="text" class="form-control" name="insert_major"><br>
                    @if (Session::has('flash_message_f'))
                        <div class="alert alert-danger">{{ Session::get('flash_message_f') }}</div>
                    @endif
                  </td>
                </tr>

                <tr>
                  <td style="padding:10px">
                    <button type="submit" class="btn btn-primary">確認送出</button><br>
                    @if (Session::has('flash_message_g'))
                        <div class="alert alert-success">{{ Session::get('flash_message_g') }}</div>
                    @endif
                  </td>
                </tr>
              </form>
              </table>
                

                

                

            </div>
            

          
            </div>
        </div>


        <div class="bc_edit_div" style="display:none">
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


          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width:33%">商家</th>
                <th style="width:33%">裝置編號</th>
                <th style="width:33%">區域編號</th>
              </tr>
            </thead>
            <tbody>
            @for ($i=0; $i<=$bc_info_count-1; $i++)
            <form class="delete" action="beacon_delete" method="post" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="delete_beacon_id" value="{{$bc_info[$i]->beacon_id}}">
              <input type="hidden" name="delete_sh_id" value="{{$bc_info[$i]->sh_id}}">
              <tr>
                <td>{{$bc_info[$i]->shop['sh_name']}}</td>
                <td>{{$bc_info[$i]->major}}</td>
                <td>{{$bc_info[$i]->minor}}</td>
                <td><input type="submit" class="btn btn-danger" value="刪除" ></td>
              </tr>
            </form>
            @endfor
              
              
            </tbody>
          </table>
          </div>
        </div>

        
      </div>
</div>


<script>
$(".bc_insert").click(function(){
    //alert("Text: " + $("#test").text());
    $('.bc_insert_div').css('display','block');
    $('.bc_edit_div').css('display','none');
});
$(".bc_edit").click(function(){
    //alert("Text: " + $("#test").text());
    $('.bc_insert_div').css('display','none');
    $('.bc_edit_div').css('display','block');
});
$(".delete").on("submit", function(){
  return confirm("確認刪除此設定?");
});
</script> 


</body>
</html>
