@extends('adminlte::page')


@section('title', '一人でいけるモン。')

@section('content_header')
    <h1>一人でいけるモン（旅日記）</h1>
@stop


@section('content')

<section class="bg-light p-5">
    <form action="{{ route('create') }}" method="post" class="needs-validation" onSubmit="return checkSubmit()" enctype='multipart/form-data' novalidate>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-row mb-4">
            <div class="col-md-12">
                <label for="Name">ニックネーム</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" id="Name" placeholder="ニックネーム" autofocus required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                @else
                    <div class="invalid-feedback">必須項目です</div>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="selectplace" class="col-sm-2 col-form-label">場所</label>
            <div class="col-sm-10">
                {{ Form::select('prefecture_id', App\Models\Prefectures::selectlist(), old('prefecture_id'), ['class' => 'form-control', 'id' => 'prefecture_id', 'required' => 'required']) }}
            </div>
        </div>

        <!--性別-->
        <div class="form-group row">
            <label class="col-sm-2">性別</label>
            <div class="col-sm-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="gender" value="女性" id="customRadioInline1" class="custom-control-input" @if( old('gender')=='女性') checked="checked" @endif required>
                    <label class="custom-control-label" for="customRadioInline1">女性</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="gender" value="男性" id="customRadioInline2" class="custom-control-input" @if( old('gender')=='男性') checked="checked" @endif>
                    <label class="custom-control-label" for="customRadioInline2">男性</label>
                </div>
            @if($errors->has('gender'))
                <div class="text-danger">どちらかチェックをしてください</div>
            @endif
            </div>
        </div>
        <!--年齢-->
        <div class="form-group row">
            <label for="selectage" class="col-sm-2 col-form-label">年齢</label>
            <div class="col-sm-10">
                <select name="age" class="form-control @if($errors->has('age')) is-invalid @endif" id="inputAge" placeholder="年齢層を選択" required>
                    <option value="" selected @if(old('age')=='') selected  @endif>選択してください</option>
                    <option value="20歳未満" @if(old('age')=='20歳未満') selected  @endif>20歳未満</option>
                    <option value="20-29歳" @if(old('age')=='20-30歳') selected @endif>20-29歳</option>
                    <option value="30-39歳" @if(old('age')=='30-39歳') selected @endif>30-39歳</option>
                    <option value="40-49歳" @if(old('age')=='40-49歳') selected @endif>40-49歳</option>
                    <option value="50-59歳" @if(old('age')=='50-59歳') selected @endif>50-59歳</option>
                    <option value="60-69歳" @if(old('age')=='60-69歳') selected @endif>60-69歳</option>
                    <option value="70-79歳" @if(old('age')=='70-79歳') selected @endif>70-79歳</option>
                    <option value="80歳以上" @if(old('age')=='80歳以上') selected @endif>80歳以上</option>
                </select>
                @if($errors->has('age'))
                    <div class="invalid-feedback">{{ $errors->first('age') }}</div>
                @else
                    <div class="invalid-feedback">必須項目です</div>
                @endif
            </div>
        </div>

        <!--評価-->
        <div class="form-group row">
            <label class="col-sm-2">評価</label>
            <div class="col-sm-10">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="evaluation" value="最高" class="custom-control-input" id="customCheck1" @if( old('evaluation')=='good') checked="checked" @endif required>
                    <label class="custom-control-label" for="customCheck1">最高！</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="evaluation" value="普通" class="custom-control-input" id="customCheck2" @if( old('evaluation')=='normal') checked="checked" @endif required>
                    <label class="custom-control-label" for="customCheck2">普通</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="evaluation" value="最悪" class="custom-control-input" id="customCheck3" @if( old('evaluation')=='bad') checked="checked" @endif required>
                    <label class="custom-control-label" for="customCheck3">最悪。</label>
                </div>
                @if($errors->has('evaluation'))
                    <div class="text-danger">どれかチェックをしてください</div>
                @endif
            </div>
        </div>

        <!--感想欄-->
        <div class="form-group pb-3">
            <label for="Textarea">感想欄</label>
            <textarea name="impressions" class="form-control @if($errors->has('impressions')) is-invalid @endif" id="Textarea" rows="3" placeholder="感想等を記載してください。"required>{{ old('impressions') }}</textarea>
            @if($errors->has('impressions'))
                <div class="invalid-feedback">{{ $errors->first('impressions') }}</div>
            @else
                <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
            @endif
        </div>

        <!--写真-->
        <div class="input-group">
            <label class="input-group-btn">
                <span class="btn btn-primary">
                    Choose File<input type="file" class="form-control @if($errors->has('photos')) is-invalid @endif" name="photos" style="display:none">
                </span>
            </label>
            <input type="text" class="form-control" name="photos" readonly="">
        </div>

        <!--利用規約-->
        <div class="form-group pb-3">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input @if($errors->has('terms')) is-invalid @endif" type="checkbox" name="terms" value="利用規約に同意します" id="invalidCheck" required>
                <label class="custom-control-label" for="invalidCheck">
                    利用規約に同意する
                </label>
                @if($errors->has('terms'))
                    <div class="invalid-feedback mb-3">{{ $errors->first('terms') }}</div>
                @else
                    <div class="invalid-feedback mb-3">提出する前に同意する必要があります</div><!--HTMLバリデーション-->
                @endif
            </div>
        </div>
    
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-info btn-block">確認</button>
            </div>
        </div>


    </form>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
$(document).on('change', ':file', function() {
    var input = $(this),
    numFiles = input.get(0).files ? input.get(0).files.length : 1,
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.parent().parent().next(':text').val(label);
});
function checkSubmit(){
    if(window.confirm('送信してよろしいですか？')){
        return true;
    } else {
        return false;
    }
}
</script>
@endsection