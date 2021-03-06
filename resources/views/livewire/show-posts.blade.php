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
