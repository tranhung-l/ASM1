
<div class="container">
    <h2>Chỉnh sửa Loại Tin</h2>
    <form action="{{ route('loaitin.update', $loaitin->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="TenLT">Tên Loại Tin</label>
            <input type="text" class="form-control" id="TenLT" name="TenLT" value="{{ $loaitin->TenLT }}" required>
        </div>
        <div class="form-group">
            <label for="ThuTu">Thứ Tự</label>
            <input type="number" class="form-control" id="ThuTu" name="ThuTu" value="{{ $loaitin->ThuTu }}" required>
        </div>
        <div class="form-group">
            <label for="AnHien">Ẩn Hiện</label>
            <select class="form-control" id="AnHien" name="AnHien" required>
                <option value="1" {{ $loaitin->AnHien == 1 ? 'selected' : '' }}>Hiện</option>
                <option value="0" {{ $loaitin->AnHien == 0 ? 'selected' : '' }}>Ẩn</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>

