<div class="form-group">
    <label for="widget-name">{{ trans('core/base::forms.name') }}</label>
    <input type="text" class="form-control" name="name" value="{{ $config['name'] }}">
    <label for="widget-name">{{ trans('Iframe') }}</label>
    <textarea name="iframe" rows="4" class="form-control">{{ $config['iframe'] }}</textarea>
</div>
