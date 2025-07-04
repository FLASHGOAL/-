<style>
@import 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap';
section.widgetCountries {
	padding-top: 0!important;
	padding-bottom: 0!important;
}
section.widgetCountries section {
	padding-top: 0!important;
	padding-bottom: 0!important;
}
.headerMenuDisplay {
	max-width: 100%!important;
}
.widgetCountries {
	padding-right: 0.5rem;
	font-size: 13px;
	font-family: open sans;
}
.widgetCountries .first-list-countryes {
	display: none;
}
.active-list-of {
	visibility: hidden;
	height: 0;
}
@media (max-width: 768px) {
	.widgetCountries {
		padding-right: 0;
		min-width: 100%;
	}
}
.widgetCountriesHr:before {
	background: none!important;
}
.widgetCountriesHr:after {
	background: none!important;
}
.widgetCountriesHr {
	margin-top: 0.4rem!important;
	margin-bottom: 0.4rem!important;
	border: 0!important;
	height: 1px!important;
	background-image: -webkit-linear-gradient(left, <?php echo ms_Main::$settings['ms_color_one']; ?>, <?php echo ms_Main::$settings['ms_color_one']; ?>, #f0f0f0, #f0f0f0)!important;
	background-image: -moz-linear-gradient(left, <?php echo ms_Main::$settings['ms_color_one']; ?>, <?php echo ms_Main::$settings['ms_color_one']; ?>, #f0f0f0, #f0f0f0)!important;
	background-image: -ms-linear-gradient(left, <?php echo ms_Main::$settings['ms_color_one']; ?>, <?php echo ms_Main::$settings['ms_color_one']; ?>, #f0f0f0, #f0f0f0)!important;
}
.widgetCountries-inside-ul {
	list-style-type: none;
	padding-left: 1.25rem;
	padding-right: 1.25rem;
}
.widgetCountries-inside-ul li {
	margin: 0;
}
.widgetCountries p::-moz-selection {
	background: transparent;
}
.widgetCountries p::selection {
	background: transparent;
}
.widgetCountries a::-moz-selection {
	background: transparent;
}
.widgetCountries a::selection {
	background: transparent;
}
.widgetCountries p:hover {
	cursor: pointer;
}
.widgetCountries .countryListDisplays:hover {
	cursor: pointer;
}
.first-list-countryes p:hover {
	cursor: initial;
}
.first-list-countryes .countryListDisplays:hover {
	cursor: initial;
}
.widgetCountries-inside-ul li:hover {
	cursor: pointer;
}
.widgetCountries-list-group-item p {
	margin: 0;
	padding: .75rem 1.25rem .75rem .75rem;
	font-weight: bold;
}
.widgetCountries-inside-ul {
	display: none;
	background-color: <?php echo ms_Main::$settings['ms_color_three']; ?>;
	margin: 0;
	padding-top: 0;
	padding-bottom: 0;
	border-top: 0px solid transparent;
}
.widgetCountries {
	margin: 0;
	font-weight: 400;
	line-height: 1.5;
	color: #212529;
	text-align: left;
	background-color: #fff;
	box-sizing: border-box;
}
.widgetCountries #countriesTitle {
	position: relative;
	display: block;
	margin-bottom: -1px;
	background-color: <?php echo ms_Main::$settings['ms_color_three']; ?>;
	border: 1px solid rgba(0, 0, 0, .125);
	width: 100%;
	color: #495057;
	text-align: inherit;
	box-sizing: border-box;
	z-index: 2;
	color: black;
	background-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
	border-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
	box-sizing: border-box;
	padding: 0.75rem 1.25rem;
	margin-bottom: 0.25rem;
	margin-top: 0;
	border-radius: .25rem;
}
.widgetCountries-list-group-item {
	position: relative;
	display: block;
	margin-bottom: -1px;
	background-color: <?php echo ms_Main::$settings['ms_color_three']; ?>;
	border: 1px solid rgba(0, 0, 0, .125);
	width: 100%;
	color: #495057;
	text-align: inherit;
	box-sizing: border-box;
}
.widgetCountries-list-group-item.widgetCountries-active {
	z-index: 2;
	color: black;
	background-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
	border-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
	box-sizing: border-box;
}
.widgetCountries-list-group-item.widgetCountries-active:focus,
.widgetCountries-list-group-item.widgetCountries-active:hover {
	z-index: 2;
	color: black;
	background-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
	border-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
	box-sizing: border-box;
}
.widgetCountries-list-group-item:first-child {
	border-top-left-radius: .25rem;
	border-top-right-radius: .25rem;
	box-sizing: border-box;
}
.widgetCountries-list-group-item:active {
	color: #212529;
	background-color: #e9ecef;
	box-sizing: border-box;
}
.widgetCountries-list-group-item:focus,
.widgetCountries-list-group-item:hover {
	z-index: 1;
	color: #495057;
	text-decoration: none;
	background-color: #f8f9fa;
	box-sizing: border-box;
}
/* Absolute Center Spinner */

.loading {
	position: fixed;
	z-index: 999;
	height: 2em;
	width: 2em;
	overflow: visible;
	margin: auto;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
}
/* Transparent Overlay */

.loading:before {
	content: '';
	display: block;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.loading:not(:required) {
	/* hide "loading..." text */
	font: 0/0 a;
	color: transparent;
	text-shadow: none;
	background-color: transparent;
	border: 0;
}
.loading:not(:required):after {
	content: '';
	display: block;
	font-size: 10px;
	width: 1em;
	height: 1em;
	margin-top: -0.5em;
	-webkit-animation: spinner 1500ms infinite linear;
	-moz-animation: spinner 1500ms infinite linear;
	-ms-animation: spinner 1500ms infinite linear;
	-o-animation: spinner 1500ms infinite linear;
	animation: spinner 1500ms infinite linear;
	border-radius: 0.5em;
	-webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
	box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}
/* Animation */

@-webkit-keyframes spinner {
	0% {
		-webkit-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}
@-moz-keyframes spinner {
	0% {
		-webkit-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}
@-o-keyframes spinner {
	0% {
		-webkit-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}
@keyframes spinner {
	0% {
		-webkit-transform: rotate(0deg);
		-moz-transform: rotate(0deg);
		-ms-transform: rotate(0deg);
		-o-transform: rotate(0deg);
		transform: rotate(0deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
		-moz-transform: rotate(360deg);
		-ms-transform: rotate(360deg);
		-o-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}
/* Absolute Center Spinner */

.loading2 {
	position: absolute;
	z-index: 999;
	height: 2em;
	width: 2em;
	overflow: visible;
	margin: auto;
	top: 0;
	margin-top: 1.5rem;
	margin-right: 1.8rem;
	right: 0;
}
/* Transparent Overlay */

.loading2:before {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.3);
}
/* :not(:required) hides these rules from IE9 and below */

.loading2:not(:required) {
	/* hide "loading..." text */
	font: 0/0 a;
	color: transparent;
	text-shadow: none;
	background-color: transparent;
	border: 0;
}
.loading2:not(:required):after {
	content: '';
	display: block;
	font-size: 10px;
	width: 1em;
	height: 1em;
	margin-top: -0.5em;
	-webkit-animation: spinner 1500ms infinite linear;
	-moz-animation: spinner 1500ms infinite linear;
	-ms-animation: spinner 1500ms infinite linear;
	-o-animation: spinner 1500ms infinite linear;
	animation: spinner 1500ms infinite linear;
	border-radius: 0.5em;
	-webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
	box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}
.first-list-countryes {
	position: relative;
	display: block;
	margin-bottom: -1px;
	background-color: <?php echo ms_Main::$settings['ms_color_three']; ?>;
	border: 1px solid rgba(0, 0, 0, .125);
	width: 100%;
	color: #495057;
	text-align: inherit;
	box-sizing: border-box;
	z-index: 2;
	color: black;
	background-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
	border-color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
	box-sizing: border-box;
	border-top-left-radius: .25rem;
	border-top-right-radius: .25rem;
	box-sizing: border-box;
	margin-bottom: 0.75rem;
}
.first-list-countryes p {
	margin: 0;
	padding: .75rem 1.25rem;
	font-weight: bold;
}
.first-list-countryes-inside-ul {
	background-color: <?php echo ms_Main::$settings['ms_color_three']; ?>;
	margin: 0;
	padding-top: 0;
	padding-bottom: 0;
	border-top: 0px solid transparent;
	display: block;
	padding-top: 0.75rem;
	padding-bottom: 0.75rem;
	list-style-type: none;
	padding-left: 1.25rem;
	padding-right: 1.25rem;
}
.first-list-countryes-inside-ul a {
	cursor: pointer;
}
#page-nav {
	display: none;
	width: 100%;
	text-align: right;
}
/* Hide Hamburger */

#page-nav label,
#hamburger {
	display: none;
}
/* Menu Items */

#page-nav ul {
	text-align: center;
	list-style-type: none;
	margin: 0;
	padding: 10px 0;
}
#page-nav ul li {
	padding-left: 10px;
}
@media screen and (max-width: 768px) {
	#page-nav {
		display: block;
	}
	/* Show Hamburger */
	#page-nav label {
		color: <?php echo ms_Main::$settings['ms_color_one']; ?>;
		background: <?php echo ms_Main::$settings['ms_color_two']; ?>;
        display: inline-flex;
        border-color: <?php echo ms_Main::$settings['ms_color_two']; ?>;
        box-sizing: border-box;
        margin: 0;
        padding: .5rem 1.25rem;
        font-weight: bold;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
	}
	/* Toggle show/hide menu on checkbox click */
	#page-nav #country-list-mobile {
		display: none;
	}
	#page-nav input:checked ~ #country-list-mobile {
		display: block;
	}
}
#page-nav {
	margin-bottom: 10px;
}
/* CUSTOMIZE THE Scroll Up Button ------------------------------------------- */

