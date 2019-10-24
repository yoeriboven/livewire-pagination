<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dashboard</title>
  </head>
  <body>
    <div class="container mt-4">
        <section>
            <h1>Posts</h1>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Body</th>
                </tr>
              </thead>
              <tbody>
              	@foreach ($posts as $post)
	                <tr>
	                  <th scope="row">{{ $post->id }}</th>
	                  <td>{{ $post->body }}</td>
	                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $posts->links() }}
        </section>

        <section>
            <h1>Comments</h1>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Body</th>
                </tr>
              </thead>
              <tbody>
              	@foreach ($comments as $comment)
	                <tr>
	                  <th scope="row">{{ $comment->id }}</th>
	                  <td>{{ $comment->body }}</td>
	                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $comments->links() }}
        </section>
    </div>
  </body>
</html>
