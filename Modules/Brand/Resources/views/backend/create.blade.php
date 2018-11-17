@extends('admin.layouts.admin')
@section('styles')
  {{ Html::style(mix('assets/common/css/select2.min.css')) }}
  @section('title', __('views.admin.product.create.title'))
  @section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['route'=>['brands.store'],'data-parsley-validate' => '' ]) !!}

        {{ Form::label('name','Marka İsmi:',['class'=>'form-spacing-top']) }}
        {{ Form::text('name',null,['class'=>'form-control name','required' => ''])}}

        {{ Form::label('slug','Gizli İsim :',['class'=>'form-spacing-top']) }}
        {{ Form::text('slug',null,['class'=>'form-control name','required' => ''])}}


        {{ Form::label('category_id','Kategori İsmi:',['class'=>'form-spacing-top']) }}
        <select class="form-control select2" style="height:40px;" multiple="multiple" name="category_ids[]" required>
          @foreach($categories as $category)
            <option value='{{ $category->id }}'@if(old('category_id') == $category->id) selected @endif>{{ $category->name }}</option>
            @endforeach
          </select>


      {{Form::submit('Kaydet',['class' => 'btn btn-success btn-block form-spacing-top']) }}
      {{Form::close() }}
    </div>
  </div>

@endsection
@section('scripts')
  {{ Html::script(mix('assets/common/js/select2.min.js')) }}
  @parent
  <script type="text/javascript">
    $('.select2').select2();

  </script>
@endsection
