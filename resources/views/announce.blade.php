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
        <h3 style="font-weight:bold;">商圈消息 </h3><h4 style="font-weight:bold;">Announcement</h4>
      </div>
</div>

<div class="col-sm-9">
      <div class="well" align="center" id="add">
      
            <div class="btn-group btn-group-justified" style="width:60%; height:40px" >
            <a href="#" class="btn btn-primary b1">發布消息</a>
            <a href="#" class="btn btn-primary b2">檢視消息</a>
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



        <div class="c1" style="display: none">
          <h4 style="font-weight:bold;">發布消息</h4><h4 style="font-weight:bold;"></h4>
          <div style="text-align:left; padding:5%">

          <form action="announce_insert" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="usr">單位: {{$editor}}</label>   |
              <label for="usr">時間: {{$now}}</label>
            </div>
            <div class="form-group">
              <label for="usr">主旨:</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
              <label for="usr">附加文件連結:</label>
              <textarea class="form-control" rows="2" id="doc" name="doc"></textarea>
            </div>
            <div class="form-group">
              <label for="usr">內容:</label>
              <textarea class="form-control" rows="5" id="content" name="content"></textarea>
            </div>
            <input type="hidden" name="time" value="{{$now}}">
            <input type="hidden" name="editor" value="{{$editor}}">
            <input type="submit" class="btn btn-danger" value="送出">
          </form>

          </div>
        </div>

        <div class="c2" >
          <h4 style="font-weight:bold;">檢視消息</h4><h4 style="font-weight:bold;"></h4>

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
                    <th style="width:26%">發布時間</th>
                    <th style="width:26%">主旨</th>
                    <th style="width:26%">單位</th>
                    <th style="width:5%"></th>
                    <th style="width:5%"></th>
                </tr>
                </thead>
                <tbody>
                @for ($i=0 ;$i<=$bd_info_count-1;$i++)
                <tr>
                    <td></td>
                    <td>{{ $bd_info[$i]->updated_at}}</td>
                    <td>{{ $bd_info[$i]->bd_title}}</td>
                    <td>{{ $bd_info[$i]->bd_editor}} </td>
                    <td><input type="button" class="btn btn-success" value="編輯 " data-toggle="modal" data-target="#bd{{ $bd_info[$i]->bd_id}}"></td>
                    <td>
                      <form action="announce_delete" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="bd_id" value="{{ $bd_info[$i]->bd_id}}">
                        <input type="submit" class="btn btn-danger" value="刪除" >

                      </form>
                    </td>

                </tr>
                @endfor
                
                </tbody>
            </table>
            </div>
        </div>
      </div>


</div>

<!-- 小框 -->
@for ($i=0 ;$i<=$bd_info_count-1;$i++)
 <div class="modal fade" id="bd{{ $bd_info[$i]->bd_id}}" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{{ $bd_info[$i]->bd_title}}</h4>
        </div>
        <div class="modal-body" >
          <p>商家類別</p>
            <label for="comment">{{ $bd_info[$i]->bd_content}}</label>
          
        </div>
        <div class="modal-footer">
         
          
        </div>
      </div>
      
    </div>
  </div>
@endfor 


<script>
$(".b1").click(function(){
    //alert("Text: " + $("#test").text());
    $('.c2').css('display','none');
    $('.c1').css('display','block');
});
$(".b2").click(function(){
    //alert("Text: " + $("#test").text());
    $('.c1').css('display','none');
    $('.c2').css('display','block');
});
</script> 
</body>
</html>
