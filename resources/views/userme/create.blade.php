<h2>Add User</h2>

<form method="POST" action="{{ route('usermes.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="Email">
            <button>Add</button>
</form>