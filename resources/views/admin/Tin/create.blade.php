
<div class="container">
    <h2>Thêm mới Tin</h2>
    <form action="{{ route('tin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="TieuDe">Tiêu Đề</label>
            <input type="text" class="form-control" id="TieuDe" name="TieuDe" required>
        </div>
        <div class="form-group">
            <label for="TomTat">Tóm Tắt</label>
            <textarea class="form-control" id="TomTat" name="TomTat" required></textarea>
        </div>
        <div class="form-group">
            <label for="NoiDung">Nội Dung</label>
            <textarea class="form-control" id="NoiDung" name="NoiDung" required></textarea>
        </div>
        <div class="form-group">
            <label for="idLT">Loại Tin</label>
            <select class="form-control" id="idLT" name="idLT" required>
                @foreach($loaitin as $lt)
                    <option value="{{ $lt->id }}">{{ $lt->TenLT }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="img">Hình Ảnh</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="luotxem">Lượt Xem</label>
            <input type="number" class="form-control" id="luotxem" name="luotxem" value="0">
        </div>
        <button type="submit" class="btn btn-primary">Thêm Tin</button>
    </form>
</div>

