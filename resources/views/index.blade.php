<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="title">Todo List</p>
      <div class="inner">
        <form action="/todos/create" method="post">
        @csrf
          @error('content')
          {{$message}}
          @enderror
          <input type="text" name="content">
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
            <tr>
              <td>{{$todo->created_at}}</td>
              <td>{{$todo->content}}</td>
              <td><input class="button-update" type="submit" value="更新"></td>
              <td><input class="button-delete" type="submit" value="削除"></td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</body>
</html>