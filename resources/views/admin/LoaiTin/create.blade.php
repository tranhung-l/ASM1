<div class="container">
    <h2>Thêm mới Loại Tin</h2>
    <form action="{{ route('loaitin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="TenLT">Tên Loại Tin</label>
            <input type="text" class="form-control" id="TenLT" name="TenLT" required>
        </div>
        <div class="form-group">
            <label for="ThuTu">Thứ Tự</label>
            <input type="number" class="form-control" id="ThuTu" name="ThuTu" required>
        </div>
        <div class="form-group">
            <label for="AnHien">Ẩn Hiện</label>
            <select class="form-control" id="AnHien" name="AnHien" required>
                <option value="1">Hiện</option>
                <option value="0">Ẩn</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Loại Tin</button>
    </form>
</div>
