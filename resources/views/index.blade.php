<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/resources/views/todo.reset.css"> 
  <style>
    .container{
      background-color:#2d197c;
      position:relative;
      width:100vw;
      height:100vh;
    }

    .card{
      background-color:#fff;
      width:50vw;
      padding:30px;
      position:absolute;
      top:50%;
      left:50%;
      transform:translate(-50%,-50%);
      border-radius:10px;
    }

    .title{
      font-weight:bold;
      font-size:24px;
    }

    .input-add{
      width:80%;
      padding:5px;
      border-radius:5px;
      border:1px solid #ccc;
      appearance:none;
      font-size:14px;
      outline:none;
    }

    tr{
      height:50px;
    }

    .button-add{
      text-align:left;
      border:2px solid #dc70fa;
      font-size:12px;
      color:#dc70fa;
      background-color:#fff;
      font-weight:bold;
      padding:8px 16px;
      border-radius:5px;
      cursor:pointer;
      transition:0.4s;
      outline:none;
      margin-left:60px;
    }
    
    table{
      text-align:center;
      width:100%;
    }

    .input-update{
      width:90%;
      padding:5px;
      border-radius:5px;
      border:1px solid #ccc;
      appearance:none;
      font-size:14px;
      outline:none;
    }

    .button-update{
      text-align: left;
      border: 2px solid #fa9770;
      font-size: 12px;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }


    .button-delete{
      text-align: left;
      border: 2px solid #71fadc;
      font-size: 12px;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    body{
      margin:0;
      padding:0;
    }

    p{
      margin:0;
      padding:0;
    }

    






  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="title">Todo List</p>
      <div class="inner">
        <form action="/todos/create" method="post">
        @csrf
          @error('content')
          <p>{{$message}}</p>
          @enderror
          <input type="text" class="input-add" name="content">
          <input class="button-add" type="submit" value="追加">
        </form>


        
        <table>
        
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
          @foreach ($todos as $todo)
          <form action="/todos/update" method="post">
            @csrf
            <tr>
              <td>{{$todo->created_at}}</td>
                
              <td><input type="text" class="input-update" value="{{$todo->content}}" name="content"></td>
              <input type="hidden" name="id" value="{{$todo->id}}">
              <td><input class="button-update" type="submit" value="更新"></td>
              <td><input class="button-delete" type="submit" value="削除" formaction="/todos/delete"></td>
            </tr>
          </form>
          @endforeach

        </table>
        
      </div>
    </div>
  </div>
</body>
</html>