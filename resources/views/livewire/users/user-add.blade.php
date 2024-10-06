<div>
    <h1>Thêm người dùng</h1>
   <form action="" wire:submit.prevent="handleAdd">
        <div class="mb-3">
            <label for="name" class="form-label">Tên</label>
            <input type="text" class="form-control" id="name" placeholder="Tên..."
            wire:model="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
         <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="name" placeholder="Email..."
            wire:model="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
         <div class="mb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="name" placeholder="Mật khẩu..."
            wire:model="password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn btn-primary">Lưu thay đổi</button>
        <a href="{{route('users.list')}}" class="btn btn-danger" wire:navigate>Hủy</a>
   </form>
</div>
