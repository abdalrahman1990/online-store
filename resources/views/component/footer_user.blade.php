<style>

.bg-dark-light {
    background: #793C72 !important;
}
.bg-theme, .bg-dark, .bg-dark-light, .bg-secondary {
    color: #ffffff;
}
.widgets.footer-widgets .widget-title {
    color: #ffffff;
    font-family: "Raleway", sans-serif;
    font-weight: 700;
    margin-bottom: 30px;
    letter-spacing: 0.5px;
    position: relative;
    padding-bottom: 15px;
}

.widgets.footer-widgets .widget-title::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 2px;
    width: 100px;
    background: #13bfb1;
}
.widgets.footer-widgets .widget-quick-links ul {
    margin-top: -4px;
}
.widgets.footer-widgets .single-widget ul {
    padding-left: 0;
    margin-bottom: 0;
}

.widgets.footer-widgets .widget-quick-links ul li {
    display: block;
}
.widgets.footer-widgets .widget-quick-links ul li a {
    display: block;
    font-size: 13px;
    color: #ffffff;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 9px 0;
}

.widgets.footer-widgets .single-widget ul li {
    list-style: none;
    font-family: "Raleway", sans-serif;
}
.widgets.footer-widgets .widget-contact ul li {
    color: #000;
    font-size: 13px;
    color: #ffffff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.widgets.footer-widgets .widget-contact ul li span {
    font-size: 14px;
    color: #ffffff;
    border: 2px solid #cccccc;
    border-radius: 3px;
    height: 32px;
    width: 32px;
    display: inline-block;
    line-height: 28px;
    text-align: center;
    margin-right: 20px;
}
.widgets.footer-widgets .widget-contact ul li.phone, .widgets.footer-widgets .widget-contact ul li.fax {
    font-size: 15px;
}

.widgets.footer-widgets .widget-contact ul li + li {
    margin-top: 20px;
}
</style>
<div class="footer-bottom-area bg-dark-light section-padding-sm">
    <div class="container">
    	<br>
        <div class="row widgets footer-widgets">

            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-widget widget-about">
                    <h5 class="widget-title">About us</h5>

                    <p>
                        Online shopping (online shopping) brings convenience, more diverse choices and better services to consumers.
                        <a href="{{ url('about') }}">Readmore...</a>
                    </p>
                </div>
            </div>



            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-widget widget-quick-links">
                    <h5 class="widget-title">Customer Policy</h5>
                    <ul>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-widget widget-contact">
                    <h5 class="widget-title">Contact Info</h5>
                    <ul>
                        <li class="address">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <p>Address : new address</p>
                        </li>
                        <li class="phone">
                            <span class="icon"><i class="fa fa-phone"></i></span>
                            <p>+961 789 186 58</p>
                        </li>
                        <li class="fax">
                            <span class="icon"><i class="fa fa-fax"></i></span>
                            <p>+96 12345678</p>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

