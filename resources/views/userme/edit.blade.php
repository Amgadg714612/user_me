<h2>Edit User</h2>

<form method="POST" action="{{ route('usermes.update', $user->id) }}">
            @csrf
            @method('PUT')

            <input type="text" name="name" value="{{ $user->name }}">
            <input type="email" name="email" value="{{ $user->email }}">
            <button>Update</button>
</form>