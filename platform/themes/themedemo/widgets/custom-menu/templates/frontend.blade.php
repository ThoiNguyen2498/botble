<div class="col-md-3 col-sm-6">
    <div class="footer-nav-wrap text-white">
        <h4 class="text-white">{{ $config['name'] }}</h4>
        {!!
            Menu::generateMenu([
                'slug'    => $config['menu_id'],
                'options' => ['class' => 'nav flex-column']
            ])
        !!}
    </div>
</div>