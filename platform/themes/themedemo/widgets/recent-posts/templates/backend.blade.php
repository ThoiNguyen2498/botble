<div class="form-group">
    <label for="widget-name">{{ trans('core/base::forms.name') }}</label>
    <input type="text" class="form-control" name="name" value="{{ $config['name'] }}">
    <label for="widget-name">{{ trans('Limit') }}</label>
    <input type="number" class="form-control" name="limit" value="{{ $config['limit'] }}">
</div>
