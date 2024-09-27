<div class="form-button-action">
    @if ($usulan->status !== 'submitted')
        <a href="{{ route('usulan.edit', $id) }}" class="btn btn-link btn-warning" id="edit">
            <i class="fa fa-edit"></i>
        </a>
        <form action="{{ route('usulan.destroy', $id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link btn-danger">
                <i class="fa fa-times"></i>
            </button>
        </form>
    @endif

    <form action="{{ route('usulan.kirim', $id) }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-link btn-success">
            <i class="fa fa-paper-plane"></i> Kirim
        </button>
    </form>
</div>
