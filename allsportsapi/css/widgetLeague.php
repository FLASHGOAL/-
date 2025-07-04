<?php
if ( class_exists( 'ms_Main' ) ) {
    $color_one = ms_Main::$settings['ms_color_one'];
    $color_two = ms_Main::$settings['ms_color_two'];
    $color_three = ms_Main::$settings['ms_color_three'];
} else {
    $color_one =  $_COOKIE['ms_color_one'];
    $color_two = $_COOKIE['ms_color_two'];
    $color_three = $_COOKIE['ms_color_three'];
}
?>

<style>
@import 'https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap';
section.widgetLeague {
    padding-top: 0!important;
    padding-bottom: 0!important;
}
section.widgetLeague section {
    padding-top: 0!important;
    padding-bottom: 0!important;
}
#widgetLeague {
    width: auto;
}
@media (max-width: 768px) {
    .widgetLeague {
        min-width: 100%;
    }
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorOne {
    background: #00008B;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorOne {
    background: #00008B;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorTwo {
    background: #0000FF;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorTwo {
    background: #0000FF;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorThree {
    background: #1E90FF;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorThree {
    background: #1E90FF;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorFour {
    background: #00BFFF;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorFour {
    background: #00BFFF;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorFive {
    background: #ADD8E6;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorFive {
    background: #ADD8E6;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorSix {
    background: #8B0000;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorSix {
    background: #8B0000;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorSeven {
    background: #FF0000;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorSeven {
    background: #FF0000;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorEight {
    background: #CD5C5C;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorEight {
    background: #CD5C5C;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorNine {
    background: #E9967A;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorNine {
    background: #E9967A;
    color: white;
    transition: 500ms;
}
#standingsTabC .flex-table.row .flex-row:not(.first).colorTen {
    background: #cc0000;
    color: white;
}
#standingsTabC .flex-table.row:hover .flex-row:not(.first).colorTen {
    background: #cc0000;
    color: white;
    transition: 500ms;
}
.nav-tab-active {
    color: <?php echo $color_one; ?>!important;
    background-color: <?php echo $color_two; ?>!important;
    border: 1px solid <?php echo $color_two; ?>!important;
}
.nav-tab {
    border: 1px solid black;
    padding: 1rem;
    margin-top: 2rem;
}
.tab-content {
    display: none;
}
.tab-content.active {
    display: block;
}
.nav-tab-wrapper {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 3px solid <?php echo $color_two; ?>;
}
.widgetLeague {
    margin: 0;
    font-family: open sans;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
    box-sizing: border-box;
}
.standingsTeamsSpan {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.widgetLeague a {
    color: black;
    text-decoration: none;
    font-weight: lighter;
}
.widgetLeague .titleWidget {
    color: black;
    background-color: <?php echo $color_one; ?>;
    display: inline-flex;
    border-color: <?php echo $color_one; ?>;
    box-sizing: border-box;
    margin: 0 0.25rem 0 0;
    padding: .5rem 1.25rem;
    font-weight: bold;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}
.widgetLeague .standing-h2 {
    text-transform: capitalize;
    position: relative;
    display: inline-block;
    margin-bottom: -1px;
    background-color: <?php echo $color_three; ?>;
    border: 1px solid rgba(0, 0, 0, .125);
    text-align: inherit;
    box-sizing: border-box;
    z-index: 2;
    color: black;
    border-color: <?php echo $color_one; ?>;
    padding: 0.5rem 1.25rem;
    margin-top: 0;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    font-weight: bold;
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
@media (min-width: 768px) and (max-width: 992px) {} .flex-row.first {
    background:<?php echo $color_two; ?>;
    color:<?php echo $color_one; ?>;
    border-color:<?php echo $color_two; ?>;
    font-weight:bold;
}
.flex-table:last-of-type {
    border-bottom: solid 0px <?php echo $color_three; ?>;
}
.flex-table:first-of-type {
    border-top: solid 1px white;
}
.flex-table.header {
    background: <?php echo $color_two; ?>;
    color: <?php echo $color_one; ?>;
    border-color: <?php echo $color_two; ?>;
    border-top: solid 1px <?php echo $color_three; ?>;
}
.flex-table.header.actives {
    border-top: none;
}
.flex-table.header:hover {
    background: <?php echo $color_two; ?>;
}
.flex-table.header .flex-row:hover {
    text-decoration: underline;
    cursor: pointer;
}
.flex-table.row:nth-child(odd) .flex-row:not(.first) {
    background: #f4f2f1;
}
.flex-table.row:nth-child(odd):hover .flex-row:not(.first) {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
.flex-table:hover {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
.table__body .flex-table:hover .flex-row.teams {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
.table__body .flex-row.teams {
    background-color: white;
}
.header .flex-row.teams {
    background-color: <?php echo $color_two; ?>;
}
.table__body .flex-table:hover .flex-row.teams {
    background: <?php echo $color_one; ?>;
    transition: 500ms;
}
.table__body .flex-table.header:hover .flex-row.teams {
    background-color: <?php echo $color_two; ?>;
}
.widgetLeague {
    font-size: 13px;
    font-weight: bold;
}
.tablele-container {
    overflow: auto;
    display: grid;
}
.flex-table.header {
    display: flex;
    user-select: none;
    z-index: 2;
    top: 0;
    height: 28px;
    border-top: 0px solid <?php echo $color_two; ?>;
}
#standingsTabC .flex-table.header {
    display: flex;
    user-select: none;
    z-index: 2;
    top: 0;
    height: 28px;
    border-top: 0px solid <?php echo $color_two; ?>;
}
.table__body {
    display: grid;
    grid-auto-rows: 29px;
}
.flex-row {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 32px;
    overflow: hidden;
}
.header .flex-row.first,
.table__body .flex-row.first {
    position: sticky;
    position: -webkit-sticky;
    z-index: 1;
    left: 0;
}
.header .flex-row.first-sticky,
.table__body .flex-row.first-sticky {
    position: sticky;
    position: -webkit-sticky;
    z-index: 1;
    left: 0;
}
.header .flex-row.teams {
    position: sticky;
    position: -webkit-sticky;
    width: 100px;
    z-index: 1;
    white-space: nowrap;
    justify-content: flex-start;
    left: 32px;
    flex: 1;
    padding: 0 10px;
}
.header .flex-row.goals {
    width: 48px;
}
.flex-table.row {
    display: flex;
    border-bottom: 1px solid white;
    margin-right: 0px;
    margin-left: 0px;
}
.table__body .teams {
    position: sticky;
    position: -webkit-sticky;
    width: 100px;
    z-index: 1;
    box-shadow: 3px 0 2px -2px #888;
    white-space: nowrap;
    justify-content: flex-start;
    left: 32px;
    flex: 1;
    padding: 0 10px;
}
.table__body .teams a {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.table__body .flex-row.goals {
    width: 48px;
}
.flex-table-error {
    display: flex;
    flex-flow: row wrap;
    border-left: solid 0px transparent;
    transition: 0.5s;
}
.leagueNameCon {
    display: flex;
    align-content: center;
    margin-bottom: 0.25rem;
}
.leagueNameImg {
    width: 82px;
    height: 82px;
    border-radius: 8px;
    border: solid 1px rgba(0, 0, 0, 0.1);
    background: no-repeat center / 72px 72px;
    background-color: #FFFFFF;
}
.leagueName {
    display: flex;
    align-items: center;
    flex-flow: row nowrap;
    color: black;
    font-family: open sans;
    padding-left: 1rem;
}

/* START #fixturesTabC */

#fixturesTabC .table__body_fixtures .winningMatchStyle.flex-row {
    font-weight: bold;
}
#fixturesTabC .table__body_fixtures .flex-table:hover {
    cursor: pointer;
}
#fixturesTabC .table__body_fixtures .flex-table {
    color: black;
    text-decoration: none;
    font-weight: lighter;
}
#fixturesTabC .event_time_text_align {
    text-align: center;
}
#fixturesTabC {
    font-size: 13px;
    font-weight: bold;
}
#fixturesTabC {
    width: 100%!important;
}
#fixturesTabC .table__body_fixtures {
    display: grid;
}
#fixturesTabC .flex-row {
    padding-left: 0.5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
