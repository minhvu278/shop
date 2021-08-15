@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <!-- text input -->
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Danh mục</label>
                    <input type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6">
                <label>Custom Select</label>
                <select class="custom-select">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label>Custom Select</label>
                <select class="custom-select">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Mô tả chi tiết</label>
            <textarea name="content" id="content" class="form-control"></textarea>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm danh mục</button>



        </div>
    </form>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content')
    </script>
@endsection
