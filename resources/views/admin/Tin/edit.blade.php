<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <h2>Chỉnh sửa Tin</h2>
    <form action="{{ route('tin.update', $tin->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="TieuDe">Tiêu Đề</label>
            <input type="text" class="form-control" id="TieuDe" name="TieuDe" value="{{ $tin->TieuDe }}" required>
        </div>
        <div class="form-group">
            <label for="TomTat">Tóm Tắt</label>
            <textarea class="form-control" id="TomTat" name="TomTat" required>{{ $tin->TomTat }}</textarea>
        </div>
        <div class="form-group">
            <label for="NoiDung">Nội Dung</label>
            <textarea class="form-control" id="NoiDung" name="NoiDung" required>{{ $tin->NoiDung }}</textarea>
        </div>
        <div class="form-group">
            <label for="idLT">Loại Tin</label>
            <select class="form-control" id="idLT" name="idLT" required>
                @foreach($loaitin as $lt)
                    <option value="{{ $lt->id }}" {{ $lt->id == $tin->idLT ? 'selected' : '' }}>{{ $lt->TenLT }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="img">Hình Ảnh</label>
            <input type="file" class="form-control" id="img" name="img">
            @if($tin->img)
                <img src="{{ asset('storage/' . $tin->img) }}" alt="Hình ảnh" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>

