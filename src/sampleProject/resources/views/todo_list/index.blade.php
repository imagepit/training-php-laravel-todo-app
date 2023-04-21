<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>テスト</title>
  </head>
  <body>
    @if ($todo_lists->isNotEmpty())
        <ul>
            @foreach ($todo_lists as $item)
                <li>
                    {{ $item->name }}
                </li>
            @endforeach
        </ul>
    @endif
    <h2>TODO登録</h2>
    <form action="/list" method="post">
      @csrf
      <div>
        <label>
            <input type="text" name="name" />
        </label>
        <button type="submit">登録</button>
      </div>
    </form>
  </body>
</html>