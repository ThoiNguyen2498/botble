<div class="form-group">
    <label for="widget-name">{{ trans('core/base::forms.name') }}</label>
    <input type="text" class="form-control" name="name" value="{{ $config['name'] }}">
    <label for="widget-name">{{ trans('Number tags to display') }}</label>
    <input type="number" class="form-control" name="number" value="{{ $config['number'] }}">
</div>