.scroll-top {
	color: black;
	width: 40px;
	height: 40px;
	line-height: 40px;
	text-align: center;
	color: #333;
	background-color: #fff;
	text-align: center;
	position: fixed;
	right: 15px;
	bottom: 10px;
	z-index: 9999;
	cursor: pointer;
	border-radius: 50%;
	box-shadow: 0 2px 25px -3px #555;
    <?php echo (ms_Main::$settings['ms_up_to_top_button'] == 'no') ?  'display: none!important;' : '' ?>
}
.d-none-scroll {
	display: none;
}
.scroll-top-icon {
	font-size: 20px;
}
.nav-menu-content a {
	float: left;
}
.logo-img-size {
	max-width: 100%;
	height: 45px;
}
.countryLogo {
	height: 20px;
	padding-left: 30px;
	margin-left: 0.75rem;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	filter: brightness(98%);
}
.countryListDisplays {
	display: flex;
	flex-flow: row nowrap;
	justify-content: center;
	align-items: center;
}
.countryLogo {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	display: flex;
	flex-flow: column nowrap;
}
.countryListDisplays p {
	flex: 1;
	display: flex;
	flex-flow: column nowrap;
}
.favoriteListStylePadding {
	margin-bottom: .75rem;
}

.widgetCountries-inside-ul a {
	color: black!important;
	text-decoration: none;
}
</style>