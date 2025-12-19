<h2>Users List</h2>

<a href="{{ route('usermes.create') }}">Add User</a>

<ul>
            @foreach($users as $user)
                        <li>
                                    {{ $user->name }} |
                                    <a href="{{ route('usermes.show', $user->id) }}">View</a> |
                                    <a href="{{ route('usermes.edit', $user->id) }}">Edit</a>

                                    <form action="{{ route('usermes.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button>Delete</button>
                                    </form>
                        </li>
            @endforeach
</ul>