<div class="wrapper">
    <a href="{{route('users.add')}}" class="btn btn-primary mb-3" wire:navigate>Thêm mới</a>
    <input type="search" class="form-control mb-3" placeholder="Tìm kiếm..." wire:model.live.debounce.500ms="search">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th width="5%">Sửa</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Sửa</a></td>
                    <td><a href="#" wire:click.prevent="handleRemove({{ $user->id }})" wire:confirm="Bạn có chắc muốn xóa không?" class="btn btn-danger btn-sm">Xóa</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $users->links() }}
    </div>
</div>