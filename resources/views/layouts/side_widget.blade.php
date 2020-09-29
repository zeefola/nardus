<div class="col-lg-3 widget-area">
    <aside class="widget widget-nav-menu">
        <ul class="widget-menu">
            <li class="{{ Request::is('essential-oil') ? 'active' : '' }}"><a href="/essential-oil">Essential Oils</a></li>
            <li class="{{ Request::is('hand-sanitizer') ? 'active' : '' }}"><a href="/hand-sanitizer">Hand Sanitizer</a></li>
            <li class="{{ Request::is('hydrosol') ? 'active' : '' }}"><a href="/hydrosol"> Hydrosol</a></li>
        </ul>
    </aside>
    <aside class="widget contact-widget">
        <h3 class="widget-title">Get in touch</h3>
        <ul class="contact-widget-wrapper">
            <li><i class="fa fa-map-marker"></i> {{ config('app.location_2') }} <br>
                {{ config('app.location_1') }}</li>
            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">
                    {{ config('app.email') }}</a></li>
            <li><i class="fa fa-phone"></i>{{ config('app.phone_1') }}</li>
            <li><i class="ti ti-alarm-clock"></i>Mon to Fri - 8:00am to 5:00pm (Sunday Closed)</li>
        </ul>
    </aside>
</div>