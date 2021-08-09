@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <form action="" method="post">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Tên danh mục</label>
                <input type="text" name="name" value="{{$menu->name}}" class="form-control" id="menu" placeholder="Enter name">
            </div>

            <div class="form-group">
                <label>Danh mục</label>
                <select class="form-control" name="parent_id" id="">
                    <option value="0"  {{$menu->parent_id == 0 ? 'selected' : ''}}>Danh mục cha</option>
                    @foreach($menus as $menuParent)
                        <option
                            value="{{$menuParent->id}}" {{$menu->parent_id == $menuParent->id ? 'selected' : ''}}>{{$menuParent->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" class="form-control">{{$menu->description}}</textarea>
            </div>

            <div class="form-group">
                <label>Mô tả chi tiết</label>
                <textarea name="content" id="content" class="form-control">{{$menu->content}}</textarea>
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="form-check">
                    <input class="form-check-input" value="1" type="radio" id="active"
                           name="active" {{$menu->active == 1 ? 'checked' : ''}}
                    >
                    <label class="form-check-label">Có</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="0" type="radio"
                           name="active" id="no_active" {{$menu->active == 0 ? 'checked' : ''}}
                    >
                    <label class="form-check-label">Không</label>
                </div>
            </div>

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
