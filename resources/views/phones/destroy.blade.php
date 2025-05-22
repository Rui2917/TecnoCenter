<form action="{{ route('phones.destroy', $phone->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <p>Are you sure you want to delete this phone?</p>
    <button type="submit" class="btn btn-danger">Delete</button>
    <a href="{{ route('phones.index') }}" class="btn btn-secondary">Cancel</a>
</form>