@extends('admin.layouts.admin')
@section('styles')
  {{ Html::style(mix('assets/common/css/select2.min.css')) }}
@section('title', __('views.admin.product.create.title'))
@section('content')

  <div class="container">
    <div class="col-md-12">
      <div class="col-md-4">

{!! Form::model($brand,['route' => ['brands.update',$brand->id],'data-parsley-validate' => '' ,'method' => 'PUT']) !!}

{{ Form::label('name','İsim:',['class'=>'form-spacing-top']) }}
{{ Form::text('name',null,['class'=>'form-control','required' => ''])}}

{{ Form::label('slug','Gizli Tanım:',['class'=>'form-spacing-top']) }}
{{ Form::text('slug',null,['class'=>'form-control','required' => ''])}}

{{ Form::label('category_ids', 'Kategoriler :', ['class' => 'form-spacing-top']) }}
  {{ Form::select('category_ids[]', $categories, null, ['class' => 'form-control select2', 'multiple' => 'multiple']) }}
{{--
{{ Form::label('categories','Kategoriler :',['class'=>'form-spacing-top']) }}
<select class="form-control select2" style="height:40px;" name="category_ids[]">
  @if($category->head_category_id)
    <option value="{{$category->head_category_id}}">{{Modules\Category\Entities\Category::find($category->head_category_id)->name}}</option>
  @else
    <option value=""></option>
  @endif
  @foreach($categories as $category)
    <option value='{{ $category->id }}'@if(old('head_category_id') == $category->id) selected @endif>{{ $category->name }}</option>
    @endforeach
    <option value=''>Yok</option>

  </select>
--}}


{{Form::submit('Kaydet',['class' => 'btn btn-success btn-block form-spacing-top']) }}
{{Form::close() }}

      </div>
    </div>
  </div>
  </div>

@endsection


@section('scripts')
  {{ Html::script(mix('assets/common/js/select2.min.js')) }}
  @parent
  <script type="text/javascript">
    $('.select2').select2();
    $('.select2').val(["1","2","3"]).trigger('change');

  </script>
@endsection