#fixturesTabC #fixturesContentTable .tablele-container {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 3px solid <?php echo $color_two; ?>;
}
#fixturesTabC .table__body_fixtures .winningMatchStyle.flex-row {
    font-weight: bold;
}
.table__body_fixtures .flex-row.matchDetails {
    justify-content: space-around;
    width: 80px;
}
.table__body_fixtures .flex-row.matchHomeTeam {
    justify-content: flex-end;
    text-align: right;
    flex: 1;
}
.table__body_fixtures .flex-row.matchDelimiter {
    width: 50px;
}
.table__body_fixtures .flex-row.matchAwayTeam {
    justify-content: flex-start;
    flex: 1;
}
#fixturesTabC .fixtureslineThrough {
    text-decoration: line-through;
}
/* END #fixturesTabC */

/* START #resultsTabC */

#resultsTabC .table__body_results .flex-table:hover {
    cursor: pointer;
}
#resultsTabC .table__body_results .flex-table {
    color: black;
    text-decoration: none;
    font-weight: lighter;
}
#resultsTabC .event_time_text_align {
    text-align: center;
}
#resultsTabC {
    font-size: 13px;
    font-weight: bold;
}
#resultsTabC {
    width: 100%!important;
}
#resultsTabC .table__body_results {
    display: grid;
}
#resultsTabC .flex-row {
    padding-left: 0.5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
#resultsTabC #resultsContentTable .tablele-container {
    padding-top: 0.25rem;
    margin-bottom: 0px;
    border-top: 3px solid <?php echo $color_two; ?>;
}
#resultsTabC .table__body_results .winningMatchStyle.flex-row {
    font-weight: bold;
}
.table__body_results .flex-row.matchDetails {
    justify-content: space-around;
    width: 80px;
}
.table__body_results .flex-row.matchHomeTeam {
    justify-content: flex-end;
    text-align: right;
    flex: 1;
}
.table__body_results .flex-row.matchDelimiter {
    width: 50px;
}
.table__body_results .flex-row.matchAwayTeam {
    justify-content: flex-start;
    flex: 1;
}
#resultsTabC .resultslineThrough {
    text-decoration: line-through;
}
/* END #resultsTabC */
</style>